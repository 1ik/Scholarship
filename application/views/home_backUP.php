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
            
            
            
            <script type="text/javascript">
            $(document).ready(function() { 
                $('#s3slider').s3Slider({
                 timeOut: 4000
                });
            });
            </script>
            
          </head> 
<body> 

    <div data-role="page">

	<div id="header_one" data-role="header" data-theme="b" style="height:100px">
            <div style="text-align:center">
                  <h1>BRACU Scholarship Registration</h1>
            </div>
           
            
            <div id="logo"><!-- logo div -->
    		<a href="<?php echo base_url().'index.php/primary_control'?>"><img src="<?php echo base_url().'images/BU Logo2.png'?>" alt="logo"/></a>
            </div><!-- end of logo div -->
	</div><!-- end of header -->

	<div data-role="content" style="overflow: visible;">
            <div id="wrapper_one" style="height: 1600px;">     
         <div id="panel" data-role="controlgroup" data-type="horizontal" data-theme="a"  >
            <a href="<?php echo base_url().'index.php'?>" class="ui-btn-active" data-transition="fade" data-role="button" data-theme="b" style="width:150px;">Home</a>
            <a target="_blank" href="<?php echo base_url().'main/application_form'?>" data-transition="fade" data-role="button" data-theme="b" style="width:180px;">Application Form</a>
            <a href="<?php echo base_url().'index.php/main/information'?>" data-transition="fade" data-role="button" data-theme="b" style="width:200px;">Information</a>
            <a href="<?php echo base_url().'index.php/main/noticeArchive'?>" data-transition="fade" data-role="button" data-theme="b" style="width:180px;">Notice Archive</a>
            <a href="<?php echo base_url().'index.php/main/contact'?>" data-transition="fade" data-role="button" data-theme="b" style="width:150px;">Contacts</a>
         </div>
         <hr width="100%" />
         <div id="titleBanner" style="background-color: black;">
             
             <div id="s3slider" style="background-color: #003399;">
               <!-- <ul id="s3sliderContent">
                    <li class="s3sliderImage">
                        <img src="<?php echo base_url().'images/banner1.png'?>">
                        <span>Your text comes here</span>
                    </li>
                    <li class="s3sliderImage">
                        <img src="<?php echo base_url().'images/banner2.png'?>">
                        <span>Your text comes here</span>
                    </li>
                    <div class="clear s3sliderImage"></div>
                </ul> -->
              
               <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" 

                codebase="http://download.macromedia.com/pub/shockwave/
                cabs/flash/swflash.cab#version=6,0,40,0" 

                
                 id="mymoviename"> 

                <param name="movie"  

                value="example.swf" /> 

                <param name="quality" value="high" /> 

                <param name="bgcolor" value="#ffffff" /> 

                <embed src="<?php echo base_url().'images/slide1.swf';?>" quality="high" bgcolor="#ffffff"

                width="890" height="300" 

                name="mymoviename" align="" type="application/x-shockwave-flash" 

                pluginspage="http://www.macromedia.com/go/getflashplayer"> 


</embed> 

</object> 
            </div>
         </div>
         <div id="informationBox">
           <div id="eligBox" data-collapsed="false" data-role="collapsible" data-theme="b" data-content-theme="b">
               <h3>Financial Aid Policy for Pharmacy Department</h3>
               <p style="text-align: justify">
                   Unlike three semesters for other departments, Pharmacy Department offers two semester om each year.
                   i.e from January to June and July to December respectively. Hence, a separate budget for the scholarship
                   for this department needs to be allocated.
                   <br/>
                   Below are the rules for qualifying for the scholarship award:
               </p>
               
                   
               <ul style="text-align: justify">    
                   <li>
                       In the <strong>first semester</strong> a student will have to take <strong>15 credits</strong>
                       with compulsory a non-credit <strong>English and Mathematics if required</strong>.
                   </li>
                   <br/>
                   <li>
                       Students who are in the "<strong>Residential Semester (RS)</strong>" will be required to take
                       compulsory <strong>9 Credits</strong> while in RS and another <strong>6 Credits</strong>
                       in total <strong>15 Credits</strong> within <strong>that Semester only</strong>.
                   </li>
                   <br/>
                   <li>
                       If there si any <strong>Retake/Repeat/ F (Grade)</strong> in a student's previous semester
                       result, he/she will not be eligible to apply for <strong>Performance Based</strong> tuition waiver.
                   </li>
                   <br/>
                   <li>
                       Students having <strong>Retake/ Repeat</strong> subjects in a semester and applying for tuition
                       fee waiver would be required to pay for the retake/ repeat subjects.
                   </li>
                   <br/>
                   <li>
                       If any student <strong>Fails</strong> in any subject in a semester, he/she will not be 
                       considered for tuition fee waiver for the <strong>next semester</strong>. If he/she improves,
                       then may apply for subsequent semesters/ Scholarship Committee has the right to decided his/her
                       eligibility for scholarship.
                   </li>
                   <br/>
                   <li>
                       Students having <strong>"I"</strong> grade in a semester will have to pay for all the courses
                       in the next semester. If he/she obtains the required CGPA after <strong>"Make Up"</strong>
                       his/her waiver for the next semester will be adjusted.
                   </li>
                   <br/>
                  For all the semester other than <strong>1st and RS</strong>, students taking 18 Credits in a semester will 
                  get tuition waiver on the basis of following categories.
                </ul>
               <div style="height: auto;width: auto;border-width: thin;">
                <div class="ui-grid-a">
                                <div class="ui-block-a">
                                    <div class="ui-bar ui-bar-b" style="height:25px">
                                        Category
                                    </div>
                                </div>
                                <div class="ui-block-b">
                                    <div class="ui-bar ui-bar-b" style="height:25px">
                                        Minimum CGPA
                                    </div>
                            </div>
                </div><!-- /grid-a -->
                <div class="ui-grid-a">
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-width: thin; background-color: white; width: 254px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <strong>Performance Based Scholarship</strong>
                                        </div>
                                </div>
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-left-width: thin;border-right-width: thin; border-top-width: thin ;border-bottom-width: thin; background-color: white; width: 254px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <strong>3.70</strong>
                                        </div>
                                </div>
                </div><!-- /grid-a -->
                
                <div class="ui-grid-a">
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-width: thin; background-color: white; width: 254px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <strong>Merit Based Scholarship</strong>
                                        </div>
                                </div>
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-width: thin; background-color: white; width: 254px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <strong>3.50</strong>
                                        </div>
                                </div>
                </div><!-- /grid-a -->
                
                <div class="ui-grid-a">
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-width: thin; background-color: white; width: 254px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <strong>Siblings based Scholarship</strong>
                                        </div>
                                </div>
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-width: thin; background-color: white; width: 254px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <strong>3.00</strong>
                                        </div>
                                </div>
                </div><!-- /grid-a -->
                
                <div class="ui-grid-a">
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-width: thin; background-color: white; width: 254px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <strong>BRAC FORD Scholarship</strong>
                                        </div>
                                </div>
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-width: thin; background-color: white; width: 254px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <strong>3.00</strong>
                                        </div>
                                </div>
                </div><!-- /grid-a -->
                
                <div class="ui-grid-a">
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-width: thin; background-color: white; width: 254px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <strong>Need Based Scholarship</strong>
                                        </div>
                                </div>
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-width: thin; background-color: white; width: 254px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <strong>3.00</strong>
                                        </div>
                                </div>
                </div><!-- /grid-a -->
                
                
                <div class="ui-grid-a">
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-width: thin; background-color: white; width: 254px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <strong>BRACU Employee Child Scholarship</strong>
                                        </div>
                                </div>
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-width: thin; background-color: white; width: 254px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <strong>3.00</strong>
                                        </div>
                                </div>
                </div><!-- /grid-a -->
                
                <div class="ui-grid-a">
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-width: thin; background-color: white; width: 254px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <strong>BRAC Employee Child Scholarship</strong>
                                        </div>
                                </div>
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-width: thin; background-color: white; width: 254px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <strong>2.50</strong>
                                        </div>
                                </div>
                </div><!-- /grid-a -->
                
                <div class="ui-grid-a">
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-width: thin; background-color: white; width: 254px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <strong>Physically Challenged Scholarsip</strong>
                                        </div>
                                </div>
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-width: thin; background-color: white; width: 254px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <strong>3.00</strong>
                                        </div>
                                </div>
                </div><!-- /grid-a -->
                
                <div class="ui-grid-a">
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-width: thin; background-color: white; width: 254px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <strong>Freedom Fighter Category Scholarship</strong>
                                        </div>
                                </div>
                                <div class="ui-block-b" style="border: #000;border-style: solid; border-width: thin; background-color: white; width: 254px;">
                                        <div  style="height:25px;font-size: small; background-color: white; text-align: center; padding-top: 10px;">
                                            <strong>3.00</strong>
                                        </div>
                                </div>
                </div><!-- /grid-a -->
                
           </p>
           </div>     
           </div>
           <div id="newsBox" data-collapsed="false" data-role="collapsible" data-theme="b" data-content-theme="b">
               <h3>Notice and News</h3>
            <p>
                <strong style="color: red; font-size: large; font-style: italic;" ><blink>Notice</blink></strong>
                <br/>
                <?php foreach ($news as $value):?>
                
                <p style="font-size: large; text-align: center">Financial Aid</p>
                
                <p style="font-size: large; text-align: center">BRAC University</p>
                <p style="font-size: large; text-align: center">Semester: <?php echo $value->semester;?>
                <p style="font-size: large; text-align: center">Date : <?php echo $value->date;?></p>
                
                The students who wish to apply for financial aid under 
                <strong><?php echo $value->category;?></strong>
                category will have to fill up the financial aid application form of BRAC University.<br/>

                Forms are available from<?php echo $value->available;?>in the following link:<br/>
                <?php echo $value->link;?>
                The last date for submitting the filled out form is <?php echo $value->submission;?><br/>
                <?php echo $value->sign;?><br/>
                Head, RMO 
                <hr/><hr/><hr/>
                <?php endforeach?>     
            </p>

           </div>
         </div>
        </div>
            
        </div><!-- /content -->
        <div id="footer" data-role="footer" data-theme="b"">
		<p><small style="text-align:left">Copyright @ PixeLizard Interactives</small></p>
        </div>
        <script type="text/javascript">
       
       
       $("#logOut").click(function () {
           window.location = "<?php echo base_url().'index.php'?>";
        })


        var i =0;
        $("#nextButton").click(function() {
            if(i==0)
            {
              $("#s3slider").animate({"left": "-890px"}, "slow");
              $("#nextButton").animate({"left": "890px"}, "slow");  
            i=1;
            return;
            }
            if(i==1)
            {
              $("#s3slider").animate({"left": "0px"}, "slow");
              $("#nextButton").animate({"left": "800px"}, "slow");  
              i=0;
              return;
            }
            
        });
        </script>
</div><!-- /page -->
      
</body>
</html>