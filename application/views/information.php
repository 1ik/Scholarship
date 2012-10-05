<html>
    <head>
        <title>Scholarship Information</title>
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
    </head>
    <body>
        <div data-role="page">
        <div id ="login_form"  style="text-align: center;" data-rel="dialog" data-theme="b" style="background: white">
            <div id="header_one" data-role="header" data-theme="b" style="height:100px">
             
            <div style="text-align:center">
                  <h1>BRACU Scholarship Registration</h1>
            </div>
            
            
            <div id="logo"><!-- logo div -->
    		<a href="<?php echo base_url().'index.php/primary_control'?>"><img id="sitelogo" src="<?php echo base_url().'images/BU Logo2.png'?>" alt="logo"/></a>
            </div><!-- end of logo div -->
	</div><!-- end of header -->

        <div data-role="content" style="overflow: visible;">
        <div id="wrapper_one" style="padding-left: 40px; padding-right: 40px;">
            <div id="panel" data-role="controlgroup" data-type="horizontal" data-theme="a"  >
                <a href="<?php echo base_url().'index.php'?>"  data-transition="fade" data-role="button" data-theme="b" style="width:150px;">Home</a>
                <a target="_blank" href="<?php echo base_url().'main/application_form'?>" data-transition="fade" data-role="button" data-theme="b" style="width:180px;">Application Form</a>
                <a href="<?php echo base_url().'index.php/main/information'?>" class="ui-btn-active" data-transition="fade" data-role="button" data-theme="b" style="width:200px;">Information</a>
                <a href="<?php echo base_url().'index.php/main/noticeArchive'?>" data-transition="fade" data-role="button" data-theme="b" style="width:180px;">Notice Archive</a>
                <a href="<?php echo base_url().'index.php/main/contact'?>" data-transition="fade" data-role="button" data-theme="b" style="width:150px;">Contacts</a>
         </div>   
            <hr/>
            <div style="text-align: justify;">
            Students will have to apply for tuition waiver 
            in the BRACU Recommended application form, available at 
            information desk. If the applicant is eligible then BRAC University 
            Scholarship committee will assess and select the candidate for scholarship. 
           </div>     
              <div data-role="collapsible" data-theme="c" data-content-theme="c" data-collapsed="false" style="text-align: left;">
                               <h3>Financial Aid Policiesin BRAC University</h3>
                               <h2>Types of Financial Aid</h2>
                               <ul>
                               <?php foreach ($min_cgpa as $value):?>
                               <li><?php echo $value->category?></li>
                               <?php endforeach;?>
                               </ul>
                               <br/>
                               <h3>Other types of Academic Awards</h3>
                               <ul>
                                   <li>Vice Chancellor's Certificate</li>
                                   <li>Dean's Certificate</li>
                               </ul>
                               <a href="#policy">Click here to Learn About scholarship Policy</a>        
                       </div><!--Collapsible -->
              
            
            
            <!-- Policy: Start -->
         
         <?php foreach ($info as $value):?>
            <div data-role="collapsible" data-theme="c" data-content-theme="c" data-collapsed="false" style="text-align: left;">
                    <p style="text-align: left;">
                    <?php echo $value->head;?>
                    <?php echo $value->msg;?>
                    </p>       
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
                </div> 
            </div>   
            <?php endforeach?>
             
             <!-- Policy: Ends -->     
        
            <div style="position: relative; text-align: left;">
                <div id="policy"></div>    
                    
                       <?php foreach ($min_cgpa as $value):?>
                        <div data-role="collapsible" data-theme="c" data-content-theme="c" data-collapsed="false">
                            <h3><?php echo $value->category;?></h3>
                            <strong>Minimum CGPA Required</strong>: <?php echo $value->cgpa;?>
                            <br/>
                            <span style="text-align: left">
                               <?php echo $value->description;?>
                            </span>
                            <?php if($value->id=="1"):?>
                            <div style="text-align: center; position: relative;left:200px;">
                            
                            <div class="ui-grid-b">
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-width: thin; background-color: white; width: 150px;">
                                        <div class="ui-bar ui-bar-b" style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            CGPA From
                                        </div>
                                </div>
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-left-width: thin;border-right-width: thin; border-top-width: thin ;border-bottom-width: thin; background-color: white; width: 150px;">
                                        <div class="ui-bar ui-bar-b"  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            CGPA To
                                        </div>
                                </div>
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-left-width: thin;border-right-width: thin; border-top-width: thin ;border-bottom-width: thin; background-color: white; width: 150px;">
                                        <div  class="ui-bar ui-bar-b" style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            Scholarship Amount(%)
                                        </div>
                                </div>
                        </div><!-- /grid-a -->
                            <?php foreach ($performance_info as $value):?>
                        <div class="ui-grid-a">
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-width: thin; background-color: white; width: 150px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <?php echo $value->cgpa_from?>
                                        </div>
                                </div>
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-left-width: thin;border-right-width: thin; border-top-width: thin ;border-bottom-width: thin; background-color: white; width: 150px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <?php echo $value->cgpa_to?>
                                        </div>
                                </div>
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-left-width: thin;border-right-width: thin; border-top-width: thin ;border-bottom-width: thin; background-color: white; width: 150px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <?php echo $value->amount?>
                                        </div>
                                </div>
                        </div><!-- /grid-a -->
                    <?php endforeach?>
                           </div>
                            <br/>
                            NOTE: GETTING TUITION WAIVER UNDER THIS CATEGORY WILL DEPEND ON THE AVAILABILITY OF FUND!!!

                            <?php endif;?>
                        
                         </div>
                        <?php endforeach?>
                      </div>
                    </div>   
                </div>    
        
        </div>
            
            
        <!-- </div><!-- /content -->
         <div id="footer" data-role="footer" data-theme="c" >
            <div id="footerWrapper">
                <div id="leftFooter" ><p><small style="text-align:left">Developed by <a target="_blank" style="text-decoration: none; color:#3c3c3c;" href ="http://www.pixelizard.com"> PixeLizard Interactives</a></small></p></div>
                <div id="rightFooter" ><p><a style="text-decoration: none;color: #3c3c3c;" href="<?php echo base_url().'index.php'?>">Home</a> | <a target="_blank" style="text-decoration: none;color: #3c3c3c;" href="<?php echo base_url().'main/application_form'?>">Application Form</a> | <a style="text-decoration: none;color: #3c3c3c;" href="<?php echo base_url().'index.php/main/information'?>">Information</a> | <a style="text-decoration: none;color: #3c3c3c;" href="<?php echo base_url().'index.php/main/noticeArchive'?>">Notice Archive</a> | <a style="text-decoration: none;color: #3c3c3c;" href="<?php echo base_url().'index.php/main/contact'?>">Contacts</a></p></div>
                </div>
        </div><!-- end of footer -->
            
        
         </div>
        
    </body>
</html>
