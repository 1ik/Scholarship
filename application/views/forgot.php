<?php
  $is_logged_in = $this->session->userdata('logged_in');
if($is_logged_in){
	redirect('main/application_form');
 }
 ?>

<html>
    <head>
        <title>Student Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- Start: jquery Mobile Integration -->
            
            <!-- Start:  take if from net -->
            <!--<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />-->
            <!-- <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script> -->
            <!--<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>-->
            <!-- End if from Net -->
            
             
            <!-- Start : take it from local -->
            <!--
            <link rel="stylesheet" href="<?php echo base_url().'css/jquery.mobile-1.1.0.css';?>">
            <script src="<?php echo base_url().'js/jquery-1.7.2.js';?>"></script>
            <script src="<?php echo base_url().'js/jquery.mobile-1.1.0.min.js';?>"></script>
            --> 
            <!-- End: Take it from Local -->
            
            <!-- End: Jquery Mobile Inegration -->
            
            <link href="<?php echo base_url().'css/base.css';?>" rel="Stylesheet" type="text/css"/>
    </head>
    <body style="background-color: #e0e0e0">
        <div id ="login_form" data-role="page" style="text-align: center;" data-rel="dialog" data-theme="b" style="background: white">
<!--         <div id="header_one" data-role="header" data-theme="b" style="height:100px">
            <div style="text-align:center">
                  <h1>BRACU Scholarship Registration</h1>
            </div>
            
            
            <div id="logo"> logo div 
    		<a href="<?php echo base_url() ;?>"><img src="<?php echo base_url().'images/BU Logo2.png'?>" alt="logo"/></a>
            </div> end of logo div 
	</div> end of header -->
        <div id="dummyHeader" style="height: 100px;">
            <br/>
            <strong>BRACU Scholarship Registration</strong>   
        </div>
        <div data-role="content">
            <div id="wrapper_login" style="height: 350px;background-color: #ffffff;font-family:helvetica">
        <!---
            <div id="panel" data-role="controlgroup" data-type="horizontal" data-theme="a"  >
            <a href="<?php echo base_url() ;?>" data-transition="fade" data-role="button" data-theme="b" style="width:210px;">Home</a>
            <a  href="<?php echo base_url().'main/application_form'?>"  class="ui-btn-active" data-transition="pop" data-role="button" data-theme="b" style="width:210px;">Application Form</a>
            <a href="<?php echo base_url().'index.php/primary_control/news_archive'?>" data-transition="fade" data-role="button" data-theme="b" style="width:210px;">Notice Archive</a>
            <a href="<?php echo base_url().'index.php/primary_control/contact'?>" data-transition="fade" data-role="button" data-theme="b" style="width:210px;">Contacts</a>
         </div>    
        -->
            <div id="login_form_area_center">
                <p> Your password will be sent to your email adderss.</p>
		
		<form name="forgotpass" action="send_pass" method="POST">
			<label for="id"> Enter your ID :</label>
			<input type="text" name="id" value="" />
			<input type="submit" value="send" />
		</form>
		
		<p> <?php if(isset($errors)) echo $errors ; ?> </p>
            </div>
            <br/>
            
            </div>
         </div><!-- /content -->
            
            
         <div id="footer" data-role="footer" data-theme="b">
		<p><small style="text-align:left">Copyright @ PixeLizard Interactives</small></p>
        </div><!-- end of footer -->
        </div>
        
    </body>
</html>
