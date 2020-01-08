@extends('layouts.master')

@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8">
                <h4>SETTINGS</h4>
            </div>            
            <div class="col-md-4">
                <div class="row pull-right mr-4">
                    <h6 class="mr-3">Nama User</h6>
                    <img src="{{ asset('img/Rectangle 40.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-5">
                <div class="row p-3" id="judulEdit">
                    <div>
                        <h5>EDIT PROFILE</h5>
                    </div>
                    <div class="ml-3">
                        <img src="{{ asset('img/mdi_chevron-down-circle.png') }}" alt="">
                    </div>
                </div>

                <div class="row mt-5">
                    <h5>EDIT PROFILE PICTURE</h5>
                </div>

                <div class="row p-3 mt-3" id="judulEdit">
                    <div>
                        <h5>ACCOUNT</h5>
                    </div>
                    <div class="ml-3">
                        <img src="{{ asset('img/mdi_chevron-down-circle.png') }}" alt="">
                    </div>
                </div>

                <div class="row mt-3">
                    <h6>EDIT PASSWORD</h6>
                </div>

                <div class="row mt-5">                    
                    <input type="text" placeholder="New Password" class="form-control" id="inputText">

                    <input type="text" placeholder="Confirm Password" class="form-control mt-5" id="inputText">
                </div>
            </div>

            <div class="col-md-7 mt-3">
                <div class="row mt-5">
                    <h5 class="mt-5 ml-5">EDIT PROFILE NAME</h5>
                </div>

                <div class="row">
                    <div class="col-md-9">
                        <input type="text" placeholder="Confirm Password" class="form-control mt-5" id="inputText">
                    </div>
                    <div class="col-md-3">
                        <button class="mt-5 pl-3 pr-3" id="btn-save">SAVE</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection