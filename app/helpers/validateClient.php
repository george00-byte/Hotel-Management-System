<?php 


function validateClient($client)
{
	 $errors = array();

        if(empty($client['username']))
        {
            array_push($errors,'Username is required');

        }

        if(empty($client['secondname']))
        {
            array_push($errors,'Second Name is required');

        }

        if(empty($client['testimonial']))
        {
            array_push($errors,'Testimonial is required');
        }

         if(empty($client['email']))
        {
            array_push($errors,'Email is required');
        }



        $existingClient = selectOne('clients',['email'=>$client['email']]);

          if(isset($existingClient))
        {
            if(isset($_POST['create-testimonial']))
            {
                array_push($errors,'User with that Email already exists');
            }

          
            
        }
	     return $errors;
	
}


?>