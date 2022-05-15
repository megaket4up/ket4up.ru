@extends('dashboard.layout')

@section('content')
<div class="container my-3">
    <div class="row">
        <div class="col-1 col-md-6">
            test
        </div>
        <div class="col-1 col-md-6 d-flex justify-content-end">
            <div class="btn-group" role="group" aria-label="Project control">
                <button type="button" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>

    {{ $projects->links() }}
</div>
@endsection