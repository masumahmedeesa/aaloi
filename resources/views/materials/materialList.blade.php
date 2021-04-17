@extends('layouts.originalLayout')

@section('insideHead')
<link rel="stylesheet" href="{{asset('css/navFooter.css')}}" />
<link rel="stylesheet" href="{{asset('css/farmList.css')}}" />
@endsection

@section('system')

<section class="special"></section>

<div class="m-4">
    <h4 style="text-align: center;">Materials</h4>
</div>

<div class="row m-2 justify-content-center">
    <div class="m-2">
        <div class="extra-box shadow">
            <a href="#">
                <div class="text">
                    <h2 class="mt-1">Cement</h2>
                </div>
            </a>
        </div>
    </div>
    <div class="m-2">
        <div class="extra-box shadow">
            <a href="#">
                <div class="text">
                    <h2 class="mt-1">Rod</h2>
                </div>
            </a>
        </div>
    </div>
    <div class="m-2">
        <div class="extra-box shadow">
            <a href="#">
                <div class="text">
                    <h2 class="mt-1">Brick</h2>
                </div>
            </a>
        </div>
    </div>
    <div class="m-2">
        <div class="extra-box shadow">
            <a href="#">
                <div class="text">
                    <h2 class="mt-1">Door</h2>
                </div>
            </a>
        </div>
    </div>
    <div class="m-2">
        <div class="extra-box shadow">
            <a href="#">
                <div class="text">
                    <h2 class="mt-1">Window</h2>
                </div>
            </a>
        </div>
    </div>
    <div class="m-2">
        <div class="extra-box shadow">
            <a href="#">
                <div class="text">
                    <h2 class="mt-1">Tiles</h2>
                </div>
            </a>
        </div>
    </div>
</div>


<section class="package-area">
    <div class="mt-5"></div>
    <div class="container">


    <div style="border-radius: 10px;">
        <div class="col-12">
            <div class="post-entry-horzontal shadow">
                <a href="/materials/2">
                    <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url(storage/farm_images/noimage.jpg);"></div>
                    <div class="text">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6 categoryPP">
                                    <div class="category">type</div>
                                </div>
                                <div class="col-6" style="text-align: end;">
                                    <span> Est : 2018 </span>
                                </div>
                            </div>
                        </div>
                        <h2 class="mt-1">name</h2>
                        <div>
                            <span class="text-primary">
                                Founder
                            </span>
                            <span class="pl-1">
                                founder
                            </span>
                        </div>

                        <div>
                            <span class="text-primary">
                                Consultant
                            </span>
                            <span class="pl-1">
                                consultant
                            </span>
                        </div>

                        <span class="fa fa-location-arrow text-secondary"> contact info</span>
                        
                    </div>
                </a>
            </div>
        </div>
    </div>

    </div>



</section>

@endsection


@section('queryQuota')
<script type="text/javascript" src="{{asset('js/project.js')}}">
</script>
@endsection