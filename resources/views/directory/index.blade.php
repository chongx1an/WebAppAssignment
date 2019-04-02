<?php
use App\Zone;
use App\Floor;
use App\Category;
 ?>


@extends('layouts.app')

@section('content')
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
                    <a href= "directory/{{ $tenant->id }}" class="custom-card-link">
                        <div class="card shadow">
                            <img class="card-img-top" src="https://www.aucklandairport.co.nz/-/media/Images/Traveller/Retail/Stores/Store-Main-Images/Adidas.ashx?mw=1300&hash=A76FE9990B9D3A83358256755B0823BDA9727D55" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"> {{ $tenant->name }} </h5>
                                <h6 class="card-subtitle mb-2 text-muted"> {{ $tenant->floor->code."-".$tenant->zone->code."-".$tenant->lot_number }}</h6>
                                <p class="card-text"> {{ $tenant->category->name }} </p>
                            </div>
                        </div>
                    </a>
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
