<?php 


function validateAgent($agent)
{
	 $errors = array();

        if(empty($agent['username']))
        {
            array_push($errors,'Username is required');

        }

        if(empty($agent['secondname']))
        {
            array_push($errors,'Second Name is required');

        }

        if(empty($agent['role']))
        {
            array_push($errors,'Role is required');
        }

         if(empty($agent['email']))
        {
            array_push($errors,'Email is required');
        }



        $existingAgent = selectOne('agents',['email'=>$agent['email']]);

          if(isset($existingAgent))
        {
            if(isset($_POST['create-agent']))
            {
                array_push($errors,'User with that Email already exists');
            }

          
            
        }
	     return $errors;
	
}


?>