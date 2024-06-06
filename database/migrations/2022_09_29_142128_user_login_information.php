<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserLoginInformation extends Migration
{
    public function up()
    {
        if(!Schema::hasTable('user_login_information')){
            Schema::create('user_login_information', function (Blueprint $table){
                $table->id();
                $table->string('Username')->unique();
                $table->string('Email')->unique();
                $table->string('Password')->unique();
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        
    }
}
