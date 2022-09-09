<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('telegram_id')->nullable();
            $table->integer('interval')->default(1);
            $table->float('wallet')->default(0);
            $table->integer('number_checks')->default(0);
            $table->boolean('report_telegram')->default(false);
            $table->boolean('report_email')->default(true);
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('last_check')->nullable();
            $table->string('password');
            $table->boolean('is_admin')->default(false);
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
        Schema::dropIfExists('users');
    }
};