<?php

?>
@extends('layouts.appAdmin')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class = "panel-body">
        <!-- Edit Category Form -->
        {!! Form::model($category, [
            'route'   => ['category.update', $category->id],
            'method'  => 'put',
            'class'   => 'form-horizontal'
        ]) !!}

            <!-- Name -->
            <div class="form-group row">
                {!! Form::label('category-name', 'Category Name', [
                    'class' => 'control-label col-sm-3',
                ]) !!}
                <div class="col-sm-9">
                    {!! Form::text('name', $category->name, [
                        'id'        => 'category-name',
                        'class'     => 'form-control',
                        'maxlength' => 20,
                    ]) !!}
                </div>
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
