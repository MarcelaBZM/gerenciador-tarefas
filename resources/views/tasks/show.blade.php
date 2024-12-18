@extends('layouts.app')

@section('title', 'Detalhes da Tarefa')

@section('content')
    <div class="text-center">
        <h1 class="mb-4">Detalhes da Tarefa</h1>
        <p><strong>ID:</strong> {{ $task->id }}</p>
        <p><strong>Título:</strong> {{ $task->title }}</p>

        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
@endsection
