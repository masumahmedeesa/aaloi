@extends('layouts.originalLayout')

@section('insideHead')
<link rel="stylesheet" href="{{asset('css/navFooter.css')}}" />
<link rel="stylesheet" href="{{asset('css/farmDescription.css')}}" />
@endsection

@section('system')

<section class="special"> </section>

<section class="gallery-area pb-120">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-40 header-text text-center">
                <h4 class="p-3"> '{{$material->name}}' from {{$company->name}}</h4>
            </div>
        </div>

        @if($material->photo1 != null)
        <div class="row">
            <div class="col-lg-12">
                <div class="single-gallery">
                    <div class="content">
                        <div>
                            <div class="content-overlay"></div>
                            <img class="content-image img-fluid d-block mx-auto"
                                style="border-radius:10px; height: 100%;"
                                src="/storage/material_images/{{$company->companyId}}/{{$material->photo1}}"
                                alt="material">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title mx-auto">{!!$material->description!!}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="col-lg-4">
            <div class="single-gallery">
                <div class="content">
                    <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" style="border-radius:10px; height:370px;"
                            src="/storage/project_images/grey.png" alt="">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title mx-auto">NO IMAGE IS UPLOADED</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endif

    </div>
    </div>

    @if(Auth::guard('admin')->check())
    <div class="d-flex pl-3 p-4">
        <a href="/masquerade-park/editProduct/{{$material->materialId}}" class="btn btn-primary btn-sm">EDIT</a>
        {{Form::open(['action' => ['MaterialsController@destroyProduct',$material->materialId], 'method' => 'POST']) }}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('D E L E T E',['class' => 'ml-2 btn btn-danger btn-sm'])}}
        {{ Form::close() }}
    </div>
    @endif

</section>

@endsection


@section('queryQuota')
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
@endsection