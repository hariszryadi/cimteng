<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisionMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vision_missions', function (Blueprint $table) {
            $table->id();
            $table->longText('vision');
            $table->longText('mission');
            $table->timestamps();
        });

        // Insert default data
        DB::table('vision_missions')->insert([
            'vision' => '<p>Mewujudkan Cimahi Baru Maju, Agamis Dan Berbudaya</p>',
            'mission' => '<p>Meningkatkan kualitas sumber daya manusia yang berkepribadian, berakhlak mulia, cerdas, sehat dan unggul</p><br>
                        <p>Meningkatkan penyelenggaraan pemerintahan yang amanah, profesional, efektif, efisien, dan ekonomis yang berbasis pada sistem penganggaran yang pro publik</p><br>
                        <p>Memberdayakan perekonomian daerah berbasis ekonomi kerakyatan yang berorientasi pada pengembangan sektor jasa berbasis teknologi informasi dan industri kecil menengah dalam upaya pengentasan kemiskinan</p><br>
                        <p>Mewujudkan pembangunan berkelanjutan berwawasan lingkungan meningkatkan kualitas derajat kehidupan masyarakat yang berkeadilan</p><br>
                        <p>Peningkatan kapasitas pemerintahan dan pemberdayaan masyarakat secara berkesinambungan dan berkelanjutan</p>',
            'created_at' => Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vision_missions');
    }
}
