<?Php

 include(ROOT_PATH.'/app/database/db.php');
 include(ROOT_PATH.'/app/helpers/validateClient.php');
 include(ROOT_PATH."/app/helpers/middleware.php");

   $table ='clients';

   $clients=selectAll($table);

   $errors=array();

   $id="";
   $published="";
   $email="";
   $username ='';
   $secondname ='';
   $testimonial ='';


    if(isset($_POST['create-testimonial']))
   {    

        $errors=validateClient($_POST);
       
        if(!empty($_FILES['image']['name']))
	    {
		    $image_name=time().'_'.$_FILES['image']['name'];
		    $destination=ROOT_PATH."/assets/images/".$image_name;

		    $result=move_uploaded_file($_FILES['image']['tmp_name'],$destination);

		    if($result)
		    {
			    $_POST['image']=$image_name;
		    }
		    else 
		    {
			    array_push($errors,"Failed to upload image");
            }

		
	    }
	    else if(empty($_FILES['image']['name']))
	    {
		    array_push($errors,"Client's image required");
	    }

         

        if(count($errors)=== 0)
        {
            unset($_POST['create-testimonial']);

            if(isset($_POST['published']))
            {
                $_POST['published']=1;
                $_POST['testimonial']=htmlentities($_POST['testimonial']);

                $client_id=create($table,$_POST);
 

                $_SESSION['type']="succes";
                $_SESSION['message']="Testimonial created succesfully";
                header('location: '.BASE_URL."/admin/clients/index.php ");
                exit();
               

            }

            else
            {
                
                $_POST['published']=0;    
                $client_id=create($table,$_POST);
                $_SESSION['type']="succes";
                $_SESSION['message']="Agent created succesfully";
                header('location: '.BASE_URL."/admin/clients/index.php ");
                exit();
                
            }


        }

        else
        {
	       
            $username=$_POST['username'];
            $secondname=$_POST['secondname'];
            $email=$_POST['email'];
            $testimonial=$_POST['testimonial'];
            $published=isset($_POST['published'])?1:0;

        }

   }



    if(isset($_GET['id']))
    {

        $client=selectOne($table,['id'=>$_GET['id']]);
            
        $id=$client['id'];
        $testimonial=$client['testimonial'];
        $username =$client['username'];
        $secondname =$client['secondname'];
        $email = $client['email'];
        $published=$client['published'];

 
    }


    if(isset($_POST['update-testimonial']))
    {

        
       $errors=validateClient($_POST);
       
        if(!empty($_FILES['image']['name']))
	    {
		    $image_name=time().'_'.$_FILES['image']['name'];
		    $destination=ROOT_PATH."/assets/images/".$image_name;

		    $result=move_uploaded_file($_FILES['image']['tmp_name'],$destination);

		    if($result)
		    {
			    $_POST['image']=$image_name;
		    }
		    else 
		    {
			    array_push($errors,"Failed to upload image");
            }

		
	    }

	    else if(empty($_FILES['image']['name']))
	    {
		    array_push($errors,"Client's image required");
	    }

        $id=$_POST['id'];


        if(count($errors) ===0)
        {
            unset($_POST['update-testimonial'],$_POST['id']);

            $_POST['testimonial']=htmlentities($_POST['testimonial']);
 

            $_POST['published']=isset($_POST['published'])?1:0;
            $count = update($table,$id,$_POST);

            $_SESSION['type']="succes";
            $_SESSION['message']="Testimonial updated succesfully";

            header('location: '.BASE_URL."/Admin/clients/index.php");
            exit();

           
        }

        else
        {
            $username=$_POST['username'];
            $secondname=$_POST['secondname'];
            $email=$_POST['email'];
            $testimonial=$_POST['testimonial'];
            $published=isset($_POST['published'])?1:0;

        }


    }


     if(isset($_GET['delete_id']))
    {
        $id = $_GET['delete_id'];

        $count = delete($table,$id);

        $_SESSION['type']="succes";
        $_SESSION['message']="Agent deleted ";

        header('location:'.BASE_URL."/Admin/clients/index.php");
        exit();


    }








?>