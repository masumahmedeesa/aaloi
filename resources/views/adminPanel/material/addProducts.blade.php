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
                    <div style="background: #0B3861; color: whitesmoke; border-radius: 6px; padding: 1px;">
                        <h3 class="ml-3">Add Material to {{$company->name}}</h3>
                    </div>
                    <br>
                    <form action="{{route('admin.createProduct')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        
                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Material Name </h6>
                            </label>
                            <div class="col-sm-10">
                                <input type="hidden" name="companyId" class="form-control" value="{{$company->companyId}}" />
                                <input type="text" name="name" class="form-control" placeholder="Material Name" />
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Price </h6>
                            </label>
                            <div class="col-sm-10">
                                <input type="number" name="price" class="form-control" placeholder="Price" />
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Availability </h6>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="avialable" class="form-control" placeholder="Availability" />
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Description </h6>
                            </label>
                            <div class="col-sm-10">
                                <textarea class="col-sm-10" id="articleCkeditor" name="description" class="form-control"
                                    placeholder="Description">
                                </textarea>
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Photo1 (650*330) </h6>
                            </label>
                            <div class="col-sm-10 mt-1">
                                <input type="file" name="photo1" />
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> </h6>
                            </label>
                            <div class="col-sm-10 mt-1" style="text-align: end;">
                                <button type="submit" class="btn btn-primary"> Add Material</button>
                            </div>
                        </div>
                        <br>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection