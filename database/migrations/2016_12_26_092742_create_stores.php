<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStores extends Migration
{
    public $table = 'stores';

    public function up()
    {
        Schema::create($this->table, function(Blueprint $table){
            $table->increments('id');
            $table->integer('merchant_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('description');
            $table->text('address');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop($this->table);
    }
}
