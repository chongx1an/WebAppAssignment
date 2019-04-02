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
            'route'   => ['tenant.update', $tenant->id],
            'method'  => 'put',
            'class'   => 'form-horizontal'
        ]) !!}

        <!-- Upload Form -->
        {!! Form::open([
          'route' => ['tenant.saveUpload', $tenant->id],
          'class' => 'form-horizontal',
          'enctype' => 'multipart/form-data',
          ]) !!}

          @if(Storage::disk('public')->exists('tenant/'.$tenant->id.'.jpg'))
          <img src="https://poewellnesssolutions.com/wp-content/plugins/lightbox/images/No-image-found.jpg"
          width="240" alt= {{ $tenant->name}}>
          @else
          <img src="https://poewellnesssolutions.com/wp-content/plugins/lightbox/images/No-image-found.jpg"
          width="240">
          @endif

          <!-- Upload Picture -->
          <div class="col-md-10 form-group row text-md-right">
            {!! Form::label('tenant-photo', 'Select File', [
            'class' => 'control-label col-sm-4',
            ]) !!}
              <div class="col-sm-8">
                {!! Form::file('image', [
                'id' => 'tenant-photo-file',
                'class' => 'form-control',
                ]) !!}
              </div>
          </div>

            <!-- Name -->
            <div class="col-md-10 form-group row text-md-right">
                {!! Form::label('tenant-name', 'Tenant Name', [
                    'class' => 'control-label col-sm-4',
                ]) !!}
                <div class="col-sm-8">
                    {!! Form::text('name', $tenant->name, [
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
                    {!! Form::text('lot_number', $tenant->lot_number, [
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
                    Zone::pluck('code', 'id'), $tenant->zone_id, [
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
                    Floor::pluck('code', 'id'), $tenant->floor_id, [
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
                    Category::pluck('name', 'id'), $tenant->category_id, [
                        'class' => 'form-control col-sm-12',
                        'placeholder' => '- Select Category -',
                ]) !!}
            </div>
            </div>

            <!-- Submit Button -->
            <div class="form-group row">
                <div class="col-sm-offset-3 col-sm-6">
                    {!! Form::button('Update', [
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
