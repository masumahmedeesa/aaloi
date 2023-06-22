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
    @if(Auth::guard()->check())
    <a class="mt-2 btn btn-info form-control" href="/dashboard"> Return to Dashboard</a>
    @endif

    <h3 class="mt-3"> Email : {{$userInfo->email}} </h1>

        <div class="container">

            <div class="row mt-5">
                <div class="col-12 p-3 shadow">
                    Comment Description
                </div>
            </div>

            @if (count($comments) > 0)
            @foreach($comments as $comment)
            <div class="row mt-5 mb-5">
                <div class="col-10 shadow">
                    {!! $comment->commentDesc !!}
                </div>
                <div class="col-1 shadow p-1">
                    {{$comment->farmName}}
                </div>
                <div class="col-1 shadow p-2">
                    <a href="/userComments/{{$comment->farmId}}/{{$comment->id}}" class="btn btn-sm btn-secondary"> Replies </a>
                </div>
            </div>

            @endforeach
            {{ $comments->links() }}
            @else
            <br> <br>
            <p> No Comments Available </p>

            @endif
        </div>
</div>

@endsection
