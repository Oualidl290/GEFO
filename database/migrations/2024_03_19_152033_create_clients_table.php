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
        Schema::dropIfExists('clients');

        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('reseau_social');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('ville');
            $table->string('adress');
            $table->string('tel');
            $table->bigInteger('ICE');
            $table->string('created_by');
            $table->string('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
