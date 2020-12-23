<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PriceCodes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_codes', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('code_name', 255)->default('')->index();
            $table->timestamp('created_at');
            $table->integer('created_by');
            $table->timestamp('updated_at')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('deleted_by')->nullable();
        });

        DB::table('price_codes')->insert([
            ['id' => 1, 'code_name' => 'REGULAR', 'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'created_by' => 1],
            ['id' => 2, 'code_name' => 'NEW_RELEASE', 'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'created_by' => 1],
            ['id' => 3, 'code_name' => 'CHILDRENS', 'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'created_by' => 1],
            ['id' => 4, 'code_name' => 'SCI_FI', 'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'created_by' => 1]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price_codes');
    }
}
