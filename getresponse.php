<?php 
	//$responses['what is your name'] = "My name is Mo-Pal.";
	// echo "Hello world";
	//$responses['tell me about yourself'] = "I am a chatbot. I'm still learning a lot of things so please forgive me if I can't answer you in some cases.";
	$responses['suggest some place'] = "Sure...Have you got any ideal places in mind so that i can suggest u some?";
	$responses['no'] = "Since you have no places in mind let me suggest you some.Answer these questions so that i can know your interest";
	$responses['okay'] = "Do u want to visit with family or with ur friends or u want to go alone?";
	//$responses["i'm fine"] = "Good. I'm happy about that.";
	$q = $_GET["q"];

	$response = "";

	if ($q != "") {
		# code...
		$q = strtolower($q);
		foreach ($responses as $r => $value) {
			# code...
			if (strpos($r, $q) !== false) {
				# code...
				$response = $value;
			}
			
		}
	}
	$noresponse = "Sorry I'm still learning. Hence my responses are limited. Ask something else.";
	echo $response === "" ? $noresponse : $response;
?>