<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('world_countries', function (Blueprint $table) {
            // $table->id();
            $table->string('code')->nullable(); 
            $table->foreignId('region_id')->nullable()->constrained('world_regions')->nullOnDelete();
            // $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('world_countries');
    }
};
