<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partidos')->insert([
            // Partidos jugados
            ['fecha' => '2024-06-11', 'lugar' => 'Estadio Santiago Bernabéu', 'jugado' => true, 'campeonato_id' => 1, 'equipo_local_id' => 1, 'equipo_visitante_id' => 2],
            ['fecha' => '2024-06-12', 'lugar' => 'Old Trafford', 'jugado' => true, 'campeonato_id' => 1, 'equipo_local_id' => 2, 'equipo_visitante_id' => 3],
            ['fecha' => '2024-06-15', 'lugar' => 'Camp Nou', 'jugado' => true, 'campeonato_id' => 1, 'equipo_local_id' => 3, 'equipo_visitante_id' => 1],
            ['fecha' => '2024-06-18', 'lugar' => 'Wembley Stadium', 'jugado' => true, 'campeonato_id' => 1, 'equipo_local_id' => 2, 'equipo_visitante_id' => 1],
            ['fecha' => '2024-06-25', 'lugar' => 'Santiago Bernabéu', 'jugado' => true, 'campeonato_id' => 1, 'equipo_local_id' => 1, 'equipo_visitante_id' => 3],
            ['fecha' => '2024-07-02', 'lugar' => 'MetLife Stadium', 'jugado' => true, 'campeonato_id' => 2, 'equipo_local_id' => 3, 'equipo_visitante_id' => 2],
            ['fecha' => '2024-07-05', 'lugar' => 'Lambeau Field', 'jugado' => true, 'campeonato_id' => 2, 'equipo_local_id' => 1, 'equipo_visitante_id' => 2],
            ['fecha' => '2024-06-20', 'lugar' => 'Anfield', 'jugado' => true, 'campeonato_id' => 2, 'equipo_local_id' => 2, 'equipo_visitante_id' => 3],
            ['fecha' => '2024-07-10', 'lugar' => 'Sant Jordi Club', 'jugado' => true, 'campeonato_id' => 2, 'equipo_local_id' => 3, 'equipo_visitante_id' => 1],
            ['fecha' => '2024-07-15', 'lugar' => 'Estadio Azteca', 'jugado' => true, 'campeonato_id' => 2, 'equipo_local_id' => 1, 'equipo_visitante_id' => 3],
        
            // Partidos por jugar
            ['fecha' => '2024-08-20', 'lugar' => 'Staples Center', 'jugado' => false, 'campeonato_id' => 3, 'equipo_local_id' => 2, 'equipo_visitante_id' => 3],
            ['fecha' => '2024-08-25', 'lugar' => 'Madison Square Garden', 'jugado' => false, 'campeonato_id' => 3, 'equipo_local_id' => 1, 'equipo_visitante_id' => 3],
            ['fecha' => '2024-09-02', 'lugar' => 'Rogers Arena', 'jugado' => false, 'campeonato_id' => 3, 'equipo_local_id' => 3, 'equipo_visitante_id' => 2],
            ['fecha' => '2024-09-10', 'lugar' => 'KeyArena', 'jugado' => false, 'campeonato_id' => 3, 'equipo_local_id' => 1, 'equipo_visitante_id' => 2],
            ['fecha' => '2024-09-20', 'lugar' => 'Mercedes-Benz Arena', 'jugado' => false, 'campeonato_id' => 3, 'equipo_local_id' => 2, 'equipo_visitante_id' => 1],
        ]);      
    }
}
