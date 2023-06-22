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
    <a class="mt-2 btn btn-info form-control" href="/dashboard"> Return to Dashboard</a>
    <a class="mt-2 btn btn-success form-control" href="/userComments"> Return to Comments</a>
    @endif



    <div class="container-fluid">
        <h1 class="mt-2">
            {{$userInfo->email}}
        </h1>
        <div class="row mt-5">
            <div class="col-12 p-3 shadow">
                Comment Description
            </div>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-10 shadow">
                {!! $comment->commentDesc !!}
            </div>
            <div class="col-1 shadow p-1">
                {{$farm->farmName}}
            </div>
            <div class="col-1 shadow p-2">
                <a href="/userComments/{{$comment->farmId}}/{{$comment->id}}" class="btn btn-sm btn-secondary"> Replies </a>
            </div>
        </div>
    </div>

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
