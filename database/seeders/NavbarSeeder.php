<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Navbar;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = [
            [
                'name' => 'Home',
                'route' => 'home'
            ],
            [
                'name' => 'About',
                'route' => 'about'
            ],
            [
                'name' => 'Services',
                'route' => 'services'
            ],
            [
                'name' => 'Contact',
                'route' => 'contact'
            ]
        ];

        foreach ($links as $link) {
            Navbar::create($link);
        }
    }
}
