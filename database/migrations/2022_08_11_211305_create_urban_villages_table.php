<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrbanVillagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urban_villages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });

        // Insert default data
        DB::table('urban_villages')->insert([
            [
                'name' => 'Baros',
                'slug' => 'baros',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ciguru Tengah',
                'slug' => 'cigugur-tengah',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cimahi',
                'slug' => 'cimahi',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Karang Mekar',
                'slug' => 'karang-mekar',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Padasuka',
                'slug' => 'padasuka',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Setiamanah',
                'slug' => 'setiamanah',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('urban_villages');
    }
}
