<nav class="navbar fixed-bottom navbar-light bg-white shadow-sm d-flex">
    <!-- close -->
    <div class="mr-auto" id="close">
        <a href="{{$route}}" class="btn btn-lg text-white pl-5 pr-5" style="background-color: #41B3A3;">Close</a>
    </div>

    <!-- 
        edit and delete button's visibility 
        depends on the user's status 
        (i.e admin can edit and delete, staff and volunteer can't delete) 
    -->
    <div class="mr-2" id="dog_edit">
        <button class="btn btn-lg custom-text-color pl-5 pr-5" data-toggle="modal" data-target="#editDogModal" style="border: 1px solid #41B3A3;">
            Edit
        </button>
    </div>

    <div class="mr-2" id="dog_delete">
        <button class="btn btn-lg custom-text-color pl-5 pr-5" style="border: 1px solid #41B3A3;">Delete</button>
    </div>

    <!-- 
        Application
        Set to Close if application is open
        Set to Open if application is closed
    -->
    <div class="mr-2" id="dog_edit" style="display:none;">
        <form action="">
            <button class="btn btn-lg custom-text-color pl-5 pr-5" style="border: 1px solid #41B3A3;">Set to Closed</button>
        </form>
    </div>

    <div class="mr-2" id="dog_edit" style="display:none;">
        <form action="">
            <button class="btn btn-lg custom-text-color pl-5 pr-5" style="border: 1px solid #41B3A3;">Set to Open</button>
        </form>
    </div>
    


</nav>