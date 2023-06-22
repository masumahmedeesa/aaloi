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
                        <h3 class="ml-3">Edit Company</h3>
                    </div>
                    <br>

                    {{ Form::open(['action' => ['MaterialsController@updateCompany',$company->companyId], 'method' => 'POST','enctype'=>'multipart/form-data']) }}

                    {{ csrf_field() }}
                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Company Name </h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::text('name',$company->name,['class' => 'form-control', 'placeholder' => 'Company Name'])}}
                            </div>

                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Categories </h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::text('categories',$company->categories,['class' => 'form-control', 'placeholder' => 'Categories'])}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Subcategories </h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::text('subcategories',$company->subcategories,['class' => 'form-control', 'placeholder' => 'Subcategories'])}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Address </h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::text('address',$company->address,['class' => 'form-control', 'placeholder' => 'Address'])}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Phone </h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::text('phone',$company->phone,['class' => 'form-control', 'placeholder' => 'Phone'])}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Email </h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::text('email',$company->email,['class' => 'form-control', 'placeholder' => 'Email'])}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6>Total Products</h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::number('count',$company->count,['class' => 'form-control', 'placeholder' => 'Total Products'])}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6>Website</h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::text('website',$company->website,['class' => 'form-control', 'placeholder' => 'Website'])}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6>Established Year</h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::number('estd',$company->estd,['class' => 'form-control', 'placeholder' => 'Established Year'])}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Description </h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::textarea('description',$company->description,['id' => 'articleCkeditor','class' => 'form-control', 'placeholder' => 'Description'])}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Photo (457*489) </h6>
                            </label>
                            <div class="col-sm-10 mt-1">
                                <img src="/storage/company_images/{{$company->photo1}}" class="img-thumbnail">
                                <br>
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