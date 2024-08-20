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
        Schema::table('users', function (Blueprint $table) {
            //
            // default(1) is a workaround due to SQLite's table alteration feature
            // 
            // https://www.sqlite.org/lang_altertable.html
            // If a NOT NULL constraint is specified, then the column must have a default value other than NULL.
            //
            $table->foreignId('partnership_id')->index()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('partnership_id');
        });
    }
};
