<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('social_provider_user', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('provider_slug'); 

            $table->string('provider_user_id');
            $table->string('nickname')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('avatar')->nullable();
            $table->text('provider_data')->nullable();

            $table->string('token');
            $table->string('refresh_token')->nullable();
            $table->timestamp('token_expires_at')->nullable();
            $table->timestamps();

            $table->primary(['user_id', 'provider_slug']);
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('social_provider_user');
    }
};
