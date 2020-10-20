<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{

    public function __construct()
    {
        $icon = 'pe-7s-user icon-gradient bg-ripe-malin';
        // Sharing is caring
        View::share('icon', $icon);
    }
    public function edit()
    {
        $title = 'Editar meus dados';
        $user = User::find(Auth::user()->id);

        return view('user.edit', compact('title', 'user'));
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $dataForm = $request->all();

        if( $request->hasFile('image') && $request->file('image')->isValid()){
            if ($user->image != null){
                $oldFile = config('filesystems.disks.modality.root')."/users/".$user->image;
                Storage::delete($oldFile);
            }

            $nameFile = kebab_case($request->name).'.'.$request->image->extension();

            $upload = $request->image->storeAs('users', $nameFile);

            if (!$upload)
                return redirect()->back()->with('error', 'Falha ao fazer o upload do Arquivo');

            $dataForm['image'] = $nameFile;
        }

        $user->update($dataForm);

        return redirect()->route('home')->withSuccess('Usuario editado com Sucesso');
    }


}
