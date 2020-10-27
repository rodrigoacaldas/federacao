<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="name" class="font-weight-bold">Nome  <span class="text-danger">*</span></label>
            <input name="name" id="name" placeholder="Nome do atleta" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{$athlete->name ?? old('name')}}">
        </div>
    </div>

    <div class="col-md-3">
        <div class="position-relative form-group">
            <label for="birthday" class="font-weight-bold">Data de nascimento  <span class="text-danger">*</span></label>
            <input name="birthday" id="birthday" placeholder="Data do nascimento" type="text" class="form-control" value="@if(isset($athlete)) {{date('d/m/Y', strtotime($athlete->birthday))}} @else {{date('d/m/Y')}} @endif">
        </div>
    </div>

    <div class="col-md-3">
        <div class="position-relative form-group">
            <label for="event_type_id" class="font-weight-bold">Clube <span class="text-danger">*</span></label>
            <select class="form-control" name="club_id" id="club_id" >
                <option value="">Selecione uma opção</option>
                @foreach($clubs as $club)
                    <option value="{{$club->id}}" @if( isset($athlete) && ($athlete->club_id == $club->id) ) selected @endif> {{$club->name}} </option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="col-md-10">
        <div class="position-relative form-group">
            <label for="email" class="font-weight-bold">E-mail</label>
            <input name="email" id="email" placeholder="E-mail" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{$athlete->email ?? old('email')}}">
        </div>
    </div>
</div>

<div class="form-row">
    <div class="col-md-3">
        <div class="position-relative form-group">
            <label for="nationality" class="font-weight-bold">Nacionalidade</label>
            <input name="nationality" id="nationality" placeholder="Nacionalidade" type="text" class="form-control {{ $errors->has('nationality') ? ' is-invalid' : '' }}" value="{{$athlete->nationality ?? old('nationality')}}">
        </div>
    </div>

    <div class="col-md-3">
        <div class="position-relative form-group">
            <label for="place_of_birth" class="font-weight-bold">Naturalidadeo</label>
            <input name="place_of_birth" id="place_of_birth" placeholder="Naturalidade" type="text" class="form-control" {{ $errors->has('nationality') ? ' is-invalid' : '' }}" value="{{$athlete->place_of_birth ?? old('place_of_birth')}}">
        </div>
    </div>

    <div class="col-md-3">
        <div class="position-relative form-group">
            <label for="rg_number" class="font-weight-bold">RG</label>
            <input name="rg_number" id="rg_number" placeholder="RG" type="text" class="form-control {{ $errors->has('rg_number') ? ' is-invalid' : '' }}" value="{{$athlete->rg_number ?? old('rg_number')}}">
        </div>
    </div>

    <div class="col-md-3">
        <div class="position-relative form-group">
            <label for="rg_orgao_expedidor" class="font-weight-bold">O. Expedidor</label>
            <input name="rg_orgao_expedidor" id="rg_orgao_expedidor" placeholder="O. Expedidor" type="text" class="form-control" {{ $errors->has('rg_orgao_expedidor') ? ' is-invalid' : '' }}" value="{{$athlete->rg_orgao_expedidor ?? old('rg_orgao_expedidor')}}">
        </div>
    </div>
</div>

<div class="form-row">
    <div class="col-md-12">
        <div class="position-relative form-group">
            <label for="address" class="font-weight-bold">Endereço</label>
            <input name="address" id="address" placeholder="Endereço" type="text" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" value="{{$athlete->address ?? old('address')}}">
        </div>
    </div>
</div>

<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="neighborhood" class="font-weight-bold">Bairro</label>
            <input name="neighborhood" id="neighborhood" placeholder="Bairro" type="text" class="form-control {{ $errors->has('neighborhood') ? ' is-invalid' : '' }}" value="{{$athlete->neighborhood ?? old('neighborhood')}}">
        </div>
    </div>

    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="cep" class="font-weight-bold">CEP</label>
            <input name="cep" id="cep" placeholder="CEP" type="text" class="form-control {{ $errors->has('cep') ? ' is-invalid' : '' }}" value="{{$athlete->cep ?? old('cep')}}">
        </div>
    </div>
</div>

<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="phone1" class="font-weight-bold">Telefone 1</label>
            <input name="phone1" id="phone1" placeholder="Telefone 1" type="text" class="form-control {{ $errors->has('phone1') ? ' is-invalid' : '' }}" value="{{$athlete->phone1 ?? old('phone1')}}">
        </div>
    </div>

    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="phone2" class="font-weight-bold">Telefone 2</label>
            <input name="phone2" id="phone2" placeholder="Telefone 2" type="text" class="form-control {{ $errors->has('phone2') ? ' is-invalid' : '' }}" value="{{$athlete->phone2 ?? old('phone2')}}">
        </div>
    </div>
</div>

<div class="form-row">
    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="school" class="font-weight-bold">Escola</label>
            <input name="school" id="school" placeholder="Escola" type="text" class="form-control {{ $errors->has('school') ? ' is-invalid' : '' }}" value="{{$athlete->school ?? old('school')}}">
        </div>
    </div>

    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="grade" class="font-weight-bold">Série</label>
            <input name="grade" id="grade" placeholder="Série" type="text" class="form-control {{ $errors->has('grade') ? ' is-invalid' : '' }}" value="{{$athlete->grade ?? old('grade')}}">
        </div>
    </div>

    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="event_type_id" class="font-weight-bold">Turno</label>
            <select class="form-control" name="turn" id="turn" >
                <option value="">Selecione uma opção</option>
                <option value="manha"> Manhã </option>
                <option value="tarde"> Tarde </option>
                <option value="noite"> Noite </option>
            </select>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="mother_name" class="font-weight-bold">Nome da Mãe</label>
            <input name="mother_name" id="mother_name" placeholder="Nome da mãe" type="text" class="form-control {{ $errors->has('mother_name') ? ' is-invalid' : '' }}" value="{{$athlete->mother_name ?? old('mother_name')}}">
        </div>
    </div>

    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="mother_phone" class="font-weight-bold">Telefone da mãe</label>
            <input name="mother_phone" id="mother_phone" placeholder="Telefone da mãe" type="text" class="form-control {{ $errors->has('mother_phone') ? ' is-invalid' : '' }}" value="{{$athlete->mother_phone ?? old('mother_phone')}}">
        </div>
    </div>

    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="mother_rg" class="font-weight-bold">RG da mãe</label>
            <input name="mother_rg" id="mother_rg" placeholder="RG da mãe" type="text" class="form-control {{ $errors->has('mother_rg') ? ' is-invalid' : '' }}" value="{{$athlete->mother_rg ?? old('mother_rg')}}">
        </div>
    </div>
</div>

<div class="form-row">
    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="father_name" class="font-weight-bold">Nome do pai</label>
            <input name="father_name" id="father_name" placeholder="Nome do pai" type="text" class="form-control {{ $errors->has('father_name') ? ' is-invalid' : '' }}" value="{{$athlete->father_name ?? old('father_name')}}">
        </div>
    </div>

    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="father_phone" class="font-weight-bold">Telefone do pai</label>
            <input name="father_phone" id="father_phone" placeholder="Telefone do pai" type="text" class="form-control {{ $errors->has('father_phone') ? ' is-invalid' : '' }}" value="{{$athlete->father_phone ?? old('father_phone')}}">
        </div>
    </div>

    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="father_rg" class="font-weight-bold">RG do pai</label>
            <input name="father_rg" id="father_rg" placeholder="RG do pai" type="text" class="form-control {{ $errors->has('father_rg') ? ' is-invalid' : '' }}" value="{{$athlete->father_rg ?? old('father_rg')}}">
        </div>
    </div>
</div>

<div class="form-row">
    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="shoes" class="font-weight-bold">Tamanho do calçado</label>
            <input name="shoes" id="shoes" placeholder="Tamanho do calçado" type="text" class="form-control {{ $errors->has('shoes') ? ' is-invalid' : '' }}" value="{{$athlete->shoes ?? old('shoes')}}">
        </div>
    </div>
</div>


<div class="form-row">
    <div class="col-12 col-md-3">
        <div class="custom-checkbox custom-control mb-3">
            <input type="checkbox" name="rollerblades" id="rollerblades" value="1" class="custom-control-input" @if(isset($athlete) && $athlete->rollerblades) checked @endif>
            <label class="custom-control-label font-weight-bold" for="rollerblades">Patins</label>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-12 col-md-3">
        <div class="custom-checkbox custom-control mb-3">
            <input type="checkbox" name="shin_guard" id="shin_guard" value="1" class="custom-control-input" @if(isset($athlete) && $athlete->shin_guard) checked @endif>
            <label class="custom-control-label font-weight-bold" for="shin_guard">Caneleiras</label>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-12 col-md-3">
        <div class="custom-checkbox custom-control mb-3">
            <input type="checkbox" name="knee_pad" id="knee_pad" value="1" class="custom-control-input" @if(isset($athlete) && $athlete->knee_pad) checked @endif>
            <label class="custom-control-label font-weight-bold" for="knee_pad">Joelheira</label>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-12 col-md-3">
        <div class="custom-checkbox custom-control mb-3">
            <input type="checkbox" name="gloves" id="gloves" value="1" class="custom-control-input" @if(isset($athlete) && $athlete->gloves) checked @endif>
            <label class="custom-control-label font-weight-bold" for="gloves">Luvas</label>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-12 col-md-3">
        <div class="custom-checkbox custom-control mb-3">
            <input type="checkbox" name="stick" id="stick" value="1" class="custom-control-input" @if(isset($athlete) && $athlete->stick) checked @endif>
            <label class="custom-control-label font-weight-bold" for="stick">Stick</label>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-12 col-md-3">
        <div class="custom-checkbox custom-control mb-3">
            <input type="checkbox" name="bag" id="bag" value="1" class="custom-control-input" @if(isset($athlete) && $athlete->bag) checked @endif>
            <label class="custom-control-label font-weight-bold" for="bag">Bolsa</label>
        </div>
    </div>
</div>

<div class="position-relative form-group">
    <label for="athlete_image" class="font-weight-bold">Foto do atleta</label> <br>
    @if(isset($athlete))
        <img width="220" src="{{url('storage/modalities/'.Auth::user()->modality->uuid."/athletes/".$athlete->athlete_image)}}" alt="">
    @endif
    <input name="athlete_image" id="athlete_image" type="file" class="form-control-file">
</div>
<div class="position-relative form-group">
    <label for="document_image" class="font-weight-bold">Documento</label> <br>
    @if(isset($athlete))
        <img width="220" src="{{url('storage/modalities/'.Auth::user()->modality->uuid."/athletes/".$athlete->document_image)}}" alt="">
    @endif
    <input name="document_image" id="document_image" type="file" class="form-control-file">
</div>
<div class="position-relative form-group">
    <label for="address_image" class="font-weight-bold">Comprovante de residencia</label> <br>
    @if(isset($athlete))
        <img width="220" src="{{url('storage/modalities/'.Auth::user()->modality->uuid."/athletes/".$athlete->address_image)}}" alt="">
    @endif
    <input name="address_image" id="address_image" type="file" class="form-control-file">
</div>
<div class="position-relative form-group">
    <label for="school_image" class="font-weight-bold">Declaração escolar</label> <br>
    @if(isset($athlete))
        <img width="220" src="{{url('storage/modalities/'.Auth::user()->modality->uuid."/athletes/".$athlete->school_image)}}" alt="">
    @endif
    <input name="school_image" id="school_image" type="file" class="form-control-file">
</div>



@push('scripts')

    <!--Datepickers-->
    <script src="{{url('/assets/js/vendors/form-components/moment.js')}}"></script>
    <script src="{{url('/assets/js/vendors/form-components/datepicker.js')}}"></script>
    <script src="{{url('/assets/js/vendors/form-components/daterangepicker.js')}}"></script>

    <!--InputMasks-->
    <script src="{{url('/assets/js/vendors/form-components/input-mask.js')}}"></script>

    <script type="text/javascript">
        $( document ).ready(function() {
            $('#installmentCheckbox').change(function () {
                $("#installmentDetails_qtd").toggleClass('d-none');
            });
        });

        $('input[name="birthday"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            "locale": {
                "format": "DD/MM/YYYY",
                "applyLabel": "Aceitar",
                "cancelLabel": "Cancelar",
                "weekLabel": "S",
                "daysOfWeek": [
                    "Dom",
                    "Seg",
                    "Ter",
                    "Qua",
                    "Qui",
                    "Sex",
                    "Sab"
                ],
                "monthNames": [
                    "Janeiro",
                    "Fevereiro",
                    "Março",
                    "Abril",
                    "Maio",
                    "Junho",
                    "Julho",
                    "Agosto",
                    "Setembro",
                    "Outubro",
                    "Novembro",
                    "Dezembro"
                ],
                "firstDay": 1
            },
        });

        $(".money").inputmask( 'currency',{"autoUnmask": true,
            radixPoint:",",
            groupSeparator: ".",
            allowMinus: false,
            prefix: 'r$ ',
            digits: 2,
            digitsOptional: false,
            rightAlign: true,
            unmaskAsNumber: true
        });

    </script>

@endpush
