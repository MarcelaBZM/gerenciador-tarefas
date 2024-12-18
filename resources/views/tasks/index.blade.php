@extends('layouts.app')

@section('title', 'Lista de Tarefas')

@section('content')
    <div class="text-center">
        <h1 class="mb-4">Lista de Tarefas</h1>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Adicionar Nova Tarefa</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>
                            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-primary btn-sm">Editar</a>

                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir essa tarefa?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
