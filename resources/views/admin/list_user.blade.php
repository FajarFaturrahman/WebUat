@extends('layouts.master')

@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-3">
                <h4>USERS</h4>
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
                <a href="#/" class="p-2" id="addProject">
                    <img src="{{ asset('img/mdi_account-plus.png') }}" alt=""> Add User
                </a>
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
            <div class="col-md-12 bg-light mt-2">
                <div class="row mx-auto pb-2 pt-3">
                    <div class="col-md-1">
                        <img src="{{ asset('img/Rectangle 40.png') }}" alt="" class="pt-0">    
                    </div>
                    <div class="col-md-2">                                            
                        <p>Nama User</p>
                    </div>

                    <div class="col-md-3">
                        <p>email@gmail.com</p>
                    </div>

                    <div class="col-md-3">
                        <p>Jabatan</p>
                    </div>

                    <div class="col-md-3">
                        <div class="row pull-right">
                            <a href="#/" class="p-1 mr-4" id="user_edit">
                                <img src="{{ asset('img/mdi_account-edit.png') }}" alt="">
                            </a>

                            <a href="#/" class="p-1 mr-4" id="user_delete">
                                <img src="{{ asset('img/mdi_delete.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>                
            </div>

            <div class="col-md-12 bg-light mt-2">
                <div class="row mx-auto pb-2 pt-3">
                    <div class="col-md-1">
                        <img src="{{ asset('img/Rectangle 40.png') }}" alt="" class="pt-0">    
                    </div>
                    <div class="col-md-2">                                            
                        <p>Nama User</p>
                    </div>

                    <div class="col-md-3">
                        <p>email@gmail.com</p>
                    </div>

                    <div class="col-md-3">
                        <p>Jabatan</p>
                    </div>

                    <div class="col-md-3">
                        <div class="row pull-right">
                            <a href="#/" class="p-1 mr-4" id="user_edit">
                                <img src="{{ asset('img/mdi_account-edit.png') }}" alt="">
                            </a>

                            <a href="#/" class="p-1 mr-4" id="user_delete">
                                <img src="{{ asset('img/mdi_delete.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>                
            </div>

            <div class="col-md-12 bg-light mt-2">
                <div class="row mx-auto pb-2 pt-3">
                    <div class="col-md-1">
                        <img src="{{ asset('img/Rectangle 40.png') }}" alt="" class="pt-0">    
                    </div>
                    <div class="col-md-2">                                            
                        <p>Nama User</p>
                    </div>

                    <div class="col-md-3">
                        <p>email@gmail.com</p>
                    </div>

                    <div class="col-md-3">
                        <p>Jabatan</p>
                    </div>

                    <div class="col-md-3">
                        <div class="row pull-right">
                            <a href="#/" class="p-1 mr-4" id="user_edit">
                                <img src="{{ asset('img/mdi_account-edit.png') }}" alt="">
                            </a>

                            <a href="#/" class="p-1 mr-4" id="user_delete">
                                <img src="{{ asset('img/mdi_delete.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>                
            </div>

            <div class="col-md-12 bg-light mt-2">
                <div class="row mx-auto pb-2 pt-3">
                    <div class="col-md-1">
                        <img src="{{ asset('img/Rectangle 40.png') }}" alt="" class="pt-0">    
                    </div>
                    <div class="col-md-2">                                            
                        <p>Nama User</p>
                    </div>

                    <div class="col-md-3">
                        <p>email@gmail.com</p>
                    </div>

                    <div class="col-md-3">
                        <p>Jabatan</p>
                    </div>

                    <div class="col-md-3">
                        <div class="row pull-right">
                            <a href="#/" class="p-1 mr-4" id="user_edit">
                                <img src="{{ asset('img/mdi_account-edit.png') }}" alt="">
                            </a>

                            <a href="#/" class="p-1 mr-4" id="user_delete">
                                <img src="{{ asset('img/mdi_delete.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>                
            </div>

            <div class="col-md-12 bg-light mt-2">
                <div class="row mx-auto pb-2 pt-3">
                    <div class="col-md-1">
                        <img src="{{ asset('img/Rectangle 40.png') }}" alt="" class="pt-0">    
                    </div>
                    <div class="col-md-2">                                            
                        <p>Nama User</p>
                    </div>

                    <div class="col-md-3">
                        <p>email@gmail.com</p>
                    </div>

                    <div class="col-md-3">
                        <p>Jabatan</p>
                    </div>

                    <div class="col-md-3">
                        <div class="row pull-right">
                            <a href="#/" class="p-1 mr-4" id="user_edit">
                                <img src="{{ asset('img/mdi_account-edit.png') }}" alt="">
                            </a>

                            <a href="#/" class="p-1 mr-4" id="user_delete">
                                <img src="{{ asset('img/mdi_delete.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
@endsection