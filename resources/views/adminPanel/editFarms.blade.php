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



                {{-- <form action="#" method="PUT" enctype="multipart/form-data"> --}}
                    {{ Form::open(['action' => ['FarmsController@update',$farm->farmId], 'method' => 'POST','enctype'=>'multipart/form-data']) }}

                    {{ csrf_field() }}
                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Farm Name </h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::text('farmName',$farm->farmName,['class' => 'form-control', 'placeholder' => 'Farm Name'])}}
                                {{-- <input type="text" name="farmName" class="form-control" value="{{$farm->farmName}}" placeholder="Farm Name" /> --}}
                            </div>

                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Type </h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::text('farmType',$farm->farmType,['class' => 'form-control', 'placeholder' => 'Type | What kinds of works you do?'])}}
                                {{-- <input type="text" name="farmType" class="form-control"
                                    placeholder="Type | What kinds of works you do?" /> --}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Founder </h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::text('farmManager',$farm->farmManager,['class' => 'form-control', 'placeholder' => 'Founder | Owner'])}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Consultant </h6>
                            </label>
                            <div class="col-sm-10">
                                {{-- <input type="text" name="farmConsultant" class="form-control"
                                    placeholder="Consultant" /> --}}
                                {{Form::text('farmConsultant',$farm->farmConsultant,['class' => 'form-control', 'placeholder' => 'Consultant'])}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Office Address </h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::text('farmContactInformation',$farm->farmContactInformation,['class' => 'form-control', 'placeholder' => 'Contact Information | Office Address'])}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Phone </h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::text('farmPhone',$farm->farmPhone,['class' => 'form-control', 'placeholder' => 'Phone'])}}
                                {{-- <input type="text" name="farmPhone" class="form-control" placeholder="Phone" /> --}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Email </h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::text('farmEmail',$farm->farmEmail,['class' => 'form-control', 'placeholder' => 'Email'])}}
                                {{-- <input type="text" name="farmEmail" class="form-control" placeholder="Email" /> --}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Tasks Done</h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::number('farmTasks',$farm->farmTasks,['class' => 'form-control', 'placeholder' => 'Tasks Done'])}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6>Tasks On Going</h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::number('farmTasksOn',$farm->farmTasksOn,['class' => 'form-control', 'placeholder' => 'Tasks On Going'])}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6>Website</h6>
                            </label>
                            <div class="col-sm-10">
                                {{-- <input type="text" name="farmWebsite" class="form-control"
                                placeholder="Tasks On Going"/> --}}
                                {{Form::text('farmWebsite',$farm->farmWebsite,['class' => 'form-control', 'placeholder' => 'Website'])}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6>Facebook Link</h6>
                            </label>
                            <div class="col-sm-10">
                                {{-- <input type="text" name="farmFacebook" class="form-control"
                                placeholder="Facebook Link"/> --}}
                                {{Form::text('farmFacebook',$farm->farmFacebook,['class' => 'form-control', 'placeholder' => 'Facebook'])}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6>Established Year</h6>
                            </label>
                            <div class="col-sm-10">
                                {{-- <input type="text" name="farmEstd" class="form-control"
                                placeholder="Established Year"/> --}}
                                {{Form::text('farmEstd',$farm->farmEstd,['class' => 'form-control', 'placeholder' => 'Established Year'])}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Awards & Recongintion </h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::textarea('farmAwards',$farm->farmAwards,['id' => 'articleCkeditor','class' => 'form-control', 'placeholder' => 'Awards & Recongintion'])}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Photo (457*489) </h6>
                            </label>
                            <div class="col-sm-10 mt-1">
                                <img src="/storage/farm_images/{{$farm->farmPhoto}}" class="img-thumbnail">
                                <br>
                                {{Form::file('farmPhoto')}}
                                {{-- <input type="file" name="farmPhoto" /> --}}
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
