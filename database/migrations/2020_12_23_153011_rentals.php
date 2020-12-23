<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Rentals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('movie_id');
            $table->timestamp('rented_at');
            $table->integer('rented_by');
            $table->float('duration', 5, 2);
            $table->timestamp('created_at');
            $table->integer('created_by');
            $table->timestamp('updated_at')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('deleted_by')->nullable();
        });

        DB::table('rentals')->insert([
            ['movie_id' => 1, 'rented_at' => DB::raw('CURRENT_TIMESTAMP'), 'rented_by' => 1, 'duration' => 1.00,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'created_by' => 1],
            ['movie_id' => 1, 'rented_at' => DB::raw('CURRENT_TIMESTAMP'), 'rented_by' => 1, 'duration' => 1.00,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'created_by' => 1],
            ['movie_id' => 1, 'rented_at' => DB::raw('CURRENT_TIMESTAMP'), 'rented_by' => 1, 'duration' => 1.00,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'created_by' => 1],
            ['movie_id' => 1, 'rented_at' => DB::raw('CURRENT_TIMESTAMP'), 'rented_by' => 1, 'duration' => 1.00,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'created_by' => 1],
            ['movie_id' => 2, 'rented_at' => DB::raw('CURRENT_TIMESTAMP'), 'rented_by' => 1, 'duration' => 1.50,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'created_by' => 1],
            ['movie_id' => 2, 'rented_at' => DB::raw('CURRENT_TIMESTAMP'), 'rented_by' => 1, 'duration' => 0.50,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'created_by' => 1],
            ['movie_id' => 2, 'rented_at' => DB::raw('CURRENT_TIMESTAMP'), 'rented_by' => 1, 'duration' => 1.00,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'created_by' => 1],
            ['movie_id' => 3, 'rented_at' => DB::raw('CURRENT_TIMESTAMP'), 'rented_by' => 1, 'duration' => 1.00,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'created_by' => 1],
            ['movie_id' => 3, 'rented_at' => DB::raw('CURRENT_TIMESTAMP'), 'rented_by' => 1, 'duration' => 1.00,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'created_by' => 1],
            ['movie_id' => 3, 'rented_at' => DB::raw('CURRENT_TIMESTAMP'), 'rented_by' => 1, 'duration' => 1.00,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'created_by' => 1],
            ['movie_id' => 3, 'rented_at' => DB::raw('CURRENT_TIMESTAMP'), 'rented_by' => 1, 'duration' => 1.00,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'created_by' => 1],
            ['movie_id' => 3, 'rented_at' => DB::raw('CURRENT_TIMESTAMP'), 'rented_by' => 1, 'duration' => 1.00,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'), 'created_by' => 1],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rentals');
    }
}
