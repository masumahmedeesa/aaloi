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
                        <h3 class="ml-3">{{$farm->farmName}} | Team</h3>
                    </div>
                    <br>
                    <form action="{{route('teams.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Member Name </h6>
                            </label>
                            <div class="col-sm-10">
                                <input type="hidden" name="farmId" class="form-control" value="{{$farm->farmId}}" />
                                <input type="text" name="memberName" class="form-control" placeholder="Member Name" />
                            </div>

                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Degree </h6>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="degree" class="form-control"
                                    placeholder="Degree" />
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Position </h6>
                            </label>
                            <div class="col-sm-10">
                               <input type="text" name="position" class="form-control"
                                          placeholder="Position" />
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Description | Awards </h6>
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
                                <h6> Team Photo (650*330) </h6>
                            </label>
                            <div class="col-sm-10 mt-1">
                                <input type="file" name="memberPhoto" />
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> </h6>
                            </label>
                            <div class="col-sm-10 mt-1" style="text-align: end;">
                                <button type="submit" class="btn btn-primary"> Add Member</button>
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

// ClassicEditor
//     .create(document.querySelector('#ckeditorTD'))
//     .then(ckeditorTD => {
//         console.log(ckeditorTD);
//     })
//     .catch(error => {
//         console.log(error);
//     });
</script>
@endsection
