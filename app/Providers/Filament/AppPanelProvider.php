<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Navigation\NavigationBuilder;
use App\Filament\App\Resources;

class AppPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('app')
            ->path('app')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/App/Resources'), for: 'App\\Filament\\App\\Resources')
            ->discoverPages(in: app_path('Filament/App/Pages'), for: 'App\\Filament\\App\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/App/Widgets'), for: 'App\\Filament\\App\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->navigation(function (NavigationBuilder $builder): NavigationBuilder {
                return $builder
                    ->groups([
                        NavigationGroup::make()
                            ->label('')
                            ->collapsible(false)
                            ->items([
                                NavigationItem::make()
                                    ->label('Dashboard')
                                    ->icon('heroicon-o-home')
                                    ->isActiveWhen(fn (): bool => request()->routeIs('filament.app.pages.dashboard'))
                                    ->url(route('filament.app.pages.dashboard')),
                            ]),
                        NavigationGroup::make()
                            ->label('MANAGE')
                            ->collapsible(false)
                            ->items([
                                ...Resources\GuestResource::getNavigationItems(),
                            ]),
                        NavigationGroup::make()
                            ->label('SETTING')
                            ->collapsible(false)
                            ->items([
                                NavigationItem::make()
                                    ->label('Settings')
                                    ->icon('heroicon-o-cog-8-tooth')
                                    ->isActiveWhen(fn (): bool => request()->routeIs('filament.app.pages.settings'))
                                    ->url(route('filament.app.pages.settings')),
                            ]),
                        NavigationGroup::make()
                            ->label('')
                            ->collapsible(false)
                            ->items([
                                NavigationItem::make()
                                    ->label('Logout')
                                    ->icon('heroicon-o-arrow-right-start-on-rectangle')
                                    ->url(route('filament.app.auth.logout')),
                            ]),
                    ]);
            });
    }
}
