@extends('layouts.master')

@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                <h3>HOME</h3>
            </div>
            <div class="box col-5">            
                <form action="" method="GET">
                    <div class="forSearch pull-right">
                        <span class="icon"><i class="fa fa-search fa-1x"></i></span>
                        <input type="text" name="cari" id="search" placeholder="search">                    
                    </div>                    
                </form>                
            </div>
            <div class="col-4">
                <div class="row pull-right mr-4">
                    <h6 class="mr-3">Nama User</h6>
                    <img src="{{ asset('img/Rectangle 40.png') }}" alt="">
                </div>
            </div>
        </div>


        <div class="row mt-5">
            <div class="col-3 pl-5 ml-5">
                <div class="card shadow border-0" id="infoData">
                    <div class="card-body">                        
                        <div class="row ">
                            <img src="{{ asset('img/mdi_history.png') }}" alt="">
                            <strong class="ml-2 text-warning">24</strong>
                            <div class="ml-2 text-warning">Finished Projects</div>
                        </div>
                    </div>
                </div>
            </div> 
            
            <div class="col-4">
                <div class="card shadow border-0" id="infoData">
                    <div class="card-body">
                        <div class="row pl-5 pr-5">
                            <img src="{{ asset('img/mdi_rocket.png') }}" alt="">
                            <strong class="ml-2 text-primary">2</strong>
                            <div class="ml-2 text-primary">On-Going Product</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card shadow border-0" id="infoData">
                    <div class="card-body">
                        <div class="row pl-5 pr-5">
                            <img src="{{ asset('img/mdi_account.png') }}" alt="">
                            <strong class="ml-2" id="employee">10</strong>
                            <div class="ml-2" id="employee">Employees</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection