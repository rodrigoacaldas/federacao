<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="name" class="">Nome</label>
            <input name="name" id="name" placeholder="Nome da empresa" type="text" class="form-control" value="{{$modality->name ?? old('name')}}">
        </div>
    </div>
</div>

<div class="position-relative form-group">
    <label for="logo" class="">Logo da modalidade </label>
    <input name="logo" id="logo" placeholder="Logo da empresa" type="file" class="form-control-file  {{ $errors->has('logo') ? ' is-invalid' : '' }}" value="{{$modality->logo ?? old('logo')}}">
</div>
