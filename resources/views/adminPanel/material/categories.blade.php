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
                <div>
                    <div class="rounded-1" style="background: #0B3861; color: whitesmoke; border-radius: 6px">
                        <h3 class="ml-2 p-1">Add Category</h3>
                    </div>
                    <br>
                    <div class="row d-flex">
                        @if(count($categories)>0)
                        @for($i=0; $i< count($categories); $i++) <div class="d-flex bg-success p-1 m-1"
                            style="border-radius: 6px">
                            {{$categories[$i]->name}}
                    </div>
                    @endfor
                    @endif

                </div>
                <form class="mt-3" action="{{route('admin.createCategory')}}" method="POST"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <label class="col-sm-2 col-form-label">
                            <h6> Category Name </h6>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Category Name" />
                        </div>
                    </div>
                    <br>
                    <div class="input-group">
                        <label class="col-sm-2 col-form-label">
                            <h6> </h6>
                        </label>
                        <div class="col-sm-10" style="text-align: end;">
                            <button type="submit" class="btn btn-primary"> Add Category </button>
                        </div>
                    </div>
                    <br>
                </form>
            </div>

            @if(count($categories) > 0)
            <div class="container">
                <div class="ml-3">
                    <div style="background: #0B3861; color: whitesmoke; border-radius: 6px">
                        <h3 class="ml-2 p-1">Add Subcategory</h3>
                    </div>
                    <br>

                    <div class="row d-flex">
                        @if(count($subcategories)>0)
                        @for($i=0; $i< count($subcategories); $i++)
                        @if(count($subcategories[$i]->subcategory) > 0)
                        <div class="d-flex bg-success p-1 m-1"
                            style="border-radius: 6px">
                            {{$subcategories[$i]->name}}
                            <div class="row d-flex m-1">
                            @if(count($subcategories[$i]->subcategory) > 0)
                            @for($j=0;$j<count($subcategories[$i]->subcategory);$j++)
                                <div class="d-flex bg-dark text-white p-1 m-1" style="border-radius: 6px">
                                    {{$subcategories[$i]->subcategory[$j]->name}}
                                </div>
                            @endfor
                            @endif
                            </div>
                        </div>
                        @endif
                        @endfor
                        @endif
                    </div>

                <form class="mt-3" action="{{route('admin.createSubCategory')}}" method="POST"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="input-group mb-3 mt-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Select Categories</label>
                        </div>
                        <select class="custom-select" name="categoryId" id="inputGroupSelect01">
                            @if(count($categories)>0)
                            @for($i=0; $i< count($categories); $i++) 
                            <option value={{$categories[$i]->categoryId}}>
                                {{$categories[$i]->name}}
                            </option>
                            @endfor
                            @endif
                        </select>
                    </div>
                    
                    <div class="input-group">
                        <label class="col-sm-2 col-form-label">
                            <h6> Subcategory Name </h6>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Subcategory Name" />
                        </div>
                    </div>
                    <br>

                    <div class="input-group">
                        <label class="col-sm-2 col-form-label">
                            <h6> </h6>
                        </label>
                        <div class="col-sm-10" style="text-align: end;">
                            <button type="submit" class="btn btn-primary"> Add Subcategory </button>
                        </div>
                    </div>
                    <br>
                </form>
            </div>
            @endif

            <div class="container">
                <div>
                    <div class="rounded-1" style="background: #0B3861; color: whitesmoke; border-radius: 6px">
                        <h3 class="ml-2 p-1">Add Company</h3>
                    </div>
                    <br>

                <form class="mt-3" action="{{route('admin.createCompany')}}" method="POST"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <label class="col-sm-2 col-form-label">
                            <h6> Company Name </h6>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Company Name" />
                        </div>
                    </div>
                    <br>

                    <div class="input-group">
                        <label class="col-sm-2 col-form-label">
                            <h6> Categories </h6>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="categories" class="form-control" placeholder="Categories" />
                        </div>
                    </div>
                    <br>

                    <div class="input-group">
                        <label class="col-sm-2 col-form-label">
                            <h6> Subcategories </h6>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="subcategories" class="form-control" placeholder="Subcategories" />
                        </div>
                    </div>
                    <br>

                    <div class="input-group">
                        <label class="col-sm-2 col-form-label">
                            <h6> Address </h6>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="address" class="form-control" placeholder="Address" />
                        </div>
                    </div>
                    <br>

                    <div class="input-group">
                        <label class="col-sm-2 col-form-label">
                            <h6> Phone </h6>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="phone" class="form-control" placeholder="Phone" />
                        </div>
                    </div>
                    <br>

                    <div class="input-group">
                        <label class="col-sm-2 col-form-label">
                            <h6> Email </h6>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="email" class="form-control" placeholder="Email" />
                        </div>
                    </div>
                    <br>

                    <div class="input-group">
                        <label class="col-sm-2 col-form-label">
                            <h6> Website </h6>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" name="website" class="form-control" placeholder="Website" />
                        </div>
                    </div>
                    <br>

                    <div class="input-group">
                        <label class="col-sm-2 col-form-label">
                            <h6> Estd </h6>
                        </label>
                        <div class="col-sm-10">
                            <input type="number" name="estd" class="form-control" placeholder="Estd" />
                        </div>
                    </div>
                    <br>

                    <div class="input-group">
                        <label class="col-sm-2 col-form-label">
                            <h6> Product Count </h6>
                        </label>
                        <div class="col-sm-10">
                            <input type="number" name="count" class="form-control" placeholder="Product Count" />
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
                            <h6> Photo (457*489)</h6>
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
                        <div class="col-sm-10" style="text-align: end;">
                            <button type="submit" class="btn btn-primary"> Add Company </button>
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