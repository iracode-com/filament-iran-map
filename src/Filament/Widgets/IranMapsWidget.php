<?php

namespace IracodeCom\FilamentIranMap\Filament\Widgets;

use Filament\Widgets\Widget;
use IracodeCom\FilamentIranMap\Model\Province;

abstract class IranMapsWidget extends Widget
{

    /** @var string|null */
    protected ?string $title = null;

    /** @var string  */
    protected static string $view = 'iracode-filament-iran-map::filament.widgets.iran-maps-widget';

    /**
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title ?? __( 'Iran Map' );
    }

    /**
     * @var array
     */
    public array $provinces = [];

    /**
     * @var array
     */
    public array $markers = [];

    /**
     * @return void
     */
    public function mount() : void
    {

        $this->provinces = Province::get( [ 'name', 'uuid', 'id' ] )->map( function ( Province $province ) {
            return [
                'name'  => $province->name,
                'id'    => $province->uuid,
            ];
        } );

    }

}
