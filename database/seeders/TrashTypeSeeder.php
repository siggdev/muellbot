<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TrashTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trash_types = [
            [
                'name' => 'Restmüll',
                'with_article' => 'der Restmüll',
                'description' => '',
                'color' => '#000000',
                'text_color' => '#ffffff',
            ],
            [
                'name' => 'gelbe Säcke',
                'with_article' => 'die gelben Säcke',
                'description' => '',
                'color' => '#ffff00',
                'text_color' => '#000000',
            ],
            [
                'name' => 'Biomüll',
                'with_article' => 'der Biomüll',
                'description' => '',
                'color' => '#bb7700',
                'text_color' => '#ffffff',
            ],
            [
                'name' => 'Altpapier',
                'with_article' => 'das Altpapier',
                'description' => '',
                'color' => '#0000ff',
                'text_color' => '#ffffff',
            ],
            [
                'name' => 'Problemmüll',
                'with_article' => 'der Problemmüll',
                'description' => '',
                'color' => '#00ff00',
                'text_color' => '#000000',
            ],
        ];
    }
}
