<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="name" class="">Nome</label>
            <input name="name" id="name" placeholder="Nome do item" type="text" class="form-control" value="{{$user->name ?? old('name')}}">
        </div>
    </div>
</div>

<div class="position-relative form-group">
    <label for="image" class="">Imagem do usuario</label>
    <input name="image" id="image" placeholder="Imagem do usuario" type="file" class="form-control-file  {{ $errors->has('image') ? ' is-invalid' : '' }}" value="{{$modality->image ?? old('image')}}">
</div>
