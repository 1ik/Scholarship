<!DOCTYPE html> 

<html> 
	<head> 
	<title>Home</title> 
            <meta name="viewport" content="width=device-width, initial-scale=1"> 
            
            <!-- Start: jquery Mobile Integration -->
            
            <!-- Start:  take if from net -->
            <!--<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />-->
            <!-- <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script> -->
            <!--<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>-->
            <!-- End if from Net -->
            
            
            <!-- Start : take it from local -->
            <link rel="stylesheet" href="<?php echo base_url().'css/jquery.mobile-1.1.0.css';?>">
            <script src="<?php echo base_url().'js/jquery-1.7.2.js';?>"></script>
            <script src="<?php echo base_url().'js/jquery.mobile-1.1.0.min.js';?>"></script>
            <!-- End: Take it from Local -->
            
            <!-- End: Jquery Mobile Inegration -->
            
            <link href="<?php echo base_url().'css/base.css';?>" rel="Stylesheet" type="text/css"/>
            <link href="<?php echo base_url().'css/s3slideCss.css';?>" rel="Stylesheet" type="text/css"/>
            <script src="<?php echo base_url().'js/s3slider.js';?>"></script>
            
          </head> 
<body> 

    <div data-role="page">

	<div id="header_one" data-role="header" data-theme="b" style="height:100px">
            <div style="text-align:center">
                  <h1>BRACU Scholarship Registration</h1>
            </div>
           
            
            <div id="logo"><!-- logo div -->
    		<a href="<?php echo base_url().'index.php/primary_control'?>"><img id="sitelogo" src="<?php echo base_url().'images/BU Logo2.png'?>" alt="logo"/></a>
            </div><!-- end of logo div -->
	</div><!-- end of header -->

	<div data-role="content" style="overflow: visible;">
            <div id="wrapper_one" style="height: 3500px;">     
         <div id="panel" data-role="controlgroup" data-type="horizontal" data-theme="a"  >
            <a href="<?php echo base_url().'index.php'?>" class="ui-btn-active" data-transition="fade" data-role="button" data-theme="b" style="width:150px;">Home</a>
            <a target="_blank" href="<?php echo base_url().'main/application_form'?>" data-transition="fade" data-role="button" data-theme="b" style="width:180px;">Application Form</a>
            <a href="<?php echo base_url().'index.php/main/information'?>" data-transition="fade" data-role="button" data-theme="b" style="width:200px;">Information</a>
            <a href="<?php echo base_url().'index.php/main/noticeArchive'?>" data-transition="fade" data-role="button" data-theme="b" style="width:180px;">Notice Archive</a>
            <a href="<?php echo base_url().'index.php/main/contact'?>" data-transition="fade" data-role="button" data-theme="b" style="width:150px;">Contacts</a>
         </div>
         <hr width="100%" />
         <div id="titleBanner">
             
            
               <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" 
                codebase="http://download.macromedia.com/pub/shockwave/
                cabs/flash/swflash.cab#version=6,0,40,0" 
                id="mymoviename"> 
                <param name="movie"  
                value="example.swf" /> 
                <param name="quality" value="high" /> 
                <param name="bgcolor" value="#ffffff" /> 
                <embed src="<?php echo base_url().'images/slide.swf';?>" quality="high" bgcolor="#ffffff"
                width="890" height="300" 
                name="mymoviename" align="" type="application/x-shockwave-flash" 
                pluginspage="http://www.macromedia.com/go/getflashplayer"> 
                </embed> 
            </object> 
            
         </div>
         
         
         <div id="compressedHolder" style="position: absolute;width: 820px;left: 50px;"> 
             <!-- Introduction: Starts ---->
             <div data-role="collapsible" data-theme="c" data-content-theme="c" data-collapsed="false">
                 <h3>Welcome to BRAC University Scholarship Management Service</h3>
                 <p style="text-align: justify">
                     Welcome to BRAC University Online Scholarship Management Service.
                     This website contains 
                     <a href="<?php echo base_url().'index.php/main/information'?>">Information and Qualification criteria</a> 
                     for a student to 
                     achieve scholarship and also the 
                     <a target="_blank"href="<?php echo base_url().'main/application_form'?>">online sign up form</a>
                     . Students are requested to keep
                     themselves updated from 
                     <a href="<?php echo base_url().'index.php/main/noticeArchive'?>">Notices</a>
                     on the website. For any kind of query, you can
                     submit your question from the 
                     <a href="<?php echo base_url().'index.php/main/contact'?>">contact page.</a>
                 </p>
             </div>
             <!-- Introduction: End ---->
             <br/>
             <!-- Notice: Starts ---->
            <div data-role="collapsible" data-theme="c" data-content-theme="c" data-collapsed="false">
                <h3>
                    <blink>
                        Notice
                    </blink>
                </h3>
                <?php foreach ($news as $value):?>
                    <?php echo $value->msg;?>
                    <hr/>
                    <br/>
                 <?php endforeach?>
            </div>
            
           <!-- Notice: End ----> 
           <br/>
           <!-- Policy: Start -->
           <?php foreach ($info as $value):?>
                <div data-role="collapsible" data-theme="c" data-content-theme="c" data-collapsed="false">
                    <?php echo $value->head;?>
                    <?php echo $value->msg;?>
                    <div style="position: relative;left: 150px;width: 800px;">
                        <div style="height: auto;width: auto;border-width: thin;">
                            <div class="ui-grid-a">
                                <div class="ui-block-a">
                                    <div class="ui-bar ui-bar-b" style="text-align: center;left: 0px;width: 225px;height:25px">
                                        Scholarship Category
                                    </div>  
                                </div>
                                <div class="ui-block-b">
                                    <div class="ui-bar ui-bar-b" style="text-align: center; left: -145px;width: 225px;height:25px">
                                        Minimum CGPA
                                    </div>
                                </div>
                            </div><!-- /grid-a -->
                    <?php foreach ($min_cgpa as $value):?>
                        <div class="ui-grid-a">
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-width: thin; background-color: white; width: 254px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <strong><a href="<?php echo base_url().'main/information'?>"><?php echo $value->category;?></a></strong>
                                        </div>
                                </div>
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-left-width: thin;border-right-width: thin; border-top-width: thin ;border-bottom-width: thin; background-color: white; width: 254px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <strong><?php echo $value->cgpa;?></strong>
                                        </div>
                                </div>
                        </div><!-- /grid-a -->
                    <?php endforeach?> 
                    </div>   
                </div> </br>
            </div>   
            <?php endforeach?>
           </div>
             <!-- Policy: Ends -->
            <br/>
         </div> <!-- Compressed Holder Ends-->
        </div>
       <div id="footer" data-role="footer" data-theme="c" >
            <div id="footerWrapper">
                <div id="leftFooter" ><p><small style="text-align:left">Developed by <a target="_blank" style="text-decoration: none; color:#3c3c3c;" href ="http://www.pixelizard.com"> PixeLizard Interactives</a></small></p></div>
                <div id="rightFooter" ><p><a style="text-decoration: none;color: #3c3c3c;" href="<?php echo base_url().'index.php'?>">Home</a> | <a target="_blank" style="text-decoration: none;color: #3c3c3c;" href="<?php echo base_url().'main/application_form'?>">Application Form</a> | <a style="text-decoration: none;color: #3c3c3c;" href="<?php echo base_url().'index.php/main/information'?>">Information</a> | <a style="text-decoration: none;color: #3c3c3c;" href="<?php echo base_url().'index.php/main/noticeArchive'?>">Notice Archive</a> | <a style="text-decoration: none;color: #3c3c3c;" href="<?php echo base_url().'index.php/main/contact'?>">Contacts</a></p></div>
                </div>
        </div><!-- end of footer -->
       </div><!-- /content -->
        
       
<!-- </div><!-- /page -->
      
</body>
</html>