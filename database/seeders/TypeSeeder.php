<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//models

use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        $alltypes = 
        [
            'HTML',
            'CSS',
            'JAVASCRIPT',
            'SQL',
            'PHP',
            'VUE',
            'LAVARAL',

        ];

        foreach($alltypes as $singleType) {
            $type = type::create([
                'title' => $singleType,
                'slug' => str()->slug($singleType),
            ]);
        }
    }
}
