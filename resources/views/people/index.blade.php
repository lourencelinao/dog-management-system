@extends('layouts.app')

@section('title', 'People')
@section('content')
<!-- green background -->
<div class="container-fluid custom-background-color" style="height: 100px;">
    <div class="container pt-3">
        <div class="d-flex align-items-center">
            <i class="fa fa-user fa-2x fa-lg text-white pt-2" aria-hidden="true"></i><div class="pt-3 h3 ml-2 text-white">People</div>
            <div class="ml-auto pt-1"><button class="btn btn-light custom-text-color" data-toggle="modal" data-target="#addDogModal">Create A Person</button></div>
        </div>
    </div>
</div>

<div class="modal fade shadow" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="addDogModal">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="">
            <div class="modal-body">
                <div class="form-group row justify-content-center">
                    <x-dog.dog_input target="firstname" label="First Name" type="text" />
                    <x-dog.dog_input target="lasttname" label="Last Name" type="text" />
                    <x-dog.dog_input target="contact" label="Contact Number" type="number" />
                    <x-dog.dog_input target="email" label="Email" type="email" />
                    <x-dog.dog_input target="dob" label="Date of Birth" type="date" />
                    <div class="col-md-5">
                        <label for="sex" class="col-form-label custom-text-color">Sex</label>
                        <select class="form-control bg-light @error('email') is-invalid @enderror" id='sex' name='sex'>
                            <option value='Male'>Male</option>
                            <option value='Female'>Female</option>
                        </select>
                        @error('{{ sex }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <x-dog.dog_input target="address1" label="Address 1" type="text" />
                    <x-dog.dog_input target="address2" label="Address 2" type="text" />
                    <x-dog.dog_input target="city" label="City" type="text" />
                    <x-dog.dog_input target="province" label="Province" type="text" />
                    <x-dog.dog_input target="zip_code" label="Zip Code" type="number" />
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn bg-white custom-text-color" data-dismiss="modal" style="border: 1px solid #41B3A3;">Close</button>
                <button type="submit" class="btn text-white custom-background-color">Save</button>
            </div>

        </form>

    </div>
  </div>
</div>

<!-- nav-pills -->
<div class="pt-2 bg-white shadow-sm" >
    <div class="container">
        <nav class="navbar-light" id="navbar_light2">
            <ul class="nav" id="pills-tab" role="tablist">
                <li class="nav-item active">
                    <a class="nav-link text-dark" id="pills-users-tab" data-toggle="pill" href="#pills-users" role="tab" aria-controls="pills-users" aria-selected="true">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="pills-people-tab" data-toggle="pill" href="#pills-people" role="tab" aria-controls="pills-people" aria-selected="false">People</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- search bar and filter -->
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
                <a class="dropdown-item" href="#">Test</a>
                <a class="dropdown-item" href="#">Test</a>
            </div>
        </div>
    </div>
</div>


<!-- might put this in partials/people -->
<div class="container mt-3">
    <!-- data -->
    <div class="tab-content" id="pills-tabContent">
        <!-- user table--> <!-- image must be limited to 1280 x 720 -->
        <div class="tab-pane fade show active bg-light" id="pills-users" role="tabpanel" aria-labelledby="pills-users-tab">
            <div class="row justify-content-between">
                <div class="col-4 mb-3">
                    <div class="card">
                        <img class="card-img-top rounded" src="{{ asset('img/snoopdogg.jpg') }}" alt="">
                        <div class="card-body">
                            <p class="card-text h3">Lourence Linao</p>
                            <p class="card-text h6">Admin</p>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-3">
                    <div class="card" >
                        <img class="card-img-top" src="{{ asset('img/joji.jpg') }}" alt="">
                        <div class="card-body">
                            <p class="card-text h3">Jamiel Catalan</p>
                            <p class="card-text h6">Admin</p>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-3">
                    <div class="card" >
                        <img class="card-img-top" src="{{ asset('img/damulag.png') }}"  alt="">
                        <div class="card-body">
                            <p class="card-text h3">Robert Tiempo</p>
                            <p class="card-text h6">Admin</p>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-3">
                    <div class="card" >
                        <img class="card-img-top" src="{{ asset('img/stephenmerchan.jpg') }}"  alt="">
                        <div class="card-body">
                            <p class="card-text h3">Cloyd Anis</p>
                            <p class="card-text h6">Admin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- people -->
        <div class="tab-pane fade show bg-light" id="pills-people" role="tabpanel" aria-labelledby="pills-people-tab">
            <div class="d-flex justify-content-center align-items-center bg-white mb-3 shadow-sm" style="transform: rotate(0); height:75px; border-radius: 15px;">              
                <a href="/people/PeopleShow" class="stretched-link"></a>
                <div class="col-3">
                    <div class="h3 custom-text-color text-center">James Charles</div>
                </div>
                <div class="col-3">
                    <div class="text-center">Cebu City</div>
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
@endsection