<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BookInformationTable extends Migration
{
    
    public function up()
    {
        if(!Schema::hasTable('book_information_tables')){
            Schema::create('book_information_tables', function (Blueprint $data){
                $data->id();
                $data->string('BookTitle');
                $data->string('Publisher');
                $data->string('Author');
                $data->string('YearPublished');
                $data->integer('Volume');
            });
        }
        Schema::dropIfExists('book_information_table');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
