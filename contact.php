<?php
session_start();
	if(isset($_POST) && !empty($_POST)){
		if($_POST['captcha'] == $_SESSION['code']){
			echo "correct captcha!";
		}else{
			echo "Invalid captcha";
		}
	}