<?php

namespace Mstfkhazaal\FilamentTitleWithSlug;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Theme;
use Filament\Support\Color;
use Filament\Support\Facades\FilamentAsset;

class FilamentTitleWithSlug implements Plugin
{
    public function getId(): string
    {
        return 'filament-title-with-slug';
    }

    public function register(Panel $panel): void
    {
        FilamentAsset::register([
            Theme::make('filament-title-with-slug', __DIR__ . '/../resources/dist/filament-title-with-slug.css'),
        ]);

        $panel->theme('filament-title-with-slug');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
