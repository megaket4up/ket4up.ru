@extends('dashboard.layout')

@section('content')
<div class="container my-3">
    <div class="row">
        <div class="col-1 col-md-2 col-lg-3 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Disk usage</h5>

                    <h6 class="card-subtitle mb-2 mt-3 text-muted">total / using / percent</h6>
                    <x-dashboard.diskusage :letter="'f'" />
                </div>
            </div>
        </div>
        
        <div class="col-1 col-md-2 col-lg-3 col-xl-4">
            <!-- test -->
        </div>
        
        <div class="col-1 col-md-2 col-lg-3 col-xl-4">
            <!-- test -->
        </div>
    </div>
</div>
@endsection
