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
        Schema::create('files', function (Blueprint $table) {
            $table->increments('file_id',10);
            $table->integer('user_id',5)->index();
            $table->string('user_name',255);
            $table->string('file_name',600)->index('Idx_file_name', 'FULLTEXT');
            $table->string('file_path',300);
            $table->string('file_extension',10);
            $table->integer('file_size',8);
            $table->text('notes')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at');


            $table->string('updated_by',255)->nullable();

            $table->foreign('user_id')->references('user_id')->on('users');
            $table->index('file_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
