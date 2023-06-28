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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('detail');
            $table->integer('price')->default(0);
            $table->integer('stock')->default(0);
            $table->string('filename')->comment('ユーザーがアップロードしたファイルの名前');
            $table->string('filepath')->comment('ストレージに保存されている実際のファイルの名前');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
