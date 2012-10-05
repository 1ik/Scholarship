<!DOCTYPE html> 

<html> 
	<head> 
	<title>Home</title> 
            <meta name="viewport" content="width=device-width, initial-scale=1"> 
            <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
            <!--
            <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
            <link href="<?php echo base_url().'css/base.css';?>" rel="Stylesheet" type="text/css"/>
            <link href="<?php echo base_url().'css/s3slideCss.css';?>" rel="Stylesheet" type="text/css"/>
            <script src="<?php echo base_url().'js/s3slider.js';?>"></script>
            <script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
            
            -->
            <!-- Start : take it from local -->
            <link rel="stylesheet" href="<?php echo base_url().'css/jquery.mobile-1.1.0.css';?>">
            <script src="<?php echo base_url().'js/jquery-1.7.2.js';?>"></script>
            <script src="<?php echo base_url().'js/jquery.mobile-1.1.0.min.js';?>"></script>
            <!-- End: Take it from Local -->
            
            <link href="<?php echo base_url().'css/base.css';?>" rel="Stylesheet" type="text/css"/>
            
          </head> 
<body> 

    <div data-role="page">

	<div id="header_one" data-role="header" data-theme="b" style="height:100px">
            <div style="text-align:center">
                  <h1>Notice Archive</h1>
            </div>
            
            <div id="logo"><!-- logo div -->
    		<a href="<?php echo base_url().'index.php/primary_control'?>"><img id="sitelogo" src="<?php echo base_url().'images/BU Logo2.png'?>" alt="logo"/></a>
            </div><!-- end of logo div -->
	</div><!-- end of header -->

	<div data-role="content" style="overflow: visible;">
            <div id="wrapper_one" style="height: auto;text-align: center;padding-left: 40px; padding-right: 40px;">     
         <div id="panel" data-role="controlgroup" data-type="horizontal" data-theme="a"  >
            <a href="<?php echo base_url().'index.php'?>" data-transition="fade" data-role="button" data-theme="b" style="width:150px;">Home</a>
            <a target="_blank" href="<?php echo base_url().'main/application_form'?>" data-transition="fade" data-role="button" data-theme="b" style="width:180px;">Application Form</a>
            <a href="<?php echo base_url().'index.php/main/information'?>" data-transition="fade" data-role="button" data-theme="b" style="width:200px;">Information</a>
            <a href="<?php echo base_url().'index.php/main/noticeArchive'?>"  class="ui-btn-active" data-transition="fade" data-role="button" data-theme="b" style="width:180px;">Notice Archive</a>
            <a href="<?php echo base_url().'index.php/main/contact'?>" data-transition="fade" data-role="button" data-theme="b" style="width:150px;">Contacts</a>
         </div>
         <hr width="100%" />
         
         <div data-role="collapsible" data-theme="c" data-content-theme="c" data-collapsed="false">
                <h3>
                    <blink>
                        Notice
                    </blink>
                </h3>
             <div id="noticeTitle" >
                <?php foreach ($news as $value):?>
                    <?php echo $value->msg;?>
                    <hr/>
                 <?php endforeach?>
            </div>
         </div>    
         
         
         
       </div>
            
        </div><!-- /content -->
         <div id="footer" data-role="footer" data-theme="c" >
            <div id="footerWrapper">
                <div id="leftFooter" ><p><small style="text-align:left">Developed by <a target="_blank" style="text-decoration: none; color:#3c3c3c;" href ="http://www.pixelizard.com"> PixeLizard Interactives</a></small></p></div>
                <div id="rightFooter" ><p><a style="text-decoration: none;color: #3c3c3c;" href="<?php echo base_url().'index.php'?>">Home</a> | <a target="_blank" style="text-decoration: none;color: #3c3c3c;" href="<?php echo base_url().'main/application_form'?>">Application Form</a> | <a style="text-decoration: none;color: #3c3c3c;" href="<?php echo base_url().'index.php/main/information'?>">Information</a> | <a style="text-decoration: none;color: #3c3c3c;" href="<?php echo base_url().'index.php/main/noticeArchive'?>">Notice Archive</a> | <a style="text-decoration: none;color: #3c3c3c;" href="<?php echo base_url().'index.php/main/contact'?>">Contacts</a></p></div>
                </div>
        </div><!-- end of footer -->
        
</div><!-- /page -->
      
</body>
</html>