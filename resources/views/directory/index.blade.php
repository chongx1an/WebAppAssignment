
@extends('layouts.app')

@section('content')

@if (count($tenants) > 0)
    <div class = "row">
        @foreach ($tenants as $i => $tenant)
            <div class="column">
                <div class="card" style="margin: 20px 20px 20px 20px">
                    @if(Storage::disk('public')->exists('tenant/'.$tenant->id.'.jpg'))
                    <img src="/storage/tenant/{{$tenant->id}}.jpg"
                    width="240" alt="{{ $tenant->name }}">
                    @endif
                    <div class="container" style="width:100%">
                        <h5 class="card-title"> {{ $tenant->name }} </h5>
                        <h6 class="card-subtitle mb-2 text-muted"> {{ $tenant->floor->code."-".$tenant->zone->code."-".$tenant->lot_number }}</h6>
                        <p class="card-text"> {{ $tenant->category->name }} </p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    <div>
        No records found
    </div>
@endif
@endsection
