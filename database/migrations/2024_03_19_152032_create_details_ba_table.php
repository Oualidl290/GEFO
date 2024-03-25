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
        Schema::dropIfExists('details_ba');

        Schema::create('details_ba', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('article_id')->constrained();
            $table->bigInteger('bonachat_id')->constrained();
            $table->double('qte');
            $table->double('prix_achat_ht');
            $table->double('tva');
            $table->double('remise');
            $table->string('created_by');
            $table->string('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details_ba');
    }
};
