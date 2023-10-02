<?php


namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    public static function getNavigationIcon(): ?string
    {
        return 'fluentui-home-16-o';
    }
    public static function getActiveNavigationIcon(): ?string
    {
        return 'fluentui-home-16';
    }
}