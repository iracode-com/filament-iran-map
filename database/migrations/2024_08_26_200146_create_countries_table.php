<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() : void
    {
        Schema::create( 'countries', function ( Blueprint $table ) {
            $table->id();

            $table->string( 'fips', 10 );

            $table->string( 'iso', 10 );

            $table->string( 'domain', 10 );

            $table->string( 'fa_name', 50 );

            $table->string( 'en_name', 50 );

            $table->tinyInteger( 'status' )->default( 1 );

            $table->timestamps();

            $table->softDeletes();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists( 'countries' );
    }
};
