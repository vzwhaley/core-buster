<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Movies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('price_code_id')->index();
            $table->string('name', 255)->index();
            $table->string('format', 255);
            $table->timestamp('created_at');
            $table->integer('created_by');
            $table->timestamp('updated_at')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('deleted_by')->nullable();
        });

        DB::table('movies')->insert([
            ['name' => 'Back to the Future', 'format' => 'Blu-Ray', 'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'created_by' => 1],
            ['name' => 'Office Space', 'format' => 'DVD', 'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'created_by' => 1],
            ['name' => 'The Big Lebowski', 'format' => 'VHS', 'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'created_by' => 1],
            ['name' => 'Star Wars: Episode V - The Empire Strikes Back', 'format' => '4K Blu-Ray',
                'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'created_by' => 1]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
