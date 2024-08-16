<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('natural_person')->nullable();
            $table->string('artificial_person')->nullable();
            $table->unsignedBigInteger('ruc')->nullable();
            $table->unsignedBigInteger('dni')->nullable();
            $table->text('address')->nullable();
            $table->integer('retention_agent')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
