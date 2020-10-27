@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="text-center">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                   Um novo link de verificação foi enviado para o seu email
                </div>
            @endif

            <h3>Antes de continuar, por favor verifique seu email!! </h3> <br>

            Se você não recebeu o email, <a href="{{ route('verification.resend') }}">clique aqui para enviarmos outro</a>.
        </div>
    </div>
</div>
@endsection
