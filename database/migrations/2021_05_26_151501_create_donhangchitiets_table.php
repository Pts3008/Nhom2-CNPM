<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonhangchitietsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhangchitiets', function (Blueprint $table) {
            $table->unsignedInteger('id_dh');
            $table->unsignedInteger('id_sp');
            $table->Integer('soluong');
            $table->float('gia');
            $table->float('tongtien');
            
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
        Schema::dropIfExists('donhangchitiets');
    }
}
