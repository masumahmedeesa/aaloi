@extends('layouts.mainLayout')

@section('insideHead')
<style>
    .special-top {
        position: relative;
        height: 200px;
        margin: 0 auto;
    }

    .special-top .content {
        position: absolute;
        top: 0px;
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.5);
        color: #f1f1f1;
        width: 100%;
        height: 190px;
        padding: 20px;
    }

    .nav-data-item:hover {
        color: red;
        border-bottom-style: solid;
    }
</style>
@endsection


@section('system')

<div class="container">
    @include('farms.farmNavbar')
    <div class="border" style="background: #ffffff;">
        <div class="row">
            <div class="col-md-2 mt-2 mb-2">
                <span style="padding-right: 65px;"></span>
                <a>Usability</a>
            </div>
            <div class="col-md-6 mt-2 mb-2">
                <a class="ml-5">
                    License | Others (Specific in Description)
                </a>
            </div>
            <div class="col-md-4 mt-2 mb-2">
                Tags, Linguistics, Language
            </div>
        </div>
    </div>

    <br>
    <div class="border" style="background: #ffffff;">

        <div class="mt-3 mb-2">
            <span style="padding-left: 65px;"></span>
            <a style="color: gray;">Description</a>
        </div>
        <hr>

        <div class="mt-3 mb-3">

            <div class="row">
                <!-- <div class="col-md-1">

                    </div> -->
                <div class="col-md-12" style="padding-left: 80px;">

                    <h1>What is in the Deep-NLP Learning?</h1>
                    <p>
                        Sheet_1.csv contains 80 user responses, in the response_text column, to a therapy chatbot.
                        Bot said: 'Describe a time when you have acted as a resource for someone else'. User
                        responded. If a response is 'not flagged', the user can continue talking to the bot. If it
                        is 'flagged', the user is referred to help.
                    </p>

                    <p>
                        Sheet_2.csv contains 125 resumes, in the resume_text column. Resumes were queried from
                        Indeed.com with keyword 'data scientist', location 'Vermont'. If a resume is 'not flagged',
                        the applicant can submit a modified resume version at a later date. If it is 'flagged', the
                        applicant is invited to interview.
                    </p>

                    <pre class="prettyprint">

                                            #include.header
                                            using namespace std;
                                            int main(){
                                              cout<<"Hello World/n";
                                            }
                                </pre>
                </div>
            </div>


        </div>
        <hr>
        <div class="mt-2 mb-3">
            <span style="padding-left: 65px;"></span>
            <a style="color: gray;">END</a>
        </div>
    </div>
    <!-- description,end ses -->

    <!-- ata data, data sources -->
    <br>
    <div class="border" style="background: #ffffff;">
        <div style="padding: 12px;" class="border-bottom">
            <span style="padding-left: 52px;"></span>
            <a style="color: gray;">DATA(5MB)</a>
            <br>
        </div>

        <div class="row">
            <div class="col-md-5 border-right" style="padding-left: 80px;">
                <h6 class="mt-2">Data Sources</h6>

                <table class="table table-borderless">
                    <tr>
                        <td>
                            <a href="#" style="text-decoration: none;">
                                | Sheet_1.csv
                            </a>
                        </td>
                        <td>
                            80
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" style="text-decoration: none;">
                                | Sheet_2.csv
                            </a>
                        </td>
                        <td>
                            120
                        </td>
                    </tr>
                </table>
            </div>


            <div class="col-md-3 border-right" style="padding-left: 80px;">
                <h6 class="mt-2">About these files</h6>
                <li style="list-style: none">Something?</li>
            </div>

            <div class="col-md-4" style="padding-left: 80px;">
                <h6 class="mt-2"> Columons </h6>
                <li style="list-style: decimal;">
                    response_id
                </li>
                <li style="list-style: decimal;">
                    class
                </li>
                <li style="list-style: decimal;">
                    response_text
                </li>
            </div>

        </div>
    </div>
    <br>
</div>
@endsection