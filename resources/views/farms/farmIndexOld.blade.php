@extends('layouts.mainLayout')

@section('insideHead')
<style>
    .datasets-row:hover {
        background-color: rgb(233, 238, 229);

    }

    #itemContainer {
        background: url('images/XOSS3.jpg');
        height: 100%;
        position: relative;
        padding: 1.5%;
    }

    .backGround {
        width: 85px;
        height: 68px;
        /* margin-right: 12px; */
        border-radius: 4px;
    }

</style>
@endsection

@section('system')

<div id="itemContainer">
        <div class="row">
            <div class="col-8">
                <div class="ml-5">
                    <h1 style="color: white;">Datasets</h1>
                </div>
            </div>

            <div class="col-4">
                <div class="d-inline-block mr-5 float-right">
                    <a href="#" class="mt-3 btn btn-sm btn-primary">
                        Documentation
                    </a>
                    <a href="#" class="mt-3 btn btn-sm btn-success">
                        New Dataset
                    </a>
                </div>
            </div>

        </div>
    </div>
    <br>
    
    <!-- relative, absoute dataset Documentation ses -->

    <div class="container">

        <div class="shadow input-group">
            <div class="input-group-append">
                <button class="input-group-prepend input-group-text fa fa-search"></button>
            </div>

            <input type="search" class="form-control bg-light">
            <div class="input-group-append">
                <a href="#" class="input-group-prepend input-group-text btn btn-sm">
                    <i class=" fa fa-filter"> F</i>ilter
                </a>
            </div>
        </div>

        <div class="mt-3"></div>


        <div class="d-flex shadow justify-content-between">
            <div class="d-flex" style="font-size: 13px;">
                <div class="dropdown p-1">
                    <button class="btn dropdown-toggle" type="button"
                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Privacy
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a href="#" class="dropdown-item">Public</a>
                        <a href="#" class="dropdown-item">Private</a>
                    </div>
                </div>
            </div>

            <div class="d-flex">
                <div class="d-inline-block d-flex">
                    <div class="dropdown p-1">
                        <h6 class="p-1" style="color: gray;">Sort By </h6>

                        <button class="dropdown-toggle" type="button" style="border: none;"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filtered
                        </button>

                        <div style="font-size: 13px;"  class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a href="#" class="dropdown-item">Highest Ratings</a>
                            <a href="#" class="dropdown-item">Lowest Ratings</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-3"></div>

        <!-- real code will be appeared here -->

        <!-- real part -->
        @if(count($farms)>0)

        @foreach($farms as $farm)

        <div class="shadow datasets-row mt-3" style="font-size: 13px;">
            <div style="cursor: pointer;" onclick="window.location='/farms/{{$farm->farmId}}'" class="d-flex">
                <div class="col-2">
                    <div class="p-2 ml-3">
                        <img src="/storage/farm_images/{{$farm->farmPhoto}}" class="backGround" alt="{{$farm->farmPhoto}}">
                    </div>

                </div>

                <div class="col-8">
                    <div class="p-2 ml-5">
                        <h6 style="font-weight: 500;"> {{ $farm->farmName }} </h6>
                        <a href="#" style="text-decoration: none;"> {{$farm->farmManager}} </a><br>
                        <div class="d-inline-block" style="color: gray;">
                            <a>2 years</a>
                            <a class="pl-3">3243 KB</a>
                            <a class="pl-3">9.2</a>
                            <a class="pl-2">22 files (CSV)</a>
                        </div>
                    </div>
                </div>

                <div class="col-2">
                    <div class="p-2 d-inline-block">
                        <a href="#" style="text-decoration: none; font-size:24px;" class="fa fa-bell-o"></a><br>
                        <a style="font-size: 14px;"> 134 </a>
                    </div>
                </div>
            </div>
        </div>




                </div>
            </div>
        </div>
        @endforeach
        {{$farms->links()}}

        @else
        <p>
            No Company FOUND !
        </p>

        @endif

            </div>
        </div>
    </div>
<br>
@endsection