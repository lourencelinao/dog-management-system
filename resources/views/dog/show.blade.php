@extends('layouts.app')

@section('title', 'Dog Profile')

@section('content')
<div class="container-fluid custom-background-color" style="height: 250px;">
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <!-- should be a link to an album/pics of the dog -->
                <img class="mx-auto d-block rounded-circle" src="{{ asset('img/maya1.jpg') }}" >
            </div>
        </div>
    </div>
</div>

<!-- nav pills -->
<div class="pl-3 pt-2 bg-white shadow-sm">
    <div class="container">
        <nav class="navbar-light" id="navbar_light2">
            <ul class="nav" id="pills-tab" role="tablist">
                <li class="nav-item active">
                    <a class="nav-link text-dark" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="true">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="pills-medical-tab" data-toggle="pill" href="#pills-medical" role="tab" aria-controls="pills-medical" aria-selected="false">Medical Record</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="pills-intake-tab" data-toggle="pill" href="#pills-intake" role="tab" aria-controls="pills-intake" aria-selected="false">Intake/Outcome</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="pills-application-tab" data-toggle="pill" href="#pills-application" role="tab" aria-controls="pills-application" aria-selected="false">Application</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- dog-profile-data -->
<div class="container-fluid">
    <div class="container mt-3">
        <div class="tab-content" id="pills-tabcontent">
            <!-- active profile pill-->
            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="container pt-4 shadow bg-white" style="border-radius: 10px;"> 

                    <div class="row">
                        <div class="col-sm">
                            <div class="font-weight-bold custom-text-color h6">Name</div>
                            <div class="h2">Maya</div>
                            <div class="font-weight-bold custom-text-color h6">Breed</div>
                            <div class="h2">Samoyed</div>
                            <div class="font-weight-bold custom-text-color h6">Date of Birth</div>
                            <div class="h2">4/20/69</div>
                            <div class="font-weight-bold custom-text-color h6">Status</div>
                            <div class="h2">Adopted</div>
                        </div>
                        <div class="col-sm">
                            <div class="font-weight-bold custom-text-color h6">ID</div>
                            <div class="h2">42069420</div>
                            <div class="font-weight-bold custom-text-color h6">Sex</div>
                            <div class="h2">Female</div>
                            <div class="font-weight-bold custom-text-color h6">Age</div>
                            <div class="h2">69</div>
                            <div class="font-weight-bold custom-text-color h6">Foster Parent</div>
                            <div class="h2"><a href="/people/PeopleShow" class="text-primary">James Charles</a></div>
                        </div>
                    </div>

                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">

                    <div class="row">
                        <div class="col-sm"><div class="h2">Additional Info</div></div>
                    </div>

                    <div class="row">
                        <div class="col-sm">
                            <div class="font-weight-bold custom-text-color h6">Weight</div>
                            <div class="h2">69 kgs</div>  
                        </div>

                        <div class="col-sm">
                            <div class="font-weight-bold custom-text-color h6">Color</div>
                            <div class="h2">White</div>
                            </div>
                        <div class="col-sm">
                            <div class="font-weight-bold custom-text-color h6">Marks</div>
                            <div class="h2">None</div>
                        </div>
                        <div class="col-sm">
                            <div class="font-weight-bold custom-text-color h6">Aggressive?</div>
                            <div class="h2">No</div>
                        </div>
                        <div class="col-sm">
                            <div class="font-weight-bold custom-text-color h6">Trained?</div>
                            <div class="h2">Yes</div>
                        </div>
                    </div>

                    <div class="row pb-4">
                        <div class="col-sm">
                            <div class="font-weight-bold custom-text-color h6">Description</div>
                            <div class="h4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div> 
                        </div>
                    </div>

                </div>
            </div>

            <!-- active medical pill -->
            <div class="tab-pane fade show" id="pills-medical" role="tabpanel" aria-labelledby="pills-medical-tab">
                
            <!-- health concern -->
                <div class="d-flex justify-content-end">
                    <button class="btn custom-background-color text-white" data-toggle="modal" data-target="#addHealthConcernModal">Add New Health Concern</button>
                </div>
                
                <!-- health concerns table -->
                <div class="card mt-3 shadow bg-white" style="border-radius: 10px;" >
                    <h5 class="card-header">Health Concerns</h5>
                    <div class="card-body">
                        <div class="row d-flex justify-content-around">
                            <div class="col-md-5">
                                <div class="table-responsive-lg mt-3">
                                    <table class="table table-bordered" style="width:100%">
                                        <tr>
                                            <th scope="col">Allergies</th>
                                            <th scope="col"></th>
                                        </tr>
                                        <tbody>
                                            <tr>
                                                <td>Chocolate</td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <button class="btn custom-background-color text-white dog_btn mr-2" style="position:relative; z-index: 1;" data-toggle="modal" data-target="#editHealthConcernAllergyModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                        <a href="" class="btn custom-background-color text-white dog_btn" style="position:relative; z-index: 1;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Crab</th>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <button class="btn custom-background-color text-white dog_btn mr-2" style="position:relative; z-index: 1;" data-toggle="modal" data-target="#editHealthConcernAllergyModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                        <a href="" class="btn custom-background-color text-white dog_btn" style="position:relative; z-index: 1;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- tfoot should only appear when there are 7 or more data -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="table-responsive-lg mt-3">
                                    <table class="table table-bordered" style="width:100%">
                                        <tr>
                                            <th scope="col">Allergies</th>
                                            <th scope="col"></th>
                                        </tr>
                                        <tbody>
                                            <tr>
                                                <td>Chocolate</td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <button class="btn custom-background-color text-white dog_btn mr-2" style="position:relative; z-index: 1;" data-toggle="modal" data-target="#editHealthConcernExistingConditionModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                        <a href="" class="btn custom-background-color text-white dog_btn" style="position:relative; z-index: 1;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Crab</th>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <button class="btn custom-background-color text-white dog_btn mr-2" style="position:relative; z-index: 1;" data-toggle="modal" data-target="#editHealthConcernExistingConditionModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                        <a href="" class="btn custom-background-color text-white dog_btn" style="position:relative; z-index: 1;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- tfoot should only appear when there are 7 or more data -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            

                <!-- medical-->
                <div class="d-flex justify-content-end mt-3">
                    <button class="btn custom-background-color text-white" data-toggle="modal" data-target="#addMedicalRecordModal">Add New Medical Record</button>
                </div>
                
                <!-- medical record table -->
                <div class="card mt-3 shadow bg-white" style="border-radius: 10px;" >
                    <h5 class="card-header">Medical Records</h5>
                    <div class="card-body">

                        <label for="show_entry">Show</label>
                        <select class="btn" id='show_entry' name='show_entry' style="border: 1px solid black;">
                            <option value='10'>10</option>
                            <option value='25'>25</option>
                            <option value='50'>50</option>
                        </select>
                        <span>entries</span>
                        
                        <!-- please paginate this table based on the show entry number -->
                        <div class="table-responsive-lg mt-3">
                            <table class="table table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Veterinarian</th>
                                        <th scope="col">Diagnosis</th>
                                        <th scope="col">Test Performed</th>
                                        <th scope="col">Action</th>
                                        <th scope="col">Medication</th>
                                        <th scope="col">Comments</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">4/20/69</th>
                                        <td>Fecal/Deworming</td>
                                        <td><a href="" class="custom-text-color">John Smith</a></td>
                                        <td>Fecal/Deworming</td>
                                        <td>Fecal/Deworming</td>
                                        <td>NA</td>
                                        <td>NA</td>
                                        <td>NA</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button class="btn custom-background-color text-white dog_btn mr-2" style="position:relative; z-index: 1;" data-toggle="modal" data-target="#editMedicalRecordModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                <a href="" class="btn custom-background-color text-white dog_btn" style="position:relative; z-index: 1;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4/20/69</th>
                                        <td>Heartworm Preventative</td>
                                        <td><a href="" class="custom-text-color">John Smith</a></td>
                                        <td>Heartworm Preventative</td>
                                        <td>Heartworm Preventative</td>
                                        <td>NA</td>
                                        <td>NA</td>
                                        <td>NA</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button class="btn custom-background-color text-white dog_btn mr-2" style="position:relative; z-index: 1;" data-toggle="modal" data-target="#editMedicalRecordModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                <a href="" class="btn custom-background-color text-white dog_btn" style="position:relative; z-index: 1;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4/20/69</th>
                                        <td>Does not want to eat</td>
                                        <td><a href="" class="custom-text-color">John Smith</a></td>
                                        <td>Flea and Tick Treatment</td>
                                        <td>Flea and Tick Treatment</td>
                                        <td>NA</td>
                                        <td>NA</td>
                                        <td>Monitor and provide water</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button class="btn custom-background-color text-white dog_btn mr-2" style="position:relative; z-index: 1;" data-toggle="modal" data-target="#editMedicalRecordModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                <a href="" class="btn custom-background-color text-white dog_btn" style="position:relative; z-index: 1;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- tfoot should only appear when there are 7 or more data -->
                                    <tfoot>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Veterinarian</th>
                                            <th scope="col">Diagnosis</th>
                                            <th scope="col">Test Performed</th>
                                            <th scope="col">Action</th>
                                            <th scope="col">Medication</th>
                                            <th scope="col">Comments</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </tfoot>
                                </tbody>
                            </table>
                        </div>
                        <div class="h6">showing 1 to 10 of 4 entries</div>
                    </div>
                </div>

                <!-- vaccination -->
                <div class="d-flex justify-content-end mt-3">
                    <button class="btn custom-background-color text-white" data-toggle="modal" data-target="#addVaccinationRecordModal">Add New Vaccination Record</button>
                </div>
                
                <!-- vaccination record table -->
                <div class="card mt-3 shadow bg-white" style="border-radius: 10px;" >
                    <h5 class="card-header">Vaccination Records</h5>
                    <div class="card-body">

                        <label for="show_entry">Show</label>
                        <select class="btn" id='show_entry' name='show_entry' style="border: 1px solid black;">
                            <option value='10'>10</option>
                            <option value='25'>25</option>
                            <option value='50'>50</option>
                        </select>
                        <span>entries</span>
                        
                        <!-- please paginate this table based on the show entry number -->
                        <div class="table-responsive-lg mt-3">
                            <table class="table table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Clinic</th>
                                        <th scope="col">Veterinarian</th>
                                        <th scope="col">Vaccine</th>
                                        <th scope="col">Dose</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">4/20/69</th>
                                        <td><a href="" class="custom-text-color">Paws and Claws</a></td>
                                        <td><a href="" class="custom-text-color">John Smith</a></td>
                                        <td>Rabies</td>                                    
                                        <td>1 liter</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <button class="btn custom-background-color text-white dog_btn mr-2" style="position:relative; z-index: 1;" data-toggle="modal" data-target="#editVaccinationRecordModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                <a href="" class="btn custom-background-color text-white dog_btn" style="position:relative; z-index: 1;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4/20/69</th>
                                        <td><a href="" class="custom-text-color">Paws and Claws</a></td>
                                        <td><a href="" class="custom-text-color">John Smith</a></td>
                                        <td>Lyme</td>
                                        <td>6 gallons</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <button class="btn custom-background-color text-white dog_btn mr-2" style="position:relative; z-index: 1;" data-toggle="modal" data-target="#editVaccinationRecordModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                <a href="" class="btn custom-background-color text-white dog_btn" style="position:relative; z-index: 1;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4/20/69</th>
                                        <td><a href="" class="custom-text-color">Paws and Claws</a></td>
                                        <td><a href="" class="custom-text-color">John Smith</a></td>
                                        <td>Lepto</td>
                                        <td>3 ml</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <button class="btn custom-background-color text-white dog_btn mr-2" style="position:relative; z-index: 1;" data-toggle="modal" data-target="#editVaccinationRecordModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                <a href="" class="btn custom-background-color text-white dog_btn" style="position:relative; z-index: 1;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- tfoot should only appear when there are 7 or more data -->
                                    <tfoot>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Clinic</th>
                                            <th scope="col">Veterinarian</th>
                                            <th scope="col">Vaccine</th>
                                            <th scope="col">Dose</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </tfoot>
                                </tbody>
                            </table>
                        </div>
                        <div class="h6">showing 1 to 10 of 4 entries</div>
                    </div>
                </div>

            </div>

            <!-- intake/outcome -->
            <div class="tab-pane fade show" id="pills-intake" role="tabpanel" aria-labelledby="pills-intake-tab">
                <div class="d-flex">
                    <div class="ml-auto">
                        <button class="btn custom-background-color text-white" data-toggle="modal" data-target="#editIntakeModal">Edit Intake</button>
                    </div>
                </div>
                <!-- intake data -->
                <div class="card shadow bg-white mt-3" style="border-radius: 10px;"> 
                    <div class="card-header h5">Intake</div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-around">
                            <div class="col-md-5">
                                <div class="font-weight-bold custom-text-color h6">Arrival/Admission Date</div>
                                <div class="h2">4/20/69</div>
                            </div>
                            <div class="col-md-5">
                                <div class="font-weight-bold custom-text-color h6">Admission Attendant/Receiver</div>
                                <div class="h2"><a href="/people/PeopleShow" class="text-custom-color">Lourence Linao</a></div>
                            </div>
                            <div class="col-md-5">
                                <div class="font-weight-bold custom-text-color h6">Type of Intake</div>
                                <div class="h2">Surrender</div>
                            </div>
                            <div class="col-md-5">
                                <div class="font-weight-bold custom-text-color h6">Person/Address/Shelter</div>
                                <div class="h2"><a href="/people/PeopleShow" class="text-custom-color">John Adams</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex mt-3">
                    <div class="ml-auto">
                        <button class="btn custom-background-color text-white" data-toggle="modal" data-target="#addOutcomeModal">Add Outcome</button>
                    </div>
                </div>
                
                <!-- outcome data -->
                <div class="card shadow bg-white mt-3" style="border-radius: 10px;"> 
                    <!-- please paginate this table based on the show entry number -->
                    <!-- display the latest outcome first -->
                    <div class="card-header h5">Outcome</div>
                    <div class="card-body">
                        <div class="table-responsive-lg mt-3">
                            <table class="table table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">Outcome Date</th>
                                        <th scope="col">Outcome Type</th>
                                        <th scope="col">To</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">4/20/69</th>
                                        <td>Adopted</td>
                                        <td><a href="" class="custom-text-color">John Smith</a></td>  
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="" class="btn custom-background-color text-white dog_btn" style="position:relative; z-index: 1;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                        </td>                                  
                                    </tr>
                                    <tr>
                                        <th scope="row">4/20/69</th>
                                        <td>Adopted</td>
                                        <td><a href="" class="custom-text-color">John Smith</a></td> 
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="" class="btn custom-background-color text-white dog_btn" style="position:relative; z-index: 1;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th scope="row">4/20/69</th>
                                        <td>Adopted</td>
                                        <td><a href="" class="custom-text-color">John Smith</a></td> 
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="" class="btn custom-background-color text-white dog_btn" style="position:relative; z-index: 1;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                        </td> 
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
            </div>

            <!-- application -->
            <div class="tab-pane fade show" id="pills-application" role="tabpanel" aria-labelledby="pills-application-tab">
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

    </div>
</div>

<!-- fixed bottom nav -->
<x-fixed_bottom_nav route="/dogs"/> <!-- {{ url()->previous() }} -->

<!-- dog edit modal -->
<div class="modal fade shadow" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="editDogModal">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="">
            <div class="modal-body">
                <div class="form-group row justify-content-center">
                    <!-- put the data inside the input using value attribute -->
                    <x-dog.dog_input target="dog_name" label="Dog Name" type="text" />
                    <x-dog.dog_input target="breed" label="Breed" type="text" />
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
                    <x-dog.dog_input target="weight" label="Weight (in kg)" type="number" />
                    <x-dog.dog_input target="marks" label="Marks" type="text" />
                    <x-dog.dog_input target="color" label="Color/s" type="text" />
                    <div class="col-md-5">
                        <label for="status" class="col-form-label custom-text-color">Status</label>
                        <select class="form-control bg-light @error('status') is-invalid @enderror" id='status' name='status'>
                            <option value='Active'>Active</option>
                            <option value='Adopted'>Adopted</option>
                            <option value='Died in Care'>Died in Care</option>
                            <option value='Euthanized'>Euthanized</option>
                            <option value='Recuperating' selected>Recuperating</option>
                            <option value='Transferred'>Transferred</option>
                        </select>
                        @error('{{ status }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-5">
                        <label for="aggressive" class="col-form-label custom-text-color">Aggressive?</label>
                        <select class="form-control bg-light @error('aggressive') is-invalid @enderror" id='aggressive' name='aggressive' name="aggressive">
                            <option value='No'>No</option>
                            <option value='Yes'>Yes</option>
                        </select>
                        @error('{{ aggressive }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-5">
                        <label for="trained" class="col-form-label custom-text-color">Trained?</label>
                        <select class="form-control bg-light @error('trained') is-invalid @enderror" id='trained' name='trained'>
                            <option value='No'>No</option>
                            <option value='Yes'>Yes</option>
                        </select>
                        @error('{{ trained }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-10 mx-auto">
                        <label for="description" class="col-form-label custom-text-color">Description</label>
                        <textarea type="text" class="form-control bg-light @error('description') is-invalid @enderror" id="description" name="description"></textarea>
                        @error('{{ description }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-10 mt-3">
                        <div class="form-group">
                            <label class="form-label custom-text-color" for="dog_img">Dog Image(can attach multiple images)</label>
                            <input id="dog_img" name="dog_img[]" type="file" class="file" multiple data-show-upload="true" data-show-caption="true">
                            @error('{{ dog_img }}')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
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

<!-- add health concern record -->
<div class="modal fade shadow" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="addHealthConcernModal">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">New Health Concern</div>
        <form action="">
            <div class="modal-body">
                <div class="form-group row justify-content-center">

                    <div class="col-md-10">
                        <label for="health_concern" class="col-form-label custom-text-color">Health Concern</label>
                        <select class="form-control bg-light @error('email') is-invalid @enderror" id='health_concern' name='health_concern'>
                            <option value='Allergies'>Allergies</option>
                            <option value='Existing Condition'>Existing Condition</option>
                        </select>
                        @error('{{ health_concern }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="col-md-10 mt-3">
                        <input type="text"  class="form-control bg-light @error('concern_type') is-invalid @enderror" id="concern_type" name="concern_type">
                        @error('{{ concern_type }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

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

<!-- edit health concern - allergy -->
<div class="modal fade shadow" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="editHealthConcernAllergyModal">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">Edit Allergy</div>
        <form action="">
            <div class="modal-body">
                <div class="form-group row justify-content-center">
                    <div class="col-md-10">
                        <label for="allergy" class="col-form-label custom-text-color">Allergy</label>
                        <input type="text"  class="form-control bg-light @error('allergy') is-invalid @enderror" id="allergy" name="allergy">
                        @error('{{ allergy }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
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

<!-- edit health concern - exisiting condition -->
<div class="modal fade shadow" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="editHealthConcernExistingConditionModal">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">Edit Existing Condition</div>
        <form action="">
            <div class="modal-body">
                <div class="form-group row justify-content-center">
                    <div class="col-md-10">
                        <label for="existing_condition" class="col-form-label custom-text-color">Existing Condition</label>
                        <input type="text"  class="form-control bg-light @error('existing_condition') is-invalid @enderror" id="existing_condition" name="existing_condition">
                        @error('{{ existing_condition }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
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

<!-- add medical record modal -->
<div class="modal fade shadow" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="addMedicalRecordModal">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">New Medical Record</div>
        <form action="">
            <div class="modal-body">
                <div class="form-group row justify-content-center">

                    <div class="col-md-5">
                        <label for="clinic" class="col-form-label custom-text-color">Clinic</label>
                        <input list="clinics" id="clinic" name="clinic" class="form-control bg-light @error('clinic') is-invalid @enderror">
                        <datalist id="clinics">
                            <option value="Paws and Claws">
                            <option value="Clinic 1">
                        </datalist>
                        @error('{{ clinic }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 

                    <div class="col-md-5">
                        <label for="vet" class="col-form-label custom-text-color">Veterinarian</label>
                        <input list="vets" id="vet" name="vet" class="form-control bg-light @error('vet') is-invalid @enderror">
                        <datalist id="vets">
                            <option value="John Smith">
                            <option value="Johnny Sins">
                        </datalist>
                        @error('{{ vet }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 

                    <x-dog.dog_input target="description" label="Description" type="text" />
                    <x-dog.dog_input target="diagnosis" label="Diagnosis" type="text" />
                    <x-dog.dog_input target="test_performed" label="Test Performed" type="text" />
                    <x-dog.dog_input target="action" label="Action" type="text" />
                    <x-dog.dog_input target="medication" label="Medication" type="text" />
                    <x-dog.dog_input target="comments" label="Comments" type="text" />

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

<!-- edit medical record modal -->
<div class="modal fade shadow" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="editMedicalRecordModal">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">Edit Medical Record</div>
        <form action="">
            <div class="modal-body">
                <div class="form-group row justify-content-center">

                    <div class="col-md-5">
                        <label for="clinic" class="col-form-label custom-text-color">Clinic</label>
                        <input list="clinics" id="clinic" name="clinic" class="form-control bg-light @error('clinic') is-invalid @enderror">
                        <datalist id="clinics">
                            <option value="Paws and Claws">
                            <option value="Clinic 1">
                        </datalist>
                        @error('{{ clinic }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 

                    <div class="col-md-5">
                        <label for="vet" class="col-form-label custom-text-color">Veterinarian</label>
                        <input list="vets" id="vet" name="vet" class="form-control bg-light @error('vet') is-invalid @enderror">
                        <datalist id="vets">
                            <option value="John Smith">
                            <option value="Johnny Sins">
                        </datalist>
                        @error('{{ vet }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 
                    
                    <x-dog.dog_input target="description" label="Description" type="text" />
                    <x-dog.dog_input target="diagnosis" label="Diagnosis" type="text" />
                    <x-dog.dog_input target="test_performed" label="Test Performed" type="text" />
                    <x-dog.dog_input target="action" label="Action" type="text" />
                    <x-dog.dog_input target="medication" label="Medication" type="text" />
                    <x-dog.dog_input target="comments" label="Comments" type="text" />

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

<!-- add vaccination record -->
<div class="modal fade shadow" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="addVaccinationRecordModal">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">New Vaccination Record</div>
        <form action="">
            <div class="modal-body">
                <div class="form-group row justify-content-center">

                    <div class="col-md-5">
                        <label for="clinic" class="col-form-label custom-text-color">Clinic</label>
                        <input list="clinics" id="clinic" name="clinic" class="form-control bg-light @error('clinic') is-invalid @enderror">
                        <datalist id="clinics">
                            <option value="Paws and Claws">
                            <option value="Clinic 1">
                        </datalist>
                        @error('{{ clinic }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 

                    <div class="col-md-5">
                        <label for="vet" class="col-form-label custom-text-color">Veterinarian</label>
                        <input list="vets" id="vet" name="vet" class="form-control bg-light @error('vet') is-invalid @enderror">
                        <datalist id="vets">
                            <option value="John Smith">
                            <option value="Johnny Sins">
                        </datalist>
                        @error('{{ vet }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 

                    <div class="col-md-5">
                        <label for="vaccine" class="col-form-label custom-text-color">Vaccine</label>
                        <input list="vaccines" id="vaccine" name="vaccine" class="form-control bg-light @error('vaccine') is-invalid @enderror">
                        <datalist id="vaccines">
                            <option value="Paws and Claws">
                            <option value="vaccine 1">
                        </datalist>
                        @error('{{ vaccine }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 
                    
                    <x-dog.dog_input target="dosage" label="Dosage" type="text" />

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

<!-- edit vaccination record modal -->
<div class="modal fade shadow" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="editVaccinationRecordModal">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">Edit Vaccination Record</div>
        <form action="">
            <div class="modal-body">
                <div class="form-group row justify-content-center">

                    <div class="col-md-5">
                        <label for="clinic" class="col-form-label custom-text-color">Clinic</label>
                        <input list="clinics" id="clinic" name="clinic" class="form-control bg-light @error('clinic') is-invalid @enderror">
                        <datalist id="clinics">
                            <option value="Paws and Claws">
                            <option value="Clinic 1">
                        </datalist>
                        @error('{{ clinic }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 

                    <div class="col-md-5">
                        <label for="vet" class="col-form-label custom-text-color">Veterinarian</label>
                        <input list="vets" id="vet" name="vet" class="form-control bg-light @error('vet') is-invalid @enderror">
                        <datalist id="vets">
                            <option value="John Smith">
                            <option value="Johnny Sins">
                        </datalist>
                        @error('{{ vet }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 

                    <div class="col-md-5">
                        <label for="vaccine" class="col-form-label custom-text-color">Vaccine</label>
                        <input list="vaccines" id="vaccine" name="vaccine" class="form-control bg-light @error('vaccine') is-invalid @enderror">
                        <datalist id="vaccines">
                            <option value="Paws and Claws">
                            <option value="vaccine 1">
                        </datalist>
                        @error('{{ vaccine }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 
                    
                    <x-dog.dog_input target="dosage" label="Dosage" type="text" />

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

<!--  edit intake modal -->
<div class="modal fade shadow" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="editIntakeModal">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">Edit Intake</div>
        <form action="">
            <div class="modal-body">
                <div class="form-group row justify-content-center">

                    <x-dog.dog_input type="date" label="Arrival/Admission Date" target="admission_date" />

                    <div class="col-md-5">
                        <label for="attendant" class="col-form-label custom-text-color">Attendant/Receiver</label>
                        <select class="form-control bg-light @error('email') is-invalid @enderror" id='attendant' name='attendant'>
                            <option value='Lourence Linao'>Lourence Linao</option>
                            <option value='Cloyd Anis'>Cloyd Anis</option>
                        </select>
                        @error('{{ attendant }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-5">
                        <label for="intake_type" class="col-form-label custom-text-color">Intake Type</label>
                        <select class="form-control bg-light @error('email') is-invalid @enderror" id='intake_type' name='intake_type'>
                            <option value='Rescue'>Rescue</option>
                            <option value='Surrender'>Surrender</option>
                            <option value='Transferee'>Transferee</option>
                        </select>
                        @error('{{ intake_type }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-5">
                        <!-- id name not final -->
                        <label for="previous_owner" class="col-form-label custom-text-color">Person/Address/Shelter</label>
                        <input list="previous_owners" id="previous_owner" name="previous_owner" class="form-control bg-light @error('previous_owner') is-invalid @enderror">
                        <datalist id="previous_owners">
                            <option value="Paws and Claws">
                            <option value="Lourence Linao">
                        </datalist>
                        @error('{{ previous_owner }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 

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

<!--  add outcome modal -->
<div class="modal fade shadow" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="addOutcomeModal">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">Add Outcome</div>
        <form action="">
            <div class="modal-body">
                <div class="form-group row justify-content-center">

                    <div class="col-md-5">
                        <label for="outcome_type" class="col-form-label custom-text-color">Outcome Type</label>
                        <select class="form-control bg-light @error('outcome_type') is-invalid @enderror" id='outcome_type' name='outcome_type'>
                            <option value='Adopted'>Adopted</option>
                            <option value='Died in Care'>Died in Care</option>
                            <option value='Transferred'>Transferred</option>
                        </select>
                        @error('{{ outcome_type }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-5">
                        <label for="outcome_to" class="col-form-label custom-text-color">Outcome To</label>
                        <select class="form-control bg-light @error('outcome_to') is-invalid @enderror" id='outcome_to' name='outcome_to'>
                            <!-- options must have "NA" = meaning not available for those dogs that were euthanized or died in care -->
                            <option value='NA'>NA</option>
                            <option value='Logan Paul'>Logan Paul</option>
                            <option value='James Charles'>James Charles</option>
                            <option value='123 Shelter'>123 Shelter</option>
                        </select>
                        @error('{{ outcome_to }}')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

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



@endsection

