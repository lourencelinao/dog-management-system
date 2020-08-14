@extends('layouts.app')

@section('title', 'Dogs')
@section('content')
<!-- green background -->

<div class="container-fluid custom-background-color" style="height: 100px;">
    <div class="container pt-3">
        <div class="d-flex align-items-center">
            <i class="fa fa-paw fa-2x text-white" aria-hidden="true"></i><div class="pt-3 h3 ml-2 text-white"> Dogs</div>
            <div class="ml-auto pt-1"><button class="btn btn-light custom-text-color" data-toggle="modal" data-target="#addDogModal">Create A Dog</button></div>
        </div>
    </div>
</div>

<!-- add dog modal -->
<div class="modal fade shadow" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="addDogModal">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="">
            <div class="modal-body">
                <div class="form-group row justify-content-center">
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

                <!--<div class="form-group row d-flex justify-content-start">
                    <div class="col-md-6">
                        <label for="img" class="col-form-label custom-text-color">Image</label>
                        <input type="file" class="form-control-file" id="img">
                    </div>
                </div> -->
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
                    <a class="nav-link text-dark" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="pills-current-tab" data-toggle="pill" href="#pills-current" role="tab" aria-controls="pills-current" aria-selected="false">Current</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="pills-past-tab" data-toggle="pill" href="#pills-past" role="tab" aria-controls="pills-past" aria-selected="false">Past</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- search bar and filters -->
<div class="container mt-3 d-flex">
    <div class="mr-auto form-group">
        <input type="text" placeholder="Search" class="form-control shadow-sm" style="border-radius: 5px;">
    </div>
    <div class="mr-2">
        <div class="dropdown">
            <button class="btn btn-light bg-white shadow-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sort
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Ascending</a>
                <a class="dropdown-item" href="#">Descending</a>
            </div>
        </div>
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


<!-- might put this in partials -->
<div class="container">
    <!-- data -->
    <div class="tab-content" id="pills-tabContent">
        <!-- active dog table-->
        <div class="tab-pane fade show active bg-light" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
            
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
                <div class="col">
                    <button class="btn custom-background-color text-white dog_btn" style="position:relative; z-index: 1;" data-toggle="modal" data-target="#editDogModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                    <a href="" class="btn custom-background-color text-white dog_btn" style="position:relative; z-index: 1;"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
                <div class="col">
                    <button class="btn custom-background-color text-white dog_btn" style="position:relative; z-index: 1;" data-toggle="modal" data-target="#editDogModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                    <a href="" class="btn custom-background-color text-white dog_btn" style="position:relative; z-index: 1;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="d-flex justify-content-center align-items-center bg-white mb-3 shadow-sm" style="transform: rotate(0); height:75px; border-radius: 15px;">
                <a href="/dogs/DogShow" class="stretched-link"></a>
                <div class="col">
                    <div class="text-center">100</div>
                </div>
                <div class="col mx-auto">
                    <div class="custom-text-color h3 text-center">King George III</div>
                </div>
                <div class="col">
                    <div class="text-center">German Shepherd Mixed</div>
                </div>
                <div class="col">
                    <div class="text-center">Died in Care</div>
                </div>
                <div class="col">
                    <button class="btn custom-background-color text-white dog_btn" style="position:relative; z-index: 1;" data-toggle="modal" data-target="#editDogModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                    <a href="" class="btn custom-background-color text-white dog_btn" style="position:relative; z-index: 1;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </div>
            </div>

        </div>
        
        <div class="tab-pane fade show active bg-light" id="pills-current" role="tabpanel" aria-labelledby="pills-current-tab">
            
        </div>

        <div class="tab-pane fade show active bg-light" id="pills-past" role="tabpanel" aria-labelledby="pills-past-tab">
            
        </div>

    </div>
</div>

<!-- edit modal -->
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

@endsection