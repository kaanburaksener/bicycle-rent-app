<div id="carousel-example-captions" class="carousel slide" data-ride="carousel">

	<ol class="carousel-indicators">

		<?php 

			$SQL = "SELECT * FROM news WHERE status=1 ORDER BY date DESC LIMIT 5";

			$var1 = mysql_query($SQL);

			$cnt = 0;

			while($var2 = mysql_fetch_assoc($var1)){

				$string = "";

				$string = '<li data-target="#carousel-example-captions" data-slide-to="'.$cnt.'"';

				if($count==0) 

					$string .= ' class="active"></li>';
				
				else 

					$string.='></li>';

				
				echo $string;

				$cnt++;
			}

		?>

	</ol>

	<div class="carousel-inner" role="listbox">

		<?php

			$SQL = "SELECT * FROM news WHERE status=1 ORDER BY date ASC LIMIT 5";

			$var1=mysql_query($SQL);

			$count=0;

			while($var2= mysql_fetch_assoc($var1)){

				$string = "";

				$active ='';

				$picture;

				$writings;

				preg_match_all('/<img[^>]+>/i',$var2['content'], $picture);

				preg_match_all('/(alt|title|src)=("[^"]*")/i', $picture[0][0], $picture);

				preg_replace("/<img[^>]+\>/i", "", $var2['content']);

				if ($count==0) $active=' active';

					$string='<div class="item'.$active.'"><a href="http://izumezun.tk/new.php?id='.$var2['id'].'" style="color:white;"><img '.$picture[0][0].' alt="" style="width:100%;height:100%"><div class="carousel-caption"><h3>'.$var2['title'].'</h3><p>'.summary($var2['content'],20).'...</p></a></div></div>';

				echo $string;

				$count++;

			}

		?>

	</div>

	<a class="left carousel-control" href="#carousel-example-captions" role="button" data-slide="prev">

		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		
		<span class="sr-only">Previous</span>

	</a>
    
	<a class="right carousel-control" href="#carousel-example-captions" role="button" data-slide="next">
		
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

		<span class="sr-only">Next</span>

	</a>

</div>
<!--/.carousel slide --> 