<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name', 255)->index();
            $table->string('first_name', 255)->index();
            $table->string('last_name', 255)->index();
            $table->string('email', 255)->index()->unique();
            $table->string('password', 255)->index();
            $table->string('remember_token', 100)->nullable()->index();
            $table->tinyInteger('active')->default(0)->nullable()->index();
            $table->integer('renter_points')->nullable()->index();
            $table->string('api_token', 60)->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();

        });

        DB::table('users')->insert([
            ['name' => 'Admin', 'first_name' => 'Admin', 'last_name' => 'Admin', 'email' => 'admin@corebuster.com',
                'password' => '$2y$10$6iV6lDyRWOCfnYkJ9.v8SeuO5YOy0vF/AnXeV21icJW9pQNBZ7PEy', 'remember_token' =>
                'OQUHLVqoWbyNPtG3DYPV5Ue3UqNWfyQ4i6vPRYm5ef4pmMD5LG4sCNnL0i4Z', 'active' => 1, 'renter_points' => 4,
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
        Schema::dropIfExists('users');
    }
}
