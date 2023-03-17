<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('contractor_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contractor_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('type')->default('employee');
        });
    }

    public function down(): void
    {
        Schema::table('contractor_user', function (Blueprint $table) {
            $table->dropConstrainedForeignId('contractor_id');
            $table->dropConstrainedForeignId('user_id');
        });

        Schema::dropIfExists('contractor_user');
    }
};