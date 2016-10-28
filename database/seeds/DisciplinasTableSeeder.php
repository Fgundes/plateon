<?php

use Illuminate\Database\Seeder;

class DisciplinasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materias = ['administracao','artes','biologia','educacao_fisica','espanhol','filosofia',
            'fisica','geografia','historia','informatica','ingles','matematica','mecanica',
            'mecatronica','meio_ambiente','portugues','quimica','sociologia'];
        foreach($materias as $materia){
            DB::table('disciplinas')->insert([
            'nome' => $materia,
            'foto' => $materia.'.png',                                         
        ]);
        }
        
    }
}
