<?php
		

		
	require 'vendor/autoload.php';
	
	$fb = new \Facebook\Facebook([
		'app_id'=> '424143468582898',
		'app_secret'=> '95a574511aab7ebcd795a893ec43fd23',
			'default_graph_version'=> 'v2.10'
	]);

	$helper = $fb->getRedirectloginhelper();
	$login_url=$helper->getLoginUrl("http://localhost/merafuture/SampleLoginPage/index.php");
	try{
		$accessToken=$helper->getAccessToken();
		if(isset($accessToken)){
			$_SESSION['access_token'] =(string)$accessToken;
			header("Location:index.php");
		
		}

	}
	catch(Exception $e){
 		echo $e->getTraceAsString();
	}

    if(isset($_SESSION['access_token'])){
        try{
            $fb->setDefaultAccessToken($_SESSION['access_token']);
            $res = $fb->get('/me?locate=en_US&fields=name');
            $user=$res->getGraphuser();

        }

        catch(Exception $e){


            echo $e->getTraceAsString();

        }
    }




?>