<?php

namespace Database\Seeders;

use App\Models\PortalApp;
use Illuminate\Database\Seeder;

class PortalAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $apps = [
            [
                'name' => 'Aplikasi KAIZEN',
                'url' => 'https://www.snam110.dpdns.org/kaizen/',
                'icon' => '💡',
                'desc' => 'Input ide perbaikan & efisiensi berkelanjutan.',
                'btn_text' => 'MASUK KAIZEN',
                'btn_class' => 'btn-primary',
                'bg_class' => 'bg-kaizen',
                'sort_order' => 1,
            ],
            [
                'name' => 'Aplikasi EVA',
                'url' => 'https://www.snam110.dpdns.org/eva/login',
                'icon' => '📈',
                'desc' => 'Penilaian Leadership & Culture karyawan.',
                'btn_text' => 'MASUK EVA',
                'btn_class' => 'btn-success',
                'bg_class' => 'bg-eva',
                'sort_order' => 2,
            ],
            [
                'name' => 'Aplikasi Ticketing',
                'url' => 'https://www.snam110.dpdns.org/helpdesk/',
                'icon' => '🛠️',
                'desc' => 'Layanan IT, GA, dan Mekanik',
                'btn_text' => 'MASUK TICKETING',
                'btn_class' => 'btn-secondary text-white',
                'bg_class' => 'bg-eva',
                'sort_order' => 3,
            ]
            // ,
            // [
            //     'name' => 'Aplikasi Ticketing2',
            //     'url' => 'https://www.snam110.dpdns.org/helpdesk/',
            //     'icon' => '🛠️',
            //     'desc' => 'Layanan IT, GA, dan Mekanik',
            //     'btn_text' => 'MASUK TICKETING',
            //     'btn_class' => 'btn-secondary text-white',
            //     'bg_class' => 'bg-danger',
            //     'sort_order' => 4,
            // ]
        ];

        foreach ($apps as $app) {
            PortalApp::updateOrCreate(
                ['name' => $app['name']],
                $app
            );
        }
    }
}
