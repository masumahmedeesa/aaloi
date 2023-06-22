@extends('layouts.mainLayout')

@section('system')

<img src="/images/XOSS.jpg">
<div class="container">
    <div class="card-body mt-2">
        <p style="font-size: 15px;">
            A consulting or consultancy firm is a business of one or more experts (consultants) that provides
            professional feedback to an individual or an organization for a fee. The types of firms vary, such as
            technology and advertising firms.

            Consultancy firms target company executives and provide them with consultants, also known as
            industry-specific specialists and subject-matter experts, usually trained in management or business schools.
            The deliverable of a consultant is usually advice or a recipe to follow to achieve a company objective,
            leading to a company project.

            More and more consulting firms are complementing the strategic deliverables by providing the means to
            implement the recommendations, either with the consultants themselves or by providing technicians and/or
            experts. This has opened up new markets for these companies. This is called outsourcing.

            Consulting services are part of the tertiary sector and account for several hundred billion dollars in
            annual revenues. Between 2010 and 2015, the 10 largest consulting firms alone made 170 billion dollars
            growth revenue and the average annual growth rate is around 4%.
        </p>
    </div>

</div>
<div class="row">
    <div class="col-md-6">
    </div>
    <div class="col-md-6">
        <br>
        @component('components.who')
        @endcomponent
    </div>
</div>

@endsection