<?php

declare(strict_types=1);

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
        Schema::create('categories_has_news', static function (Blueprint $table) {
            $table->foreignId('category_id')
                ->constrained('categories', 'id')
                ->cascadeOnDelete();

            $table->foreignId('news_id')
                ->constrained('news', 'id')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories_has_news');
    }
};
