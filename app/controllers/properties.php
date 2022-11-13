<?Php

 include(ROOT_PATH.'/app/database/db.php');
 include(ROOT_PATH.'/app/helpers/validateProperty.php');
  include(ROOT_PATH."/app/helpers/middleware.php");
  

   $table ='properties';

   $properties=selectAll($table);

   $errors=array();

   $id="";
   $name ='';
   $price ='';
   $beds ='';
   $baths="";
   $size="";
   $address='';
   $year="";
   $overview="";
   $agentimage="";
   $agentname="";
   $community="";
   $family="";
   $parking="";
   $heating="";
   $cooling="";
   $appliances="";
   $basement="";
   $flooring="";
   $interiorfeautures="";
   $newconstruction="";
   $discountedprice="";
   $walking="";
   $transit="";
   $rating="";
   $stories="";
   $exteriorfeautures="";
   $fencing="";










if(isset($_POST['create-property']))
{    

        $errors=validateProperty($_POST);
       
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
		    array_push($errors,"Propety's main image required");
	    }



          if(!empty($_FILES['agentimage']['name']))
	    {
		    $image_name=time().'_'.$_FILES['agentimage']['name'];
		    $destination=ROOT_PATH."/assets/images/".$image_name;

		    $result=move_uploaded_file($_FILES['agentimage']['tmp_name'],$destination);

		    if($result)
		    {
			    $_POST['agentimage']=$image_name;
		    }
		    else 
		    {
			    array_push($errors,"Failed to upload image");
            }

		
	    }

         else if(empty($_FILES['agentimage']['name']))
	    {
		    array_push($errors,"Agent's' image required");
	    }



		 if(!empty($_FILES['img1']['name']))
	        {
		        $image_name=time().'_'.$_FILES['img1']['name'];
		        $destination=ROOT_PATH."/assets/images/".$image_name;

		        $result=move_uploaded_file($_FILES['img1']['tmp_name'],$destination);

		        if($result)
		        {
			        $_POST['img1']=$image_name;
		        }
		        else 
		        {
			        array_push($errors,"Failed to upload image");
                }

		
	        }


            if(!empty($_FILES['img2']['name']))
	        {
		        $image_name=time().'_'.$_FILES['img2']['name'];
		        $destination=ROOT_PATH."/assets/images/".$image_name;

		        $result=move_uploaded_file($_FILES['img2']['tmp_name'],$destination);

		        if($result)
		        {
			        $_POST['img2']=$image_name;
		        }
		        else 
		        {
			        array_push($errors,"Failed to upload image");
                }

		
	        }


            if(!empty($_FILES['img3']['name']))
	        {
		        $image_name=time().'_'.$_FILES['img3']['name'];
		        $destination=ROOT_PATH."/assets/images/".$image_name;

		        $result=move_uploaded_file($_FILES['img3']['tmp_name'],$destination);

		        if($result)
		        {
			        $_POST['img3']=$image_name;
		        }
		        else 
		        {
			        array_push($errors,"Failed to upload image");
                }

		
	        }


            if(!empty($_FILES['img4']['name']))
	        {
		        $image_name=time().'_'.$_FILES['img4']['name'];
		        $destination=ROOT_PATH."/assets/images/".$image_name;

		        $result=move_uploaded_file($_FILES['img4']['tmp_name'],$destination);

		        if($result)
		        {
			        $_POST['img4']=$image_name;
		        }
		        else 
		        {
			        array_push($errors,"Failed to upload image");
                }

		
	        }



            if(!empty($_FILES['img5']['name']))
	    {
		    $image_name=time().'_'.$_FILES['img5']['name'];
		    $destination=ROOT_PATH."/assets/images/".$image_name;

		    $result=move_uploaded_file($_FILES['img5']['tmp_name'],$destination);

		    if($result)
		    {
			    $_POST['img5']=$image_name;
		    }
		    else 
		    {
			    array_push($errors,"Failed to upload image");
            }

		
	    }


            if(!empty($_FILES['img6']['name']))
	    {
		    $image_name=time().'_'.$_FILES['img6']['name'];
		    $destination=ROOT_PATH."/assets/images/".$image_name;

		    $result=move_uploaded_file($_FILES['img6']['tmp_name'],$destination);

		    if($result)
		    {
			    $_POST['img6']=$image_name;
		    }
		    else 
		    {
			    array_push($errors,"Failed to upload image");
            }

		
	    }



         

        if(count($errors)=== 0)
        {
            unset($_POST['create-property']);

            if(isset($_POST['published']))
            {
                $_POST['published']=1;
                $_POST['sold']=isset($_POST['sold'])?1:0;

               $property_id=create($table,$_POST);
             
                $_SESSION['type']="succes";
                $_SESSION['message']="Property created succesfully";
                header('location: '.BASE_URL."/admin/properties/index.php ");
                exit();
               

            }

            else
            {
                
                $_POST['published']=0;    
                $property_id=create($table,$_POST);
                $_SESSION['type']="succes";
                $_SESSION['message']="Property created succesfully";
                header('location: '.BASE_URL."/admin/properties/index.php ");
                exit();
                
            }

        }

        else
        {

            $name =$_POST['name'];
            $price =$_POST['price'];
            $beds =$_POST['beds'];
            $baths=$_POST['baths'];
            $size=$_POST['size'];
            $address=$_POST['address'];
            $year=$_POST['year'];
            $overview=$_POST['overview'];
            $agentname=$_POST['agentname'];
            $rent=$_POST['rent'];
            $community=$_POST['community'];
            $family=$_POST['family'];
            $parking=$_POST['parking'];
            $heating=$_POST['heating'];
            $cooling=$_POST['address'];
            $appliances=$_POST['appliances'];
            $basement=$_POST['basement'];
            $flooring=$_POST['flooring'];
            $interiorfeautures=$_POST['interiorfeautures'];
            $newconstruction=$_POST['newconstruction'];
            $discountedprice=$_POST['discountedprice'];
            $walking=$_POST['walking'];
            $transit=$_POST['transit'];
            $rating=$_POST['rating'];
            $stories=$_POST['stories'];
            $exteriorfeautures=$_POST['exteriorfeautures'];
            $fencing=$_POST['fencing'];
            $published=isset($_POST['published'])?1:0;
           


        }
}




 if(isset($_GET['id']))
{

    $property=selectOne($table,['id'=>$_GET['id']]);

    $id= $property['id'];
	$name=$property['name'];
	$price =$property['price'];
	$beds =$property['beds'];
	$baths=$property['baths'];
	$size=$property['size'];
	$address=$property['address'];
	$year=$property['year'];
	$overview=$property['overview'];
	$agentimage=$property['agentimage'];
	$agentname=$property['agentname'];
	$community=$property['community'];
	$family=$property['family'];
	$parking=$property['parking'];
	$heating=$property['heating'];
	$cooling=$property['cooling'];
	$appliances=$property['appliances'];
	$basement=$property['basement'];
	$flooring=$property['flooring'];
	$interiorfeautures=$property['interiorfeautures'];
	$newconstruction=$property['newconstruction'];
	$discountedprice=$property['discountedprice'];
	$walking=$property['walking'];
	$transit=$property['transit'];
	$rating=$property['rating'];
	$stories=$property['stories'];
	$exteriorfeautures=$property['exteriorfeautures'];
	$fencing=$property['fencing'];
    $published=isset($_POST['published'])?1:0;
    $sold=isset($_POST['published'])?1:0;

 
}


if(isset($_POST['update-property']))
{

        
    $errors=validateProperty($_POST);

    $id=$_POST['id'];
       
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
		array_push($errors,"Property's image required");
	}

         if(!empty($_FILES['agentimage']['name']))
	    {
		    $image_name=time().'_'.$_FILES['agentimage']['name'];
		    $destination=ROOT_PATH."/assets/images/".$image_name;

		    $result=move_uploaded_file($_FILES['agentimage']['tmp_name'],$destination);

		    if($result)
		    {
			    $_POST['agentimage']=$image_name;
		    }
		    else 
		    {
			    array_push($errors,"Failed to upload image");
            }

		
	    }

         else if(empty($_FILES['agentimage']['name']))
	    {
		    array_push($errors,"Agent's' image required");
	    }



		 if(!empty($_FILES['img1']['name']))
	        {
		        $image_name=time().'_'.$_FILES['img1']['name'];
		        $destination=ROOT_PATH."/assets/images/".$image_name;

		        $result=move_uploaded_file($_FILES['img1']['tmp_name'],$destination);

		        if($result)
		        {
			        $_POST['img1']=$image_name;
		        }
		        else 
		        {
			        array_push($errors,"Failed to upload image");
                }

		
	        }


            if(!empty($_FILES['img2']['name']))
	        {
		        $image_name=time().'_'.$_FILES['img2']['name'];
		        $destination=ROOT_PATH."/assets/images/".$image_name;

		        $result=move_uploaded_file($_FILES['img2']['tmp_name'],$destination);

		        if($result)
		        {
			        $_POST['img2']=$image_name;
		        }
		        else 
		        {
			        array_push($errors,"Failed to upload image");
                }

		
	        }


            if(!empty($_FILES['img3']['name']))
	        {
		        $image_name=time().'_'.$_FILES['img3']['name'];
		        $destination=ROOT_PATH."/assets/images/".$image_name;

		        $result=move_uploaded_file($_FILES['img3']['tmp_name'],$destination);

		        if($result)
		        {
			        $_POST['img3']=$image_name;
		        }
		        else 
		        {
			        array_push($errors,"Failed to upload image");
                }

		
	        }


            if(!empty($_FILES['img4']['name']))
	        {
		        $image_name=time().'_'.$_FILES['img4']['name'];
		        $destination=ROOT_PATH."/assets/images/".$image_name;

		        $result=move_uploaded_file($_FILES['img4']['tmp_name'],$destination);

		        if($result)
		        {
			        $_POST['img4']=$image_name;
		        }
		        else 
		        {
			        array_push($errors,"Failed to upload image");
                }

		
	        }



            if(!empty($_FILES['img5']['name']))
	    {
		    $image_name=time().'_'.$_FILES['img5']['name'];
		    $destination=ROOT_PATH."/assets/images/".$image_name;

		    $result=move_uploaded_file($_FILES['img5']['tmp_name'],$destination);

		    if($result)
		    {
			    $_POST['img5']=$image_name;
		    }
		    else 
		    {
			    array_push($errors,"Failed to upload image");
            }

		
	    }


            if(!empty($_FILES['img6']['name']))
	    {
		    $image_name=time().'_'.$_FILES['img6']['name'];
		    $destination=ROOT_PATH."/assets/images/".$image_name;

		    $result=move_uploaded_file($_FILES['img6']['tmp_name'],$destination);

		    if($result)
		    {
			    $_POST['img6']=$image_name;
		    }
		    else 
		    {
			    array_push($errors,"Failed to upload image");
            }

		
	    }



    if(count($errors) ===0)
    {
        unset($_POST['update-property'],$_POST['id']);
 

        $_POST['published']=isset($_POST['published'])?1:0;

        $_POST['sold']=isset($_POST['sold'])?1:0;

        $count =update($table,$id,$_POST);

        $_SESSION['type']="succes";
        $_SESSION['message']="Updated succesfully";

        header('location: '.BASE_URL."/Admin/properties/index.php");
        exit();

           
    }

    else
    {
        $name =$_POST['name'];
        $price =$_POST['price'];
        $beds =$_POST['beds'];
        $baths=$_POST['baths'];
        $size=$_POST['size'];
        $address=$_POST['address'];
        $year=$_POST['year'];
        $overview=$_POST['overview'];
        $agentname=$_POST['agentname'];
        $rent=$_POST['rent'];
        $community=$_POST['community'];
        $family=$_POST['family'];
        $parking=$_POST['parking'];
        $heating=$_POST['heating'];
        $cooling=$_POST['address'];
        $appliances=$_POST['appliances'];
        $basement=$_POST['basement'];
        $flooring=$_POST['flooring'];
        $interiorfeautures=$_POST['interiorfeautures'];
        $newconstruction=$_POST['newconstruction'];
        $discountedprice=$_POST['discountedprice'];
        $walking=$_POST['walking'];
        $transit=$_POST['transit'];
        $rating=$_POST['rating'];
        $stories=$_POST['stories'];
        $exteriorfeautures=$_POST['exteriorfeautures'];
        $fencing=$_POST['fencing'];
        $published=isset($_POST['published'])?1:0;
        $sold=isset($_POST['sold'])?1:0;

    }


}


if(isset($_GET['delete_id']))
{
    $id = $_GET['delete_id'];

    $count = delete($table,$id);

    $_SESSION['type']="succes";
    $_SESSION['message']="Property deleted ";

    header('location:'.BASE_URL."/Admin/properties/index.php");
    exit();


}








?>