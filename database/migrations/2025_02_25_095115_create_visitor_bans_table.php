<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('visitor_bans', function (Blueprint $table) {
            $table->id();
            $table->ipAddress()->unique();
            $table->dateTime('until');
            $table->string('type');
            $table->json('more_details')->nullable();
            $table->string('reasons')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('visitor_bans');
    }
};
