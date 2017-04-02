<cms:php>
	/*
	* Ajax form submit
	*/

	# request sent using HTTP_X_REQUESTED_WITH
	if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ){
		if (isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['organisation'])  AND isset($_POST['telephone']) AND isset($_POST['message'])) {
			$to = 'marianicus@gmail.com';

			$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
			$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
			$telephone = filter_var($_POST['telephone'], FILTER_SANITIZE_STRING);
			$organisation = filter_var($_POST['organisation'], FILTER_SANITIZE_STRING);
			$subject = filter_var($_POST['organisation'], FILTER_SANITIZE_STRING);
			$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
			$sent = email($to, $email, $telephone, $name, $organisation, $message);
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
		$header[] = "Content-type:text/html; charset=iso-8859-1";
		$header[] = "Content-Transfer-Encoding: 7bit";
		if( mail($to, $subject, $message, implode("\r\n", $header)) ) return true; 
	}
echo( "Hello World" ); 
</cms:php>