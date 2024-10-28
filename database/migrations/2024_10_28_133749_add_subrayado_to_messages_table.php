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
        if (!Schema::hasColumn('messages', 'subrayado')) {
                Schema::table('messages', function (Blueprint $table) {
                    $table->string('subrayado')->nullable();
        });
    }
}    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('messages', function (Blueprint $table) {
            if (Schema::hasColumn('messages', 'subrayado')) {    
            $table->dropColumn('subrayado');
            }
        });
    }
};