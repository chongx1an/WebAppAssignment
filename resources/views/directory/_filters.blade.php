<?php
use App\Zone;
use App\Floor;
use App\Category;
?>
<section class="filters">
    <div clas = "container-fluid">
       {!! Form::open([
           'route' => ['directory.index'],
           'method' => 'get',
           'class' => 'form-inline'
       ]) !!}
       <table class="table table-borderless">
           <thead>
               <th scope="col"><strong>NAME<strong></th>
               <th scope="col"><strong>LOT NUMBER<strong></th>
               <th scope="col"><strong>ZONE<strong></th>
               <th scope="col"><strong>FLOOR<strong></th>
               <th scope="col"><strong>CATEGORY<strong></th>
           </thead>
           <tbody>
              <tr>
                  <td>
                      {!! Form::text('name', null, [
                          'id'        => 'tenant-name',
                          'class'     => 'form-control',
                          'maxlength' => 100,
                      ]) !!}
                  </td>
                  <td>
                      {!! Form::text('lot_number', null, [
                          'id'        => 'tenant-lot_number',
                          'class'     => 'form-control',
                          'maxlength' => 10,
                      ]) !!}
                  </td>
                  <td>
                      {!! Form::select('zone_id',
                          Zone::pluck('code', 'id'), null, [
                              'class' => 'form-control',
                              'placeholder' => '- All -',
                      ]) !!}
                  </td>
                  <td>
                      {!! Form::select('floor_id',
                          Floor::pluck('code', 'id'), null, [
                              'class' => 'form-control',
                              'placeholder' => '- All -',
                      ]) !!}
                  </td>
                  <td>
                      {!! Form::select('category_id',
                          Category::pluck('name', 'id'), null, [
                              'class' => 'form-control',
                              'placeholder' => '- All -',
                      ]) !!}
                  </td>
              </tr>
              <tr>
                  <td colspan="5">
                    {!! Form::button('Filter', [
                        'type' => 'submit',
                        'class' => 'btn btn-primary',
                    ]) !!}
                  </td>
              </tr>
           </tbody>












       {!! Form::close() !!}
    </div>
</section>
