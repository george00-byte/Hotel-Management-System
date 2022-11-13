<?php

function validateBooking($booking)
{
	 $errors = array();

        if(empty($booking['username']))
        {
            array_push($errors,'username is required');

        }

        if(empty($booking['secondName']))
        {
            array_push($errors,'Second is required');
        }

        if(empty($booking['email']))
        {
            array_push($errors,'Email is required');

        }

         if(empty($booking['address']))
        {
            array_push($errors,'Address is required');

        }


         if(empty($booking['checkIn']))
        {
            array_push($errors,'Check In Date is required');

        }

          if(empty($booking['checkOut']))
        {
            array_push($errors,'Check In Date is required');

        }

        return $errors;



	
}










?>