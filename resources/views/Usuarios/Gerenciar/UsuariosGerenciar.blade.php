{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Sistema')

@section('content_header')
<h1>Sistema > Usuarios > Gerenciar</h1>
@stop

@section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title"> Usuarios cadastrados</h3>
        <div class="box-tools">
            <button type="button" class="btn btn-success btn-sm pull-right">
                Cadastrar
            </button>
        </div>
    </div>
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <tbody>
                <tr>
                    <th class="text-center">Nome:</th>
                    <th class="text-center">Email:</th>
                    <th class="text-center">Criado em:</th>
                    <th class="text-center">#</th>
                </tr>
                @forelse ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td class="text-center">
                        <a href="/usuarios/gerenciar/editar/{{ $user->id }}">
                            <button type="button" class="btn btn-warning">
                                Editar
                            </button>
                        </a>
                        <a href="/usuarios/gerenciar/deletar/{{ $user->id }}">
                            <button type="button" class="btn btn-danger">
                                Apagar
                            </button>
                        </a>
                    </td>
                </tr>
                @empty
            <p>Não existe usuarios cadastrados </p>
            @endforelse
            </tbody>
        </table>
    </div>
</div>


@stop

