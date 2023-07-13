<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table -> string('azienda', 64);
            $table -> string('stazione_di_partenza', 64);
            $table -> string('stazione_di_arrivo', 64);
            $table -> time('orario_di_partenza');
            $table -> time('orario_di_arrivo');
            $table -> string('codice_treno', 6) -> unique();
            $table -> integer('numero_carrozze');
            $table -> boolean('in_orario') -> default(true);
            $table -> boolean('cancellato') -> default(false);

            // $table -> string('azienda');
            // $table -> string('stazione_di_partenza');
            // $table -> string('stazione_di_arrivo');
            // $table -> string('orario_di_partenza');
            // $table -> string('orario_di_arrivo');
            // $table -> string('codice_treno');
            // $table -> string('numero_carrozze');
            // $table -> string('in_orario');
            // $table -> string('cancellato');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
