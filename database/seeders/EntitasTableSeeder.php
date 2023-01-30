<?php

namespace Database\Seeders;

use App\Models\Entita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dati = ['Primi','Secondi','Contorni','Dessert'];

        foreach ($dati as $cat) {
            Entita::create ([
                "title"=>$cat,
                "content"=>'test'
            ]);
        }
    }
}
