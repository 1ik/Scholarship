<!DOCTYPE html> 

<html> 
	<head> 
	<title>Contacts</title>
            <meta name="viewport" content="width=device-width, initial-scale=1"> 
            <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
            <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
            <link href="<?php echo base_url().'css/base.css';?>" rel="Stylesheet" type="text/css"/>
            <link href="<?php echo base_url().'css/s3slideCss.css';?>" rel="Stylesheet" type="text/css"/>
            <script src="<?php echo base_url().'js/s3slider.js';?>"></script>
            <script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
            
            
          </head> 
<body> 

    <div data-role="page" ">

	<div id="header_one" data-role="header" data-theme="b" style="height:100px">
            <div style="text-align:center">
                  <h1>BRACU Scholarship Registration</h1>
            </div>
            
            
            <div id="logo"><!-- logo div -->
    		<a href="<?php echo base_url().'index.php/primary_control'?>"><img src="<?php echo base_url().'images/BU Logo2.png'?>" alt="logo"/></a>
            </div><!-- end of logo div -->
	</div><!-- end of header -->

        
	<div data-role="content" style="overflow: visible; height: 100%;">
            <div id="wrapper_one" style="height: 1000px">
         <div id="panel" data-role="controlgroup" data-type="horizontal" data-theme="a"  >
            <a href="<?php echo base_url().'index.php'?>" data-transition="fade" data-role="button" data-theme="b" style="width:150px;">Home</a>
            <a target="_blank" href="<?php echo base_url().'main/application_form'?>" data-transition="fade" data-role="button" data-theme="b" style="width:180px;">Application Form</a>
            <a href="<?php echo base_url().'index.php/main/information'?>" data-transition="fade" data-role="button" data-theme="b" style="width:200px;">Information</a>
            <a href="<?php echo base_url().'index.php/main/noticeArchive'?>" data-transition="fade" data-role="button" data-theme="b" style="width:180px;">Notice Archive</a>
            <a href="<?php echo base_url().'index.php/main/contact'?>"  class="ui-btn-active"  data-transition="fade" data-role="button" data-theme="b" style="width:150px;">Contacts</a>
         </div>
          
                <?php echo $msg?>

              
         <hr width="100%" />
         <div id="contactInfo" >
             <br/>
         <?php echo form_open('contact_control/send_email');?>
              <div style="position: relative;left: 0px; right: 200px; width: 250px; ">
          <?php
          echo 'Enter your name';
          echo '<br/>';
          $passVal = array(
              'name'        => 'nameStudent',
              'class'          => '',
              'size'          => '20',
              'value'       => set_value('password',''),
                'title' => 'Enter your Password',
            );
            echo form_input($passVal);
           

            echo '<br/>';
             
            echo 'Enter your Student ID';
          echo '<br/>';
            $passVal = array(
              'name'        => 'nameStudent',
              'class'          => '',
              'value'       => set_value('password',''),
                'title' => 'Enter your Password',
            );
            echo form_input($passVal);
          
            ?>
                  </div>
         <?php
         
         echo '<br/>';
         $data = array(
              'name'        => 'mail_text',
              'id'          => 'mail_text',
              'value'       => '',
              'style'       => 'height: 150px; width: 400px;'
            );
         echo form_textarea($data); 
         ?>
        </div>
         <br/>
         <div style="position: relative; padding-left: 150px; width: 192px; ">
            <?php echo form_submit('submit', 'Submit'); ?>
         </div>

         <?php echo form_close();?>
         <div id="map">
             <iframe src="http://www.map-generator.org/fef85eff-d6c4-41ca-83d2-62b2e65ffa31/iframe-map.aspx" scrolling="no" height="400px" width="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
         </div>
         
         <div style="position: relative;left: 200px; text-align: center; width: 500px; ">
            <br/>
             <br/>
             <br/>
             <b>For further queries.</b><br/>
             Please Contact:&nbsp; <i>8824051(ext 4003), &nbsp; 9853948, &nbsp; 9853949</i><br/>
             E-mail: <i>infodesk@bracu.ac.bd</i>
         </div>
        </div>
            
        </div><!-- /content -->
        <div id="footer" data-role="footer" data-theme="c" >
            <div id="footerWrapper">
                <div id="leftFooter" ><p><small style="text-align:left">Developed by <a target="_blank" style="text-decoration: none; color:#3c3c3c;" href ="http://www.pixelizard.com"> PixeLizard Interactives</a></small></p></div>
                <div id="rightFooter" ><p><a style="text-decoration: none;color: #3c3c3c;" href="<?php echo base_url().'index.php'?>">Home</a> | <a target="_blank" style="text-decoration: none;color: #3c3c3c;" href="<?php echo base_url().'main/application_form'?>">Application Form</a> | <a style="text-decoration: none;color: #3c3c3c;" href="<?php echo base_url().'index.php/main/information'?>">Information</a> | <a style="text-decoration: none;color: #3c3c3c;" href="<?php echo base_url().'index.php/main/noticeArchive'?>">Notice Archive</a> | <a style="text-decoration: none;color: #3c3c3c;" href="<?php echo base_url().'index.php/main/contact'?>">Contacts</a></p></div>
                </div>
        </div><!-- end of footer -->
        <script type="text/javascript">
       
       
       $("#logOut").click(function () {
           window.location = "<?php echo base_url().'index.php'?>";
        })

        </script>
</div><!-- /page -->
      
</body>
</html>