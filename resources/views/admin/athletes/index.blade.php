@extends('admin.layouts.app')

@section('create-button')
    <div class="page-title-actions">
        <a data-toggle="tooltip" title="Cadastrar um novo" data-placement="bottom" class="mb-2 mr-2 btn-pill btn-transition btn btn-outline-2x btn-outline-success"
            href="{{route('athletes.create')}}"> <i class="fa fa-plus"></i> Novo
        </a>
    </div>
@endsection

@section('content')

    <div class="card-body">
        <table style="width: 100%;" id="myTable" class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Clube</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($athletes as $athlete)
                    <tr>
                        <td>{{$athlete->name}}</td>
                        <td>{{$athlete->club->name}}</td>
                        <td>
                            <a href="{{route('athletes.edit', $athlete->id)}}">
                                <span style="padding: 5px" class="btn btn-success raised icon"><i class="fa fa-edit"></i> </span>
                            </a>
                            <a href="{{route('athletes.show', $athlete->id)}}">
                                <span style="padding: 5px" class="btn btn-danger raised icon"><i class="fa fa-trash"></i> </span>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr> <td class="text-center" colspan="3">Nenhum dado para mostrar</td> </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection

@include('admin.layouts.simpleTableConfig')
