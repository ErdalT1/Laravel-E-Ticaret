<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'name'=>'Kaptı Kaçtı',
            'content'=>'Hakkımızda yazısı',
            'text_1icon'=>'icon-truck',
            'text_1'=>'Ücretsiz Kargo',
            'text_1_content'=>'Ürünlerinizi güvenli ve hızlı bir şekilde adresinize teslim edelim! Hem de ücretsiz bir şekilde.',
            'text_2icon'=>'icon-refresh2',
            'text_2'=>'Ücretsiz İade',
            'text_2content'=>'Müşteri daima haklıdır! Beğenmediğiniz, eksik, hatalı ve kargolama sorunu yaşadığınız tüm ürünleri teslim tarihinden 5 iş günü içerisinde ücretsiz iade edebilirsiniz!',
            'text_3icon'=>'icon-help',
            'text_3'=>'Müşteri Hizmetleri',
            'text_3content'=>'"212-21-12" bu numaradan istediğiniz zaman ürünleriniz hakkında müşteri temsilcimizle görüşebilir, sorunlarınızı ve görüşlerinizi iletebilirsiniz.',
        ]);
    }
}
