@extends('Admin.layouts.app')

@section('wrapper')

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div>
                    <h5 class="card-title">{{ tt('Clear Optimize Button') }}</h5>
                </div>
                <p class="card-text">{{ tt('This button run clear optimize code then restart your all system optimizations') }}</p>	<a href="{{ route('admin.settings.clear.optimize') }}" class="btn btn-danger">{{ tt('Clear Optimize') }}</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div>
                    <h5 class="card-title">{{ tt('Clear Cache Button') }}</h5>
                </div>
                <p class="card-text">{{ tt('This button run cache flush and clear code then restart your cache and cookies') }}</p>	<a href="{{ route('admin.settings.clear.cache') }}" class="btn btn-success">{{ tt('Clear Cache') }}</a>
            </div>
        </div>
    </div>
</div>

@endsection
