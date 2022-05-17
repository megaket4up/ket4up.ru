@extends('dashboard.layout')

@section('content')
<div class="container my-3">
    <h4 class="md-3">{{ $project->name }}</h4>
    <h6><a href="{{ route('dashboard.project.edit', [$project]) }}">Редактировать</a></h6>
    
    @if ($project->description)
    <div class="md-3">
        {{ $project->description }}
    </div>
    @endif
</div>
@endsection