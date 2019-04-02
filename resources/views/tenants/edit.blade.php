<?php
use App\Zone;
use App\Floor;
use App\Category;
?>
@extends('layouts.appAdmin')

@section('content')

<!-- check for error -->
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

    <!-- Bootstrap Boilerplate... -->
    <div class = "panel-body">
        <!-- Edit Tenant Form -->
        {!! Form::model($tenant, [
            'route'   => ['tenant.update', $tenant->id],
            'method'  => 'put',
            'class'   => 'form-horizontal'
        ]) !!}

        {!! link_to_route(
          'tenant.upload',
          $title = 'Upload Photo',

          $parameters = [
          'id' => $tenant->id,
          ]
          ) !!}

            <!-- Name -->
            <div class="form-group row">
                {!! Form::label('tenant-name', 'Tenant Name', [
                    'class' => 'control-label col-sm-3',
                ]) !!}
                <div class="col-sm-9">
                    {!! Form::text('name', $tenant->name, [
                        'id'        => 'tenant-name',
                        'class'     => 'form-control',
                        'maxlength' => 100,
                    ]) !!}
                </div>
            </div>

            <!-- Lot Number -->
            <div class="form-group row">
                {!! Form::label('tenant-lot_number', 'Lot Number', [
                    'class' => 'control-label col-sm-3',
                ]) !!}
                <div class="col-sm-9">
                    {!! Form::text('lot_number', $tenant->lot_number, [
                        'id'        => 'tenant-lot_number',
                        'class'     => 'form-control',
                        'maxlength' => 10,
                    ]) !!}
                </div>
            </div>

            <!-- Zone -->
            <div class="form-group row">
                {!! Form::select('zone_id',
                    Zone::pluck('code', 'id'), $tenant->zone_id, [
                        'class' => 'form-control',
                        'placeholder' => '- Select Zone -',
                ]) !!}
            </div>

            <!-- Floor -->
            <div class="form-group row">
                {!! Form::select('floor_id',
                    Floor::pluck('code', 'id'), $tenant->floor_id, [
                        'class' => 'form-control',
                        'placeholder' => '- Select Floor -',
                ]) !!}
            </div>

            <!-- Category -->
            <div class="form-group row">
                {!! Form::select('category_id',
                    Category::pluck('name', 'id'), $tenant->category_id, [
                        'class' => 'form-control',
                        'placeholder' => '- Select Category -',
                ]) !!}
            </div>

            <!-- Submit Button -->
            <div class="form-group row">
                <div class="col-sm-offset-3 col-sm-6">
                    {!! Form::button('Update', [
                        'type'  => 'submit',
                        'class' => 'btn btn-primary',
                    ]) !!}
                </div>
            </div>
        {!! Form::close() !!}
     </div>


@endsection
