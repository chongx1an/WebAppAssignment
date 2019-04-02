<?php

?>
@extends('layouts.appAdmin')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class = "panel-body">
        <!-- New Zone Form -->
        {!! Form::model($zone, [
            'route' => ['zone.store'],
            'class' => 'form-horizontal'
        ]) !!}

            <!-- Code -->
            <div class="form-group row">
                {!! Form::label('zone-code', 'Zone Code', [
                    'class' => 'control-label col-sm-3',
                ]) !!}
                <div class="col-sm-9">
                    {!! Form::text('code', null, [
                        'id'        => 'zone-code',
                        'class'     => 'form-control',
                        'maxlength' => 1,
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


@endsection
