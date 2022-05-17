@extends('dashboard.layout')

@section('content')
<div class="container my-3">
    <div class="row">
        <div class="col-1 col-md-6">
            <h4>Актуальные проекты</h4>
        </div>
        <div class="col-1 col-md-6 d-flex justify-content-end">
            <div class="btn-group" role="group" aria-label="Project control">
                <a href="{{ route('dashboard.project.create') }}" class="btn btn-primary">Добавить</a>
            </div>
        </div>
    </div>

    {{ $projects->links() }}
</div>
@endsection