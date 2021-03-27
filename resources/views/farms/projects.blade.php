@extends('layouts.originalLayout')

@section('insideHead')
    <!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> -->
    <link rel="stylesheet" href="{{asset('css/navFooter.css')}}" />
    <!-- <link rel="stylesheet" href="{{asset('css/Interior/main.css')}}" /> -->
    <link rel="stylesheet" href="{{asset('css/farmDescription.css')}}" />
@endsection

@section('system')

    <!-- breadcrumb start-->
    <section class="special"> </section>
    <!-- <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>{{$project->projectName}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- breadcrumb start-->

    <div class="mt-5"></div>

    <!-- interior -->

    <!-- Start gallery Area -->
    <section class="gallery-area pb-120">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 pb-40 header-text text-center">
                    <h1 class="pb-10">This '{{$project->projectName}}' may impress you</h1>
                    <p>
                        Which is in extremely love with eco friendly system.
                    </p>
                </div>
            </div>

            @if($project->projectPhoto1 !=null)

            <div class="row">
                <div class="col-lg-8">
                    <div class="single-gallery">
                        <div class="content">
                            <a href="#" target="_blank">
                                <div class="content-overlay"></div>
                                {{-- <img class="content-image img-fluid d-block mx-auto" src="{{asset('img/interior-gallery/g1.jpg')}}" alt=""> --}}
                            <img class="content-image img-fluid d-block mx-auto" style="border-radius:10px; height:370px;" src="/storage/project_images/{{$project->farmId}}/{{$project->projectName}}/{{$project->projectPhoto1}}" alt="">
                                <div class="content-details fadeIn-bottom">
                                    <h3 class="content-title mx-auto">Client : {!!$project->description!!} Location :{!!$project->location!!}</h3>
                                    {{-- <a href="project-details.html" class="primary-btn text-uppercase mt-20">More Details</a> --}}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                @if($project->projectPhoto2 != null)
                <div class="col-lg-4">
                    <div class="single-gallery">
                        <div class="content">
                            <a href="#" target="_blank">
                                <div class="content-overlay"></div>
                                {{-- <img class="content-image img-fluid d-block mx-auto" src="{{asset('img/interior-gallery/g2.jpg')}}" alt=""> --}}
                                <img class="content-image img-fluid d-block mx-auto" style="border-radius:10px; height:370px;" src="/storage/project_images/{{$project->farmId}}/{{$project->projectName}}/{{$project->projectPhoto2}}" alt="">
                                <div class="content-details fadeIn-bottom">
                                    <h3 class="content-title mx-auto">{{$project->photo2Des}}</h3>
                                    {{-- <a href="project-details.html" class="primary-btn text-uppercase mt-20">More Details</a> --}}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-lg-4">
                    <div class="single-gallery">
                        <div class="content">
                            <a href="#" target="_blank">
                                <div class="content-overlay"></div>
                                <img class="content-image img-fluid d-block mx-auto" style="border-radius:10px; height:370px;" src="/storage/project_images/grey.png" alt="">
                                <div class="content-details fadeIn-bottom">
                                    <h3 class="content-title mx-auto">NO IMAGE IS UPLOADED</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @endif

                @if($project->projectPhoto3 !=null || $project->projectPhoto4 !=null)

                @if($project->projectPhoto3 !=null)
                <div class="col-lg-4">
                    <div class="single-gallery">
                        <div class="content">
                            <a href="#" target="_blank">
                                <div class="content-overlay"></div>
                                {{-- <img class="content-image img-fluid d-block mx-auto" src="{{asset('img/interior-gallery/g3.jpg')}}" alt=""> --}}
                                <img class="content-image img-fluid d-block mx-auto" style="border-radius:10px; height:370px;" src="/storage/project_images/{{$project->farmId}}/{{$project->projectName}}/{{$project->projectPhoto3}}" alt="">
                                <div class="content-details fadeIn-bottom">
                                    <h3 class="content-title mx-auto">{{$project->photo3Des}}</h3>
                                    {{-- <a href="project-details.html" class="primary-btn text-uppercase mt-20">More Details</a> --}}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-lg-4">
                    <div class="single-gallery">
                        <div class="content">
                            <a href="#" target="_blank">
                                <div class="content-overlay"></div>
                                <img class="content-image img-fluid d-block mx-auto" style="border-radius:10px; height:370px;" src="/storage/project_images/grey.png" alt="">
                                <div class="content-details fadeIn-bottom">
                                    <h3 class="content-title mx-auto">NO IMAGE IS UPLOADED</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @endif

                @if($project->projectPhoto4 != null)
                <div class="col-lg-8">
                    <div class="single-gallery">
                        <div class="content">
                            <a href="#" target="_blank">
                                <div class="content-overlay"></div>
                                {{-- <img class="content-image img-fluid d-block mx-auto" src="{{asset('img/interior-gallery/g4.jpg')}}" alt=""> --}}
                                <img class="content-image img-fluid d-block mx-auto" style="border-radius:10px; height:370px;" src="/storage/project_images/{{$project->farmId}}/{{$project->projectName}}/{{$project->projectPhoto4}}" alt="">
                                <div class="content-details fadeIn-bottom">
                                    <h3 class="content-title mx-auto">{{$project->photo4Des}}</h3>
                                    {{-- <a href="project-details.html" class="primary-btn text-uppercase mt-20">More Details</a> --}}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-lg-8">
                    <div class="single-gallery">
                        <div class="content">
                            <a href="#" target="_blank">
                                <div class="content-overlay"></div>
                                <img class="content-image img-fluid d-block mx-auto" style="border-radius:10px; height:370px;" src="/storage/project_images/grey.png" alt="">
                                <div class="content-details fadeIn-bottom">
                                    <h3 class="content-title mx-auto">NO IMAGE IS UPLOADED</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @endif

            @endif


            </div>
            {{-- End of Row --}}
            @else
                <div class="row">
                    NO IMAGES ! SORRY :)
                </div>
            @endif 
            

        </div>

        <div class="container">
            <div class="justify-content-center">
                @if(Auth::guard('admin')->check())
                <a href="/projects/{{$project->projectId}}/edit" class="btn btn-success form-control"> E D I T</a>
                {{Form::open(['action' => ['ProjectsController@destroy',$project->projectId], 'method' => 'POST']) }}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('D E L E T E',['class' => 'mt-2 btn btn-danger form-control'])}}
                {{Form::close()}}
                @endif
            </div>
        </div>

    </section>


    <!-- End gallery Area -->

    <!-- Start brands Area -->

    {{-- <section class="brands-area pb-60 pt-60">
        <div class="container no-padding">
            <div class="brand-wrap">
                <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="{{asset('img/l1.png')}}" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="{{asset('img/l2.png')}}" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="{{asset('img/l3.png')}}" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="{{asset('img/l4.png')}}" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="{{asset('img/l5.png')}}" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="{{asset('img/l5.png')}}" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="{{asset('img/l5.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- End brands Area -->

    <!-- interior end -->

@endsection


@section('queryQuota')
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/project.js')}}"></script>
@endsection
