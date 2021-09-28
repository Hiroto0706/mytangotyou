<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCheckToWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('words', function (Blueprint $table) {
            $table->tinyInteger('checkword')->default(0);//覚えた単語につけるチェック
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('words', function (Blueprint $table) {
            //
        });
    }
}
