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
                        <h3 class="ml-3">Edit Member Information</h3>
                    </div>
                    <br>
                    {{-- <form action="{{route('projects.store')}}" method="POST" enctype="multipart/form-data"> --}}
                 {{ Form::open(['action' => ['TeamsController@update',$team->memberId], 'method' => 'POST','enctype'=>'multipart/form-data']) }}                     
                    {{ csrf_field() }}
                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Member Name </h6>
                            </label>
                            <div class="col-sm-10">
                                {{Form::text('memberName',$team->memberName,['class' => 'form-control', 'placeholder' => 'Member Name'])}}
                            </div>

                        </div>
                        <br>

                        <div class="input-group">
                                          <label class="col-sm-2 col-form-label">
                                              <h6> Degree </h6>
                                          </label>
                                          <div class="col-sm-10">
                                          {{Form::text('degree',$team->degree,['class' => 'form-control', 'placeholder' => 'Degree'])}}
                                          </div>
                                      </div>
                                      <br>
              
                                      <div class="input-group">
                                          <label class="col-sm-2 col-form-label">
                                              <h6> Position </h6>
                                          </label>
                                          <div class="col-sm-10">
                                          {{Form::text('position',$team->position,['class' => 'form-control', 'placeholder' => 'Position'])}}                                         
                                          </div>
                                      </div>
                                      <br>


                        <div class="input-group">
                            <label class="col-sm-2 col-form-label">
                                <h6> Description </h6>
                            </label>
                            <div class="col-sm-10">
                               {{Form::textarea('description',$team->description,['id' => 'ckeditorTD','class' => 'form-control', 'placeholder' => 'Description'])}}
                            </div>
                        </div>
                        <br>

                        <div class="input-group">
                                          <label class="col-sm-2 col-form-label">
                                              <h6> Member Photo (120*125) </h6>
                                          </label>
                                          <div class="col-sm-10 mt-1">
                                          @if($team->memberPhoto !=null)
                                          <img class="img-fluid mb-3" src="/storage/project_images/{{$team->farmId}}/teamPhoto/{{$team->memberPhoto}}">
                                          @else
                                          <img class="img-fluid mb-3" src="/storage/project_images/grey.png">
                                           @endif                                          
                                              
                                              {{Form::file('memberPhoto')}}
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

                    {{-- </form> --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('more_js')

<script>

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
