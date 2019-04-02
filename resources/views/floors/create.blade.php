<?php

?>
@extends('layouts.appAdmin')

@section('content')

<div>
    <!-- Bootstrap Boilerplate... -->
<div class = "row d-flex justify-content-center" style="margin: 50px 50px 50px 50px">
  <div class = "col-md-6">
    <div class="container-fuild">
        <!-- New Floor Form -->
        {!! Form::model($floor, [
            'route' => ['floor.store'],
            'class' => 'form-horizontal'
        ]) !!}

            <!-- Code -->
            <div class="form-group row">
                {!! Form::label('floor-code', 'Floor Level Code', [
                    'class' => 'control-label col-sm-3',
                ]) !!}
                <div class="col-sm-9">
                    {!! Form::text('code', null, [
                        'id'        => 'floor-code',
                        'class'     => 'form-control',
                        'maxlength' => 2,
                    ]) !!}
                </div>
            </div>

            <!-- Submit Button -->
            <div class="form-group row">
                <div class="col-sm-offset-3 col-sm-6">
                    {!! Form::button('Save', [
                        'type'  => 'submit',
                        'class' => 'btn btn-primary',
                    ]) !!}
                </div>
            </div>
        {!! Form::close() !!}
     </div>
  </div>



</div>

@endsection
