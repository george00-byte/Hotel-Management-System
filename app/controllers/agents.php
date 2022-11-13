<?Php

 include(ROOT_PATH.'/app/database/db.php');
 include(ROOT_PATH.'/app/helpers/validateAgent.php');
  include(ROOT_PATH."/app/helpers/middleware.php");
  

   $table ='agents';

   $agents=selectAll($table);

   $errors=array();

   $id="";
   $agent="";
   $email="";
   $username ='';
   $secondname ='';
   $role ='';


    if(isset($_POST['create-agent']))
   {    

        $errors=validateAgent($_POST);
       
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
		    array_push($errors,"Agent's image required");
	    }

         

        if(count($errors)=== 0)
        {
            unset($_POST['create-agent']);

            if(isset($_POST['agent']))
            {
                $_POST['agent']=1;
                $agent_id=create($table,$_POST);


                $_SESSION['type']="succes";
                $_SESSION['message']="Agent created succesfully";
                header('location: '.BASE_URL."/admin/agents/index.php ");
                exit();
               

            }

            else
            {
                
                $_POST['agent']=0;    
                $agent_id=create($table,$_POST);
                $_SESSION['type']="succes";
                $_SESSION['message']="Agent created succesfully";
                header('location: '.BASE_URL."/admin/agents/index.php ");
                exit();
                
            }


        }

        else
        {
	       
            $username=$_POST['username'];
            $secondname=$_POST['secondname'];
            $email=$_POST['email'];
            $role=$_POST['role'];
            $agent=isset($_POST['agent'])?1:0;

        }

   }



    if(isset($_GET['id']))
    {

        $agent=selectOne($table,['id'=>$_GET['id']]);
            
        $id=$agent['id'];
        $role=$agent['role'];
        $username =$agent['username'];
        $secondname =$agent['secondname'];
        $email = $agent['email'];
        $isAgent=$agent['agent'];

 
    }


    if(isset($_POST['update-agent']))
    {

        
       $errors=validateAgent($_POST);
       
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
		    array_push($errors,"User image required");
	    }

        $id=$_POST['id'];


        if(count($errors) ===0)
        {
            unset($_POST['update-agent'],$_POST['id']);
 

            $_POST['agent']=isset($_POST['agent'])?1:0;
            $count = update($table,$id,$_POST);

            $_SESSION['type']="succes";
            $_SESSION['message']="Agent updated succesfully";

            header('location: '.BASE_URL."/Admin/agents/index.php");
            exit();

           
        }

        else
        {
            $username=$_POST['username'];
            $secondname=$_POST['secondname'];
            $admin=isset($_POST['agent'])?1:0;
            $email=$_POST['email'];
            $role=$_POST['role'];

        }


    }


     if(isset($_GET['delete_id']))
    {
        $id = $_GET['delete_id'];

        $count = delete($table,$id);

        $_SESSION['type']="succes";
        $_SESSION['message']="Agent deleted ";

        header('location:'.BASE_URL."/Admin/agents/index.php");
        exit();


    }








?>