<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('genre_id');
            $table->string('name');
            $table->string('telephone_number');
            $table->string('address');
            $table->string('budget_min');
            $table->string('budget_max');
            $table->string('regular_holiday');
            $table->string('business_hours');
            $table->string('smoke_status');
            $table->string('service_charge');
            $table->string('seat_status');
            $table->boolean('is_deleted')->default(false);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('bars');
    }
}
