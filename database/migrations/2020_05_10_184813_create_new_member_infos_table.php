<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewMemberInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_member_infos', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->date('birthdate');
            $table->string('nif');
            $table->string('address');
            $table->string('postal_code');
            $table->string('city');
            $table->string('province');
            $table->string('phone_number');
            $table->string('secondary_phone_number');
            $table->string('email');
            $table->string('account_number');
            $table->string('account_owner_name');
            $table->integer('amount')->unsigned();
            $table->integer('period')->unsigned();
            $table->text('where_did_you_know');
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
        Schema::dropIfExists('new_member_infos');
    }
}
