@extends('admin.layouts.app')

@section('content')
    <div class="card-body">
        <form class="horizontal-form" method="post" action="{{route('athletes.update', $athlete->id)}}" enctype="multipart/form-data">
            {!! method_field('PUT') !!}
            @csrf
            @include('admin.athletes.includes.form')

            <a href="{{ url()->previous() }}"><span class="btn btn-info">Voltar </span></a>
            <button type="submit" class="btn btn-warning">Finalizar edição</button>
        </form>
    </div>
@endsection
