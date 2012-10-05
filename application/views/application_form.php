<html>
    <head>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url() . '/css/framework/960/code/css/reset.css'; ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url() . '/css/framework/960/code/css/text.css'; ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url() . '/css/framework/960/code/css/960_24_col.css'; ?>" />
        <!-- 		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url() . '/css/framework/960/code/css/demo.css'; ?>" /> -->
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url() . 'css/framework/wufooTheme2/css/structure.css'; ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url() . 'css/framework/wufooTheme2/css/form.css'; ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url() . 'css/framework/wufooTheme2/css/theme.css'; ?>" />
        <script type="text/javascript" src="<?php echo base_url() . 'css/framework/wufooTheme2/scripts/wufoo.js'; ?>"></script>
        <style type="text/css">
            table {
                border: 2px solid black;
                margin-left: 10px;
            }
            tr {
                padding: 5px;
                border: 1px dotted black;
            }
            td {
                border: 1px dotted black;
                padding: 5px;
            }
            th {
                border: 1px solid black;
                padding: 5px;
                font-weight: 700;
            }
            .errormessege {
                display: block !important;
                background-color: #FFDFDF !important;
                margin-bottom: 3px !important;
                color: #ff3737;
            }
            .tableerror {
                border: 2px solid red;
            }
            .tderror {
                border: 2px solid red;
            }


            .tderror input {
                border: 2px solid red;
            }
            .tderror p {
                color: red;
                font-size: 12px;
            }
            .stretch{
                padding-left: 5px;
            }
            .errorlabel{
                color: red;
                font-family: Curier NEW;
                font-weight: 600;
            }

            .checkboxlist{
                float: left;
            }
            #blueLabel
            {
                color:#205f9c;
            }

        </style>
        <!-- <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url() . 'css/jquery-ui.css'; ?>" />
        <script type="text/javascript" src="<?php echo base_url() . 'js/jquery-1.7.2.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/jquery.ui.core.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/jquery.ui.datepicker.js'; ?>"></script> -->
        <!-- 	<script>
        $(function() {
        $("#datepicker").datepicker({dateFormat: 'MM'});
        });

        </script> -->
    </head>
    <body id = "public">
        <div class="container_24">
            <div id="container">

                <a style="margin-left: 850px;" href="index"> Home</a> |
                <a  href="logout">Logout</a>

                <form name="application_form" class="wufoo" method="post" accept-charset="utf-8" action="<?php echo base_url() . 'main/submit_application'; ?>" />
                <!-- information of the form -->
                <div class="info">

                    <div class="right">
                        <?php if (isset($image_url)): ?>
    <!--							<img  height="100px" width="90px" src="<?php echo base_url() . 'uploads/' . $image_id . '.jpg'; ?>"  />-->
    <!--                                                        <input type="text" style="position: absolute;visibility: hidden" name="image_url" value="<?php echo base_url() . 'uploads/' . $image_id . '.jpg'; ?>" />-->
                            <?php $image_loc = ''; ?>
                            <?php foreach ($image_url as $value): ?>
                                <?php $image_loc = $value->image_url; ?>

                            <?php endforeach; ?>   
                            <img  height="100px" width="90px" alt="nai" src="<?php echo $image_loc; ?>"  />
                        <?php endif ?>

                    </div>

                    <h1>Scholarship Form</h1>
                    <p>
                        You have logged in as <?php echo $student_id; ?><br/>
                        <?php if(isset($pending_request)) echo $pending_request; ?>
                    </p>
                    
                    <div>
                        Please fill up the scholarship form.<br/>
                        <span id="blueLabel">Fields marked with * are <b>MANDATORY</b></a>
                    </div>


                </div>
                <!-- end of information part -->				

                <ul>   <!-- form starts -->
                    <li class="section first">
                        <h3><strong>Scholarship category</strong></h3>
                        <div>
                            Select the category of scholarship(s) you want to apply for.<br/>
                            <span id="blueLabel">* You must select atleast one of the categories</span>
                        </div>
                    </li>

                    <li>
                        <div class="left">
                            <span >
                                
                                <input name="category[]" class="field checkbox" type="checkbox" value="performance" 
                                       <?php if($category['performance']!=0) echo 'checked = "checked"' ?> />
                                       
                                <label class="choice">Performance Based</label></span>
                            <span>
                                <input name="category[]" class="field checkbox" type="checkbox" value="merit"
                                       <?php if($category['merit']!=0) echo 'checked = "checked"' ?>
                                       />
                                
                                <label class="choice">Merit Based</label></span>
                            <span>
                                <input name="category[]" class="field checkbox" type="checkbox" value="needbased"
                                       <?php if($category['needbased']!=0) echo 'checked = "checked"' ?>
                                       
                                       />
                                
                                <label class="choice">Need Based</label></span>
                        </div>

                        <div class="right">
                            <span >
                                <input name="category[]" class="field checkbox" type="checkbox" value="spouse" 
                                       <?php if($category['spouse']!=0) echo 'checked = "checked"' ?>
                                       
                                       />
                                <label class="choice">Spouse</label></span>
                            <span>
                                <input name="category[]" class="field checkbox" type="checkbox" value="siblings"
                                       <?php if($category['siblings']!=0) echo 'checked = "checked"' ?>
                                       />
                                <label class="choice">Siblings Studying at BRACU</label>
                            </span>
                            <span>
                                <input name="category[]" class="field checkbox" type="checkbox" value="brac_employee"
                                       <?php if($category['brac_employee']!=0) echo 'checked = "checked"' ?>
                                       />
                                
                                <label class="choice">BRAC Employee Children</label>
                            </span>
                        </div>


                        <div class="left">
                            <span >
                                <input name="category[]" class="field checkbox" value="brac_ford" type="checkbox"
                                       <?php if($category['brac_ford']!=0) echo 'checked = "checked"' ?>
                                       
                                       />
                                <label class="choice">BRAC-Ford Scholarship Program </label></span>
                            <span>
                                <input name="category[]" class="field checkbox" type="checkbox" value="phyic_challanged"
                                       
                                       <?php if($category['phyic_challanged']!=0) echo 'checked = "checked"' ?>
                                       
                                       />
                                <label class="choice">Physically Challenged Students</label></span>
                            <span>
                                <input name="category[]" class="field checkbox" type="checkbox" value="bracu_employee"
                                       
                                       <?php if($category['bracu_employee']!=0) echo 'checked = "checked"' ?>
                                       />
                                
                                
                                <label class="choice">BRACU Employee Children</label>
                            </span>
                            <span>
                                <input name="category[]" class="field checkbox" type="checkbox" value="freedom_fighter"
                                       
                                       <?php if($category['freedom_fighter']!=0) echo 'checked = "checked"' ?>
                                       />
                                
                                <label class="choice">Other</label>
                                
                            </span>
                        </div>
                    </li>


                    <span style="color: red"> <?php echo form_error('category'); ?> </span>
                    <!-- scholarship category ends  -->


                    <!-- full name -->
                    <li class="section <?php if (form_error('name') != '') echo 'error'; ?> " id="fullname">
                        <h3>Your Full Name<span id="blueLabel">*</span></h3>
                        <div>
                            in <strong>BLOCK</strong> letters
                        </div>
                        <div>
                            <input name="name" class="field text medium " type="text" maxlength="255" value="<?php if (isset($name)) echo $name; ?> "/>
                        </div>
                        <span class="errormsg"/>
                        <?php echo form_error('name'); ?>
                        </span>
                    </li>

                    <!-- full name ends -->


                    <!-- date starts -->
                    <div class="grid_6">
                        <li class="small">
                            <label class="desc">Date of Birth<span id="blueLabel">*</span></label>
                            <span>

                                <select name="dd" class="field select" style="width:4em">
                                    <?php
                                    for ($i = 1; $i < 32; $i++) {
                                        ?>

                                        <?php if (isset($dd) && $dd == $i) { ?>
                                            <option selected="selected" value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php } else { ?>
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php } ?>
                                        <?php
                                    }
                                    ?>
                                </select> <label>DD</label>
                            </span>


                            <span>
                                <select name="mm" class="field select" style="width:4em">
                                    <?php
                                    for ($i = 1; $i <= 12; $i++) {
                                        ?>

                                        <?php if (isset($mm) && $mm == $i) { ?>
                                            <option selected="selected" value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php } else { ?>
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php } ?>



                                        <?php
                                    }
                                    ?>
                                </select> <label>MM</label>
                            </span>


                            <span>
                                <select name="yy" class="field select" style="width:4em">
                                    <?php
                                    for ($i = 1980; $i <= date("Y"); $i++) {
                                        ?>

                                        <?php if (isset($yy) && $yy == $i) { ?>
                                            <option selected="selected" value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php } else { ?>
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php } ?>

                                        <?php
                                    }
                                    ?>
                                </select> <label>YY</label>
                            </span>
                        </li>
                    </div>
                    <!-- date ends -->




                    <!-- birth place starts -->
                    <div class="grid_7 ">
                        <li class="section <?php if (form_error('birth_place') != '') echo 'error'; ?> " id="fullname">
                            <label class="desc" for="birth_place">Place of Birth<span id="blueLabel">*</span></label>
                            <div>
                                <input name="birth_place" class="field text large " type="text" maxlength="255" value="<?php if (isset($birth_place)) echo $birth_place; ?>"/>
                                <span class="errormsg"/>
                                <?php echo form_error('birth_place'); ?>
                                </span>
                            </div>
                        </li>

                    </div>
                    <!-- birth place ends -->





                    <div class="grid_8 sep">
                        <label style="padding-left: 5px" class="desc" >Gender<span id="blueLabel">*</span> :</label>

                        <div class="grid_3">
                            <input id="male" name="gender[]" class="field radio" type="radio" value="0" checked="checked"/>
                            <label class="choice" for="choice1">Male</label></span>
                        </div>

                        <?php if (isset($gender) && $gender[0] == '1') { ?>
                            <div class="grid_3">
                                <input id="female" name="gender[]" class="field radio" type="radio" value="1" checked="checked"/>
                                <label class="choice" for="choice1">Female</label></span>
                            </div>
                        <?php } else { ?>
                            <div class="grid_3">
                                <input id="female" name="gender[]" class="field radio" type="radio" value="1"/>
                                <label class="choice" for="choice1">Female</label></span>
                            </div>		
                        <?php } ?>

                    </div>

                    <!-- select gender ends -->


                    <!-- martial status starts -->
                    <div class="grid_24">
                        <label style="padding-left: 5px" class="desc" >Marital Status <span id="blueLabel"><br/>*Necessary if the student is applying for Spouse Based Scholarship</span>:</label>
                        <div class="grid_3">
                            <input id="single" name="marital_status[]" class="field radio" type="radio" value="0" checked="checked" />
                            <label class="choice" for="0">Single</label></span>
                        </div>

                        <?php if (isset($marital_status) && $marital_status[0] == '1') { ?>
                            <div class="grid_3">
                                <input id="married" name="marital_status[]" class="field radio" type="radio" value="1" checked="checked" />
                                <label class="choice" for="1">Married</label></span>
                            </div>
                        <?php } else { ?>
                            <div class="grid_3">
                                <input id="married" name="marital_status[]" class="field radio" type="radio" value="1" />
                                <label class="choice" for="1">Married</label></span>
                            </div>
                        <?php } ?>		
                    </div>

                    <div class="grid_24">
                        <span class="grid_6">
                            <label class="desc">Name of spouse <br/> (if married)</label>
                            <input name="spouse_name" class="field text addr large" type="text" value="<?php if (isset($spouse_name)) echo $spouse_name; ?>" />
                            <span class="errorlabel"> <?php echo form_error('spouse_name'); ?> </span>

                        </span>

                        <span class="grid_14">
                            <label class="desc">Spouse's BRACU ID<br/> (if spouse is currently a student of BRAC University)</label>
                            <input name="spouse_id" class="field text addr medium" type="text" value="<?php if (isset($spouse_id)) echo $spouse_id; ?>" />
                            <span class="errorlabel"> <?php echo form_error('spouse_id'); ?> </span>
                        </span>
                        
                       <span class="grid_18 errorlabel"> <?php if(isset($spouse_error)) echo $spouse_error; ?> </span>
                    </div>


                    <!-- martial status ends -->


                    <!-- father's information -->
                    <li class="complex <?php if (form_error('father_contact') || form_error('father_name') || form_error('father_income') || form_error('father_profession')) echo 'error'; ?>">

                        <div>
                            <span class="full">
                                <label class="desc">Father's Name<span id="blueLabel">*</span></label>
                                <input name="father_name" class="field text addr" type="text" value="<?php if (isset($father_name)) echo $father_name; ?>" />
                                <span> <?php echo form_error('father_name'); ?> </span>
                            </span>
                            <span class="left">
                                <label class="desc">Father's Profession<span id="blueLabel">*</span></label>
                                <input name="father_profession" class="field text addr" type="text" value="<?php if (isset($father_profession)) echo $father_profession; ?>" />
                                <span> <?php echo form_error('father_profession'); ?> </span>
                            </span>
                            <span class="right">
                                <label class="desc">Father's Monthly Income<span id="blueLabel">*</span></label>
                                <input name="father_income" class="field text addr" type="text" value="<?php if (isset($father_income)) echo $father_income; ?>" />
                                <span> <?php echo form_error('father_income'); ?> </span>
                            </span>

                            <span class="left">
                                <label class="desc">Father's Contact Number<span id="blueLabel">*</span>: </label>
                                <input name="father_contact" class="field text addr" type="text" value="<?php if (isset($father_contact)) echo $father_contact; ?>" />
                                <span> <?php echo form_error('father_contact'); ?> </span>
                            </span>

                        </div>
                    </li>	
                    <!-- father's information -->


                    <!-- mother's information -->

                    <li class="complex <?php if (form_error('mother_name') || form_error('mother_contact') || form_error('mother_name') || form_error('mother_income') || form_error('mother_profession')) echo 'error'; ?>">
                        <div>
                            <span class="full">
                                <label class="desc">Mother's Name<span id="blueLabel">*</span></label>
                                <input name="mother_name" class="field text addr" type="text" value="<?php if (isset($mother_name)) echo $mother_name; ?>" />
                                <span> <?php echo form_error('mother_name'); ?> </span>
                            </span>
                            <span class="left">
                                <label class="desc">Mother's Profession<span id="blueLabel">*</span></label>
                                <input name="mother_profession" class="field text addr" type="text" value="<?php if (isset($mother_name)) echo $mother_profession; ?>" />
                                <span> <?php echo form_error('mother_profession'); ?> </span>
                            </span>
                            <span class="right">
                                <label class="desc">Mother's Monthly Income<span id="blueLabel">*</span></label>
                                <input name="mother_income" class="field text addr" type="text" value="<?php if (isset($mother_income)) echo $mother_income; ?>" />
                                <span> <?php echo form_error('mother_income'); ?> </span>
                            </span>

                            <span class="left">
                                <label class="desc">Mother's Contact Number<span id="blueLabel">*</span>: </label>
                                <input name="mother_contact" class="field text addr" type="text" value="<?php if (isset($mother_contact)) echo $mother_contact; ?>" />
                                <span> <?php echo form_error('mother_contact'); ?> </span>
                            </span>

                        </div>
                    </li>
                    <!-- mother's information -->
                    <span class="left">
                        <label class="desc">Employee ID Number <span id="blueLabel">*(Necessary for BRAC/BRACU Children Based Scholarship)</span> </label>
                        <input name="employee_id" class="field text addr" type="text" value="<?php if (isset($employee_id)) echo $employee_id; ?>" />
                        <span> <?php echo form_error('employee_id'); ?> </span>
                        <label class="errorlabel"> <?php if(isset($employee_error)) echo $employee_error; ?> </label>
                    </span>

                    <!-- guardian's information -->
                    <li class="complex <?php if (form_error('guardian') || form_error('guardian_profession') || form_error('guardian_contact')) echo "error"; ?> ">
                        <p style="font-weight: 600">In absence of father and mother, Legal guardian's Information</p>
                        <div>
                            <span class="full">
                                <label class="desc">Guardian's Name</label>
                                <input name="guardian" class="field text addr" type="text" value="<?php if (isset($guardian)) echo $guardian; ?>" />
                                <span> <?php echo form_error('guardian'); ?> </span>
                            </span>
                            <span class="left">
                                <label class="desc">Guardian's Profession</label>
                                <input name="guardian_profession" class="field text addr" type="text" value="<?php if (isset($guardian_profession)) echo $guardian_profession; ?>" />
                                <span> <?php echo form_error('guardian_profession'); ?> </span>
                            </span>
                            <span class="right">
                                <label class="desc">Guardian's Monthly Income</label>
                                <input name="guardian_income" class="field text addr" type="text" value="<?php if (isset($guardian_income)) echo $guardian_income; ?>" />
                                <span> <?php echo form_error('guardian_income'); ?> </span>
                            </span>
                            <span class="left">
                                <label class="desc">Guardian's Contact address: </label>
                                <input name="guardian_contact" class="field text addr" type="text" value="<?php if (isset($guardian_contact)) echo $guardian_contact; ?>" />
                                <span> <?php echo form_error('guardian_contact'); ?> </span>
                            </span>
                        </div>
                    </li>
                    <!-- guardian's information -->


                    <!-- fixed asset -->
                    <li class=" <?php if (form_error('fixed_asset')) echo 'error' ?> ;">
                        <label class="desc">Value of fixed asset (sole/joint) <span id="blueLabel">*</span> : </label>
                        <div>
                            <input name="fixed_asset" class="field text large" type="text" maxlength="255" value="<?php if (isset($fixed_asset)) echo $fixed_asset; ?>"/>
                            <span><?php echo form_error('fixed_asset'); ?> </span>
                        </div>
                    </li>


                    <!-- fixed asset -->


                    <!-- present address -->
                    <li class=" <?php if (form_error('present_address')) echo 'error' ?> ;">
                        <label class="desc">Present Address (Specific Direction)<span id="blueLabel">*</span> : </label>
                        <div>
                            <input name="present_address" class="field text large" type="text" maxlength="255" value="<?php if (isset($present_address)) echo $present_address; ?>"/>
                            <span class="errormessege"><?php echo form_error('present_address'); ?>  </span>
                        </div>
                    </li>

                    <!-- present address  ends-->




                    <!-- permanent address starts -->

                    <li class="complex   <?php if (form_error('permanent_village') || form_error('permanent_po') || form_error('permanent_po') || form_error('permanent_ps') || form_error('permanent_union') || form_error('permanent_district') || form_error('permanent_loc_area')) echo 'error' ?> ; ">
                        <label class="desc"> Permanent Address<span id="blueLabel">*</span></label>
                        <div>
                            <span class="small">
                                <input class="field text addr" type="text"  name="permanent_village" value="<?php if (isset($permanent_village)) echo $permanent_village; ?>"/>
                                <label>Village</label>
                                <span><?php echo form_error('permanent_village'); ?></span> 
                            </span>

                            <span class="small">
                                <input class="field text addr" type="text"  name="permanent_po" value="<?php if (isset($permanent_po)) echo $permanent_po; ?>" />
                                <label>P.O</label> 
                                <span><?php echo form_error('permanent_po'); ?></span>
                            </span>
                            <span class="small">
                                <input class="field text addr" type="text"  name="permanent_ps" value="<?php if (isset($permanent_ps)) echo $permanent_ps; ?>"/>
                                <label>P.S:</label>
                                <span><?php echo form_error('permanent_ps'); ?></span>

                            </span>


                            <span class="left">
                                <input class="field text addr" type="text" name="permanent_union" value="<?php if (isset($permanent_union)) echo $permanent_union; ?>" />
                                <label>Union:</label>
                                <span><?php echo form_error('permanent_union'); ?></span>
                            </span>

                            <span class="left ">
                                <input class="field text addr medium" type="text"  name="permanent_district" value="<?php if (isset($permanent_district)) echo $permanent_district; ?>" />
                                <label>District:</label>
                                <span><?php echo form_error('permanent_district'); ?></span> 
                            </span>

                            <span class="left sep">
                                <input class="field text addr medium" type="text"  name="permanent_loc_area" value="<?php if (isset($permanent_loc_area)) echo $permanent_loc_area; ?>"/>
                                <label>Located Area:</label>
                                <span><?php echo form_error('permanent_loc_area'); ?></span> 
                            </span>
                        </div>
                    </li>
                    <!-- permanent addres ends -->


                    <!-- contact information -->
                    <li class="complex <?php if (form_error('contact1') || form_error('contact2') || form_error('email')) echo "error"; ?>">
                        <label class="desc">Your Contact Information :<span id="blueLabel">*</span></label>
                        <div>
                            <span >
                                <input size="30" class="field text addr" type="text"  name="contact1" value="<?php if (isset($contact1)) echo $contact1; ?>"/>
                                <label>Contact1 (Phone)</label>
                                <span class="errormessege"><?php echo form_error('contact1'); ?></span> 
                            </span>

                            <span class="small">
                                <input size="35" class="field text addr" type="text" name="contact2" value="<?php if (isset($contact2)) echo $contact2; ?>" />
                                <label>Contact2 (Mobile):</label>
                                <span class="errormessege"><?php echo form_error('contact2'); ?></span> 
                            </span>

                            <span class="small">
                                <input size="70" class="field text addr" type="text" name="email" value="<?php if (isset($email)) echo $email; ?>"/>
                                <label>Email:</label>
                                <span class="errormessege"><?php echo form_error('email'); ?></span> 
                            </span>

                        </div>
                    </li>

                    <!-- contact information -->


                    <!-- educational information starts -->


                    <div class="grid_24 section" style="">
                        <h3>Education Info:<span id="blueLabel">*</span></h3>
                        <table border="1" class="">
                            <tr>
                                <th>Program Attended</th>
                                <th>Passing Year</th>
                                <th>Group</th>
                                <th>Institute <br/>/Board/ University</th>
                                <th>Division /Class</th>
                                <th>Marks/CGPA <br/>Without 4th subject</th>
                            </tr>
                            <tr>
                                <td>
                                    <select name="sa" class="field select addr" style="width: 9em" >


                                        <?php if ($sa == '0'): ?>
                                            <option value="0"  selected="selected" >SSC</option>
                                            <option value="1">O Level</option>
                                            <option value="2">Other</option>

                                        <?php endif; ?>

                                        <?php if ($sa == '1'): ?>
                                            <option value="0">SSC</option>
                                            <option value="1" selected="selected">O Level</option>
                                            <option value="2">Other</option>
                                        <?php endif; ?>

                                        <?php if ($sa == '2'): ?>
                                            <option value="0">SSC</option>
                                            <option value="1" >O Level</option>
                                            <option value="2" selected="selected">Other</option>
                                        <?php endif; ?>




                                    </select>
                                </td>

                                <?php if (form_error('sa_year')) { ?>
                                    <td class="tderror">
                                        <?php echo '<p>' . form_error('sa_year') . '</p>'; ?>
                                        <input type="text" name="sa_year" value="<?php if (isset($sa_year)) ; ?>" size="12" />
                                    </td>
                                <?php }else { ?>
                                    <td >
                                        <input type="text" name="sa_year" value="<?php if (isset($sa_year)) echo $sa_year; ?>" size="12" />
                                    </td>
                                <?php } ?>


                                <td  class="<?php if (form_error('sa_group')) echo 'tderror'; ?>" >

                                    <input type="text" name="sa_group" value="<?php if (isset($sa_group)) echo $sa_group; ?>" size="12" />
                                    <?php echo '<p>' . form_error('sa_group') . '</p>'; ?>
                                </td>

                                <td class="<?php if (form_error('sa_school')) echo 'tderror'; ?>">
                                    <input type="text" name="sa_school" value="<?php if (isset($sa_school)) echo $sa_school; ?>" size="20" />
                                    <?php echo '<p>' . form_error('sa_school') . '</p>'; ?>
                                </td>

                                <td  class="<?php if (form_error('sa_division')) echo 'tderror'; ?>">
                                    <input type="text" name="sa_division" value="<?php if (isset($sa_division)) echo $sa_division; ?>" size="13" />
                                    <?php echo '<p>' . form_error('sa_division') . '</p>'; ?>
                                </td>

                                <td   class="<?php if (form_error('sa_grade')) echo 'tderror'; ?>" >

                                    <input style="margin-left: 40px" type="text" name="sa_grade" value="<?php if (isset($sa_grade)) echo $sa_grade; ?>" size="20" />
                                    <?php echo '<p>' . form_error('sa_grade') . '</p>'; ?>
                                </td>


                            </tr>



                            <tr>
                                <td>
                                    <select name="ho" class="field select addr" style="width: 9em" >

                                        <?php if ($ho == '0'): ?>
                                            <option value="0"  selected="selected" >HSC</option>
                                            <option value="1">A Level</option>
                                            <option value="2">Other</option>

                                        <?php endif; ?>

                                        <?php if ($ho == '1'): ?>
                                            <option value="0">HSC</option>
                                            <option value="1" selected="selected">A Level</option>
                                            <option value="2">Other</option>
                                        <?php endif; ?>

                                        <?php if ($ho == '2'): ?>
                                            <option value="0">HSC</option>
                                            <option value="1" >A Level</option>
                                            <option value="2" selected="selected">Other</option>
                                        <?php endif; ?>
                                    </select>
                                </td>


                                <td  class="<?php if (form_error('ho_year')) echo 'tderror'; ?>" >

                                    <input type="text" name="ho_year" value="<?php if (isset($ho_year)) echo $ho_year; ?>" size="12" />
                                    <?php echo '<p>' . form_error('ho_year') . '</p>'; ?>
                                </td>

                                <td  class="<?php if (form_error('ho_group')) echo 'tderror'; ?>" >
                                    <input type="text" name="ho_group" value="<?php if (isset($ho_group)) echo $ho_group; ?>" size="12" />
                                    <?php echo '<p>' . form_error('ho_group') . '</p>'; ?>
                                </td>

                                <td  class="<?php if (form_error('ho_college')) echo 'tderror'; ?>">
                                    <input type="text" name="ho_college" value="<?php if (isset($ho_college)) echo $ho_college; ?>" size="20" />
                                    <?php echo '<p>' . form_error('ho_college') . '</p>'; ?>
                                </td>
                                <td  class="<?php if (form_error('ho_division')) echo 'tderror'; ?>">
                                    <input type="text" name="ho_division" value="<?php if (isset($ho_division)) echo $ho_division; ?>" size="13" />
                                    <?php echo '<p>' . form_error('ho_division') . '</p>'; ?>									
                                </td>

                                <td  class="<?php if (form_error('ho_grade')) echo 'tderror'; ?>">
                                    <input style="margin-left: 40px" type="text" name="ho_grade" value="<?php if (isset($ho_grade)) echo $ho_grade; ?>" size="20" />
                                    <?php echo '<p>' . form_error('ho_grade') . '</p>'; ?>
                                </td>
                            </tr>



                            <tr>
                                <td <?php if (form_error('other')) echo "tderror" ?>>
                                    <span>
                                        <label class="desc">
                                            others
                                        </label>
                                        <input type="text" name="other" value="<?php if (isset($other)) echo $other; ?>" size="8" />
                                        <?php echo '<p>' . form_error('other') . '</p>'; ?>
                                    </span>
                                </td>



                                <td class= "<?php if (form_error('other_year')) echo "tderror"; ?> ">
                                    <input type="text" name="other_year" value="<?php if (isset($other_year)) echo $other_year; ?>" size="12" />
                                    <?php echo '<p>' . form_error('other_year') . '</p>'; ?>
                                </td>

                                <td  class="<?php if (form_error('other_group')) echo 'tderror'; ?>" >
                                    <input type="text" name="other_group" value="<?php if (isset($other_group)) echo $other_group; ?>" size="12" />
                                    <?php echo '<p>' . form_error('other_group') . '</p>'; ?>
                                </td>



                                <td <?php if (form_error('other_school')) echo "tderror"; ?> >
                                    <input type="text" name="other_school" value="<?php if (isset($other_school)) echo $other_school; ?>" size="20" />
                                    <?php echo '<p>' . form_error('other_school') . '</p>'; ?>
                                </td>

                                <td <?php if (form_error('other_division')) echo "tderror"; ?>>
                                    <input type="text" name="other_division" value="<?php if (isset($other_division)) echo $other_division; ?>" size="13" />
                                    <?php echo '<p>' . form_error('other_division') . '</p>'; ?>
                                </td>

                                <td <?php if (form_error('other_grade')) echo "tderror"; ?>>
                                    <input style="margin-left: 40px" type="text" name="other_grade" value="<?php if (isset($other_grade)) echo $other_grade; ?>" size="20" />
                                    <?php echo '<p>' . form_error('other_grade') . '</p>'; ?>
                                </td>
                            </tr>
                        </table>




                        <span class="grid_13 <?php if (form_error('other_description')) echo "other_description"; ?> ">
                            <label class="desc">for "other" : </label>
                            <textarea style=" width:200px; height: 100px;" name="other_description">
                                <?php if (isset($other_description)) echo $other_description; ?>
                            </textarea>
                        </span>
                    </div>


                    <!-- Grade related information -->
                    <li class="complex <?php if (form_error('studio_credit') || form_error('lecture_credit') || form_error('credit_required') || form_error('cgpa') || form_error('retake') || form_error('department_change') || form_error('credit_completed') | form_error('course_credit')) echo 'error' ?> ">
                        <p class="desc"><strong> Fill up the information asked<span id="blueLabel">*</span>  : </strong></p>
                        <span >
                            <label class="desc"> No. of credits taken <br/> in current semester</label>
                            <input name="course_credit" class="field text small " type="text" maxlength="255" value="<?php if (isset($course_credit)) echo $course_credit; ?>"/>
                        </span>

                        <span >
                            <label class="desc"> No. of credits <br/> completed to date:</label>
                            <input name="credit_completed" class="field text medium " type="text" maxlength="255" value="<?php if (isset($credit_completed)) echo $credit_completed; ?>"/>

                        </span>

                        <span >
                            <label class="desc"> Current <br/> CGPA:</label>
                            <input name="cgpa" class="field text large " type="text" maxlength="255" value="<?php if (isset($cgpa)) echo $cgpa; ?>"/>

                        </span>

                        <span >
                            <label class="desc"> Retake <br/>(if any) :</label>
                            <select name="retake" class="field select addr" style="width: 9em" >


                                <?php if ($retake == '0'): ?>
                                    <option value="0"  selected="selected" >No</option>
                                    <option value="1">Yes</option>
                                <?php endif; ?>

                                <?php if ($retake == '1'): ?>
                                    <option value="0">No</option>
                                    <option value="1" selected="selected">Yes</option>
                                <?php endif; ?>

                                <?php if (!($retake == '1') && !($retake == '0')): ?>
                                    <option value="0"  selected="selected">No</option>
                                    <option value="1">Yes</option>
                                <?php endif; ?>




                            </select>								
                        </span>

                        <span >
                            <label class="desc stretch"> Department <br/> [e.g. CSE, BBS] :</label>
                            <input name="dept" class="field text large " type="text" maxlength="255" value="<?php if (isset($dept)) echo $dept; ?>"/>

                        </span>


                        <span>
                            <label class="desc"> Department Changed <br/>From_To(if any) :</label>
                            <input name="department_change" class="field text" type="text" maxlength="255" value="<?php if (isset($department_change)) echo $department_change; ?>"/>

                        </span>

                        <span>
                            <label class="desc"> Credits required to<br/> graduate:</label>
                            <input name="credit_required" class="field text" type="text" maxlength="255" value="<?php if (isset($credit_required)) echo $credit_required; ?>"/>

                        </span>

                        <span>
                            <label class="desc"> Lecture credits : <br/> (ARCH department) :</label>
                            <input name="lecture_credit" class="field text" type="text" maxlength="255" value="<?php if (isset($studio_credit)) echo $lecture_credit; ?>"/>

                        </span>

                        <span>
                            <label class="desc"> Studio Credits: <br/> (ARCH department) :</label>
                            <input name="studio_credit" class="field text" type="text" maxlength="255" value="<?php if (isset($studio_credit)) echo $studio_credit; ?>"/>

                        </span>


                    </li>
                    <span>
                        <label class="errorlabel">	<?php echo '<p>' . form_error('studio_credit') . '</p>'; ?></label>
                        <label class="errorlabel">	<?php echo '<p>' . form_error('lecture_credit') . '</p>'; ?></label>
                        <label class="errorlabel">	<?php echo '<p>' . form_error('credit_required') . '</p>'; ?></label>
                        <label class="errorlabel">	<?php echo '<p>' . form_error('department_change') . '</p>'; ?></label>
                        <label class="errorlabel">	<?php echo '<p>' . form_error('dept') . '</p>'; ?></label>
                        <label class="errorlabel">	<?php echo '<p>' . form_error('retake') . '</p>'; ?></label>
                        <label class="errorlabel"><?php echo '<p>' . form_error('cgpa') . '</p>'; ?></label>
                        <label class="errorlabel"><?php echo '<p>' . form_error('credit_completed') . '</p>'; ?>	</label>
                        <label class="errorlabel">	<?php echo form_error('course_credit'); ?></label>
                    </span>



                    <li class="grid_20">
                        <span class="gird_4">
                            <label class="desc">First semester? :</label>
                            <div class="grid_3">
                                <input id="0" name="first_semester[]" class="field radio" type="radio" value="0" checked="checked"/>
                                <label class="choice" for="0">No</label></span>
                        </div>

                        <?php if (isset($first_semester) && $first_semester[0] == '1') { ?>
                            <div class="grid_3">
                                <input id="1" name="first_semester[]" class="field radio" type="radio" value="1" checked="checked"/>
                                <label class="choice" for="1">Yes</label></span>
                            </div>
                        <?php } else { ?>

                            <div class="grid_3">
                                <input id="1" name="first_semester[]" class="field radio" type="radio" value="1" />
                                <label class="choice" for="1">Yes</label></span>
                            </div>
                        <?php } ?>
                        </span>




                        <span class="gird_4">
                            <label class="desc">Are you going to TARC? :</label>
                            <div class="grid_3">
                                <input id="0" name="going_tarc[]" class="field radio" type="radio" value="0" checked="checked"/>
                                <label class="choice" for="0">No</label></span>
                        </div>

                        <?php if (isset($going_tarc) && $going_tarc[0] == '1') { ?>
                            <div class="grid_3">
                                <input id="1" name="going_tarc[]" class="field radio" type="radio" value="1" checked="checked"/>
                                <label class="choice" for="1">Yes</label></span>
                            </div>
                        <?php } else { ?>

                            <div class="grid_3">
                                <input id="1" name="going_tarc[]" class="field radio" type="radio" value="1" />
                                <label class="choice" for="1">Yes</label></span>
                            </div>
                        <?php } ?>
                        </span>


                        <span class="gird_4">
                            <label class="desc">Is this your second last semester? :</label>
                            <div class="grid_3">
                                <input id="0" name="second_last_semester[]" class="field radio" type="radio" value="0" checked="checked"/>
                                <label class="choice" for="0">No</label></span>
                        </div>

                        <?php if (isset($second_last_semester) && $second_last_semester[0] == '1') { ?>
                            <div class="grid_3">
                                <input id="1" name="second_last_semester[]" class="field radio" type="radio" value="1" checked="checked"/>
                                <label class="choice" for="1">Yes</label></span>
                            </div>
                        <?php } else { ?>

                            <div class="grid_3">
                                <input id=""1"" name="second_last_semester[]" class="field radio" type="radio" value="1" />
                                       <label class="choice" for="1">Yes</label></span>
                            </div>
                        <?php } ?>
                        </span>


                        <span class="gird_4">
                            <label class="desc">Is this your  last semester? :</label>
                            <div class="grid_3">
                                <input id="0" name="last_semester[]" class="field radio" type="radio" value="0" checked="checked"/>
                                <label class="choice" for="0">No</label></span>
                        </div>

                        <?php if (isset($last_semester) && $last_semester[0] == '1') { ?>
                            <div class="grid_3">
                                <input id="1" name="last_semester[]" class="field radio" type="radio" value="1" checked="checked"/>
                                <label class="choice" for="1">Yes</label></span>
                            </div>
                        <?php } else { ?>

                            <div class="grid_3">
                                <input id="1" name="last_semester[]" class="field radio" type="radio" value="1" />
                                <label class="choice" for="1">Yes</label></span>
                            </div>
                        <?php } ?>
                        </span>

                        <span class="gird_4">
                            <label class="desc">First time applying for scholarship? :</label>
                            <div class="grid_3">
                                <input id="0" name="first_time_application[]" class="field radio" type="radio" value="0" checked="checked"/>
                                <label class="choice" for="0">No</label></span>
                        </div>

                        <?php if (isset($first_time_application) && $first_time_application[0] == '1') { ?>
                            <div class="grid_3">
                                <input id="1" name="first_time_application[]" class="field radio" type="radio" value="1" checked="checked"/>
                                <label class="choice" for="1">Yes</label></span>
                            </div>
                        <?php } else { ?>

                            <div class="grid_3">
                                <input id="1" name="first_time_application[]" class="field radio" type="radio" value="1" />
                                <label class="choice" for="1">Yes</label></span>
                            </div>
                        <?php } ?>
                        </span>
                    </li>

                    <!-- Grade related informations -->




                    <!-- educational information ends -->




                    <!-- academic honor -->

                    <li class="section">
                        <h3 class="desc">Academic Honor/s Received: (Scholarship,Awards Etc) :</h3>
                        <div>
                            <input name="award" class="field text large" type="text" maxlength="255" value="<?php if (isset($award)) echo $award; ?>"/>
                        </div>
                    </li>
                    <!-- academic honor ends -->







                    <!-- fail in any subjects -->


                    <div class="grid_20">
                        <label class="desc">Have you ever failed in any subject? :</label>

                        <div class="grid_3">

                            <input id="0" name="fail[]" class="field radio" type="radio" value="0" checked="checked"/>
                            <label class="choice" for="0">No</label></span>
                        </div>

                        <?php if (isset($fail) && $fail[0] == '1') { ?>
                            <div class="grid_3">
                                <input id="1" name="fail[]" class="field radio" type="radio" value="1" checked="checked"/>
                                <label class="choice" for="1">Yes</label></span>
                            </div>
                        <?php } else { ?>

                            <div class="grid_3">
                                <input id="1" name="fail[]" class="field radio" type="radio" value="1" />
                                <label class="choice" for="1">Yes</label></span>
                            </div>
                        <?php } ?>

                        <li>
                            <label class="desc">If yes please specify, the reason</label>
                            <div>
                                <input name="failing_reason" class="field text large" type="text" maxlength="255" value="<?php if (isset($failing_reason)) echo $failing_reason; ?>"/>
                            </div>
                        </li>
                    </div>
                    <!-- fail in any subject endsw -->


                    <!-- co curricular activities   startss-->

                    <li>
                        <label class="desc">Co-curricular Activities and number of years of participation: </label>
                        <div>
                            <input class="field text large" type="text" maxlength="255" value="<?php if (isset($co_cur_activity)) echo $co_cur_activity; ?>" name="co_cur_activity" />
                        </div>
                    </li>

                    <!-- co curricular activities   endss-->


                    <!-- dismissed from exam starts -->

                    <div class="grid_20">
                        <label class="desc">Were you <strong>EVER DISMISSED</strong> from an examination
                            or expelled from an institution of learning/ Have you ever had any 
                            disciplinary case against you? :</label>

                        <div class="grid_3">
                            <input id="0" name="disciplinary[]" class="field radio" type="radio" value="0" checked="checked"/>
                            <label class="choice" for="0">No</label></span>
                        </div>

                        <?php if (isset($disciplinary) && $disciplinary[0] == '1') { ?>
                            <div class="grid_3">
                                <input id="1" name="disciplinary[]" class="field radio" type="radio" value="1" checked="checked"/>
                                <label class="choice" for="1">Yes</label></span>
                            </div>
                        <?php } else { ?>
                            <div class="grid_3">
                                <input id="1" name="disciplinary[]" class="field radio" type="radio" value="1"/>
                                <label class="choice" for="1">Yes</label></span>
                            </div>


                        <?php } ?>


                        <li>
                            <label class="desc">If yes please specify, the reason</label>
                            <div>
                                <input name="dis_reason" class="field text large" type="text" maxlength="255" value="<?php if (isset($dis_reason)) echo $dis_reason ?>"/>
                            </div>
                        </li>
                    </div>

                    <!-- dismissed from exam ends-->


                    <li >
                        <h3>Information about Brothers / Sisters</h3>
                        <span id="blueLabel"><br/>*Necessary if the student is applying for siblings based Scholarship</span>
                        <table border="1">
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Education /Employment Status</th>
                                <th>ID (Mandatory if you apply for sibling based scholarship)</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="sibling1_name" value="<?php if (isset($sibling1_name)) echo $sibling1_name; ?>" size="12" />
                                </td>
                                <td class="<?php if (form_error('sibling1_age')) echo "tderror"; ?>">
                                    <input type="text" name="sibling1_age" value="<?php if (isset($sibling1_age)) echo $sibling1_age; ?>" size="12" />
                                </td>
                                <td>
                                    <input type="text" name="sibling1_status" value="<?php if (isset($sibling1_status)) echo $sibling1_status; ?>" size="25" />
                                </td>
                                <td class="<?php if (form_error('sibling1_id')) echo "tderror"; ?>">
                                    <input type="text" name="sibling1_id" value="<?php if (isset($sibling1_id)) echo $sibling1_id; else echo '00000000'; ?>" size="25" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="sibling2_name" value="<?php if (isset($sibling2_name)) echo $sibling2_name; ?>" size="12" />
                                </td>
                                <td class="<?php if (form_error('sibling2_age')) echo "tderror"; ?>">
                                    <input type="text" name="sibling2_age" value="<?php if (isset($sibling2_age)) echo $sibling2_age; ?>" size="12" />
                                </td>
                                <td>
                                    <input type="text" name="sibling2_status" value="<?php if (isset($sibling2_status)) echo $sibling2_status; ?>" size="25" />
                                </td>
                                <td class="<?php if (form_error('sibling2_id')) echo "tderror"; ?>">
                                    <input type="text" name="sibling2_id" value="<?php if (isset($sibling2_id)) echo $sibling2_id;else echo '00000000'; ?>" size="25" />
                                </td>
                            </tr>
                        </table>
                        <label class="errorlabel">	<?php echo '<p>' . form_error('sibling1_name') . '</p>'; ?></label>
                        <label class="errorlabel">	<?php echo '<p>' . form_error('sibling1_age') . '</p>'; ?></label>
                        <label class="errorlabel">	<?php echo '<p>' . form_error('sibling1_status') . '</p>'; ?></label>
                        <label class="errorlabel">	<?php echo '<p>' . form_error('sibling1_id') . '</p>'; ?></label>
                        <label class="errorlabel">	<?php echo '<p>' . form_error('sibling2_name') . '</p>'; ?></label>
                        <label class="errorlabel">	<?php echo '<p>' . form_error('sibling2_age') . '</p>'; ?></label>
                        <label class="errorlabel">	<?php echo '<p>' . form_error('sibling2_status') . '</p>'; ?></label>
                        <label class="errorlabel">	<?php echo '<p>' . form_error('sibling2_id') . '</p>'; ?></label>
                        <label class="errorlabel">	<?php if(isset($sibling_error) && $sibling_error!='') echo '<p>'.$sibling_error.'</p>'  ?> </label>
                    </li>



                    <li class="complex "<?php if (form_error('comment')) echo 'tderror'; ?>"">
                        <label class="desc">Statement not exceeding 150 words stating why you need Financial Aid:<span id="blueLabel">*</span></label>
                        <div>
                            <textarea class="field text" style="width: 500px; height: 200px" name="comment">
                                <?php if (isset($comment)) echo $comment; ?>
                            </textarea>
                        </div>
                        <label class="errorlabel">	<?php echo '<p>' . form_error('comment') . '</p>'; ?></label>
                    </li>


                    <!--							<label class="desc">Attach your image</label>
                                                                            
                                                                            <div class="<?php //if(form_error('image_field'))echo 'tderror';  ?>">
                                                                                    <span>
                                                                                            <input type="file" name="image_field" value=""/>
                                                                                            <span style="color: red"> <?php echo form_error('image_field'); ?></span>
                                                                                    </span>
                                                                            </div>-->


                    <!-- reference information  -->

                    <div class="section grid_24">
                        <h3> Reference Information (Present) </h3>
                        <div class="grid_11">
                            <p>Present Information</p>
                            <li class="<?php if (form_error('ref_present_name') || form_error('ref_present_cell') || form_error('ref_present_address')) echo 'error'; ?>">		
                                <span >
                                    <label for="ref_present_name" > Name : </label>
                                    <input class="field text medium" type="text" name="ref_present_name" value="<?php if (isset($ref_present_name)) echo $ref_present_name; ?>"/>
                                    <label class="errorlabel"><?php echo form_error('ref_present_name'); ?></label>
                                </span>
                                <span >
                                    <label for="ref_present_cell" >cell : </label>
                                    <input class="field text medium" type="text" name="ref_present_cell" value="<?php if (isset($ref_present_cell)) echo $ref_present_cell; ?>" />
                                    <label class="errorlabel"><?php echo form_error('ref_present_cell'); ?></label>
                                </span>
                                <span >
                                    <label for="ref_present_address" > address : </label>
                                    <input class="field text large" type="text" name="ref_present_address" value="<?php if (isset($ref_present_address)) echo $ref_present_address; ?>" />
                                    <label class="errorlabel"><?php echo form_error('ref_present_address'); ?></label>
                                </span>
                            </li>		
                        </div>

                        <div class="grid_11 ">
                            <p>Permanent Information</p>
                            <li class="<?php if (form_error('ref_permanent_name') || form_error('ref_permanent_cell') || form_error('ref_permanent_address')) echo 'error'; ?>" >		
                                <span >
                                    <label for="ref_permanent_name" > Name : </label>
                                    <input class="field text medium" type="text" name="ref_permanent_name" value="<?php if (isset($ref_permanent_name)) echo $ref_permanent_name; ?>"/>
                                    <label class="error"><?php echo form_error('ref_permanent_name'); ?></label>
                                </span>
                                <span >
                                    <label for="ref_permanent_cell" > cell : </label>
                                    <input class="field text medium" type="text" name="ref_permanent_cell" value="<?php if (isset($ref_permanent_cell)) echo $ref_permanent_cell; ?>" />
                                    <label class="errorlabel"><?php echo form_error('ref_permanent_cell'); ?></label>
                                </span>
                                <span>
                                    <label for="ref_permanent_address" > Address : </label>
                                    <input class="field text large" type="text" name="ref_permanent_address" value="<?php if (isset($ref_permanent_address)) echo $ref_permanent_address; ?>" />
                                    <label class="errorlabel"><?php echo form_error('ref_permanent_address'); ?></label>
                                </span>
                            </li>	
                        </div>
                    </div>






                    <!-- reference information -->







                    <div id="section" class="grid_20" style="margin-top: 20px;">
                        <p>
                            <strong>
                                I hereby declare that the information provided in this form and the statement is corrected
                                and complete to the best of my knowledge. I also declare that I will cooperate with the BRAC Investigating Team
                                on behalf of BRACU to verify the information given here.
                            </strong>
                        </p>
                        <span >
                            <input type="checkbox" checked="true" name="accept" style="margin-left: 2px" />
                            <label class="choice">Accept Terms and Condition</label>
                            <label class="errorlabel">	<?php echo '<p>' . form_error('accept') . '</p>'; ?></label>
                        </span>
                    </div>
                    
                    <li class ="grid_22">
                        <p>Only for human beings (characters are case sensitive) : </p>
                        <li> <?php echo $cap_img ?> </li>
                        <li> <input type="text" class="field text small" id="captcha" name="captcha" value="" /> </li>
                        <li> <label class="errorlabel" > <?php echo form_error('captcha')?> </label></li>
                    </li>

                    <li class="buttons">
                        <input id="saveForm" class="btTxt" type="submit" value="Submit" />
                    </li>
                </ul>
                </form>
            </div>
    </body>
</html>
