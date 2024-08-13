@extends('layouts.app')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="bi bi-ui-checks"></i> Cadastro de Responsável</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
                <li class="breadcrumb-item">Administração</li>
                <li class="breadcrumb-item"><a href="#">Responsável</a></li>
            </ul>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-warning">
                {{ session('error') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Novo</h3>
                    <div class="tile-body">
                        <form method="POST" action="{{ route('responsavel.store') }}" class="form-horizontal">
                            @csrf
                            <div class="row md-3">
                                <div class="col-md-12 md-3">
                                    <label class="form-label">Nome</label>
                                    <input name="nome" id="nome" class="form-control" type="text" placeholder=""
                                        required>
                                </div>
                            </div>
                            <div class="row md-3">
                                <div class="col-md-6 md-3">
                                    <label class="form-label">CPF</label>
                                    <input name="cpf" id="cpf" class="form-control" type="text" placeholder=""
                                        required>
                                </div>
                                <div class="col-md-6 md-3">
                                    <label class="form-label">Celular</label>
                                    <input name="celular" id="celular" class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="tile-footer">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="bi bi-check-circle-fill me-2"></i>Salvar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Lista dos Responsáveis</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($responsavel as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nome }}</td>
                                    <td>{{ $item->cpf }}</td>
                                    <td>
                                        <div>
                                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                                data-bs-target="#editModal{{ $item->id }}">
                                                Editar
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <form action="{{ route('responsavel.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Excluir</button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- Modal for Editing -->
                                <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Editar
                                                    Responsável</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{ route('responsavel.update', $item->id) }}"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row md-3">
                                                        <div class="col-md-12 md-3">
                                                            <label for="nome{{ $item->id }}"
                                                                class="form-label">Nome</label>
                                                            <input type="text" class="form-control"
                                                                id="nome{{ $item->id }}" name="nome"
                                                                value="{{ $item->nome }}">
                                                        </div>
                                                    </div>
                                                    <div class="row md-3">
                                                        <div class="col-md-6 md-3">
                                                            <label for="cpf{{ $item->id }}"
                                                                class="form-label">CPF</label>
                                                            <input type="text" class="form-control"
                                                                id="cpf{{ $item->id }}" name="cpf"
                                                                value="{{ $item->cpf }}">
                                                        </div>
                                                        <div class="col-md-6 md-3">
                                                            <label for="celular{{ $item->id }}"
                                                                class="form-label">Celular</label>
                                                            <input type="text" class="form-control"
                                                                id="celular{{ $item->id }}" name="celular"
                                                                value="{{ $item->celular }}">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-primary">Salvar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
