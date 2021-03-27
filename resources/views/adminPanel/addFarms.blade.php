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
                        <h3 class="ml-3">Add Profile</h3>
                    </div>
                    <br>
                    <form action="{{route('farms.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Farm Name </h6>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="farmName" class="form-control" placeholder="Farm Name" />
                            </div>

                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Type </h6>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="farmType" class="form-control"
                                    placeholder="Type | What kinds of works you do?" />
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Founder </h6>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="farmManager" class="form-control"
                                    placeholder="Manager | Founder" />
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Consultant </h6>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="farmConsultant" class="form-control"
                                    placeholder="Consultant" />
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6>Office Address </h6>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="farmContactInformation"
                                class="form-control" placeholder="Office Address"/>
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Phone </h6>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="farmPhone" class="form-control" placeholder="Phone" />
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Email </h6>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="farmEmail" class="form-control" placeholder="Email" />
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6>Tasks Done</h6>
                            </label>
                            <div class="col-sm-10">
                                <input type="number" name="farmTasks" class="form-control"
                                placeholder="Tasks Done"/>
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6>Tasks On Going</h6>
                            </label>
                            <div class="col-sm-10">
                                <input type="number" name="farmTasksOn" class="form-control"
                                placeholder="Tasks On Going"/>
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6>Website</h6>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="farmWebsite" class="form-control"
                                placeholder="Tasks On Going"/>
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6>Facebook Link</h6>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="farmFacebook" class="form-control"
                                placeholder="Facebook Link"/>
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6>Established Year</h6>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="farmEstd" class="form-control"
                                placeholder="Established Year"/>
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Awards & Recongintion </h6>
                            </label>
                            <div class="col-sm-10">
                                <textarea class="col-sm-10" id="articleCkeditor" name="farmAwards" class="form-control"
                                    placeholder="Awards & Recongintion">
                                </textarea>
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Photo (457*489)</h6>
                            </label>
                            <div class="col-sm-10 mt-1">
                                <input type="file" name="farmPhoto" />
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> </h6>
                            </label>
                            <div class="col-sm-10 mt-1" style="text-align: end;">
                                <button type="submit" class="btn btn-primary"> Add Profile</button>
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
