<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Models\Tipo_dia;
use App\Models\Tipo_grupo;
use App\Models\Sala;

use Illuminate\Http\Request;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        //search:
        $search = request('query'); // é query porquê é o name do Form da Search

        if ($search) { // se há pesquisa execute, se não, prossiga com o metodo antigo

        $grupos = Grupo::where('nome', 'ilike','%'.$search.'%')->get();
        dump($search,$grupos);

        } else {
            $grupos = Grupo::all();
        }

        $grupos = Grupo::all();

        return view("grupos.index", compact("grupos","search"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $grupos = Grupo::all();
        // $dia_semana = Tipo_dia::all();
        // $tipo_grupo = Tipo_grupo::all();
        // $salas =  Sala::all();

        $dia_semana = Tipo_dia::pluck('nome', 'id');
        $tipo_grupo = Tipo_grupo::pluck('nm_tipo_grupo', 'id');
        $salas = Sala::pluck('numero', 'id');

        // dump($salas,$dia_semana,$tipo_grupo,$grupos);

        return view("grupos.create", compact('grupos','dia_semana', 'tipo_grupo','salas'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            // With ORM

    $data = $request->all();

    // if request gives more columns than expected:
    //$data = $request->only(['nome', 'id_dia_semana', 'hr_inicio', 'hr_fim', 'ativo', 'nr_vagas', 'id_tipo_grupo', 'nr_trabalhadores', 'id_sala']);

    $model = new Grupo();
    $model->fill($data);
    $model->save();

    return redirect()->back()->with('success', 'Grupo criado com sucesso!');






        // with db:facade:

        // DB::table('grupos')->insert([
        //     'nome' => $request->input('nome'),
        //     'id_dia_semana' => $request->input('id_dia_semana'),
        //     'hr_inicio' => $request->input('hr_inicio'),
        //     'hr_fim' => $request->input('hr_fim'),
        //     'ativo' => $request->input('ativo', false),
        //     'nr_vagas' => $request->input('nr_vagas', 0),
        //     'id_tipo_grupo' => $request->input('id_tipo_grupo'),
        //     'nr_trabalhadores' => $request->input('nr_trabalhadores', null),
        //     'id_sala' => $request->input('id_sala', null),
        // ]);

        // return redirect()->back()->with('success', 'Grupo criado com sucesso!');

        // //
        // $novoGrupo = new Grupo();
        // $novoGrupo->nome = $request->nome;
        // $novoGrupo->id_dia_semana = $request->id_dia_semana;
        // $novoGrupo->hr_inicio = $request->hr_inicio;
        // $novoGrupo->hr_fim = $request->hr_fim;
        // $novoGrupo->ativo = $request->ativo;
        // $novoGrupo->nr_vagas = $request->nr_vagas;
        // $novoGrupo->id_tipo_grupo = $request->id_tipo_grupo;
        // $novoGrupo->nr_trabalhadores = $request->nr_trabalhadores;
        // $novoGrupo->id_sala = $request->id_sala;
        // $novoGrupo->save();

        // return redirect("grupos.index")->with('msg','Novo grupo adicionado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Grupo $grupo)
    {
        //
        $grupos = Grupo::find($grupo->id);
        return view("grupos.show", compact("grupos"));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grupo $grupo)
    {
        //
        $grupos = Grupo::find($grupo->id);

        return view("grupos.editar", compact("grupos"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grupo $grupo)
    {
        //
        Grupo::find($grupo->id)->update($request->all());
        return redirect("grupos.index")->with("msg","Grupo Atualizado com sucessso");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grupo $grupo)
    {
        //
        $grupos = Grupo::find($grupo->id)->destroy();
        return redirect("grupos.index");
    }
}
