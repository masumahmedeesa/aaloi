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
  @if(Auth::guard('owner')->check())
  <a class="mt-2 btn btn-info form-control" href="/whoOwnsFarm"> Return to Dashboard</a>
  @endif

  <h1 class="mt-2">
     {{$farm->farmName}}
  </h1>


  @if (count($comments) > 0)
      <table class="table table-striped mt-5">
          <tr>
              <th> Comment Descrption </th>
              <th> User Email </th>

              @if(Auth::guard('owner')->check())
                  <th> </th>
                  <th> </th>
                  <th> </th>
              @endif

          </tr>

          @foreach($comments as $comment)
              <tr>
                   <td> {!! $comment->commentDesc !!} </td>
                   <td> {{$comment->email}} </td>
                   <td>
                     Replies (5)
                   </td>

                  @if(Auth::guard('owner')->check())
                      <td>
                      {{ Form::open(['action' => ['CommentsController@destroy',$comment->id], 'method' => 'POST']) }}
                      {{ Form::hidden('_method','DELETE')}}
                      {{ Form::submit('Delete',['class' => 'btn btn-outline-success btn-sm'])}}
                      {{ Form::close() }}
                      </td>
                  @endif

                  <td>
                    <a href="/whoOwnsFarm/replies/{{$farm->farmId}}/{{$comment->id}}" class="btn btn-outline-info btn-sm"> Replies </a>
                  </td>

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
