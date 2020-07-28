@extends('layouts.app')

@section('content')
<!-- blue background -->
<div class="container-fluid" style="height: 141px; background-color: #1a75ff;">
    <div class="container-fluid">
        <div class="d-flex align-items-baseline">
            <div class="pt-3 h3 text-light">People</div>
            <div class="ml-auto pt-1"><button class="btn btn-light text-primary">Add Person</button></div>
        </div>
    </div>
    <!-- this is where the card starts -->
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header bg-white">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-users-tab" data-toggle="pill" href="#pills-users" role="tab" aria-controls="pills-users" aria-selected="true">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-people-tab" data-toggle="pill" href="#pills-people" role="tab" aria-controls="pills-people" aria-selected="false">People</a>
                    </li>
                </ul>
            </div>
            <div class="card-body bg-light">
                <div class="tab-content" id="pills-tabContent">
                    <!-- active application table-->
                    <div class="tab-pane fade show active" id="pills-users" role="tabpanel" aria-labelledby="pills-users-tab">
                        <!-- dynamically displayed --> <!-- can also make your own table code as long as it's efficient -->
                        <!-- users table --> <!--this is just a placeholder -->
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
                    <!-- people application table-->
                    <div class="tab-pane fade" id="pills-people" role="tabpanel" aria-labelledby="pills-people-tab">
                        <div class="d-flex justify-content-around align-items-center bg-white" style="height:75px; border-radius: 15px;">
                            <div>Picture</div>
                            <a href=""><div>People</div></a>
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