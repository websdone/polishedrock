<cms:php>
	/*
	* Ajax form submit
	*/

	# request sent using HTTP_X_REQUESTED_WITH
	if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ){
		if (isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['organisation']) AND isset($_POST['hardware']) AND isset($_POST['telephone']) AND isset($_POST['message'])) {

			$to = 'mark@polishedrockltd.co.uk, markworger@yahooo.co.uk, worgs@hotmail.com';
			$subject = "PolishedRock Ltd. enquiry";
			$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

			$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);	
			$telephone = filter_var($_POST['telephone'], FILTER_SANITIZE_STRING);
			$hardware = filter_var($_POST['hardware'], FILTER_SANITIZE_STRING);		
			$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
			$sent = email($to, $email, $subject, $hardware, $name, $organisation, $message);
			if ($sent) {
				echo 'Message sent!';
			} else {
				echo 'Message couldn\'t sent!';
			}
		}
		else {
			echo 'All Fields are required';
		}
		return;
	}

	/**
	 * email function
	 *
	 * @return bool | void
	 **/
	function email($to, $from_mail, $from_name, $subject, $message){
		$header = array();
		$header[] = "MIME-Version: 1.0";
		$header[] = "From: {$from_name}<{$from_mail}>";
		/* Set message content type HTML*/
		$message = '
        <html>
            <body>
            	<p><b>Enquiring for product:</b> '.$_POST['hardware'].'</p>
                <p><b>Name:</b> '.$_POST['name'].'</p>
                <p><b>Telephone:</b> '.$_POST['telephone'].'</p>
                <p><b>Email:</b> '.$_POST['email'].'</p>
                <p><b>Organisation:</b> '.$_POST['organisation'].'</p>
                <p><b>Message:</b> '.$_POST['message'].'</p>                        
            </body>
        </html>'; 
		$header[] = "Content-type:text/html; charset=iso-8859-1";
		$header[] = "Content-Transfer-Encoding: 7bit";
		if( mail($to, $subject, $message, implode("\r\n", $header)) ) return true; 
	}

</cms:php>
