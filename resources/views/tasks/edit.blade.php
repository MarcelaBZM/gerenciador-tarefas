@extends('layouts.app')

@section('title', 'Editar Tarefa')

@section('content')
    <div class="text-center">
        <h1 class="mb-4">Editar Tarefa</h1>
        <form action="{{ route('tasks.update', $task) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
            </div>
            <div class="mb-3">
                    <label for="description" class="form-label">Descrição</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ $task->description }}</textarea>
                </div>


            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
