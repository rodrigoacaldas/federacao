@extends('auth.layouts.app')
@section('content')

    <div class="modal-header">
        <div class="h5 modal-title">Esqueceu sua senha?
            <h6 class="mt-1 mb-0 opacity-8"><span>Use o formulario abaixo para recupera-la.</span></h6>
        </div>
    </div>

    <form method="POST" action="{{ route('password.email') }}">
        <div class="modal-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @csrf
            <div class="form-row">
                <div class="col-md-12">
                    <div class="position-relative form-group">
                        <label for="EMAIL" class="">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <strong class="alert-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-footer clearfix">
            <h6 class="mb-0 float-left"><a href="{{route('login')}}" class="text-primary">Entrar com uma conta existente</a></h6>
            <div class="float-right">
                <button class="btn btn-primary btn-lg" type="submit">Recuperar Senha</button>
            </div>
        </div>
    </form>
@endsection
