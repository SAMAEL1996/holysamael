<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUid;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guest extends Model
{
    use HasUid;

    protected $fillable = ['name', 'contact_no', 'start_at', 'end_at', 'user_in', 'user_out', 'total_time', 'amount', 'discount', 'status'];

    protected $appends = ['start_at_carbon', 'end_at_carbon'];

    public function userIn()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_in');
    }

    public function userOut()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_out');
    }

    public function getStartAtCarbonAttribute()
    {
        return \Carbon\Carbon::parse($this->start_at);
    }

    public function getEndAtCarbonAttribute()
    {
        return \Carbon\Carbon::parse($this->end_at);
    }

    public function getTotalTimeAttribute()
    {
        $endAt = $this->end_at ? $this->end_at_carbon : \Carbon\Carbon::now();
        $interval = $this->start_at_carbon->diff($endAt);
        $hours = $interval->h;
        $minutes = $interval->i;

        $hours += ($interval->d * 24);

        return $hours . ' hours and ' . $minutes . ' minutes';
    }

    public function calculateTotalTime()
    {
        $this->total_time = $this->start_at_carbon->diffInMinutes($this->end_at_carbon);
        $this->save();
    }

    public function calculateAmount()
    {
        $rates = \App\Models\Setting::getValue('hourly_rates');

        $timeInCarbon = $this->start_at_carbon;
        $timeOutCarbon = \Carbon\Carbon::now();

        $hours = $timeInCarbon->diffInHours($timeOutCarbon);

        if($hours < round($hours)) {
            $totalHours = round($hours);
        } else {
            $totalHours = round($hours) + 1;
        }

        $amount = $totalHours * (int)$rates;

        $discount = 0;
        if($this->discount != 0) {
            $percent = $this->discount / 100;
            $discount = (double)$amount * $percent;
        }

        $this->amount = $amount - (double)$discount;
        $this->save();
    }
}
