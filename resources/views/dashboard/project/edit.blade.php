@extends('dashboard.layout')

@section('content')
<div class="container my-3">
    <form method="POST" action="{{ route('dashboard.project.update', [$project]) }}">
        @csrf
        @method('PUT')
        <input type="hidden" name="active" value="1" />

        <h4 class="mb-3">Редактирование проекта</h4>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3">
            <label for="name" class="form-label">Название</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $project->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Сохранить</button>
        <a href="{{ route('dashboard.project.show', [$project]) }}" class="btn"></a>
    </form>
</div>
@endsection