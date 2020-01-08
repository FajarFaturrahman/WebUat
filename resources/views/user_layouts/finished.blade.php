@extends('layouts.master_user')

@section('content')
    <div class="container mt-5" style="width: 80%;">
        <div class="row">
            <div class="col-5">
                <form action="" method="GET">
                    <div class="forSearch pull-left">
                        <span class="icon"><i class="fa fa-search fa-1x"></i></span>
                        <input type="text" name="cari" id="search" placeholder="search">                    
                    </div>                    
                </form>   
            </div>
            <div class="col-7">
                <div class="row pull-right mr-1">
                    <a href="#/" class="p-1" id="filter">
                        <img src="{{ asset('img/mdi_filter.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-6 mt-4">
                <div class="card border-0 project-card2">
                    <div class="card-body pb-0 pt-2">
                        <div class="row">
                            <img src="{{ asset('img/white/rocket-white.png') }}" alt="">
                            <strong class="ml-2 text text-white">Project A</strong>
                            <div class="ml-2 text text-white">| Company A</div>
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
            <div class="col-6 mt-4">
                <div class="card border-0 project-card2">
                    <div class="card-body pb-0 pt-2">
                        <div class="row">
                            <img src="{{ asset('img/white/rocket-white.png') }}" alt="">
                            <strong class="ml-2 text text-white">Project A</strong>
                            <div class="ml-2 text text-white">| Company A</div>
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
            <div class="col-6 mt-4">
                <div class="card border-0 project-card2">
                    <div class="card-body pb-0 pt-2">
                        <div class="row">
                            <img src="{{ asset('img/white/rocket-white.png') }}" alt="">
                            <strong class="ml-2 text text-white">Project A</strong>
                            <div class="ml-2 text text-white">| Company A</div>
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
            <div class="col-6 mt-4">
                <div class="card border-0 project-card2">
                    <div class="card-body pb-0 pt-2">
                        <div class="row">
                            <img src="{{ asset('img/white/rocket-white.png') }}" alt="">
                            <strong class="ml-2 text text-white">Project A</strong>
                            <div class="ml-2 text text-white">| Company A</div>
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
            <div class="col-6 mt-4">
                <div class="card border-0 project-card2">
                    <div class="card-body pb-0 pt-2">
                        <div class="row">
                            <img src="{{ asset('img/white/rocket-white.png') }}" alt="">
                            <strong class="ml-2 text text-white">Project A</strong>
                            <div class="ml-2 text text-white">| Company A</div>
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
            <div class="col-6 mt-4">
                <div class="card border-0 project-card2">
                    <div class="card-body pb-0 pt-2">
                        <div class="row">
                            <img src="{{ asset('img/white/rocket-white.png') }}" alt="">
                            <strong class="ml-2 text text-white">Project A</strong>
                            <div class="ml-2 text text-white">| Company A</div>
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
        </div>
    </div>
@endsection