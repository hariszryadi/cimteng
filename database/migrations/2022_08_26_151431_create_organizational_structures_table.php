<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationalStructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizational_structures', function (Blueprint $table) {
            $table->id();
            $table->string('file');
            $table->timestamps();
        });

        // Insert default data
        DB::table('organizational_structures')->insert(
            array(
                'file' => 'organizational_structures.pdf',
                'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizational_structures');
    }
}
