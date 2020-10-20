@extends('auth.layouts.app')
@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="modal-body">
            <h5 class="modal-title">
                <h4 class="mt-2">
                    <div>Bem vindo,</div>
                    <span>Só demora <span class="text-success">alguns segundos</span> para criar a sua conta</span>
                </h4>
            </h5>

            <div class="form-row">
                <div class="col-md-12">
                    <div class="position-relative form-group">
                        <input name="email" id="email" placeholder="Seu email aqui..." type="email" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <strong class="alert-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="position-relative form-group">
                        <input name="name" id="nome" placeholder="Seu nome aqui..." type="text" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <strong class="alert-danger">{{ $message }}</strong>
                        @enderror

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="position-relative form-group">
                        <input name="modality" id="modality" placeholder="Nome da sua empresa aqui..." type="text" class="form-control @error('modality') is-invalid @enderror">
                        @error('modality')
                            <strong class="alert-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="position-relative form-group">
                        <input name="password" id="password" placeholder="Sua senha aqui..." type="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <strong class="alert-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="position-relative form-group">
                        <input name="password_confirmation" id="password_confirmation" placeholder="Repita sua senha aqui..." type="password" class="form-control @error('password') is-invalid @enderror">
                    </div>
                </div>
            </div>

            <div class="mt-3 position-relative form-check">
                <input name="check" id="exampleCheck" type="checkbox" class="form-check-input">
                <label for="exampleCheck" class="form-check-label">Eu aceito os <a href="javascript:void(0);">Termos e condições</a>.</label>
            </div>

            <div class="divider row"></div>

            <h6 class="mb-0">Já tem uma conta? <a href="{{route('login')}}" class="text-primary">Entrar</a> | <a href="{{route('password.request')}}" class="text-primary">Recuperar senha</a></h6>
        </div>
        <div class="modal-footer d-block text-center">
            <button class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg" type="submit">Criar conta</button>
        </div>
    </form>

@endsection
