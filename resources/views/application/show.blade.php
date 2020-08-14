@extends('layouts.app')

@section('title', 'Application')
@section('content')
<!-- green background -->
<div class="container-fluid custom-background-color" style="height: 100px;">
    <div class="container pt-3">
        <div class="d-flex align-items-center">
            <!-- Adoption part in Adoption Application should be dynamic -->
            <i class="fa fa-file fa-lg text-white pt-2" aria-hidden="true"></i><div class="pt-3 h3 ml-2 text-white">Adoption Application</div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container mt-3 bg-white mt-3 shadow" style="border-radius: 10px;">
        <div class="row pt-4">
           <div class="col-md-5">
                <div class="font-weight-bold custom-text-color h6">Name</div>
                <div class="h2"><a href="/people/PeopleShow">James Charles</a></div>
           </div>
           <div class="col-md-5">
                <div class="font-weight-bold custom-text-color h6">Pet</div>
                <div class="h2"><a href="/dogs/DogShow">Maya</a></div>
           </div>
           <div class="col-md-5">
                <div class="font-weight-bold custom-text-color h6">Contact Number</div>
               <div class="h2">0123456789</div>
           </div>
           <div class="col-md-5">
                <div class="font-weight-bold custom-text-color h6">Email</div>
                <div class="h2">jamescharles@gmail.com</div>
           </div>
           <div class="col-md-5">
                <div class="font-weight-bold custom-text-color h6">Address</div>
                <div class="h2">Cebu</div>
           </div>
           <div class="col-md-5">
                <div class="font-weight-bold custom-text-color h6">Date Submitted</div>
                <div class="h2">4/20/69</div>
           </div>
       </div>

       <hr style="height:2px;border-width:0;color:gray;background-color:gray">

       <div class="row">
           <div class="col-md"><div class="h2">Application Form</div></div>
       </div>

       <div class="row mt-2 mb-2">
           <div class="col-md">
                <div class="font-weight-bold custom-text-color h6">Do you have any other pet/s?</div>
                <div class="h2">Yes</div> 
           </div>
       </div>

       <div class="row mb-2">
            <div class="col-md pb-2">
                <div class="font-weight-bold custom-text-color h6">If you have other pets,please list the breed of all pets you own</div>
                <div class="h2">Yoda, Wooki, Jawa</div> 
           </div>
       </div>

       <div class="row mb-2">
            <div class="col-md pb-2">
                <div class="font-weight-bold custom-text-color h6">What is/are their behaviour towards dogs?</div>
                <div class="h2">They're okay</div> 
           </div>
       </div>


       <div class="row mb-2">
            <div class="col-md pb-2">
                <div class="font-weight-bold custom-text-color h6">Do you currently live in: Apartment, House, Condo, Other(please specify)</div>
                <div class="h2">I'm homless</div> 
           </div>
       </div>

       <div class="row mb-2">
            <div class="col-md pb-2">
                <div class="font-weight-bold custom-text-color h6">Is the residence currently: Rented, Owned, Leased by you?</div>
                <div class="h2">Yes</div> 
           </div>
       </div>

       <div class="row mb-2">
            <div class="col-md pb-2">
                <div class="font-weight-bold custom-text-color h6">
                    If not owned, please provide: <br>
                    Landlord's name: 
                </div>
                <div class="h2">Shaniqua O'Neill</div>
                <div class="font-weight-bold custom-text-color h6"><br> Landlord's Contact Number</div>
                <div class="h2">1234567</div> 
           </div>
       </div>

       <div class="row mb-2">
            <div class="col-md pb-2">
                <div class="font-weight-bold custom-text-color h6">Do you live with children?</div>
                <div class="h2">Yes</div> 
           </div>
       </div>

       <div class="row mb-2">
            <div class="col-md pb-2">
                <div class="font-weight-bold custom-text-color h6">If yes, what are their ages?</div>
                <div class="h2">3, 5, 7</div> 
           </div>
       </div>

       <div class="row pb-4">
           <div class="col-md">
               <div class="font-weight-bold custom-text-color h6">Comment</div>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                   sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                   Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                   Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p> 
           </div>

       </div>
    </div>
</div>

<nav class="navbar fixed-bottom navbar-light bg-white shadow-sm d-flex">
    <!-- close -->
    <div class="mr-auto" id="close">
        <a href="/applications" class="btn btn-lg text-white pl-5 pr-5" style="background-color: #41B3A3;">Close</a>
    </div>

    <!-- 
        Application
        Set to Close if application is open
        Set to Open if application is closed
        use {{}} inside style attribute
    -->
    <div class="mr-2" id="set_closed" > 
        <form action="">
            <button class="btn btn-lg custom-text-color pl-5 pr-5" style="border: 1px solid #41B3A3;">Set to Closed</button>
        </form>
    </div>

    <div class="mr-2" id="set_open" style="display:none;">
        <form action="">
            <button class="btn btn-lg custom-text-color pl-5 pr-5" style="border: 1px solid #41B3A3;">Set to Open</button>
        </form>
    </div>
    


</nav>
@endsection