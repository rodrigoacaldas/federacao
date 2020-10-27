<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Modality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class ModalityController extends Controller
{
    public function __construct()
    {
        $icon = 'pe-7s-culture icon-gradient bg-ripe-malin';
        // Sharing is caring
        View::share('icon', $icon);
    }

    public function editMy()
    {
        $title = 'Editando minha modalidade';
        $modality = Modality::find(Auth::user()->modality_id);

        return view('admin.modality.edit', compact('title','modality'));
    }

    public function update(Request $request)
    {
        $modality = Modality::find(Auth::user()->modality_id);
        $dataForm = $request->all();

        if( $request->hasFile('logo') && $request->file('logo')->isValid()){
            if ($modality->logo != null){
                $oldFile = config('filesystems.disks.modality.root')."/img".$modality->logo;
                Storage::delete($oldFile);
            }

            $nameFile = kebab_case($request->name).'.'.$request->logo->extension();

            $upload = $request->logo->storeAs('img', $nameFile);

            if (!$upload)
                return redirect()->back()->with('error', 'Falha ao fazer o upload do Arquivo');

            $dataForm['logo'] = $nameFile;
        }
        $modality->update($dataForm);

        return redirect()->route('home')->withSuccess('Modalidade editada com Sucesso');
    }

    public function destroy($id)
    {
        //
    }
}
