@extends('layouts.mainLayout')

@section('insideHead')
<style>
.personal-link:hover {
    text-decoration: none;
    color: rgb(56, 204, 51);
    background: #0B3861;
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

<div class="container-fluid">

  @if(Auth::guard('admin')->check())
  <a class="mt-2 btn btn-info form-control" href="/whoOwnsFarm"> Return to Dashboard</a>
  @endif

  @if (count($comments) > 0)
      <table class="table table-striped mt-5">
          <tr>
              <th> Comment Descrption </th>
              <th> Validity </th>
              <th> Farm Name </th>
              <th> User Email </th>

              @if(Auth::guard('admin')->check())
                  <th> </th>
                  <th> </th>
              @endif

          </tr>

          @foreach($comments as $comment)
              <tr>

                  {{ Form::open(['action' => ['CommentsController@update',$comment->id], 'method' => 'POST','enctype'=>'multipart/form-data']) }}
                     {{ csrf_field() }}

                   <td> {!! $comment->commentDesc !!} </td>
                   <td>
                     <!-- {{$comment->validity}}  -->
                     {{Form::text('validity',$comment->validity,['class' => 'form-control', 'placeholder' => 'Validity'])}}
                   </td>
                  <td> {{$comment->farmName}} </td>
                  <td> {{$comment->email}} </td>

                  @if(Auth::guard('admin')->check())
                      <td>
                          <!-- <a href="/comments/{{$comment->id}}" class="btn btn-outline-primary btn-sm">OK</a> -->
                          {{Form::hidden('_method','PUT')}}
                          {{Form::submit('ok',['class' => 'btn btn-outline-primary btn-sm'])}}
                          {{ Form::close() }}
                      </td>
                      <td>
                      {{ Form::open(['action' => ['CommentsController@destroy',$comment->id], 'method' => 'POST']) }}
                      {{ Form::hidden('_method','DELETE')}}
                      {{ Form::submit('Delete',['class' => 'btn btn-outline-success btn-sm'])}}
                      {{ Form::close() }}
                      </td>

                  @endif
              </tr>
          @endforeach

      </table>
      {{ $comments->links() }}
  @else
      <br> <br>
      <p> No Comments Available </p>

  @endif
</div>

@endsection
