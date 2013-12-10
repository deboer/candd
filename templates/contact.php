<?php

			/// Exploit check
            $submitted = 0;

			if($_POST)
            {
                $required_fields=array("firstname","surname","email","message","submit");
                $errors=$required_fields;
				while(list($key, $val) = each ($required_fields))
                {
                    $array_key = array_search($val, $errors);
                    if($_POST[$val] !="" )
                    {
                        unset($errors[$array_key]);						
                    }
                }
				
                if(!$errors)
                {
                    /// Process
                    $body="Firstname:       ".$_POST['firstname']."\n";
                    $body.="Surname:        ".$_POST['surname']."\n";						
                    $body.="Tel:            ".$_POST['telephone']."\n";
                    $body.="Email:          ".$_POST['email']."\n";
                    $body.="Browser:        ".$_SERVER['HTTP_USER_AGENT']."\n";
                    $body.="IP Address:     ".$_SERVER['REMOTE_ADDR']."\n\n";						
                    $body.="Message:\n\n".$_POST['message']."\n\n";
                    $subject = "Enquiry from website";

                    $from = $config['email'];
                    $to = $config['email'];
                    $from_name = "C & D Roofing and Property Maintenance (on behalf of ".$_POST['firstname']." ".$_POST['surname'].")";
                    $reply_to = $_POST['email'];

                    $headers = "From: ".$from_name." <$from>\n";
                    $headers.= "Reply-To: <$reply_to>\n";
                    $headers.= "MIME-Version: 1.0\n";
                    $headers.= "Content-Type: text/html;\n";
                    $headers.= "\tcharset=\"UTF-8\"\n";
                    $headers.= "Content-Transfer-Encoding: 8bit\n\n";

                    if (mail($to, $subject, $body, $headers, '-f'.$from))
                    {
                        $submitted=1;
                    }
                    else
                    {
                       echo  "There was an error sending mail; ";
                    }
                }
            }
?>
<div class="container">
	<div class="row-fluid">
        <div class="span7">
            <form class="form-horizontal" action='' method="POST">
                <fieldset>
                    <div id="legend">
                        <h2>Contact Us</h2>
                    </div>
                    <p>
                        Please spare a few moments to fill in a few of the details below and we will reply to your enquiry 
                        as soon as we can.<br/>
                        <abbr  class="required">*</abbr> <small>Indicates a required field</small>
                    </p>
                    
                    <?php
                    if($submitted)
                    {
                        echo "
                        <div class=\"alert alert-success\">
                            <button data-dismiss=\"alert\" class=\"close\" type=\"button\">×</button>
                            <strong>Thank you for you interest in C &amp; D Roofing and Property Maintenance.</strong><br/>
                            We have received your enquiry and it will be dealt with as soon as possible.
                        </div>
                        ";
                    }
                    else
                    {
                        if(isset($errors))
                        {
                            echo "
                            <div class=\"alert alert-error\">
                                <button class=\"close\" data-dismiss=\"alert\" type=\"button\">×</button>
                                <strong>Please ensure the following fields are completed:</strong><br/>
                            ";
                            foreach($errors as $key=>$item)
                            {
                                echo "
                                    ".$item."<br/>
                                ";
                            }
                            echo "</div>";
                        }
                    }
                    ?>
                                        
                    <div class="control-group">
                        <label class="control-label"  for="firstname">First name</label>
                        <div class="controls">
                            <input type="text" id="firstname" name="firstname" placeholder="Enter First name" value="<?php echo (isset($_POST['firstname']) ? $_POST['firstname'] : null); ?>" class="input-xlarge">
                            <abbr title="required" class="required">*</abbr>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="surname">Surname</label>
                        <div class="controls">
                            <input type="text" id="surname" name="surname" placeholder="Enter Surname" value="<?php echo (isset($_POST['surname']) ? $_POST['surname'] : null); ?>" class="input-xlarge">
                            <abbr title="required" class="required">*</abbr>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                            <input type="text" id="email" name="email" placeholder="Enter Email" value="<?php echo (isset($_POST['email']) ? $_POST['email'] : null); ?>" class="input-xlarge">
                            <abbr title="required" class="required">*</abbr>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"  for="telephone">Telephone</label>
                        <div class="controls">
                            <input type="text" id="telephone" name="telephone" placeholder="Enter Phone" value="<?php echo (isset($_POST['telephone']) ? $_POST['telephone'] : null); ?>" class="input-xlarge">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"  for="message">Message</label>
                        <div class="controls">
                            <textarea id="message" name="message" placeholder="Enter message" class="input-xlarge" style="width:400px;height:150px;"><?php echo (isset($_POST['message']) ? $_POST['message'] : null); ?></textarea>
                            <abbr title="required" class="required">*</abbr>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <input type="submit" name="submit" class="btn btn-success" value="Send"/>
                        </div>
                    </div>

                    <p>
                        <strong>Privacy policy</strong><br/>
                        Please note that your details will not be passed on to any third parties and will only be used by C &amp; D Roofing and Property Maintenance 
                        to contact you with regards to your particular enquiry.
                    </p>
                </fieldset>
            </form>
        </div>
        
      	<div class="span5">
            <iframe width="400" height="400" class="" src="http://regiohelden.de/google-maps/map_en.php?width=400&amp;height=400&amp;hl=en&amp;q=64%20Staplefield%20Drive%20Brighton%20East%20Sussex%20BN2%204RP+(C%20%26%20D%20Roofing%20%26%20Property%20Maintenance%20Ltd)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <address>
    			<?php echo $config['address'];?><br>
    			<abbr title="Phone">P:</abbr> 
                <span class="phone-name">Chad:</span> <?php echo $config['phone']['main'];?>&nbsp;&nbsp;	
                <span class="phone-name">Doug:</span> <?php echo $config['phone']['secondary'];?>
    		</address>
    	</div>
    </div>
</div>