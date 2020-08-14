
$(document).ready(function() {
    /* switch active state for pill items*/
    $(".nav-item").on("click", function(e){
        $("#pills-tab").find(".active").removeClass("active");
        $(this).addClass("active");
        
     });

     /* dog edit button appears on nformation pill tab */
    $("#pills-profile-tab").click(function(){
       $("#dog_edit").show();
     });
    $("#pills-medical-tab").click(function(){
      $("#dog_edit").hide();
    });
    $("#pills-intake-tab").click(function(){
      $("#dog_edit").hide();
    });
    $("#pills-application-tab").click(function(){
      $("#dog_edit").hide();
    });    
});

/* medical records table */
