<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Disciplina;
use App\Resumo;
use App\Aluno;
use App\Professor;

class PlateOnController extends Controller
{
    public $ext = ['pdf', 'docx'];

    //Funções Públicas----------------------------------------------------------
    public function index()
    {
        if (auth()->check()) {
            return redirect('/p');
        }

        return view('index');
    }

    public function logout()
    {
        if (auth()->check()) {
            auth()->logout();
            session()->flush();
        }

        return redirect('/');
    }

    public function v_contato()
    {

        return view('v_contato');
    }

    public function v_disciplinas()
    {

        $disciplinas = Disciplina::all();
        return view('v_disciplinas', ['disciplinas' => $disciplinas]);
    }

    public function v_resumos($id)
    {
        $disciplina = Disciplina::where('nome', $id)->first();
        $resumos = $disciplina->resumos;

        return view('v_resumos', [
            'resumos' => $resumos,
            'disciplina' => $disciplina
        ]);
    }


    //Funções Prof--------------------------------------------------------------
    public function p()
    {
        $user = User::all();

        return view('p', ['user' => $user]);
    }

    public function p_agenda()
    {

        return view('p_agenda');
    }

    public function p_contato()
    {

        return view('p_contato');
    }

    public function p_disciplinas()
    {

        $disciplinas = Disciplina::all();
        return view('p_disciplinas', ['disciplinas' => $disciplinas]);
    }

    public function p_edit()
    {

        return view('p_edit');
    }

    public function p_exer()
    {

        return view('p_exer');
    }

    public function p_resumos($id)
    {
        $disciplina = Disciplina::where('nome', $id)->first();
        $resumos = $disciplina->resumos;

        return view('p_resumos', [
            'resumos' => $resumos,
            'disciplina' => $disciplina
        ]);
    }

    public function save(Request $request)
    {

        $r = new Resumo();
        $r->assunto = $request->input('assunto');
        $r->texto = $request->input('texto');
        if ($request->hasFile('arquivo')) {
            if ($request->file('arquivo')->isValid()) {
                $filename = str_random('20') . '.' . $request->file('arquivo')->getClientOriginalExtension();
                $path = public_path('upload');
                $request->file('arquivo')->move($path, $filename);
                $r->arquivo = $filename;
            }
        }
        $r->disciplina_id = $request->input('disciplina_id');

        $r->save();

        return redirect('/p_resumos');
    }

    //Funções Aluno-------------------------------------------------------------
    public function u()
    {

        return view('u');
    }

    public function u_agenda()
    {

        return view('u_agenda');
    }

    public function u_contato()
    {

        return view('u_contato');
    }

    public function u_disciplinas()
    {

        $disciplinas = Disciplina::all();
        return view('u_disciplinas', ['disciplinas' => $disciplinas]);
    }

    public function u_edit()
    {

        return view('u_edit');
    }

    public function u_exer()
    {

        return view('u_exer');
    }

    public function u_resumos($id)
    {

        $disciplina = Disciplina::where('nome', $id)->first();
        $resumos = $disciplina->resumos;

        return view('u_resumos', [
            'resumos' => $resumos,
            'disciplina' => $disciplina
        ]);
    }

    //Funções Auxiliares----------------------------
    public function exitt()
    {

        return view('exit');
    }

    public function indisponivel()
    {

        return view('/errors/503');
    }

}
