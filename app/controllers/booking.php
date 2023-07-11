<?php 
  
   include(ROOT_PATH.'/app/database/db.php');
   include(ROOT_PATH.'/app/helpers/validateBooking.php');
   include(ROOT_PATH."/app/helpers/middleware.php");
  

   $table ='bookinginfo';

   $bookingInfo=selectAll($table);


   $errors=array();

   $id="";
   $username ='';
   $email = '';
   $phone ="";
   $address= "";
   $secondName = '';
   $checkIn ='';
   $checkOut="";


   
   if(isset($_POST['booking-btn']))
   {
        
        $errors = validateBooking($_POST);
        
        if(count($errors) === 0)
        {
            unset($_POST['booking-btn']);    
     
            $user_id=create($table,$_POST);
              

        }
        else 
        {
           
	       $username =$_POST['username'];
           $email = $_POST['email'];
           $secondName= $_POST['secondName'];
           $address = $_POST['address'];
           $checkIn = $_POST['checkIn'];
           $checkOut =$_POST['checkOut'];
           $phone =$_POST['phone'];

          

        }

        
   }

  


 

   
?>
