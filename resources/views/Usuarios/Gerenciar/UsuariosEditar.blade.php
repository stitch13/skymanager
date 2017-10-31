{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Sistema')

@section('content_header')
<h1>Sistema > Usuarios > Gerenciar</h1>
@stop

@section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title"> Edição de usuario</h3>
    </div>
    <div class="box-body table-responsive no-padding">
        <form role="form">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome:</label>
                    <input type="text   " class="form-control" value="{{ $users->name }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email:</label>
                    <input type="email" class="form-control" value="{{ $users->email }}">
                </div>
            </div>
            <div class="box-footer" >
                <a href="/usuarios/gerenciar/atualizar/{{ $users->id }}">
                    <button class="btn btn-primary" >Submit</button>
                </a>
            </div>
        </form>
    </div>
</div>


@stop

