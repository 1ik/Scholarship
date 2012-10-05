<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<html>
    <head>
        <title> Test From</title>
    </head>
    <body>
        <form method="POST" name="test_form" action="<?php echo base_url() . 'required/submit'; ?>">
            <input type="text" name ="field1" value="username" />
            <input type="text" name ="field2" value="pas" />
            <input type="text" name ="field3" value="email" />
            <input type="text" name ="field4" value="age" />
            <input type="submit" value="submit"/>
            <?php echo validation_errors(); ?>
           
        </form>
    </body>
</html>
