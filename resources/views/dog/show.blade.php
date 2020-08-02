@extends('layouts.app')

@section('content')
<!-- blue background -->
<div class="container-fluid bg-light" style="height: 135px;">
    <div class="container-fluid">
        <div class="d-flex align-items-baseline">
            <i class="fa fa-paw fa-2x" aria-hidden="true"></i><div class="pt-3 h3 ml-2"><a href="/dogs" class="text-primary">Dogs</a> / Maya</div> 
        </div>
    </div>
    <!-- this is where the card starts -->
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header bg-white">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-info-tab" data-toggle="pill" href="#pills-info" role="tab" aria-controls="pills-info" aria-selected="true">Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-medical-tab" data-toggle="pill" href="#pills-medical" role="tab" aria-controls="pills-medical" aria-selected="false">Medical</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-acq/outcome-tab" data-toggle="pill" href="#pills-acq/outcome" role="tab" aria-controls="pills-acq/outcome" aria-selected="false">Acquisition/Outcome</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="pills-tabContent">
                    <!-- active dog table-->
                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                        <!-- dynamically displayed --> <!-- can also make your own table code as long as it's efficient -->
                        <!--
                        <div class="d-flex justify-content-around align-items-center bg-light mb-3" style="height:75px; border-radius: 15px;">
                            <div>Picture</div>
                            <a href=""><div>Maya</div></a>
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
                        -->
                    </div>
                    <!--
                    <div class="tab-pane fade" id="pills-current" role="tabpanel" aria-labelledby="pills-current-tab">
                        <div class="d-flex justify-content-around align-items-center bg-white" style="height:75px; border-radius: 15px;">
                            <div>Picture</div>
                            <a href=""><div>King Current</div></a>
                            <div>Samoyed</div>
                            <div>6969</div>
                            <div><button class="btn btn-light btn-sm"><i class="fa fa-ellipsis-h"></i></button></div>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection