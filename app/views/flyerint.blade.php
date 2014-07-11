<!DOCTYPE html>
<html class="no-js">

    <head>
    <meta charset="utf-8">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Flyer</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="/css/bootstrap-combined.no-icons.min.css?<?=time();?>">
        <link rel="stylesheet" href="/css/font-awesome.css?<?=time();?>">  
        <link rel="stylesheet" href="/js/fancybox/source/jquery.fancybox.css?<?=time();?>">
        <link rel="stylesheet" href="/css/main.css?<?=time();?>">
        <link rel="stylesheet" href="/css/flyerint.css?<?=time();?>">
		<script src="/js/lib/modernizr.min.js"></script>   
		

	

    </head>

    <body>
        <div id="stage">
            <div id="home-header" class="fullwidth">
                <div id="scoreboard" class="floatL"></div>
                <a href="/"><img src="/images/sc-logo.jpg" class="floatR" /></a>
            </div>

            <div id="flyer-int" style="clear: both;">
            
            	<?php
            	// allow_url_fopen=0
            	//$content = file_get_contents('http://www.flyertown.ca/flyers/sportchek?type=1&postal_code=M4P+2H9&filler=#!/flyers/sportchek-sportchek?flyer_run_id=26205');
            	$content = file_get_contents('http://www.flyertown.ca/flyers/sportchek-sportchek?sf_any=true&flyer_run_id=19880&type=1&postal_code=M4P%202H9#!/flyers/sportchek-sportchek?flyer_run_id=19880');
            	
            	$content = str_replace('"store_locator_url":"http://www.sportchek.ca/storeLocator/index.jsp"','"store_locator_url":null', $content);
            	
				$content = preg_replace('/"url"\:"http:\/\/www\.sportchek\.ca\/product\/index\.jsp\?productId=\d+&cid=wishabi",/', '', $content);
				$content = preg_replace('/"url"\:"http:\/\/www\.sportchek\.ca\/category\/index\.jsp\?categoryId=\d+&cid=wishabi",/', '', $content);		
			    $content = preg_replace('/"url"\:"http:\/\/www\.sportchek\.ca\/shop\/index\.jsp\?categoryId=\d+&cid=wishabi",/', '', $content);		
			    $content = preg_replace('/"url"\:"http:\/\/www\.sportchek\.ca\/family\/index\.jsp\?categoryId=\d+&cid=wishabi",/', '', $content);			    

            	$content = str_replace('<link href="','<link href="http://www.flyertown.ca', $content);
            	$content = str_replace('<script src="','<script src="http://www.flyertown.ca', $content);            	
            	$content = str_replace('<link rel="stylesheet" href="','<link rel="stylesheet" href="http://www.flyertown.ca', $content);       	
            	echo $content;
            	?>
                <!-- T5T 4M2 -->

                
           </div>

            <div id="home-callout" class="fullwidth">
                <img src="/images/communityboard-center.jpg" />
            </div>

             <div id="nav" class="fullwidth">
                <a href="/staff"><img src="/images/nav-staff.png" /></a>
                <a href="/calendar"><img src="/images/nav-calendar.png" /></a>
                <a href="/photos"><img src="/images/nav-photos.png" /></a>
            </div>

        </div>

        <script src="/js/lib/jquery-1.10.2.min.js"></script>
        <script src="/js/fancybox/source/jquery.fancybox.js"></script>
        
        <script src="js/timer.js"></script>
        <script> 

			
        $( document ).ready(function() {
        	
        	document.oncontextmenu = function () { return false; };
        	
            $("#scoreboard").load("scoreboard.html"); 
        });
        </script>       

    </body>

</html>