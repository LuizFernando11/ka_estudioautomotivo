<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableVeiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('veiculo', function (Blueprint $table) {
            $table->unsignedBigInteger('cliente_id')->after('id');
            $table->foreign('cliente_id')->references('id')->on('cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('veiculo', function (Blueprint $table) {
            $table->dropForeign('veiculo_cliente_id_foreign');
            $table->dropColumn('cliente_id');
        });
    }
}
