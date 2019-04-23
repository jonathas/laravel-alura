<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class AdicionaTamanhoNoProduto extends Migration
{
    public function up()
    {
        Schema::table('produtos', function ($table) {
            $table->string('tamanho', 100);
        });
    }

    public function down()
    {
        Schema::table('produtos', function ($table) {
            $table->dropColumn('tamanho');
        });
    }
}
