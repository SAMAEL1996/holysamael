<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public static function getValue($key) {
        $setting = self::where('key', $key)->first();
        return ($setting) ? $setting->value : false;
    }

    public static function upsertValue($key, $value) {
        $setting = self::where('key', $key)->first();

        if ($setting) {
            $setting->value = $value;
            $setting->save();
        } else {
            $setting = new Setting;
            $setting->key = $key;
            $setting->value = $value;
            $setting->save();
        }
    }
}
