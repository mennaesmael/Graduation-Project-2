<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('track_users', function (Blueprint $table) {
            $table->bigIncrements('id',20);
            $table->integer('user_id',5)->index();
            $table->integer('file_id',10)->nullable()->index();
            $table->string('action', 300);
            $table->string('search_input', 255)->nullable();
            $table->string('updated_by', 255)->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('track_users');
    }
};
