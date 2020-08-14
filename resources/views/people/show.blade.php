@extends('layouts.app')

@section('title', 'People')
@section('content')
<!-- green background -->
<div class="container-fluid custom-background-color" style="height: 100px;">
    <div class="container pt-3">
        <div class="d-flex align-items-center">
            <div class="pt-3 h3 ml-2 text-white">James Charles</div>
        </div>
    </div>
</div>

<!-- nav-pills -->
<div class="pt-2 bg-white shadow-sm" >
    <div class="container">
        <nav class="navbar-light" id="navbar_light2">
            <ul class="nav" id="pills-tab" role="tablist">
                <li class="nav-item active">
                    <a class="nav-link text-dark" id="pills-information-tab" data-toggle="pill" href="#pills-information" role="tab" aria-controls="pills-information" aria-selected="true">Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="pills-adoptionHistory-tab" data-toggle="pill" href="#pills-adoptionHistory" role="tab" aria-controls="pills-adoptionHistory" aria-selected="false">Adoption History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="pills-applicationHistory-tab" data-toggle="pill" href="#pills-applicationHistory" role="tab" aria-controls="pills-applicationHistory" aria-selected="false">Application History</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- person profile -->
<div class="container-fluid">
    <div class="container mt-3">
        <div class="tab-content" id="pills-tabcontent">
            <!-- active profile pill-->
            <div class="tab-pane fade show active" id="pills-information" role="tabpanel" aria-labelledby="pills-information-tab">
                <div class="container pt-4 shadow bg-white" style="border-radius: 10px;"> 

                    <div class="row">
                        <div class="col-sm">
                            <div class="font-weight-bold custom-text-color h6">First Name</div>
                            <div class="h2">James</div>
                            <div class="font-weight-bold custom-text-color h6">Sex</div>
                            <div class="h2">Non-existent</div>
                            <div class="font-weight-bold custom-text-color h6">Contact Number</div>
                            <div class="h2">134567890</div>
                            <div class="font-weight-bold custom-text-color h6">Address</div>
                            <div class="h2">Cebu</div>

                        </div>
                        <div class="col-sm">
                            <div class="font-weight-bold custom-text-color h6">Last Name</div>
                            <div class="h2">Charles</div>
                            <div class="font-weight-bold custom-text-color h6">Date of Birth</div>
                            <div class="h2">400 BC</div>
                            <div class="font-weight-bold custom-text-color h6">Email</div>
                            <div class="h2">jamescharles@gmail.com</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- active adoptionHistory pill -->
            <div class="tab-pane fade show" id="pills-adoptionHistory" role="tabpanel" aria-labelledby="pills-adoptionHistory-tab">
                
                <div class="d-flex justify-content-center align-items-center bg-white mb-3 shadow-sm" style="transform: rotate(0); height:75px; border-radius: 15px;">
                    <a href="/dogs/DogShow" class="stretched-link"></a>
                    <div class="col">
                        <div class="text-center">1</div>
                    </div>
                    <div class="col mx-auto">
                        <div class="custom-text-color h3 text-center">Maya</div>
                    </div>
                    <div class="col">
                        <div class="text-center">Samoyed</div>
                    </div>
                    <div class="col">
                        <div class="text-center">Adopted</div>
                    </div>
                </div>

                <div class="d-flex justify-content-center align-items-center bg-white mb-3 shadow-sm" style="transform: rotate(0); height:75px; border-radius: 15px;">
                    <a href="/dogs/DogShow" class="stretched-link"></a>
                    <div class="col">
                        <div class="text-center">10</div>
                    </div>
                    <div class="col mx-auto">
                        <div class="custom-text-color h3 text-center">King George</div>
                    </div>
                    <div class="col">
                        <div class="text-center">German Shepherd</div>
                    </div>
                    <div class="col">
                        <div class="text-center">Adopted</div>
                    </div>
                </div>

            </div>

            <div class="tab-pane fade show" id="pills-applicationHistory" role="tabpanel" aria-labelledby="pills-applicationHistory-tab">
                
                <div class="d-flex justify-content-center align-items-center bg-white mb-3 shadow-sm" style="transform: rotate(0); height:75px; border-radius: 15px;">              
                    <a href="" class="stretched-link"></a>
                    <div class="col-3">
                        <div class="h3 custom-text-color text-center">Adoption</div>
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

                <div class="d-flex justify-content-center align-items-center bg-white mb-3 shadow-sm" style="transform: rotate(0); height:75px; border-radius: 15px;">              
                <a href="" class="stretched-link"></a>
                <div class="col-3">
                    <div class="h3 custom-text-color text-center">Volunteer</div>
                </div>
                <div class="col-3">
                    <div class="text-center">Cebu</div>
                </div>
                <div class="col-3">
                    <div class="text-center">jamescharles@gmail.com</div>
                </div>
                <div class="col-3">
                    <div class="text-center">09521453651</div>
                </div>
            </div> 

            </div>


        </div>
    </div>
</div>



<!-- fixed bottom nav -->
<x-fixed_bottom_nav route="/people" /> <!-- {{ url()->previous() }} -->
@endsection