@extends('layouts.app')

@section('content')
<!-- blue background -->
<div class="container-fluid bg-light" style="height: 134px;">
    <div class="container-fluid">
        <div class="d-flex align-items-baseline">
            <i class="fa fa-file fa-lg"></i><div class="pt-3 h3 ml-2">Applications</div>
        </div>
    </div>
    <!-- this is where the card starts -->
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header bg-white">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-adoption-tab" data-toggle="pill" href="#pills-adoption" role="tab" aria-controls="pills-adoption" aria-selected="true">Adoption</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-surrender-tab" data-toggle="pill" href="#pills-surrender" role="tab" aria-controls="pills-surrender" aria-selected="false">Surrender</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-volunteer-tab" data-toggle="pill" href="#pills-volunteer" role="tab" aria-controls="pills-volunteer" aria-selected="false">Volunteer</a>
                    </li>
                </ul>
            </div>
            <div class="card-body bg-light">
                <div class="tab-content" id="pills-tabContent">
                    <!-- active application table-->
                    <div class="tab-pane fade show active" id="pills-adoption" role="tabpanel" aria-labelledby="pills-adoption-tab">
                        <!-- dynamically displayed --> <!-- can also make your own table code as long as it's efficient -->
                        <!-- adoption application table -->
                        <div class="d-flex justify-content-around align-items-center bg-white mb-3" style="height:75px; border-radius: 15px;">
                            <div>Picture</div>
                            <a href=""><div>Adoption</div></a>
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
                    <!-- surrender application table-->
                    <div class="tab-pane fade" id="pills-surrender" role="tabpanel" aria-labelledby="pills-surrender-tab">
                        <div class="d-flex justify-content-around align-items-center bg-white" style="height:75px; border-radius: 15px;">
                            <div>Picture</div>
                            <a href=""><div>Surrender</div></a>
                            <div>Samoyed</div>
                            <div>6969</div>
                            <div><button class="btn btn-light btn-sm"><i class="fa fa-ellipsis-h"></i></button></div>
                        </div>
                    </div>
                    <!-- volunteer application table-->
                    <div class="tab-pane fade" id="pills-volunteer" role="tabpanel" aria-labelledby="pills-volunteer-tab">
                        <div class="d-flex justify-content-around align-items-center bg-white" style="height:75px; border-radius: 15px;">
                            <div>Picture</div>
                            <a href=""><div>Volunteer</div></a>
                            <div>Samoyed</div>
                            <div>6969</div>
                            <div><button class="btn btn-light btn-sm"><i class="fa fa-ellipsis-h"></i></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection