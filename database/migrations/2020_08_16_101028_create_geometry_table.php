<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
// use Phaza\LaravelPostgis\Schema\Blueprint;

class CreateGeometryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geometry', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->double('latitude', 9, 7)->nullable();
            $table->double('longitude', 10, 7)->nullable();
            $table->string('other', 1047);
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
        Schema::dropIfExists('geometry');
    }
}
