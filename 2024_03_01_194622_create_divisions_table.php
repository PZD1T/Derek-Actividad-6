<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('Divisions', function (Blueprint $table) {
            $table->id();
            $table->string ('Division Name',50)->unique();
            $table->integer ('SBWL Titles',)->default(0);
            $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('Divisions');
    }
};
