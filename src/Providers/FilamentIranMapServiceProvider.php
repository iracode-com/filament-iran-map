<?php

namespace IracodeCom\FilamentIranMap\Providers;


use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentIranMapServiceProvider extends PackageServiceProvider
{

    public function configurePackage( Package $package ) : void
    {
        $package->name( 'iracode-filament-iran-map' )
                ->hasAssets()
                ->hasMigrations()
                ->hasViews()
        ;
    }

    public function boot() : void
    {

        FilamentAsset::register( [
            Js::make(
                'iracode-filament-iran-map-plugins',
                asset( 'vendor/iracode-filament-iran-map/js/proj4.js' )
            ),
            Js::make(
                'iracode-filament-iran-map-plugins',
                asset( 'vendor/iracode-filament-iran-map/js/anychart-base.min.js' )
            ),
            Js::make(
                'iracode-filament-iran-map-plugins',
                asset( 'vendor/iracode-filament-iran-map/js/anychart-map.min.js' )
            ),
            Js::make(
                'iracode-filament-iran-map-plugins',
                asset( 'vendor/iracode-filament-iran-map/js/anychart-exports.min.js' )
            ),
            Js::make(
                'iracode-filament-iran-map-plugins',
                asset( 'vendor/iracode-filament-iran-map/js/anychart-ui.min.js' )
            ),
            Js::make(
                'iracode-filament-iran-map-plugins',
                asset( 'vendor/iracode-filament-iran-map/js/iran.js' )
            ),
            Css::make(
                'iracode-filament-iran-map-plugins',
                asset( 'vendor/iracode-filament-iran-map/css/anychart-ui.min.css' )
            )
        ], package: 'iracode-com/filament-iran-map' );

    }

}
