<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;



return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_data', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->string('phone_number', 40)->nullable();
            $table->string('designation', 40)->nullable();
            $table->text('about_user')->nullable();
            $table->string('facebook_url', 100)->nullable();
            $table->string('twitter_url', 100)->nullable();
            $table->string('linkedin_url', 100)->nullable();
            $table->string('profile_picture', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_data');
    }
};
