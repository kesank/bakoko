<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('logements', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('nbr_piece');
            $table->string('taille');
            $table->string('prix');
            $table->unsignedBigInteger('id_zone')->nullable()	;
            $table->foreign('id_zone')
            ->references('id')
            ->on('zones')
            ->onDelete('restrict')
            ->onUpdate('restrict');





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
        Schema::dropIfExists('logements');
    }
}
