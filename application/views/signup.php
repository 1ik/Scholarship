<html>
    <head>
        <title>Student Signup</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <!-- Start: jquery Mobile Integration -->
            
            <!-- Start:  take if from net -->
            <!--<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />-->
            <!-- <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script> -->
            <!--<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>-->
            <!-- End if from Net -->
            
            
            <!-- Start : take it from local -->
            <!--<link rel="stylesheet" href="<?php echo base_url().'css/jquery.mobile-1.1.0.css';?>">-->
            <!--<script src="<?php echo base_url().'js/jquery-1.7.2.js';?>"></script>-->
            <!--<script src="<?php echo base_url().'js/jquery.mobile-1.1.0.min.js';?>"></script>-->
            <!-- End: Take it from Local -->
            
            <!-- End: Jquery Mobile Inegration -->
            <script src="<?php echo base_url().'js/jquery-1.7.2.js';?>"></script>
            <script src="<?php echo base_url().'js/jquery.tipsy.js';?>"></script>
            <link rel="stylesheet" href="<?php echo base_url().'css/tipsy.css';?>">
            <link href="<?php echo base_url().'css/base.css';?>" rel="Stylesheet" type="text/css"/>
    </head>
    <body style="background-color: #e0e0e0">
        <div id ="login_form" data-role="page" style="text-align: center;" data-rel="dialog" data-theme="b" style="background: white">
<!--            <div id="header_one" data-role="header" data-theme="b" style="height:100px">
             
            <div style="text-align:center">
                  <h1>BRACU Scholarship Registration</h1>
            </div>
            
            
            <div id="logo"> logo div 
    		<a href="<?php echo base_url().'index.php/primary_control'?>"><img src="<?php echo base_url().'images/BU Logo2.png'?>" alt="logo"/></a>
            </div> end of logo div 
            </div> end of header -->
                <div id="dummyHeader" style="height: 100px;">
                <br/>
                <strong>BRACU Scholarship Registration</strong>   
                </div>

        <div data-role="content">
            <div id="wrapper_login">
           
           <div id="login_form_area">
               <?php
            echo form_open('main/submit_signup');
           ?>
               
               <div id="leftColumn">
                
            <div id"formStudentID">
                 <?php
            echo '<br/><strong>Student ID:
                </strong>';
            echo '<br/>';
            ?>
            </div>
            
            <div id="formAppID">
                <?php
             echo '<br/><strong>Applicant ID:</strong>';
             echo '<br/>';
             ?>
                </div>
             <div id="formPass">
                 <?php
             echo '<br/><strong>Password:</strong>';
             echo '<br/>';
             ?>
                 </div>
             <div id="formRPass">
                 <?php
             echo '<br/><strong>Retype Password:</strong>';
             echo '<br/>';
             ?>
                 </div>
                 <div id="formEmail">
                     <?php
             echo '<br/><strong>Email:</strong>';
             echo '<br/>';
             ?>
                     </div>
                     <div id="formToken">
                         <?php
             echo '<br/><strong>Token Number:</strong>';
                ?>
                         </div>
               </div>
               <div id="rightColumn">

               
            <?php
             echo form_open('main/submit_signup');
            
            echo '<br/>';
            $idVal = array(
              'name'        => 'id',
              'class'          => 'userid',
              'value'       => set_value('id',''),
              'title' => 'Enter your Student ID',
            );
            echo form_input($idVal);
            
            echo '<br/>';
            echo '<br/>';
            
            
            
            
            $appIdVal = array(
              'name'        => 'appID',
              'class'          => 'userid',
              'value'       => set_value('appID',''),
                'title' => 'Enter your Applicant ID, to know your Applicant ID visit : http://www.bracu.ac.bd/ro login and see your personal details',
            );
            echo form_input($appIdVal);
            
            echo '<br/>';
            echo '<br/>';
            
            
            
            $passVal = array(
              'name'        => 'password',
              'class'          => 'userid',
              'value'       => set_value('password',''),
                'title' => 'Enter your Password',
            );
            echo form_password($passVal);
            
            echo '<br/>';
            echo '<br/>';
            
            
            $pass2Val = array(
              'name'        => 'password2',
              'class'          => 'userid',
              'value'       => set_value('password2',''),
                'title' => 'Re-enter your Password',
            );
            //echo form_password('password2',set_value('password',''));
            echo form_password($pass2Val);
            
            echo '<br/>';
            echo '<br/>';
            
            
            
            $emailVal = array(
              'name'        => 'email',
              'class'          => 'userid',
              'value'       => set_value('email',''),
                'title' => 'Enter your Email Address',
            );
            //echo form_input('email',set_value('email',''));
            echo form_input($emailVal);
            
            echo '<br/>';
            echo '<br/>';
            
            
                      
            $tokenVal = array(
              'name'        => 'token',
              'class'          => 'userid',
              'value'       => set_value('token',''),
                'title' => 'Type in the Token number collected from BRACU information desk',
            );
            //echo form_input('token',set_value('token',''));
            echo form_input($tokenVal);
            
            ?>
            </div> <!-- end of right column -->
            <div id="errorColumn">
                <?php
                echo '<br/>';
                echo '<br/>';
                /*echo '<span style="color: red;">';*/
            if(isset($exists)) echo $exists;
            ?>
            <div id="errorUserID">
                <?php
            echo form_error('id');
            ?>
            </div>
            
            <div id="errorAppID">
              <?php
            echo form_error('appID');
            ?>
            </div>
            
            <div id="errorPassword">
                <?php
            echo form_error('password');
            ?>
            </div>
            <div id="errorPassword2">
                <?php
            echo form_error('password2');
            ?>
            </div>
            <div id="errorEmail">
                <?php
            echo form_error('email');
            ?>
            </div>

            <div id="errorToken">
                <?php
            echo form_error('token');
            ?>
            </div>

            </div> <!-- end of errorColumn -->
  
            
            <?php echo $cap_img ?>
  <input type="text" id="captcha" name="captcha" value="" />
  <?php echo form_error('captcha'); ?>
  
  
  
  
  
  
            
            
            <div id="submitArea">
            <?php
            
            echo '<input type="submit" name="submit" id="subId" value="Signup"/>'; 
            ?>
                   
               <br/><br/>
               <a href="<?php echo base_url().'index.php'?>"><small>Home</small></a> |
               
               <a href="<?php echo base_url().'main/login'?>"><small>Go to Login Page</small></a>
             </div>
           </div>
            </div>
         </div><!-- /content -->
            
            
         
        </div>
        <div id="footerSignup"  >
		<small >Developed by PixeLizard Interactives</small>
        </div><!-- end of footer -->
        <script type='text/javascript'>
    $(function() {
      $('#login_form_area [title]').tipsy({trigger: 'focus', gravity: 'w'});
    });
  </script>
    </body>
</html>
