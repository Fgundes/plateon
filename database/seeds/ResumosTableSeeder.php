<?php

use Illuminate\Database\Seeder;

class ResumosTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('resumos')->insert([
            'assunto' => 'Administração',
            'texto' => 'Teoria Geral da Administração',
            'arquivo' => 'TeoriaGeralAdministracao.pdf',
            'disciplina_id' => '1'
        ]);
        DB::table('resumos')->insert([
            'assunto' => 'Artes',
            'texto' => 'Artes Visuais',
            'arquivo' => 'ArtesVisuais.pdf',
            'disciplina_id' => '2'
        ]);
        DB::table('resumos')->insert([
            'assunto' => 'Biologia',
            'texto' => 'Coletânea de Biologia',
            'arquivo' => 'ColetaneaBiologia.pdf',
            'disciplina_id' => '3'
        ]);
        DB::table('resumos')->insert([
            'assunto' => 'Educação Física',
            'texto' => 'Fisiologia Humana',
            'arquivo' => 'FisiologiaHumana.pdf',
            'disciplina_id' => '4'
        ]);
        DB::table('resumos')->insert([
            'assunto' => 'Espanhol',
            'texto' => 'Introdução ao Espanhol',
            'arquivo' => 'IntroducaoEspanhol.pdf',
            'disciplina_id' => '5'
        ]);
        DB::table('resumos')->insert([
            'assunto' => 'Filosofia',
            'texto' => 'Temas de formação',
            'arquivo' => 'TemasFormacao.pdf',
            'disciplina_id' => '6'
        ]);
        DB::table('resumos')->insert([
            'assunto' => 'Física',
            'texto' => 'Força Elástica',
            'arquivo' => 'ForcaElastica.pdf',
            'disciplina_id' => '7'
        ]);
        DB::table('resumos')->insert([
            'assunto' => 'Geografia',
            'texto' => 'Geografia Geral',
            'arquivo' => 'GeografiaGeral.pdf',
            'disciplina_id' => '8'
        ]);
        DB::table('resumos')->insert([
            'assunto' => 'História',
            'texto' => 'Era Vargas',
            'arquivo' => 'EraVargas.pdf',
            'disciplina_id' => '9'
        ]);
        DB::table('resumos')->insert([
            'assunto' => 'Informática',
            'texto' => 'Lógica de Programação',
            'arquivo' => 'LogicaProgramacao.pdf',
            'disciplina_id' => '10'
        ]);
        DB::table('resumos')->insert([
            'assunto' => 'Inglês',
            'texto' => 'Noções de Inglês',
            'arquivo' => 'NocoesIngles.pdf',
            'disciplina_id' => '11'
        ]);

        DB::table('resumos')->insert([
            'assunto' => 'Matemática',
            'texto' => 'Números Complexos',
            'arquivo' => 'NumerosComplexos.pdf',
            'disciplina_id' => '12'
        ]);
        DB::table('resumos')->insert([
            'assunto' => 'Mecânica',
            'texto' => 'Mecânica de Automóveis',
            'arquivo' => 'MecanicaAutomoveis.pdf',
            'disciplina_id' => '13'
        ]);
        DB::table('resumos')->insert([
            'assunto' => 'Mecatrônica',
            'texto' => 'Manual de Mecatrônica',
            'arquivo' => 'ManualMecatronica.pdf',
            'disciplina_id' => '14'
        ]);
        DB::table('resumos')->insert([
            'assunto' => 'Meio Ambiente',
            'texto' => 'Questão Ambiental',
            'arquivo' => 'QuestaoAmbiental.pdf',
            'disciplina_id' => '15'
        ]);
        DB::table('resumos')->insert([
            'assunto' => 'Português',
            'texto' => 'Vocabulário Ortográfico',
            'arquivo' => 'VocabularioOrtografico.pdf',
            'disciplina_id' => '16'
        ]);
        DB::table('resumos')->insert([
            'assunto' => 'Química',
            'texto' => 'Cálculo Estequimétrico',
            'arquivo' => 'CalculoEstequimetrico.pdf',
            'disciplina_id' => '17'
        ]);
        DB::table('resumos')->insert([
            'assunto' => 'Sociologia',
            'texto' => 'Era Vargas',
            'arquivo' => 'EraVargas.pdf',
            'disciplina_id' => '18'
        ]);
    }

}
