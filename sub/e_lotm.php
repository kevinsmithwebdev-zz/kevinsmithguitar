<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<LINK REL="SHORTCUT ICON" HREF="../img/favicon.ico">
<title>Kevin Smith - Guitar - Extras - Lick of the Month</title>
<meta name="description" content="These are some jazz guitar licks that I offer for free.  A new lick is added each Month.">
<meta name="keywords" content="jazz, guitar, lick, free, licks">

<LINK REL=StyleSheet HREF="../style2.css" TYPE="text/css" MEDIA=screen>

</head>

   <script language="JavaScript" type="text/javascript">    
      function blocking(nr)
      // for displaying or hiding parts of the page
      {
        displayNew = (document.getElementById(nr).style.display == 'none') ? 'block' : 'none';
         document.getElementById(nr).style.display = displayNew;
      }
   </script>

<?php

   printf("<body onload=\"");
   for ( $LOTM_YEAR=date('y')-1; $LOTM_YEAR>=10; $LOTM_YEAR-- )
      {
      printf("blocking('%02d%02d'); ",20,$LOTM_YEAR); 
      }
      printf("\">\n\n");      
?>

<div id="page">
	<div id="menulinks">
		<a href="../index.html">HOME</a>
		<div class="menuline"></div>
		<a href="extras.html">Back</a>
		<div class="menuline"></div>
	</div>

	

	<div id="header">
		<h1>Kevin Smith's Jazz Guitar Lick of the Month.</h1>
	</div>




	<div id="mainarea">
	<div id="contentarea">
	
	<h3>  
Here I offer, free of charge, a free "Lick of the Month."  Some of these are original and
some are culled from others.	<br/><br/>


<b>
Update: It's been a fun ride!  But as of April of 2016 I'm suspending the Lick of the Month indefinitely.  (76 months and 329 measures!  Stop complaining!)  I'm redesigning my web page and will probably be switching to a blog format.
</b>
                <br/>
        </h3>

        <br/>


<?php


for ( $LOTM_YEAR=16; $LOTM_YEAR>=10; $LOTM_YEAR-- )
	{

	
	$LOTM_YEARFULL = sprintf("%02d%02d",20,$LOTM_YEAR);
	
	printf("<a href=\"\" onclick=\"blocking('%s'); return false;\"><h2>    - %s (click to expand/compress) -</h2></a>",$LOTM_YEARFULL,$LOTM_YEARFULL);

	
	printf("<div id=\"%s\">",$LOTM_YEARFULL);

	if ($LOTM_YEAR==16) 
		{
  		$LOTM_MAXMONTH=4;
		} else {
		$LOTM_MAXMONTH=12;
	}
	for ( $LOTM_MONTH=$LOTM_MAXMONTH; $LOTM_MONTH>=1; $LOTM_MONTH-- )
		{
	
		include("LOTM/code/LOTM_include.html");

		}
	printf("</div>");
	
	}

?>

<br/>



	</div>
	</div>

   	<div id="footer">
	Copyright &#169; 2010 KSG Music - Kevin Smith - (510)277-2006 - <a href="mailto:ksjazzguitar@yahoo.com">ksjazzguitar@yahoo.com</a>
	</div>
</div>
</body>

</html>