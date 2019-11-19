<?php



/*

 * To change this license header, choose License Headers in Project Properties.

 * To change this template file, choose Tools | Templates

 * and open the template in the editor.

 */



// define variables and set to empty values



function mailFormate($to, $subject, $message1, $message2, $title, $heading, $name) {

    $to = $to;

    $subject = $subject;

    $message = "

		<html>

		<head>

		<title>" . $title . "</title>

		</head>

		<body>

		<h1>" . $heading . "</h1>

		<table>

		

		<tr>

		<td>" . $message1 . "</td>

		</tr>

		<tr>

		<td>" . $message2 . "</td>

		</tr>

		<tr>

		<td>Thank you,</td>

		</tr>		

		</table>

		</body>

		</html>

		";

    $headers = "MIME-Version: 1.0\r\n";

    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";



    $headers .= 'X-Mailer: PHP/' . phpversion();

    $headers .= 'From: <yashgaurav7190@gmail.com>' . "\r\n";

    mail($to, $subject, $message, $headers);

}





 $doctorname = $_GET['doctorname'];

 $address = $_GET['address'];

 $city = $_GET['city'];





     

  



	$to = 'blog@alignwisesmile.com,info@renderwise.in,narayan@alignwisesmile.com,amit.goyal4663@gmail.com'; //change email address info@alignwisesmile.com

        $name = $contact_name;

        $subject = "Enquiry Form Submission" . $name;

        $title = "Enquiry Form ";

        $heading = "Enquiry Form ";



        $message1 = "New Enquiry Generated!</a>";



        $msg1 = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>

                    <html xmlns='http://www.w3.org/1999/xhtml'>

                        <head>

                            <meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />

                            <title>New Case</title>

                        </head>

                        <body>

                        <br>

                        <table width='600'  cellpadding='3' cellspacing='0' style='border-collapse: collapse; border:1px solid;' >

                                <tbody>

                                    <tr><td  valign='top' colspan='3'>Full Name </td><td> $doctorname </td></tr>

                                    <tr><td  valign='top' colspan='3'>Mobile Number:- </td><td>$address </td>



</tr>

  

<tr>

<td  valign='top' colspan='3'>Email:- </td><td>$city</td>

</tr>



                                                                                                             

                                </tbody>

                            </table>

                        </body>

                    </html>";

        $message2 = "";

        mailFormate($to, $subject, $msg1, $message2, $title, $heading, $name);

echo "done";

?>