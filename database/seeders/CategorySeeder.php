<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $erkek = Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Erkek',
            'content' => 'Erkek giyim',
            'cat_ust' => null,
            'status'=>'1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Erkek kazak',
            'content' => 'Erkek Kazaklar',
            'cat_ust' => $erkek->id,
            'status'=>'1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'erkek pantolon',
            'content' => 'erkek pantolonlari',
            'cat_ust' => $erkek->id,
            'status'=>'1'
        ]);

        $kadin = Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Kadin',
            'content' => 'Kadin giyim',
            'cat_ust' => null,
            'status'=>'1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'kadin canta',
            'content' => 'Kadin cantalar',
            'cat_ust' => $kadin->id,
            'status'=>'1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'kadin pantolon',
            'content' => 'kadin pantolonlari',
            'cat_ust' => $kadin->id,
            'status'=>'1'
        ]);

        $cocuk = Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Cocuk',
            'content' => 'Cocuk giyim',
            'cat_ust' => null,
            'status'=>'1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Cocuk ayakkabi',
            'content' => 'Cocuk ayakkabilari',
            'cat_ust' => $cocuk->id,
            'status'=>'1'
        ]);

        Category::create([
            'image' => null,
            'thumbnail' => null,
            'name' => 'Cocuk pantolon',
            'content' => 'Cocuk pantolonlari',
            'cat_ust' => $cocuk->id,
            'status'=>'1'
        ]);
    }
}
