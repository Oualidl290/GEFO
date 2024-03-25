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
        Schema::create('bonachats', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->boolean('regle');
            $table->bigInteger('fournisseur_id')->constrained();
            $table->string('created_by')->index();
            $table->string('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bonachats');
    }
};
