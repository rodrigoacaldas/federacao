<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAthletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athletes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('club_id')->unsigned()->index();
            $table->foreign('club_id')->references('id')->on('clubs');

            $table->string('name');
            $table->date('birthday');

            $table->string('nationality')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('rg_number')->nullable();
            $table->string('rg_orgao_expedidor')->nullable();

            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('cep')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();

            $table->string('school')->nullable();
            $table->string('grade')->nullable();
            $table->string('turn')->nullable();

            $table->string('mother_name')->nullable();
            $table->string('mother_phone')->nullable();
            $table->string('mother_rg')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('father_rg')->nullable();

            $table->integer('shoes')->nullable();
            $table->boolean('rollerblades')->nullable();
            $table->boolean('shin_guard')->nullable();
            $table->boolean('knee_pad')->nullable();
            $table->boolean('gloves')->nullable();
            $table->boolean('stick')->nullable();
            $table->boolean('bag')->nullable();

            $table->string('athlete_image')->nullable();
            $table->string('document_image')->nullable();
            $table->string('address_image')->nullable();
            $table->string('school_image')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('athletes');
    }
}
