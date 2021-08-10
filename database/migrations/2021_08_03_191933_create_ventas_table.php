<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('correla')->nullable();
            $table->string('nombreV')->nullable();
            $table->string('domiV')->nullable();
            $table->string('depaV')->nullable();
            $table->decimal('sumaV', 10, 2)->nullable();
            $table->string('nombreC')->nullable();
            $table->string('domiC')->nullable();
            $table->string('depaC')->nullable();
            $table->string('elo')->nullable();
            $table->string('semo')->nullable();
            $table->string('expre')->nullable();
            $table->string('conti')->nullable();
            $table->string('semo2')->nullable();
            $table->string('herrado')->nullable();
            $table->string('vent')->nullable();
            $table->string('fierro')->nullable();
            $table->string('numF')->nullable();            
            $table->string('depaF')->nullable();
            $table->string('alcal')->nullable();
            $table->string('dia')->nullable();
            $table->string('mes')->nullable();
            $table->string('ano')->nullable();
            $table->string('estado')->default('1');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
