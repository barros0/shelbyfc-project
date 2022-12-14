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
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('nif')->nullable();
            $table->date('birthdate')->nullable();
            $table->boolean('is_admin')->default(0); //#
            $table->enum('status',['Pendente', 'Ativo', 'Suspenso','Banido']); //#
            //$table->string('facebook_id')->nullable();
            //$table->string('google_id')->nullable();
            $table->string('image')->default('noimage.png')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->float('balance')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
