<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ut_nome')->default('Ataide');
            $table->string('email')->unique();
            $table->string('ut_tipo_doc')->default('BI');
            $table->string('ut_numero')->default('110100535024P');
            $table->string('ut_contacto')->default('258826399700');
            $table->string('ut_morada')->default('Nampula');
            $table->string('password');
            /*$table->integer('uni_id')->unsigned()->default('1');
            $table->foreign('uni_id')
                    ->references('id')
                    ->on('unidades');**/
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
