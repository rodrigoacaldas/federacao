<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Functions;
use App\Http\Controllers\Controller;
use App\Http\Requests\AthleteFormRequest;
use App\Models\Admin\Athlete;
use App\Models\Admin\Club;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class AthleteController extends Controller
{

    public function __construct()
    {
        $icon = 'pe-7s-user icon-gradient bg-ripe-malin';
        // Sharing is caring
        View::share('icon', $icon);
    }

    public function index()
    {
        $athletes = Athlete::all();
        $title = 'Athletees';

        return view('admin.athletes.index', compact('athletes', 'title'));
    }

    public function create()
    {
        $title = 'Cadastro de Atleta';
        $clubs = Club::all();

        return view('admin.athletes.create', compact('title', 'clubs'));
    }

    public function store(AthleteFormRequest $request)
    {
        $dataFormWithFiles = $this->storeFiles($request);

        $dataFormWithFiles['birthday'] = Functions::date2sql($dataFormWithFiles['birthday']);

        if( $request->hasFile('image') && $request->file('image')->isValid()){
            $nameFile = kebab_case($request->name).'.'.$request->image->extension();

            $upload = $request->image->storeAs('/athletes', $nameFile);

            if (!$upload)
                return redirect()->back()->with('error', 'Falha ao fazer o upload da imagem');

            $dataForm['image'] = $nameFile;
        }

        $athlete = Athlete::create($dataFormWithFiles);

        return redirect()->route('athletes.index')->withSuccess('Cadastrado com Sucesso');
    }

    public function show($id)
    {
        $athlete = Athlete::find($id);
        $title = 'Deletando Athletee '.$athlete->name;

        return view('admin.athletes.delete', compact('title','athlete'));
    }

    public function edit($id)
    {
        $athlete = Athlete::find($id);
        $title = 'Editando Athletee '.$athlete->nome;
        $clubs = Club::all();


        return view('admin.athletes.edit', compact('title','athlete', 'clubs'));
    }

    public function update(AthleteFormRequest $request, $id)
    {
        $dataForm = $request->all();
        $dataForm['birthday'] = Functions::date2sql($dataForm['birthday']);
        $athlete = Athlete::find($id);

        if( $request->hasFile('image') && $request->file('image')->isValid()){
            Storage::delete('/athletes/'.$athlete->file);
            $nameFile = kebab_case($request->name).'.'.$request->image->extension();

            $upload = $request->image->storeAs('/athletes', $nameFile);

            if (!$upload)
                return redirect()->back()->with('error', 'Falha ao fazer o upload da imagem');

            $dataForm['image'] = $nameFile;
        }

        $athlete->update($dataForm);

        return redirect()->route('athletes.index')->withSuccess('Editado com Sucesso');
    }

    public function destroy($id)
    {
        $athlete = Athlete::find($id);
        $delete = $athlete->delete();

        return redirect()->route('athletes.index')->withSuccess('Deletado com Sucesso');
    }

    public function storeFiles(AthleteFormRequest $request){
        $dataForm = $request->all();

        $files = ['athlete_image', 'document_image', 'address_image', 'school_image'];

        foreach ($files as $file){
            if( $request->hasFile($file) && $request->file($file)->isValid()){
                Storage::delete('/athletes/'.$request->$file); //apaga arquivo casa exista

                $nameFile = uniqid(date('hisYmd')).'.'.$request->$file->extension();

                $upload = $request->$file->storeAs('athletes', $nameFile);

                if (!$upload)
                    return redirect()->back()->with('error', 'Falha ao fazer o upload do Arquivo');

                $dataForm["$file"] = $nameFile;
            }
        }

        return $dataForm;

    }
}
