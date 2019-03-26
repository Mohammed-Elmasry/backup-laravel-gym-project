<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCityIdColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedbigInteger('city_id')->nullable();
<<<<<<< HEAD
            $table->foreign('city_id')->references('id')->on('cities');
=======
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
>>>>>>> e08178c4ba148df79a043e80263c8637b7af7e14

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
