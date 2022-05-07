<?

include 'config.php';


if($_POST){
		// Information to be modified
	/*	$to_email = "indrajithwasundara@gmail.com"; // email address to which the form data will be sent
		$subject = "Illusion Insurance Auto Contact Request Demo"; // subject of the email that is sent
		$thanks_page = "index.html"; // path to the thank you page following successful form submission
		$contact_page = "index.html"; // path to the HTML contact page where the form appears */


		$nam = strip_tags($_POST["fullName"]);
		$ema = strip_tags($_POST["email"]);
		$pho = strip_tags($_POST["phoneNo"]);
		$com = strip_tags($_POST["zipCode"]);

		$result=mysqli_query($mysqli,"INSERT into quote values('','$nam','$ema','$pho','$com')");

		if($result)
		{
			echo "success";
		}else
		{
			echo "faild";
		}

    }
    die("This is not working. Please contact our agent!");


        ?>