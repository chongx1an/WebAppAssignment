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

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
      <!-- Bootstrap Boilerplate... -->
      <div class = "card-body">
        <!-- New Tenant Form -->
        {!! Form::model($tenant, [
            'route' => ['tenant.store'],
            'class' => 'form-horizontal'
        ]) !!}

            <!-- Name -->
            <div class="col-md-10 form-group row text-md-right">
                {!! Form::label('tenant-name', 'Tenant Name', [
                    'class' => 'control-label col-sm-4',
                ]) !!}
                <div class="col-sm-8">
                    {!! Form::text('name', null, [
                        'id'        => 'tenant-name',
                        'class'     => 'form-control',
                        'maxlength' => 100,
                    ]) !!}
                </div>
            </div>

            <!-- Lot Number -->
            <div class="col-md-10 form-group row text-md-right">
                {!! Form::label('tenant-lot_number', 'Lot Number', [
                    'class' => 'control-label col-sm-4',
                ]) !!}
                <div class="col-sm-8">
                    {!! Form::text('lot_number', null, [
                        'id'        => 'tenant-lot_number',
                        'class'     => 'form-control',
                        'maxlength' => 10,
                    ]) !!}
                </div>
            </div>

            <!-- Zone -->
            <div class="col-md-10 form-group row text-md-right">
                {!! Form::label('tenant-zone', 'Zone', [
                    'class' => 'control-label col-sm-4',
                ]) !!}
            <div class="col-sm-8">
                {!! Form::select('zone_id',
                    Zone::pluck('code', 'id'), null, [
                        'class' => 'form-control col-sm-12',
                        'placeholder' => '- Select Zone -',
                ]) !!}
            </div>
            </div>

            <!-- Floor -->
            <div class="col-md-10 form-group row text-md-right">
                {!! Form::label('tenant-floor', 'Floor', [
                    'class' => 'control-label col-sm-4',
                ]) !!}
              <div class="col-sm-8">
                {!! Form::select('floor_id',
                    Floor::pluck('code', 'id'), null, [
                        'class' => 'form-control col-sm-12',
                        'placeholder' => '- Select Floor -',
                ]) !!}
            </div>
          </div>

            <!-- Category -->
            <div class="col-md-10 form-group row text-md-right">
                {!! Form::label('tenant-category', 'Category', [
                    'class' => 'control-label col-sm-4',
                ]) !!}
              <div class="col-sm-8">
                {!! Form::select('category_id',
                    Category::pluck('name', 'id'), null, [
                        'class' => 'form-control col-sm-12',
                        'placeholder' => '- Select Category -',
                ]) !!}
            </div>
            </div>

            <!-- Submit Button -->
            <div class="form-group row">
                <div class="col-sm-offset-3 col-sm-6">
                    {!! Form::button('Save', [
                        'type'  => 'submit',
                        'class' => 'btn btn-primary offset-md-8',
                    ]) !!}
                </div>
            </div>
        {!! Form::close() !!}
     </div>
</div>
</div>
</div>
</div>

@endsection
