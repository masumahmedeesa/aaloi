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

@if(count($categories) > 0)
<div class="row m-2 justify-content-center">
    @foreach ($categories as $item)
    <div class="m-2">
        <div class="extra-box shadow">
            <a href="#">
                <div class="text">
                    <h2 class="mt-1">{{$item->name}}</h2>
                </div>
            </a>
        </div>
    </div>
    @endforeach
</div>

@endif


<section class="package-area">
    <div class="mt-5"></div>
    <div class="container">


    @if(count($companies)>0)
    @foreach($companies as $company)

    <div style="border-radius: 10px;">
        <div class="col-12">
            <div class="post-entry-horzontal shadow">
                <a href="/companies/{{$company->companyId}}">
                    <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url(storage/company_images/{{$company->photo1}});"></div>
                    <div class="text">
                        <div class="col-12">
                            <div class="row">
                                @if($company->categories)
                                <div class="col-8 categoryPP">
                                    @foreach (explode(',', $company->categories) as $item)
                                        <div class="categorySub">
                                            {{$item}}
                                        </div>
                                    @endforeach
                                </div>
                                @endif

                                @if($company->estd)
                                <div class="col-4" style="text-align: end;">
                                    <span> Est : {{$company->estd}} </span>
                                </div>
                                @endif
                            </div>
                            <div class="row">
                                @if($company->subcategories)
                                <div class="categoryPP">
                                    @foreach (explode(',', $company->subcategories) as $item)
                                    <div class="category">
                                            {{$item}}
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                        </div>
                        <h2 class="mt-1">{{$company->name}}</h2>
                        @if($company->description)
                        <div class="text-dark">
                            {!!$company->description!!}
                        </div>
                        @endif

                        @if($company->address)
                        <span class="fa fa-location-arrow text-secondary"> {{$company->address}} </span>
                        @endif
                    </div>
                </a>
            </div>
        </div>
    </div>

    @if(Auth::guard('admin')->check())
    <div class="d-flex pb-3 pl-3">
        <a href="/masquerade-park/editCompany/{{$company->companyId}}" class="btn btn-primary btn-sm">EDIT</a>
        {{Form::open(['action' => ['MaterialsController@destroyCompany',$company->companyId], 'method' => 'POST']) }}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('D E L E T E',['class' => 'ml-2 btn btn-danger btn-sm'])}}
        {{ Form::close() }}
    </div>
    @endif

    @endforeach
    {{$companies->links()}}
    @else
    <h1> No Company Included yet !</h1>
    @endif

    </div>
</section>

@endsection


{{-- @section('queryQuota')
<script type="text/javascript" src="{{asset('js/project.js')}}">
</script>
@endsection --}}