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
        Schema::create('entregas', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->enum('sprint', ['HTML i PHP', 'Bases de dades', 'Patrons', 'Laravel MVC', 'Laravel API']);
            $table->date('data_entrega');
            $table->string('link_github');
            $table->text('comentaris')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entregas');
    }
};
