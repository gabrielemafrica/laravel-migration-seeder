<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $train2 = new Train();

        // $train2 -> azienda = 'prova';
        // $train2 -> stazione_di_partenza = 'prova';
        // $train2 -> stazione_di_arrivo = 'prova';
        // $train2 -> orario_di_partenza = 'prova';
        // $train2 -> orario_di_arrivo = 'prova';
        // $train2 -> codice_treno = 'prova';
        // $train2 -> numero_carrozze = 'prova';
        // $train2 -> in_orario = 'prova';
        // $train2 -> cancellato = 'prova';

        // $train2 -> save();

        Train :: factory() -> count(40) -> create();
    }
}
