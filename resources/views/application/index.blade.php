@extends('layouts.app')

@section('title', 'Application')
@section('content')
<!-- green background -->
<div class="container-fluid custom-background-color" style="height: 100px;">
    <div class="container pt-3">
        <div class="d-flex align-items-center">
            <i class="fa fa-file fa-lg text-white pt-2" aria-hidden="true"></i><div class="pt-3 h3 ml-2 text-white">Application</div>
            <!--<div class="ml-auto pt-1"><button class="btn btn-light custom-text-color" data-toggle="modal" data-target="#addDogModal">Create Application</button></div> -->
        </div>
    </div>
</div>

<!-- nav-pills -->
<div class="pt-2 bg-white shadow-sm" >
    <div class="container">
        <nav class="navbar-light" id="navbar_light2">
            <ul class="nav" id="pills-tab" role="tablist">
                <li class="nav-item active">
                    <a class="nav-link text-dark" id="pills-adoption-tab" data-toggle="pill" href="#pills-adoption" role="tab" aria-controls="pills-adoption" aria-selected="true">Adoption</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="pills-surrender-tab" data-toggle="pill" href="#pills-surrender" role="tab" aria-controls="pills-surrender" aria-selected="false">Surrender</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="pills-volunteer-tab" data-toggle="pill" href="#pills-volunteer" role="tab" aria-controls="pills-volunteer" aria-selected="false">Volunteer</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- search bar -->
<div class="container mt-3 d-flex">
    <div class="mr-auto form-group">
        <input type="text" placeholder="Search" class="form-control shadow-sm" style="border-radius: 5px;">
    </div>
    <div class="mr">
        <div class="dropdown">
            <button class="btn btn-light bg-white shadow-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Filter
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Open</a>
                <a class="dropdown-item" href="#">Closed</a>
            </div>
        </div>
    </div>
</div>

<!-- might put this in partials/applications -->
<div class="container">
    <!-- data -->
    <div class="tab-content" id="pills-tabContent">
        <!-- adoption application table-->
        <div class="tab-pane fade show active bg-light" id="pills-adoption" role="tabpanel" aria-labelledby="pills-adoption-tab">
            <div class="d-flex justify-content-center align-items-center bg-white mb-3 shadow-sm" style="transform: rotate(0); height:75px; border-radius: 15px; ">              
                <a href="/applications/ApplicationShow" class="stretched-link"></a>
                <div class="col-3">
                    <div class="h3 custom-text-color text-center">James Charles</div>
                </div>
                <div class="col-3">
                    <div class="text-center">Maya</div>
                </div>
                <div class="col-3">
                    <div class="text-center">jamescharles@gmail.com</div>
                </div>
                <div class="col-3">
                    <div class="text-center">09521453651</div>
                </div>
            </div> 
        </div>

        <div class="tab-pane fade show bg-light" id="pills-surrender" role="tabpanel" aria-labelledby="pills-surrender-tab">
            <div class="d-flex justify-content-center align-items-center bg-white mb-3 shadow-sm" style="height:75px; border-radius: 15px; transform: rotate(0);">
                <a href="/applications/ApplicationShow" class="stretched-link"></a>
                <div class="col-3">
                    <div class="h3 custom-text-color text-center">Logan Paul</div>
                </div>
                <div class="col-3">
                    <div class="text-center">King George</div>
                </div>
                <div class="col-3">
                    <div class="text-center">loganpaul@gmail.com</div>
                </div>
                <div class="col-3">
                    <div class="text-center">09632147852</div>
                </div>
            </div> 
        </div>

        <div class="tab-pane fade show bg-light" id="pills-volunteer" role="tabpanel" aria-labelledby="pills-volunteer-tab">
            <div class="d-flex justify-content-center align-items-center bg-white mb-3 shadow-sm" style="height:75px; border-radius: 15px; transform: rotate(0);">
                <a href="/applications/ApplicationShow" class="stretched-link"></a>
                <div class="col-3">
                    <div class="h3 custom-text-color text-center">Logan Paul</div>
                </div>
                <div class="col-3">
                    <div class="text-center">Cebu</div>
                </div>
                <div class="col-3">
                    <div class="text-center">loganpaul@gmail.com</div>
                </div>
                <div class="col-3">
                    <div class="text-center">09632147852</div>
                </div>
            </div> 
        </div>

    </div>
</div>
@endsection