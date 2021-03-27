        <!-- ata uporer relative, abosute position er part -->
        <div class="mb-3 special-top">

            <img src="/images/XOSS3.jpg" class="mt-5" style="width: 100%; height:190px;">
            <div class="content mt-5">

                <div class="row">
                    <div class="col-md-5">
                        <div>
                            <i class="fa fa-cube ml-5"></i> {{$farm->farmType}}
                        </div>
                    </div>

                    <div class="col-md-6">

                    </div>

                    <div class="col-md-1">
                        <div class="bg-success" style="padding: 1px; border-radius: 10%;">
                            <i class="fa fa-search ml-1"></i> | 100
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-10">
                        <div class="ml-5">
                            <h5> {{$farm->farmName}}</h5>
                            <li style="list-style: none;">
                                {!!$farm->farmContactInformation!!}
                            </li>
                        </div>

                        <div class="mt-4 ml-5">

                            <img src="/storage/farm_images/{{$farm->farmPhoto}}" style="width: 40px; height:40px; border-radius: 50%;">
                            <span class="ml-2"> {{$farm->farmManager}} </span>
                            <span class="ml-3">|</span>
                            <span class="ml-3">Updated 2 years ago (Version 2) </span>

                        </div>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
            </div>
        </div>

        <br>
        <nav class="navbar navbar-expand-lg navbar-light flex-column flex-md-row" style="background: #BCCED2;">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <span style="padding-right: 45px;"></span>
                    <li class="nav-item nav-data-item">
                        <a href="/researchIndiData" class="nav-link">
                            <h7>Data</h5>
                        </a>
                    </li>

                    <li class="nav-item nav-data-item">
                        <a href="#" class="nav-link">
                            <h7>Kernels(55) </h5>
                        </a>
                    </li>
                    <li class="nav-item nav-data-item">
                        <a href="#" class="nav-link">
                            <h7>Discussions(2)</h5>
                        </a>
                    </li>
                    <li class="nav-item nav-data-item">
                        <a href="#" class="nav-link">
                            <h7>Activity</h7>
                        </a>
                    </li>

                    <li class="nav-item nav-data-item">
                        <a href="/researchIndiMeta" class="nav-link">
                            <h7>Metadata</h7>
                        </a>
                    </li>


                    <span style="padding-right: 350px;"></span>
                    <li class="nav-item mt-1">
                        <a href="#" class="btn btn-sm btn-outline-secondary">
                            <h7 class="mt-1">Download(2MB)</h7>
                        </a>
                    </li>

                    <li class="nav-item mt-1 ml-1">
                        <a href="#" class="btn btn-sm btn-success">
                            <h7 class="mt-1">New Notebook</h7>
                        </a>
                    </li>
                </ul>

            </div>
            <hr>

        </nav>

        <br>

        <!-- description, end ses -->