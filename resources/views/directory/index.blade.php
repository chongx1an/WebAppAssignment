
<?php
use App\Zone;
use App\Floor;
use App\Category;
 ?>


@extends('layouts.app')

@section('content')
<<<<<<< HEAD

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
<table class="table table-borderless">
    <thead>
      <td>@include('directory._filters')</td>
    </thead>
    <tbody>
      <tr>
        <td colspan="5">
            @if (count($tenants) > 0)
            <div class="card-columns" style="margin: 20px 20px 20px 20px">
                @foreach ($tenants as $i => $tenant)
                    <div class="card shadow">
                        @if(Storage::disk('public')->exists('tenant/'.$tenant->id.'.jpg'))
                        <img src="/storage/tenant/{{$tenant->id}}.jpg"
                        width="240" alt="{{"http://www.totalbattery.com/wp-content/uploads/2017/04/Under_construction-300x300.png"}}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title"> {{ $tenant->name }} </h5>
                            <h6 class="card-subtitle mb-2 text-muted"> {{ $tenant->floor->code."-".$tenant->zone->code."-".$tenant->lot_number }}</h6>
                            <p class="card-text"> {{ $tenant->category->name }} </p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                @endforeach
            </div>
            @else
                <div>
                    No records found
                </div>
            @endif
        </td>
      </tr>
    </tbody>
</table>

@endsection
