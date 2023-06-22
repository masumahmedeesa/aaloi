@extends('layouts.originalLayout')

@section('extra')
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css" />
@endsection

@section('insideHead')
<link rel="stylesheet" href="{{asset('css/navFooter.css')}}" />
<link rel="stylesheet" href="{{asset('css/onlyFarm.css')}}" />
<style type="text/css">
    #map {
        height: 300px;
        width: 100%;
    }

    p {
        color: rgba(255, 255, 255, 0.5);
    }
</style>

@endsection

@section('system')

<section class="special"></section>

<div class="m-4" style="text-align: center;">
    <h2 class="title_man"> {{$company->name}}</h2>
</div>

<section class="about mb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-5 p-3 bg-transparent">
                <div class="about__img text-center text-md-left">
                    <img style="border-radius:10px;height:352px;width:100%; object-fit: cover" class="img-fluid"
                        src="/storage/company_images/{{$company->photo1}}" alt="LOGO" />
                    @if($company->estd)
                    <a class="about__img__date text-center">
                        <h3>{{2021 - $company->estd}}</h3>
                        <p style="color:blueviolet;">
                            Estd
                            <br /> OF GLORY
                        </p>
                    </a>
                    @endif
                </div>
            </div>
            <div class="col-md-7 p-3">
                <div class="section-intro">
                    <h4 style="font-size:25px;" class="section-intro__title">| About</h4>
                    <div class="section-intro__subtitle mt-4">

                        @if($company->categories)
                        <div>
                            <span style="color: #f9cc41;">
                                Type
                            </span>
                            <span>
                                @foreach (explode(',', $company->categories) as $item)
                                <span class="bg-success text-white m-1"
                                    style="border-radius: 6px; padding-left: 4px; padding-right:4px; padding-top: 1px; padding-bottom: 1px;">
                                    {{$item}}
                                </span>
                                @endforeach
                            </span>
                        </div>
                        @endif

                        @if($company->subcategories)
                        <div>
                            <span style="color: #f9cc41;">
                                Materials
                            </span>
                            <span>
                                @foreach (explode(',', $company->subcategories) as $item)
                                <span class="bg-white text-dark m-1"
                                    style="border-radius: 6px; padding-left: 4px; padding-right:4px; padding-top: 1px; padding-bottom: 1px;">
                                    {{$item}}
                                </span>
                                @endforeach
                            </span>
                        </div>
                        @endif


                        @if($company->address)
                        <div>
                            <span style="color: #f9cc41;">
                                Address
                            </span>
                            <span class="pl-1" style="color: #bbb;">
                                {{$company->address}}
                            </span>
                        </div>
                        @endif

                        @if($company->website)
                        <div>
                            <span style="color: #f9cc41;">
                                Website
                            </span>
                            <span class="pl-1" style="color: #bbb;">
                                {{$company->website}}
                            </span>
                        </div>
                        @endif

                        @if($company->description)
                        <div>
                            <span style="color: #f9cc41;">
                                Description
                            </span>
                            <span class="pl-1" style="color: #bbb;">
                                {{$company->description}}
                            </span>
                        </div>
                        @endif

                    </div>
                </div>
                <!-- <a class="btn btn--rightBorder" href="#">Read More</a> -->
            </div>
        </div>
    </div>
</section>

@if(Auth::guard('admin')->check())
<div class="m-4">
    <a href="/masquerade-park/addProduct/{{$company->companyId}}" class="ml-2 btn btn-sm btn-outline-success">A D D
        PRODUCT</a>
</div>
@endif

@if(count($company->materials) > 0)
<section class="portfolio section-margin">
    <div class="container">
        <div class="section-intro">
            <h4 style="font-size:25px;" class="section-intro__title">| MATERIALS</h4>
            <h2 class="section-intro__subtitle bottom-border">
                All materials {{count($company->materials)}}
            </h2>
        </div>

        @if(count($company->materials) > 0)
        @foreach ($company->materials as $item)
        <div style="cursor: pointer" onclick="window.location='/companies/{{$company->companyId}}/{{$item->materialId}}'">
            <div class="row align-items-end pb-md-5">
                <div class="col-md-6 p-3 linkGoto">
                    <div>
                        @if($item->photo1 === 'noimage.jpg')
                        <img style="border-radius:10px;height:330px;width:650px; object-fit: cover" class="img-fluid shadow"
                            src="/storage/company_images/noimage.jpg" alt="material" />
                        @else
                        <img style="border-radius:10px;height:330px;width:650px; object-fit: cover" class="img-fluid shadow"
                            src="/storage/material_images/{{$company->companyId}}/{{$item->photo1}}" alt="material" />
                        @endif
                    </div>
                </div>
                <div class="col-md-6 p-3">
                    {{-- <h4 class="section-intro__title left-border">estd</h4> --}}
                    <h2 style="font-size:25px;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"
                        class="section-intro__subtitle small">
                        {{$item->name}}
                    </h2>
                    <p
                        style="font-size:20px;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                        @if($item->price)
                        <b style="font-weight:100;">Price </b>
                        <span style="color: #fff;">{{$item->price}} </span>
                        <br>
                        @endif

                        @if($item->avialable)
                        <b style="font-weight:100;">Availability </b>
                        <span style="color: #fff;">{{$item->avialable}} </span>
                        <br>
                        @endif


                        @if($item->description)
                        <b style="font-weight:100;">About </b>
                        <span style="color: #fff;">{!!$item->description!!} </span>
                        <br>
                        @endif

                        <a href="/companies/{{$company->companyId}}/{{$item->materialId}}">View Details</a>
                    </p>

                </div>
            </div>
        </div>


        @if(Auth::guard('admin')->check())
        <div class="d-flex pl-3">
            <a href="/masquerade-park/editProduct/{{$item->materialId}}" class="btn btn-primary btn-sm">EDIT</a>
            {{Form::open(['action' => ['MaterialsController@destroyProduct',$item->materialId], 'method' => 'POST']) }}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('D E L E T E',['class' => 'ml-2 btn btn-danger btn-sm'])}}
            {{ Form::close() }}
        </div>
        @endif

        @endforeach
        @endif

    </div>
</section>
@endif

<section class="tips tips-bg mb-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <h2 class="section-intro__subtitle">
                    Write us everything you want to say.
                </h2>

                <form action="{{route('comments.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <input type="hidden" name="farmId" class="form-control" value="{{$company->id}}" />
                    @if(Auth::guard()->check())
                    <input type="hidden" name="userId" class="form-control" value="{{auth()->user()->id}}" />
                    @else
                    <input type="hidden" name="userId" class="form-control" value="0" />
                    @endif
                    <textarea id="articleCkeditor" style="color:yellow;" name="commentDesc"
                        placeholder="Write Everything"></textarea>

            </div>
            <div class="col-md-2 mt-2 text-center text-lg-right">
                @if(Auth::guard()->check())
                <button type="submit" class="btn btn-dark btn--leftBorder btn--rightBorder">SEND</button>
                </form>
                @else
                <a href="/login" class="btn btn-sm btn-dark btn--leftBorder btn--rightBorder">Login First To Send</a>
                @endif

            </div>


        </div>
    </div>
</section>


@endsection