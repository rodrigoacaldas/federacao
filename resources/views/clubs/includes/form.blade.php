<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="name" class="">Nome</label>
            <input name="name" id="name" placeholder="Nome do item" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{$club->name ?? old('name')}}">
        </div>
    </div>
</div>

<div class="position-relative form-group">
    <label for="image" class="">Imagem</label>
    <input name="image" id="image" type="file" class="form-control-file">
    <small class="form-text text-muted">A logo do clube.</small>
</div>
