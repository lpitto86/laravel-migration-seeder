<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

        //    - Azienda stringa (varchar(64)) not null
        $table->string('company', 64);
        //    - Stazione di partenza: stringa (varchar(64)) not null
        $table->string('departure_station', 64);
        //    - Stazione di arrivo: stringa (varchar(64)) not null
        $table->string('arrival_station', 64);
        //    - Orario di partenza: time not null
        $table->time('departure_time');
        //    - Orario di arrivo: time not null
        $table->time('arrival_time');
        //    - Codice Treno: stringa(7) unique not null
        $table->string('code', 7)->unique();
        //    - Numero Carrozze: tinyint unsigned null
        $table->unsignedTinyInteger('carriages_num')->nullable();
        //    - In orario: bool default true
        $table->boolean('on_time')->default(true);
        //    - Cancellato: bool default false
        $table->boolean('canceled')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
