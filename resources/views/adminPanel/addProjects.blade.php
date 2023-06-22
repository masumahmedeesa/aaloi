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
            {{-- @include('adminPanel.adminNav') --}}
        </div>

        <div class="col-md-9">
            <div class="container">
                <div class="ml-3">
                    <div style="background: #0B3861; color: whitesmoke;">
                        <h3 class="ml-3">Add Project</h3>
                    </div>
                    <br>
                    <form action="{{route('projects.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Project Name </h6>
                            </label>
                            <div class="col-sm-10">
                                <input type="hidden" name="farmId" class="form-control" value="{{$farm->farmId}}" />
                                <input type="text" name="projectName" class="form-control" placeholder="Project Name" />
                            </div>

                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Date </h6>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="estdDate" class="form-control"
                                    placeholder="ESTD DATE" />
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Location </h6>
                            </label>
                            <div class="col-sm-10">
                                {{-- <textarea class="col-sm-10" id="articleCkeditor" name="location" class="form-control"
                                    placeholder="Loaction">
                                </textarea> --}}
                                <input type="text" name="location" class="form-control"
                                    placeholder="Loaction" />
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Client </h6>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="description" class="form-control"
                                placeholder="Description" />
                                {{-- <textarea class="col-sm-10" id="ckeditorTD" name="description" class="form-control"
                                    placeholder="Description">
                                    </textarea> --}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Photo1 (650*330) </h6>
                            </label>
                            <div class="col-sm-10 mt-1">
                                <input type="file" name="projectPhoto1" />
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> </h6>
                            </label>
                            <div class="col-sm-10 mt-1" style="text-align: end;">
                                <button type="submit" class="btn btn-primary"> Add Project</button>
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

@section('more_js')

<script>
// ClassicEditor
//     .create(document.querySelector('#ckeditorA'))
//     .then(ckeditorA => {
//         console.log(ckeditorA);
//     })
//     .catch(error => {
//         console.log(error);
//     });

ClassicEditor
    .create(document.querySelector('#ckeditorTD'))
    .then(ckeditorTD => {
        console.log(ckeditorTD);
    })
    .catch(error => {
        console.log(error);
    });
</script>
@endsection
