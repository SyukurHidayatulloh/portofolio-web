<?php

use App\Models\setting;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key'=>'_site_name',
            'label'=>'Judul Situs',
            'value'=>'Syukur',
            'type'=>'text'
        ]);
        setting::create([
            'key'=>'_instagram',
            'label'=>'Instagram',
            'value'=>'https://www.instagram.com/syukurhidayatulloh16/',
            'type'=>'text'
        ]);
        setting::create([
            'key'=>'_youtube',
            'label'=>'Youtube',
            'value'=>'https://www.youtube.com/',
            'type'=>'text'
        ]);
        setting::create([
            'key'=>'_facebook',
            'label'=>'Facebook',
            'value'=>'https://www.facebook.com',
            'type'=>'text'
        ]);
        setting::create([
            'key'=>'_site_description',
            'label'=>'Site Description',
            'value'=>'Yang kurang banyak bukan nikmat kita, tapi rasa syukur kita',
            'type'=>'text'
        ]);
        setting::create([
            'key'=>'_location',
            'label'=>'Alamat',
            'value'=>'Jl. Syukur, Jawa Barat Portugal',
            'type'=>'text'
        ]);
        setting::create([
            'key'=>'_birthday',
            'label'=>'Lahir',
            'value'=>'16 Juni 2005',
            'type'=>'text'
        ]);
        setting::create([
            'key'=>'_experience',
            'label'=>'Pengalaman',
            'value'=>'5 Tahun',
            'type'=>'text'
        ]);
        setting::create([
            'key'=>'_email',
            'label'=>'Email',
            'value'=>'sukur@example.com',
            'type'=>'text'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
