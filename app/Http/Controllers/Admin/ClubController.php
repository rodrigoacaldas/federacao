<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClubFormRequest;
use App\Models\Admin\Club;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class ClubController extends Controller
{

    public function __construct()
    {
        $icon = 'pe-7s-flag icon-gradient bg-ripe-malin';
        // Sharing is caring
        View::share('icon', $icon);
    }

    public function index()
    {
        $clubs = Club::all();
        $title = 'Clubes';

        return view('admin.clubs.index', compact('clubs', 'title'));
    }

    public function create()
    {
        $title = 'Cadastro de Clube';

        return view('admin.clubs.create', compact('title'));
    }

    public function store(ClubFormRequest $request)
    {
        $dataForm = $request->all();

        if( $request->hasFile('image') && $request->file('image')->isValid()){
            $nameFile = kebab_case($request->name).'.'.$request->image->extension();

            $upload = $request->image->storeAs('/clubs', $nameFile);

            if (!$upload)
                return redirect()->back()->with('error', 'Falha ao fazer o upload da imagem');

            $dataForm['image'] = $nameFile;
        }

        $club = Club::create($dataForm);

        return redirect()->route('clubs.index')->withSuccess('Cadastrado com Sucesso');
    }

    public function show($id)
    {
        $club = Club::find($id);
        $title = 'Deletando Clube '.$club->name;

        return view('admin.clubs.delete', compact('title','club'));
    }

    public function edit($id)
    {
        $club = Club::find($id);
        $title = 'Editando Clube '.$club->nome;

        return view('admin.clubs.edit', compact('title','club'));
    }

    public function update(ClubFormRequest $request, $id)
    {
        $dataForm = $request->all();
        $club = Club::find($id);

        if( $request->hasFile('image') && $request->file('image')->isValid()){
            Storage::delete('/clubs/'.$club->file);
            $nameFile = kebab_case($request->name).'.'.$request->image->extension();

            $upload = $request->image->storeAs('/clubs', $nameFile);

            if (!$upload)
                return redirect()->back()->with('error', 'Falha ao fazer o upload da imagem');

            $dataForm['image'] = $nameFile;
        }

        $club->update($dataForm);

        return redirect()->route('clubs.index')->withSuccess('Editado com Sucesso');
    }

    public function destroy($id)
    {
        $club = Club::find($id);
        $delete = $club->delete();

        return redirect()->route('clubs.index')->withSuccess('Deletado com Sucesso');
    }
}
