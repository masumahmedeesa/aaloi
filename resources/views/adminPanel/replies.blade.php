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
    <a class="mt-2 btn btn-success form-control" href="/whoOwnsFarm/comments/{{$farm->farmId}}"> Return to Comments</a>
    @endif

    <h1 class="mt-2">
        {{$farm->farmName}}
    </h1>


    <table class="table table-striped mt-5">
        <tr>
            <th> Comment Descrption </th>
            <th> User Email </th>

            @if(Auth::guard('owner')->check())
            <th> </th>
            <th> </th>
            @endif

        </tr>

        <tr>
            <td> {!! $comment->commentDesc !!} </td>
            <td> {{$user->email}} </td>
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
        </tr>
    </table>

    @if(count($replies) > 0)
    @foreach($replies as $reply)
    <div class="mt-3 ml-5 shadow card">
        <div class="card-body">
            {!! $reply->replyDesc !!}
        </div>
    </div>
    @endforeach
    {{ $replies->links() }}
    @else
    <div class="ml-5 shadow card">
        <div class="card-body">
            No Replies Available :p
        </div>
    </div>
    @endif

    <div class="ml-5 mb-5 mt-3 shadow card">
        <div class="card-header">
            Reply
        </div>
        <div class="card-body">
            <form action="{{route('owner.sendReplies')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <input type="hidden" name="commentId" class="form-control" value="{{$comment->id}}" />
                <input type="hidden" name="farmId" class="form-control" value="{{$farm->farmId}}" />
                @if(Auth::guard()->check())
                <input type="hidden" name="userId" class="form-control" value="{{auth()->user()->id}}" />
                @else
                <input type="hidden" name="userId" class="form-control" value="0" />
                @endif
                <textarea id="articleCkeditor" style="color:yellow;" name="replyDesc" placeholder="Write Everything"></textarea>


        </div>
        <div class="card-footer">
            <button class="btn btn-sm btn-secondary form-control"> Reply </button>
            </form>
        </div>
    </div>

</div>

@endsection
