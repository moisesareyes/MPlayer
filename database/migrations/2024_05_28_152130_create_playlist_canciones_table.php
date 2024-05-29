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
        Schema::create('playlist_canciones', function (Blueprint $table) {
            $table->unsignedBigInteger('playlists_id');
            $table->foreign('playlists_id')
             ->references('id')
             ->on('playlists')
             ->onDelete('cascade')->unsigned()->Nullable();
            $table->unsignedBigInteger('canciones_id');
            $table->foreign('canciones_id')
            ->references('id')
            ->on('canciones')
            ->onDelete('cascade')->unsigned()->Nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('playlist_canciones');
    }
};
