@extends('layouts.mainLayout')

@section('insideHead')
<style>
.personal-link:hover {
    text-decoration: none;
    color: rgb(56, 204, 51);
}

.adminIndex {
    background: rgba(238, 240, 231, 0.815);
    height: 35px;
    padding: 5px;
    text-align: end;
}

.adminIndex:hover {
    background: #0B3861;
    color: white;
    height: 35px;
    padding: 5px;
    text-align: end;
}
</style>
@endsection

@section('system')

<div class="container mt-5 mb-5">
    <code style="background:black; color: white;">
            <h1><kbd class="mt-2">Admin Panel</kbd></h1>
        </code>
    <hr>
    <div class="row">
        <div class="col-md-3">
            @include('adminPanel.adminNav')
        </div>

        <div class="col-md-9">
            <div class="container">
                <div class="ml-3">
                    <div style="background: #0B3861; color: whitesmoke;">
                        <h3 class="ml-3">Edit {{$material->name}}</h3>
                    </div>
                    <br>
                 {{ Form::open(['action' => ['MaterialsController@updateProduct', $material->materialId], 'method' => 'POST','enctype'=>'multipart/form-data']) }}                     
                    {{ csrf_field() }}
                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Material Name </h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::text('name',$material->name,['class' => 'form-control', 'placeholder' => 'Material Name'])}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Price </h6>
                            </label>
                            <div class="col-sm-10">
                               {{Form::number('price',$material->price,['class' => 'form-control', 'placeholder' => 'Price'])}}                                       
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Availability </h6>
                            </label>
                            <div class="col-sm-10">
                               {{Form::text('avialable',$material->avialable,['class' => 'form-control', 'placeholder' => 'Availability'])}}                                       
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Description </h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::textarea('description',$material->description,['id' => 'articleCkeditor','class' => 'form-control', 'placeholder' => 'Description'])}}
                            </div>
                        </div>
                        <br>


                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Photo1 (650*330) </h6>
                            </label>
                            <div class="col-sm-10 mt-1">
                                @if($material->photo1 !== "noimage.jpg")
                                 <img class="img-fluid mb-3" src="/storage/material_images/{{$material->companyId}}/{{$material->photo1}}">
                                @else
                                <img class="img-fluid mb-3" src="/storage/project_images/grey.png">
                                @endif
                                {{Form::file('photo1')}}                                      
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> </h6>
                            </label>
                            <div class="col-sm-10 mt-1" style="text-align: end;">
                                 {{Form::hidden('_method','PUT')}}
                                 {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
                            </div>
                        </div>
                        <br>
                        {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection