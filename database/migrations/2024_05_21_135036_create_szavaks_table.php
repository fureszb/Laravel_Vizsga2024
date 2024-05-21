<?php

use App\Models\Szavak;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('szavak', function (Blueprint $table) {
            $table->id();
            $table->string('angol');
            $table->string('magyar');
            $table->foreignId('temaId')->constrained('id')->on('tema');
            $table->timestamps();
        });

        Szavak::create([
            'angol' => 'beatiful',
            'magyar' => 'gyönyörű',
            'temaId' => '1',
        ]);
        Szavak::create([
            'angol' => 'diligent',
            'magyar' => 'okos',
            'temaId' => '1',
        ]);

        Szavak::create([
            'angol' => 'axe',
            'magyar' => 'balta',
            'temaId' => '2',
        ]);
        Szavak::create([
            'angol' => 'stick',
            'magyar' => 'bot',
            'temaId' => '2',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szavak');
    }
};
