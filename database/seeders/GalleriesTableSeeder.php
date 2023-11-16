<?php
namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gallery = Gallery::create([
            'name' => 'Event'
        ]);
        foreach(range(1,8) as $id)
        {
            $gallery->addMediaFromUrl(url(asset("storage/images/gallery/$id.jpg")))->toMediaCollection('photos');
        }
    }
}
