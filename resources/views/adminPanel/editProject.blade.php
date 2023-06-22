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
                        <h3 class="ml-3">Add Project</h3>
                    </div>
                    <br>
                    {{-- <form action="{{route('projects.store')}}" method="POST" enctype="multipart/form-data"> --}}
                 {{ Form::open(['action' => ['ProjectsController@update',$project->projectId], 'method' => 'POST','enctype'=>'multipart/form-data']) }}                     
                    {{ csrf_field() }}
                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Project Name </h6>
                            </label>
                            <div class="col-sm-10">
                                {{-- <input type="hidden" name="farmId" class="form-control" value="{{$project->farmId}}" /> --}}
                                {{Form::text('projectName',$project->projectName,['class' => 'form-control', 'placeholder' => 'Project Name'])}}
                                {{-- <input type="text" name="projectName" class="form-control" placeholder="Project Name" /> --}}
                            </div>

                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Date </h6>
                            </label>
                            <div class="col-sm-10">
                               {{Form::text('estdDate',$project->estdDate,['class' => 'form-control', 'placeholder' => 'ESTD Date'])}}                                       
                                {{-- <input type="text" name="estdDate" class="form-control"
                                    placeholder="ESTD DATE" /> --}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Location </h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::textarea('location',$project->location,['id' => 'articleCkeditor','class' => 'form-control', 'placeholder' => 'Location'])}}                                      
                                {{-- <textarea class="col-sm-10" id="articleCkeditor" name="location" class="form-control"
                                    placeholder="Loaction">
                                </textarea> --}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Description </h6>
                            </label>
                            <div class="col-sm-10">
                               {{Form::textarea('description',$project->description,['id' => 'ckeditorTD','class' => 'form-control', 'placeholder' => 'Description'])}}
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
                                @if($project->projectPhoto1 !=null)
                                 <img class="img-fluid mb-3" src="/storage/project_images/{{$project->farmId}}/{{$project->projectName}}/{{$project->projectPhoto1}}">
                                @else
                                <img class="img-fluid mb-3" src="/storage/project_images/grey.png">
                                @endif

                                {{Form::file('projectPhoto1')}}                                      
                                {{-- <input type="file" name="projectPhoto1" /> --}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Photo1 Description </h6>
                            </label>
                            <div class="col-sm-10">
                               {{Form::text('photo1Des',$project->photo1Des,['class' => 'form-control', 'placeholder' => 'Photo1 Description'])}}                                       
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Photo2 (SOMETHING*330) </h6>
                            </label>
                            <div class="col-sm-10 mt-1">
                                @if($project->projectPhoto2 !=null)
                                <img class="img-fluid mb-3" src="/storage/project_images/{{$project->farmId}}/{{$project->projectName}}/{{$project->projectPhoto2}}">
                               @else
                               <img class="img-fluid mb-3" src="/storage/project_images/grey.png">
                               @endif
                                 {{-- <img class="img-fluid mb-3" src="/storage/project_images/{{$project->projectName}}/{{$project->projectPhoto2}}">                                      --}}
                                {{Form::file('projectPhoto2')}}                                      
                                {{-- <input type="file" name="projectPhoto1" /> --}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Photo2 Description </h6>
                            </label>
                            <div class="col-sm-10">
                               {{Form::text('photo2Des',$project->photo2Des,['class' => 'form-control', 'placeholder' => 'Photo2 Description'])}}                                       
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Photo3 (SOMETHING*330) </h6>
                            </label>
                            <div class="col-sm-10 mt-1">
                                @if($project->projectPhoto3 !=null)
                                <img class="img-fluid mb-3" src="/storage/project_images/{{$project->farmId}}/{{$project->projectName}}/{{$project->projectPhoto3}}">
                               @else
                               <img class="img-fluid mb-3" src="/storage/project_images/grey.png">
                               @endif
                                 {{-- <img class="img-fluid mb-3" src="/storage/project_images/{{$project->projectName}}/{{$project->projectPhoto3}}">                                      --}}
                                {{Form::file('projectPhoto3')}}                                      
                                {{-- <input type="file" name="projectPhoto1" /> --}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Photo3 Description </h6>
                            </label>
                            <div class="col-sm-10">
                               {{Form::text('photo3Des',$project->photo3Des,['class' => 'form-control', 'placeholder' => 'Photo3 Description'])}}                                       
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Photo4 (650*330) </h6>
                            </label>
                            <div class="col-sm-10 mt-1">
                                @if($project->projectPhoto4 !=null)
                                <img class="img-fluid mb-3" src="/storage/project_images/{{$project->farmId}}/{{$project->projectName}}/{{$project->projectPhoto4}}">
                               @else
                               <img class="img-fluid mb-3" src="/storage/project_images/grey.png">
                               @endif
                                 {{-- <img class="img-fluid mb-3" src="/storage/project_images/{{$project->projectName}}/{{$project->projectPhoto4}}">                                      --}}
                                {{Form::file('projectPhoto4')}}                                      
                                {{-- <input type="file" name="projectPhoto1" /> --}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Photo4 Description </h6>
                            </label>
                            <div class="col-sm-10">
                               {{Form::text('photo4Des',$project->photo4Des,['class' => 'form-control', 'placeholder' => 'Photo4 Description'])}}                                       
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
                                {{-- <button type="submit" class="btn btn-primary"> Add Project</button> --}}
                            </div>
                        </div>
                        <br>
                        {{ Form::close() }}

                    {{-- </form> --}}

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
