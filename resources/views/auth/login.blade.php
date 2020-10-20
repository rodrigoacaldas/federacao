@extends('auth.layouts.app')
@section('content')
    <form method="POST" action="{{ route('login') }}">
    <div class="modal-body">
        <div class="h5 modal-title text-center">
            <h4 class="mt-2">
                <div>Bem vindo,</div>
                <span>Entre para acessar a sua conta.</span>
            </h4>
        </div>

            @csrf
            <div class="form-row">
                <div class="col-md-12">
                    @if ($errors->has('email'))
                        <strong class="alert-danger">{{ $errors->first('email') }}</strong>
                    @endif
                    <div class="position-relative form-group">
                        <input name="email" id="email" placeholder="Seu email aqui..." type="email" class="form-control">

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="position-relative form-group">
                        <input name="password" id="password" placeholder="Sua senha aqui..." type="password" class="form-control">
                    </div>
                </div>
            </div>

            <div class="position-relative form-check">
                <input name="check" id="exampleCheck" type="checkbox" class="form-check-input">
                <label for="exampleCheck" class="form-check-label">Manter logado</label>
            </div>

            <div class="divider"></div>
            <h6 class="mb-0">Não tem conta? <a href="{{'register'}}" class="text-primary">Solicite uma</a></h6>

        </div>
            <div class="modal-footer clearfix">
                <div class="float-left">
                    <a href="{{route('password.request')}}" class="btn-lg btn btn-link">Recuperar senha</a>
                </div>
                <div class="float-right">
                    <button class="btn btn-primary btn-lg" type="submit">Entrar</button>
                </div>
            </div>
    </form>


@endsection
