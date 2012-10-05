<html>
	<head>
		<title>
			<?php
				if (isset($title)) {
					echo $title;	
				} else {
					echo 'no title';
				}
			 ?>
		</title>
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
               	<?php if(isset($error)) echo $error;?>
		<?php echo form_open_multipart('main/do_upload');?>
			<div class="section">
				<span>
					<label for="userfile" class="desc">
						Pleaes Upload your photo
					</label>
                                    <br/>
					<input type="file" class="field file mideum" name="userfile" />
					<br/>
					<input type="submit" value="Upload" />
				</span>
                            <p>
                                Please Upload your image for scholarship. You can skip the process
                                for the moment if you do not have your image right now or you already have uploaded image.
                                Make sure you upload it before deadline.
                            </p>
                            <a href="<?php echo base_url().'main/skip'?>" >SKIP Image Upload</a>
			</div>
		</form>
                <a href="<?php echo base_url().'index.php'?>">Home</a>
                <br/>
                <a href="<?php echo base_url().'main/login'?>">Proceed To Login Page</a>
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