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
        Schema::dropIfExists('fournisseurs');

        Schema::create('fournisseurs', function (Blueprint $table) {
            $table->id();
            $table->string('reseau_social');
            $table->string('nom_contact');
            $table->string('ville');
            $table->string('adress');
            $table->string('tel');
            $table->string('email');
            $table->string('created_by');
            $table->string('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fournisseurs');
    }
};
