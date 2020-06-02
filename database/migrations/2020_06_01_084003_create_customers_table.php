<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('id_card')->unique();
            $table->string('name');
            $table->string('couple_name');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->string('whatsapp');
            $table->string('job');
            $table->text('address');
            $table->string('balance')->nullable()->default('0');
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}