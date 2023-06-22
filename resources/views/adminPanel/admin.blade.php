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

<div class="card">
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        @component('components.who')
        @endcomponent
    </div>
    {{-- <div class="card-body">
      <a class="btn btn-success form-control" href="/"> Home Page </a>
    </div> --}}
</div>

<div class="container mt-3 mb-5">
    <code style="background:black; color: white;">
            <h1><kbd class="mt-2">Admin Panel</kbd></h1>
        </code>
    <hr>
    <div class="row">
        <div class="col-md-3">
            @include('adminPanel.adminNav')
            <br>
        </div>

        <div class="col-md-9">
            <div class="container">
                <div class="ml-3">
                    <div style="background: #0B3861; color: whitesmoke;">
                        <h3 class="ml-3">ADMIN DASHBOARD | {{Auth::user()->name}}</h3>
                    </div>
                    <!-- <img src="images/hacking.png" class="img-thumbnail" /> -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
