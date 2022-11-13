<?php

function validateProperty($property)
{
	 $errors = array();

        if(empty($property['name']))
        {
            array_push($errors,'Name is required');

        }

        if(empty($property['price']))
        {
            array_push($errors,'Price is required');
        }

        if(empty($property['beds']))
        {
            array_push($errors,'Beds is required');

        }


         if(empty($property['baths']))
        {
            array_push($errors,'Baths is required');

        }


         if(empty($property['size']))
        {
            array_push($errors,'Size is required');

        }


        if(empty($property['address']))
        {
            array_push($errors,'Address is required');

        }

         if(empty($property['year']))
        {
            array_push($errors,'Year is required');

        }


         if(empty($property['overview']))
        {
            array_push($errors,'Overview is required');

        }

         if(empty($property['agentname']))
        {
            array_push($errors,'Agent Name is required');

        }


         if(empty($property['community']))
        {
            array_push($errors,'Community is required');

        }


         if(empty($property['parking']))
        {
            array_push($errors,'Parking slot is required');

        }


          if(empty($property['flooring']))
        {
            array_push($errors,'Flooring is required');

        }


           if(empty($property['interiorfeautures']))
        {
            array_push($errors,'Interiorfeautures are required');

        }
        

            if(empty($property['transit']))
        {
            array_push($errors,'Transit info is required');

        }


        
            if(empty($property['walking']))
        {
            array_push($errors,'walk info is required');

        }

        
           if(empty($property['discountedprice']))
        {
            array_push($errors,'discountedprice is required');

        }


            if(empty($property['family']))
        {
            array_push($errors,'Family is required');

        }


            if(empty($property['rent']))
        {
            array_push($errors,'Rental info is required');

        }


            if(empty($property['rating']))
        {
            array_push($errors,"Rating is required");

        }


            if(empty($property['exteriorfeautures']))
        {
            array_push($errors,"Exteriorfeautures are required");

        }



          if(empty($property['fencing']))
        {
            array_push($errors,"Fencing is required");

        }



        $existingProperty = selectOne('properties',['address'=>$property['address']]);

          if(isset($existingProperty))
        {
            if(isset($_POST['create-property']))
            {
                array_push($errors,'Property already exists');
            }

        }
	     return $errors;
	
}
