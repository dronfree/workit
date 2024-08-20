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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->index();
            $table->foreignId('partnership_id')->index();
            $table->foreignId('user_id')->index()->nullable();
            $table->string('description');
            $table->dateTime('date');
            $table->string('address');
            $table->integer('amount');
            $table->enum('status', ['new', 'assinged', 'pending', 'finished'])->index()->default('new');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
