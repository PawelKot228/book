<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('contractor_promotions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contractor_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamp('from');
            $table->timestamp('to');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::table('contractor_promotions', function (Blueprint $table) {
            $table->dropConstrainedForeignId('contractor_id');
        });

        Schema::dropIfExists('contractor_promotions');
    }
};
