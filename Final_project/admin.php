<?php
session_start();



// include '../inc/dbConnection.php';
// $dbConn = startConnection("Ottermart");

include 'functions.php';
validateSession();

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin Main Page </title>
       
        <style>
            /*form {*/
            /*    display: inline-block;*/
            /*}*/
            
             body {
    background-color:  #b3b300;
                 
             }
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" />
        
        <script>
        
            function confirmDelete() {
                
                //alert();
                //prompt();
                return confirm("Really??");
                
            }
            
            function openModal() {
                
                $('#myModal').modal("show");
            }
            
            
        </script>
    
    </head>
    <center>
    <body>
        
        <h1> ADMIN SECTION - Final Project </h1>
        
         <h3>Welcome admin </h3>

          <form action="addProduct.php">
              <input type="submit" value="Add New Product">
          </form>
         <form action="logout.php">
              <input type="submit" value="Logout">
              
              <div id = "totalamount">

         </div>
         <br><input id = "Fetchtotalamount" type = "button" value = "Fetch Total amount">



         <div id = "TotalPrice">


         </div>
          </form>
          
         

           <br><br>
        
        <?= displayAllProducts() ?>
        
        
<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">-->
  <!--Launch demo modal-->
<!--</button>-->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Product Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe name="productModal" width="450" height="250"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>        
        
        
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
        
        <script>
   $("document").ready(function(){
       $("#Fetchtotalamount").click(function() {
            alert("someone help");
                   $.ajax({
                    
                       url: "totalamount.php",
                       datatype: "json",
                       success: function(data, status) {
                        alert(data);
                           var obj = JSON.parse(data); // parse our json data into javascript values
                           $("#totalamount").html(obj.count);

                       }
                   }); //ajax
     }); // find avg click
   }
   </script>
    </body>
    </center>
</html>

