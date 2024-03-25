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
        Schema::create('f_reglements', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->double('montant');
            $table->bigInteger('fournisseur_id')->constrained();
            $table->bigInteger('mode_id')->constrained();
            $table->string('observation');
            $table->date('date_eche');
            $table->string('created_by');
            $table->string('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f_reglements');
    }
};
