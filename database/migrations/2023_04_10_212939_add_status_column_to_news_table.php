<?php
declare(strict_types=1);

use App\Enums\News\StatusEnum;
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
        Schema::table('news', function (Blueprint $table) {
            $table->enum('status', StatusEnum::getValues())->default('draft');
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('news', static function (Blueprint $table) {
            //$table->dropIndex('status');
            $table->dropColumn('status');
        });
    }
};
