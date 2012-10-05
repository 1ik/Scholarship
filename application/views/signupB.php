<html>
    <head>
        <title>Student Signup</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
            <!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
            <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
            <script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script> -->
<!--             <link href="<?php echo base_url().'css/base.css';?>" rel="Stylesheet" type="text/css"/> -->
    </head>
    <body>
        <div id ="login_form" data-role="page" style="text-align: center;" data-rel="dialog" data-theme="b" style="background: white">
            <div id="header_one" data-role="header" data-theme="b" style="height:100px">
            <a href="<?php echo base_url().'index.php'?>" data-icon="home">Home</a>     
            <div style="text-align:center">
                  <h1>BRACU Scholarship Registration</h1>
            </div>
            <?php
              $is_logged_in = $this->session->userdata('is_logged_in');
             if($is_logged_in)
             {
                  echo '<div style="position: absolute; right:0px;">';
                  echo 'logged in as :'.$this->session->userdata('id');
                  echo '</div>';
             ?>
                <a href="<?php echo base_url().'index.php'?>" data-icon="delete">Logout</a> 
             <?php
             }else
             {
             ?>
                 <a href="<?php echo base_url().'index.php/login/loginScreen'?>" data-icon="grid">Login</a> 
             <?php
             }
            ?>
            
            <div id="logo"><!-- logo div -->
    		<a href="<?php echo base_url().'index.php/primary_control'?>"><img src="<?php echo base_url().'images/BU Logo2.png'?>" alt="logo"/></a>
            </div><!-- end of logo div -->
	</div><!-- end of header -->

        <div data-role="content">
        <div id="wrapper_one">
        <div id="panel" data-role="controlgroup" data-type="horizontal" data-theme="a"  >
            <a href="<?php echo base_url().'index.php'?>" data-transition="fade" data-role="button" data-theme="b" style="width:210px;">Home</a>
            <a href="<?php echo base_url().'index.php/login/loginScreen'?>"  class="ui-btn-active" data-transition="pop" data-role="button" data-theme="b" style="width:210px;">Application Form</a>
            <a href="<?php echo base_url().'index.php/main/information'?>" data-transition="fade" data-role="button" data-theme="b" style="width:200px;">Information</a>
            <a href="<?php echo base_url().'index.php/primary_control/news_archive'?>" data-transition="fade" data-role="button" data-theme="b" style="width:210px;">Notice Archive</a>
            <a href="<?php echo base_url().'index.php/primary_control/contact'?>" data-transition="fade" data-role="button" data-theme="b" style="width:210px;">Contacts</a>
         </div>    
            <?php 
            echo form_open('main/submit_signup');
            echo '<br/><strong>User ID</strong><br/>';
            echo form_input('id',set_value('id','Student ID'));
			if(isset($exists)) echo '<p class ="error"> '.$exists.'</p>';
			echo form_error('id');
            echo '<br/><strong>Password</strong><br/>';
			echo form_error('password');
            echo form_password('password',set_value('password',''));
            echo '<br/><strong>Retype Password</strong><br/>';
            echo form_password('password2',set_value('password',''));
			echo form_error('password2');
            echo '<br/><strong>Email</strong><br/>';
            echo form_input('email',set_value('email','Email ID'));
			echo form_error('email');
            echo form_submit('submit','Signup');
            ?>
            </div>
         </div><!-- /content -->
            
            
         <div id="footer" data-role="footer" data-theme="b">
		<p><small style="text-align:left">Copyright @ PixeLizard Interactives</small></p>
        </div><!-- end of footer -->
        </div>
        
    </body>
</html>
