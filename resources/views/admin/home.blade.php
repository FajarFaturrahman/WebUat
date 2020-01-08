@extends('layouts.master')

@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-3">
                <h4>HOME</h4>
            </div>
            <div class="box col-md-5">            
                <form action="" method="GET">
                    <div class="forSearch pull-right">
                        <span class="icon"><i class="fa fa-search fa-1x"></i></span>
                        <input type="text" name="cari" id="search" placeholder="search">                    
                    </div>                    
                </form>                
            </div>
            <div class="col-md-4">
                <div class="row pull-right mr-4">
                    <h6 class="mr-3">Nama User</h6>
                    <img src="{{ asset('img/Rectangle 40.png') }}" alt="">
                </div>
            </div>
        </div>


        <div class="row mt-5 justify-content-center">
            <div class="col-md-3">
                <div class="card shadow border-0" id="infoData">
                    <div class="card-body">                        
                        <div class="row justify-content-center">
                            <img src="{{ asset('img/mdi_history.png') }}" alt="">
                            <strong class="ml-2 text-warning">24</strong>
                            <div class="ml-2 text-warning">Finished Projects</div>
                        </div>
                    </div>
                </div>
            </div> 
            
            <div class="col-md-4">
                <div class="card shadow border-0" id="infoData">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <img src="{{ asset('img/mdi_rocket.png') }}" alt="">
                            <strong class="ml-2 text-primary">2</strong>
                            <div class="ml-2 text-primary">On-Going Product</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow border-0" id="infoData">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <img src="{{ asset('img/mdi_account.png') }}" alt="">
                            <strong class="ml-2" id="employee">10</strong>
                            <div class="ml-2" id="employee">Employees</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 mt-5">
                <h4>Recent Project</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card rounded-lg project-card">
                    <div class="card-body pb-0 pt-2">
                        <div class="row">
                            <img src="{{ asset('img/white/rocket-white.png') }}" alt="">
                            <strong class="ml-2">Project A</strong>
                            <div class="ml-2">| Company A</div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-9">
                                <p>11-10-2019</p>
                            </div>

                            <div class="col-md-3">
                                <div class="row">
                                    <img src="{{ asset('img/white/check-white.png') }}" alt="">                                    
                                    <div>10/40</div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card rounded-lg project-card">
                    <div class="card-body  pb-0 pt-2">
                        <div class="row">
                            <img src="{{ asset('img/white/rocket-white.png') }}" alt="">
                            <strong class="ml-2">Project A</strong>
                            <div class="ml-2">| Company A</div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-9">
                                <p>11-10-2019</p>
                            </div>

                            <div class="col-md-3">
                                <div class="row">
                                    <img src="{{ asset('img/white/check-white.png') }}" alt="">                                    
                                    <div>10/40</div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card rounded-lg project-card">
                    <div class="card-body  pb-0 pt-2">
                        <div class="row">
                            <img src="{{ asset('img/white/rocket-white.png') }}" alt="">
                            <strong class="ml-2">Project A</strong>
                            <div class="ml-2">| Company A</div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-9">
                                <p>11-10-2019</p>
                            </div>

                            <div class="col-md-3">
                                <div class="row">
                                    <img src="{{ asset('img//white/check-white.png') }}" alt="">                                    
                                    <div>10/40</div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection