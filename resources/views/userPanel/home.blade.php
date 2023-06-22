@extends('layouts.mainLayout')

@section('system')
<br> <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">USER Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @component('components.who')
                    @endcomponent
                </div>
                <div class="card-body">
                  <a class="btn btn-success form-control" href="/"> Home Page </a>
                  <a class="mt-5 btn btn-success form-control" href="/userComments"> Comments Review </a>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
