@extends('layouts.master')

@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-3">
                <h4>FINISHED PROJECTS</h4>
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

        <div class="row mt-5">
            <div class="col-md-8 mt-5">

            </div>

            <div class="col-md-4 mt-5">
                <div class="row pull-right">
                    <a href="#/" class="p-1 mr-4" id="filter">
                        <img src="{{ asset('img/mdi_filter.png') }}" alt="">
                    </a>

                    <a href="#/" class="p-1 mr-4" id="dots">
                        <img src="{{ asset('img/mdi_dots-vertical.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col-md-4 mt-2">
                <div class="card rounded-lg bg-light">
                    <div class="card-body  pb-0 pt-2">
                        <div class="row">
                            <img src="{{ asset('img/mdi_rocket.png') }}" alt="">
                            <strong class="ml-2 text-primary">Project A</strong>
                            <div class="ml-2 text-primary">| Company A</div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-9">
                                <p>11-10-2019</p>
                            </div>

                            <div class="col-md-3">
                                <div class="row">
                                    <img src="{{ asset('img/mdi_check-bold.png') }}" alt="">                                    
                                    <div>10/40</div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-2">
                <div class="card rounded-lg bg-light">
                    <div class="card-body  pb-0 pt-2">
                        <div class="row">
                            <img src="{{ asset('img/mdi_rocket.png') }}" alt="">
                            <strong class="ml-2 text-primary">Project A</strong>
                            <div class="ml-2 text-primary">| Company A</div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-9">
                                <p>11-10-2019</p>
                            </div>

                            <div class="col-md-3">
                                <div class="row">
                                    <img src="{{ asset('img/mdi_check-bold.png') }}" alt="">                                    
                                    <div>10/40</div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-2">
                <div class="card rounded-lg bg-light">
                    <div class="card-body  pb-0 pt-2">
                        <div class="row">
                            <img src="{{ asset('img/mdi_rocket.png') }}" alt="">
                            <strong class="ml-2 text-primary">Project A</strong>
                            <div class="ml-2 text-primary">| Company A</div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-9">
                                <p>11-10-2019</p>
                            </div>

                            <div class="col-md-3">
                                <div class="row">
                                    <img src="{{ asset('img/mdi_check-bold.png') }}" alt="">                                    
                                    <div>10/40</div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-2">
                <div class="card rounded-lg bg-light">
                    <div class="card-body  pb-0 pt-2">
                        <div class="row">
                            <img src="{{ asset('img/mdi_rocket.png') }}" alt="">
                            <strong class="ml-2 text-primary">Project A</strong>
                            <div class="ml-2 text-primary">| Company A</div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-9">
                                <p>11-10-2019</p>
                            </div>

                            <div class="col-md-3">
                                <div class="row">
                                    <img src="{{ asset('img/mdi_check-bold.png') }}" alt="">                                    
                                    <div>10/40</div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-2">
                <div class="card rounded-lg bg-light">
                    <div class="card-body  pb-0 pt-2">
                        <div class="row">
                            <img src="{{ asset('img/mdi_rocket.png') }}" alt="">
                            <strong class="ml-2 text-primary">Project A</strong>
                            <div class="ml-2 text-primary">| Company A</div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-9">
                                <p>11-10-2019</p>
                            </div>

                            <div class="col-md-3">
                                <div class="row">
                                    <img src="{{ asset('img/mdi_check-bold.png') }}" alt="">                                    
                                    <div>10/40</div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-2">
                <div class="card rounded-lg bg-light">
                    <div class="card-body  pb-0 pt-2">
                        <div class="row">
                            <img src="{{ asset('img/mdi_rocket.png') }}" alt="">
                            <strong class="ml-2 text-primary">Project A</strong>
                            <div class="ml-2 text-primary">| Company A</div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-9">
                                <p>11-10-2019</p>
                            </div>

                            <div class="col-md-3">
                                <div class="row">
                                    <img src="{{ asset('img/mdi_check-bold.png') }}" alt="">                                    
                                    <div>10/40</div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-2">
                <div class="card rounded-lg bg-light">
                    <div class="card-body  pb-0 pt-2">
                        <div class="row">
                            <img src="{{ asset('img/mdi_rocket.png') }}" alt="">
                            <strong class="ml-2 text-primary">Project A</strong>
                            <div class="ml-2 text-primary">| Company A</div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-9">
                                <p>11-10-2019</p>
                            </div>

                            <div class="col-md-3">
                                <div class="row">
                                    <img src="{{ asset('img/mdi_check-bold.png') }}" alt="">                                    
                                    <div>10/40</div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-2">
                <div class="card rounded-lg bg-light">
                    <div class="card-body  pb-0 pt-2">
                        <div class="row">
                            <img src="{{ asset('img/mdi_rocket.png') }}" alt="">
                            <strong class="ml-2 text-primary">Project A</strong>
                            <div class="ml-2 text-primary">| Company A</div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-9">
                                <p>11-10-2019</p>
                            </div>

                            <div class="col-md-3">
                                <div class="row">
                                    <img src="{{ asset('img/mdi_check-bold.png') }}" alt="">                                    
                                    <div>10/40</div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-2">
                <div class="card rounded-lg bg-light">
                    <div class="card-body  pb-0 pt-2">
                        <div class="row">
                            <img src="{{ asset('img/mdi_rocket.png') }}" alt="">
                            <strong class="ml-2 text-primary">Project A</strong>
                            <div class="ml-2 text-primary">| Company A</div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-9">
                                <p>11-10-2019</p>
                            </div>

                            <div class="col-md-3">
                                <div class="row">
                                    <img src="{{ asset('img/mdi_check-bold.png') }}" alt="">                                    
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