<html>
  <head>
    <title>Catalogue</title>
    <!--<meta http-equiv="refresh" content="10" />-->
    <!--<link rel="stylesheet" href="xpy.css" type="text/css" media="screen" />-->

  </head>	
  <!--<body onResize="window.location=window.location;" style="background-color:#606060">-->
  <body bgcolor="#FFFFFF" > 
  <form name="myForm" >
 
	    <script src="scale.js" type="text/javascript"></script>
		  <table style="margin:0;padding:0;">
		   <?php
		   	//$per_page = 2;
	         //$total_pages = 72;
	           $catConfigXML = simplexml_load_file('cat-config.xml') or createXmlCatConfig();
			   $pageCount_ = $catConfigXML["pageCount"];
	
			   $device_orientation = '';
			   $device_width = '';
			   $device_height = '';
			   $device_css = '';
		   			  
			     
				if(strstr($_SERVER['HTTP_USER_AGENT'],'android')) {
				 $device_orientation = 'android';
			     $device_width = '100%';
			     $device_height = '100%';				
			     $device_css = 'position:relative;width:'.$device_width.';height:'.$device_height.';visibility:visible;';  
				  //exit();
				  
					for ( $counter = 2; $counter <= $pageCount_; $counter += 1) {
			       		echo '<map name="testmap"><area shape="poly" coords="17,51,42,35,66,51,66,89,17,89" href="www.google.com.ph" alt="Google Text"></map>'; 	          
	                  echo '<td><div name="imgDiv" style="'.$device_css.'"><img name="imgDisplay" src="pages/pHi'.$counter.'.jpg" width="'.$device_width.'" height="'.$device_height.'" usemap="#testmap"/></div></td>';				         				         
				    }			
				  
				} 
 
			  ?>		
				
			  </tr>
		  </table>    
    </form>
  </body>
 
</html>