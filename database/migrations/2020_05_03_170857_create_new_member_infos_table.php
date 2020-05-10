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
            $table->string('birthplace');
            $table->date('birthdate');
            $table->string('province');
            $table->string('postal_code');
            $table->string('address');
            $table->string('city');
            $table->string('email');
            $table->string('phone_number');
            $table->string('secondary_phone_number');
            $table->string('nif');
            $table->string('passport_number');
            $table->string('father_name');
            $table->string('mother_name');
            $table->date('issue_date');
            $table->string('issue_location');
            $table->date('validity_date');
            $table->string('account_number');
            $table->boolean('is_sanitary')->default(False);
            $table->string('training');
            $table->string('professional_experience');
            $table->string('speciality');
            $table->integer('years_of_experience')->unsigned();
            $table->text('motivations');
            $table->boolean('has_volunteering_experience')->default(False);
            $table->boolean('already_a_member')->default(False);
            $table->boolean('first_time_in_humancoop')->default(False);
            $table->text('volunteering_experience_info');
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
