@extends('layouts.app')

@section('content')
<!-- blue background -->
<div class="container-fluid bg-light" style="height: 134px;">
    <div class="container-fluid">
        <div class="d-flex align-items-baseline">
            <i class="fa fa-user fa-2x"></i><div class="pt-3 h3 ml-2"><a href="/people" class="text-primary">People</a> / User Name</div> <!-- echo user name here -->
        </div>
    </div>
    <!-- this is where the card starts -->
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header bg-white">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-information-tab" data-toggle="pill" href="#pills-information" role="tab" aria-controls="pills-information" aria-selected="true">Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-adoption-tab" data-toggle="pill" href="#pills-adoption" role="tab" aria-controls="pills-adoption" aria-selected="false">Adoption History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-surrender-tab" data-toggle="pill" href="#pills-surrender" role="tab" aria-controls="pills-surrender" aria-selected="false">Surrender History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-applications-tab" data-toggle="pill" href="#pills-applications" role="tab" aria-controls="pills-applications" aria-selected="false">Applications</a>
                    </li>
                </ul>
            </div>
            <div class="card-body bg-light">
                <div class="tab-content" id="pills-tabContent">
                    <!-- active user table-->
                    <!--
                    <div class="tab-pane fade show active" id="pills-information" role="tabpanel" aria-labelledby="pills-information-tab">
                        <div class="d-flex justify-content-around align-items-center bg-white mb-3" style="height:75px; border-radius: 15px;">
                            <div>Picture</div>
                            <a href=""><div>Users</div></a>
                            <div>Samoyed</div>
                            <div>6969</div>
                            <div class="dropdown">
                                <button class="btn btn-light btn-sm " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection