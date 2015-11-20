<?php

	//GLOBALS

	$link = NULL;

	//Connect Database
	
	function connectDb($host,$database,$user,$password) {
		$mysql_host = $host;              
		$mysql_database = $database;      
		$mysql_user = $user;        	  
		$mysql_password =$password;       

	    $link=mysql_connect($mysql_host,$mysql_user,$mysql_password);

	    if (!$link)
			{
			  echo "Please try later.";
			}
		else
		{
		mysql_select_db($mysql_database,$link);
	    mysql_query("SET NAMES UTF8");
		}
  	}
	
	//Get Event

    function getEvents($id){
    	$query = "SELECT * FROM events WHERE id='".$id."'";
    	$result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

    	return $result;
    }
	
	//Get a list of Questionnaires per Event

    function getQuestionnaire($eid){
	
		$query = "SELECT * FROM survey_questions WHERE eventId='".$eid."'";
    	$result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

    	return $result;
    }
	
	//Get a list of Choices per Question ( Anket )

    function getChoices($qid){
	
		$query = "SELECT * FROM survey_question_choice WHERE question_id='".$qid."'";
    	$result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

    	return $result;
    }
	
	//Get the list of unique Questionnaires

    function getAllQuestionnaire(){
	
		$query = "SELECT id,title FROM events WHERE status=0";
    	$result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

    	return $result;
    }
	
	    function getAllEvent(){
	
		$query = "SELECT id,title,description,date FROM events WHERE status=1 order by date asc";
    	$result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

    	return $result;
    }

    //Gets News from the database

    function getReadNews(){
    	$query = "SELECT * FROM news Where status=1 ORDER BY id DESC LIMIT 6";
    	$result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

    	return $result;
    }

    //Gets one News from the database

    function getaNews($id){
    	$query = "SELECT * FROM news WHERE id='".$id."'";
    	$result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

    	return $result;
    }

		function searchUser($searching){
		
		$query = "SELECT firstname,lastname,email FROM users WHERE CONCAT_WS(' ', firstname, lastname ) LIKE '%".$searching."%' and user_role IN(2,3)";
		$result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    	return $result;
	}
   
    //This function converts to UTF8 
    function utf8_for_xml($string){
	    return preg_replace('/[^\x{0009}\x{000a}\x{000d}\x{0020}-\x{D7FF}\x{E000}-\x{FFFD}]+/u',' ', $string);
	  }

    //Exceprt the content for the given word count
	  function summary($textOrHtml, $maxWords) { 
  		$text = strip_tags($textOrHtml, "<b></b><i></i>"); 
  		$words = preg_split("/\s+/", $text, $maxWords+1);

  		if (count($words) > $maxWords) { unset($words[$maxWords]); } 
  		$output = join(' ', $words); 

	    return $output; 
	  }

    //Converts the given date to YMD format
  	function convertDateFormat($date){
  		$date = date('Y-m-d', strtotime($date));
       	return preg_replace('/\s+/', '', $date);
    }
?>