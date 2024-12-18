@extends('layouts.app')

@section('title', 'Criar Nova Tarefa')

@section('content')
    <div class="text-center">
        <h1 class="mb-4">Criar Nova Tarefa</h1>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                    <label for="description" class="form-label">Descrição</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Adicionar tarefa</button>


            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
