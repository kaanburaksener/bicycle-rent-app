<?php
	//GLOBALS

	$link = NULL;

	//Connect Database
	
	function connectDb($host,$database,$user,$password) {
		$mysql_host = $host;              //i.e "mysql10.000webhost.com";
		$mysql_database = $database;      //i.e "a7856710_kitap";
		$mysql_user = $user;        	  //i.e "a7856710_kitap";
		$mysql_password =$password;       //i.e "123";

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

  	/***************************
	   NEWS
  	****************************/

  	//Adds News to the database

  	function addNews($status, $title, $content){
  		$query = "INSERT INTO news (status, title, content) VALUES ('".$status."','".utf8_for_xml($title)."','".utf8_for_xml($content)."')" ; 
  		$result = mysql_query($query) or  trigger_error(mysql_error()." ".$query);
    }

    //Gets News from the database

    function getNews(){
    	$query = "SELECT * FROM news";
    	$result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

    	return $result;
    }

    //Gets one News from the database

    function getaNews($id){
    	$query = "SELECT * FROM news WHERE id='".$id."'";
    	$result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

    	return $result;
    }

    //Deletes a news from the database

    function deleteNews($id){
    	$query ="DELETE FROM news WHERE id='".$id."'";
    	$result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

    //Updates a news on the database

    function updateNews($id,$status, $title, $content){
    	$query = "UPDATE news SET status='".$status."', title='".$title."', content='".$content."' WHERE id='".$id."'";
    	$result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

    /***************************
     USER
    ****************************/

    // Adds a user to the db
    function addUser($name, $lastname, $email, $password, $role){
      $query = "INSERT INTO users (firstname, lastname, email, password, user_role) VALUES ('".utf8_for_xml($name)."','".utf8_for_xml($lastname)."','".$email."','".$password."','".$role."')" ; 
      $result = mysql_query($query) or  trigger_error(mysql_error()." ".$query);
    }

    // Gets users from the database

    function getUsers(){
      $query = "SELECT * FROM users ORDER BY firstname, lastname";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    //Gets one user from the database

    function getUser($id){
      $query = "SELECT * FROM users WHERE id='".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    //Deletes a news from the database

    function deleteUser($id){
      $query ="DELETE FROM users WHERE id='".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

    //Updates a news on the database

    function updateUser($id,$name, $lastname, $email, $password, $role){
      $query = "UPDATE users SET firstname='".$name."', lastname='".$lastname."', email='".$email."', password='".$password."', user_role='".$role."' WHERE id='".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

  /***************************
     EVENTS
  ****************************/

    // Adds an event suggestion to the db
    function addEventSuggestion($status, $title, $content){
      $query = "INSERT INTO events (status, title, description) VALUES ('".$status."','".utf8_for_xml($title)."','".utf8_for_xml($content)."')" ; 
      $result = mysql_query($query) or  trigger_error(mysql_error()." ".$query);
    }

    //Gets all event suggestions

    function getEventSuggestions(){
      $query = "SELECT * FROM events WHERE status=0";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    //Get an event from the db

    function getEventSuggestion($id){
      $query = "SELECT * FROM events WHERE id='".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    //Deletes an event from the database

    function deleteEvent($id){
      $query ="DELETE FROM events WHERE id='".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

    //Update Event suggestion

    function updateEventSuggestion($id,$status,$title,$content)
    {
      $query = "UPDATE events SET status='".$status."', title='".mysql_real_escape_string(utf8_for_xml($title))."', description='".mysql_real_escape_string(utf8_for_xml($content))."' WHERE id='".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

    function addEvent($status,$title,$content,$date,$place)
    {
      $query = "INSERT INTO events (status, title, description, place, date) VALUES ('".$status."','".utf8_for_xml($title)."','".utf8_for_xml($content)."','".utf8_for_xml($place)."','".$date."')" ; 
      $result = mysql_query($query) or  trigger_error(mysql_error()." ".$query);
    }

    function getEvents(){
      $query = "SELECT * FROM events WHERE status=1";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    function updateEvent($id, $status, $title, $content, $date, $place)
    {
      $query = "UPDATE events SET status='".$status."', 
                                  title='".mysql_real_escape_string(utf8_for_xml($title))."',
                                  description='".mysql_real_escape_string(utf8_for_xml($content))."',
                                  date='".$date."',
                                  place='".mysql_real_escape_string(utf8_for_xml($place))."'
                                  WHERE id='".$id."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);
    }

    /*
        POOLS
    */

    function addQuestion($eventId, $question)
    {
      $query = "INSERT INTO survey_questions (eventId, question) VALUES ('".$eventId."','".mysql_real_escape_string(utf8_for_xml($question))."')" ; 
      $result = mysql_query($query) or  trigger_error(mysql_error()." ".$query);
    }

    function getLastId(){
      $query = "SELECT LAST_INSERT_ID();"; 
      $result = mysql_query($query) or  trigger_error(mysql_error()." ".$query);

      $res= mysql_fetch_array($result);

      return $res[0];
    }

    function addAnswers($answer)
    {
      $questionId = getLastId();
      foreach( $answer as $a ) {
          addAnswer($a,$questionId);
      }
    }

    function addAnswer($ans, $questionId)
    {
      $query = "INSERT INTO survey_question_choice (content, question_id) VALUES ('".utf8_for_xml($ans)."','".(int)$questionId."')" ; 
      $result = mysql_query($query) or  trigger_error(mysql_error()." ".$query);
    }

    function getQuestion($eventId)
    {
      $query = "SELECT * FROM survey_questions WHERE eventId='".$eventId."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    function getAnswers($questionId)
    {
      $query = "SELECT * FROM survey_question_choice WHERE question_id='".$questionId."'";
      $result = mysql_query($query) or trigger_error(mysql_error()." ".$query);

      return $result;
    }

    //Utilities


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