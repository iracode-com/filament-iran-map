<x-filament-widgets::widget>

    <x-filament::section>

        <x-slot name="heading">
            {{ $this->getTitle() }}
        </x-slot>

        <div
            x-ignore
            ax-load
            class="text-center"
        >

            <div x-ref="map" id="map" style="width: 100%; height: 500px"></div>

        </div>

    </x-filament::section>

    @script

    <script type="text/javascript">

        anychart.onDocumentReady( function ()
        {

            // create map
            var map = anychart.map();

            let data = {!! $this->provinces !!};

            // create data set
            var dataSet = anychart.data.set( data );

            // create choropleth series
            series = map.choropleth( dataSet );

            map.legend( true );

            // set geoIdField to 'id', this field contains in geo data meta properties
            series.geoIdField( 'id' );

            // set map color settings
            // series.colorScale( anychart.scales.linearColor( '#deebf7' , '#3182bd' ) );

            // series.hovered().fill( '#addd8e' );

            // disable stroke
            series.stroke( null );

            // set the colors and ranges for the scale
            series.colorScale( anychart.scales.linearColor() );

            //set the single hue progression
            // var colors = anychart.color.bipolarHueProgression( '#EC6E07' , '#64B5F6' );
            var colors = anychart.color.singleHueProgression( '#7069B2' );

            // define the colors
            series.colorScale().colors( colors );


            // enable the colorRange
            map.colorRange( true );

            map.interactivity().zoomOnMouseWheel( true );
            map.interactivity().keyboardZoomAndMove( true );
            map.interactivity().zoomOnDoubleClick( true );

            // map.listen( 'pointClick' , function ( e )
            // {
            //     map.zoomToFeature( e.point.get( 'id' ) );
            // } )

            data = {!! $this->markers !!};

            var series_acme = map.marker( data );

            series_acme.normal().labels().fontSize( 14 );
            series_acme.normal().labels().fontColor( "#000" );
            series_acme.hovered().labels().fontSize( 16 );
            series_acme.hovered().labels().fontColor( "#660000" );
            series_acme.selected().labels().fontSize( 16 );
            series_acme.selected().labels().fontColor( "#660000" );

            series_acme.labels().fontFamily( "vazir" );
            series_acme.tooltip().fontFamily( "vazir" );
            series_acme.tooltip().title().fontFamily( "vazir" );

            series_acme.tooltip().titleFormat( " شهر {%name}" );
            series_acme.tooltip().format( "تعداد سفارشات: {%value} تا" );

            map.tooltip().format( 'تعداد کل سفارشات: {%value} تا' );
            // map.tooltip().titleFormat( 'استان {%labelText}' );

            series_acme.normal().type( "star4" );

            // ---------------
            series.labels( true );
            labels = series.labels();
            labels.fontFamily( "vazir" );

            // ---------

            map.getSeries( 0 ).name( 'استان ها' )
            map.getSeries( 1 ).name( 'شهر ها' )

            // set geo data, you can find this map in our geo maps collection
            // https://cdn.anychart.com/#maps-collection
            map.geoData( anychart.maps[ 'iran' ] );

            //set map container id (div)
            map.container( 'map' );

            //initiate map drawing
            map.draw();


            document.getElementsByClassName( 'anychart-credits' ).item( 0 ).remove()
        } );

    </script>


    @endscript

</x-filament-widgets::widget>
