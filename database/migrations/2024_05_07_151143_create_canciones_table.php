<?php

use App\Models\artists;
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
        Schema::create('canciones', function (Blueprint $table) {
            $table->id();
            $table->text('nameSong');
            $table->date('release');
            $table->text('link');
            $table->text('album');
            $table->unsignedBigInteger('artists_id');
            $table->foreign('artists_id')
                ->references('id')
                ->on('artists')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('canciones');
    }
};
