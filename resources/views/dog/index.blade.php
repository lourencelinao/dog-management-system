@extends('layouts.app')

@section('content')
<!-- blue background -->
<div class="container-fluid bg-light" style="height: 135px;">
    <div class="container-fluid">
        <div class="d-flex align-items-baseline">
            <i class="fa fa-paw fa-2x" aria-hidden="true"></i><div class="pt-3 h3 ml-2"> Dogs</div>
            <div class="ml-auto pt-1"><button class="btn btn-primary">Add Dog</button></div>
        </div>
    </div>
    <!-- this is where the card starts -->
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header bg-white">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-current-tab" data-toggle="pill" href="#pills-current" role="tab" aria-controls="pills-current" aria-selected="false">Current</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-past-tab" data-toggle="pill" href="#pills-past" role="tab" aria-controls="pills-past" aria-selected="false">Past</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-pending-tab" data-toggle="pill" href="#pills-pending" role="tab" aria-controls="pills-pending" aria-selected="false">Pending</a>
                    </li>
                </ul>
            </div>
            <div class="card-body bg-light">
                <div class="tab-content" id="pills-tabContent">
                    <!-- active dog table-->
                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                        <!-- dynamically displayed --> <!-- can also make your own table code as long as it's efficient -->
                        <div class="d-flex justify-content-around align-items-center bg-white mb-3" style="height:75px; border-radius: 15px;">
                            <div>Picture</div>
                            <a href="/DogShow"><div>Maya</div></a>
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
                    <!-- current dog table-->
                    <div class="tab-pane fade" id="pills-current" role="tabpanel" aria-labelledby="pills-current-tab">
                        <div class="d-flex justify-content-around align-items-center bg-white" style="height:75px; border-radius: 15px;">
                            <div>Picture</div>
                            <a href=""><div>King Current</div></a>
                            <div>Samoyed</div>
                            <div>6969</div>
                            <div><button class="btn btn-light btn-sm"><i class="fa fa-ellipsis-h"></i></button></div>
                        </div>
                    </div>
                    <!-- past dog table-->
                    <div class="tab-pane fade" id="pills-past" role="tabpanel" aria-labelledby="pills-past-tab">
                        <div class="d-flex justify-content-around align-items-center bg-white" style="height:75px; border-radius: 15px;">
                            <div>Picture</div>
                            <a href=""><div>King Past</div></a>
                            <div>Samoyed</div>
                            <div>6969</div>
                            <div><button class="btn btn-light btn-sm"><i class="fa fa-ellipsis-h"></i></button></div>
                        </div>
                    </div>
                    <!-- pending dog table-->
                    <div class="tab-pane fade" id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab">
                        <div class="d-flex justify-content-around align-items-center bg-white" style="height:75px; border-radius: 15px;">
                            <div>Picture</div>
                            <a href=""><div>King Pending</div></a>
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