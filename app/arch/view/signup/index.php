	<div class = "tagline">		
		<h1 style = "font-family: 'Lobster', cursive; margin:auto; line-height:51px; vertical-align:middle;">   <?php echo $GLOBALS['sitetagline']; ?>  </h4>
	</div>
	
	<div  class = "signupform">		
		<form action="" style="width: 400px; margin: 0 auto;"  method="post">
			<fieldset>
			<legend style = "background-color: #000d1a;" > <?php echo $GLOBALS['su_formname'];?></legend>		
			<pre>	<label> <?php echo $GLOBALS['su_userid'];?></label><input type="text" name="ID"></pre> 
			<pre>	<label> <?php echo $GLOBALS['su_password'];?> </label><input type="password" name="pass"><?php echo $GLOBALS['su_pass_ins'];?></pre>	
			<pre>	<label> <?php echo $GLOBALS['su_name'];?></label><input type="text" name="name"></pre>		
			<pre>	<label> <?php echo $GLOBALS['su_email'];?>	</label><input type="text" name="email"><?php echo $GLOBALS['su_email_ins'];?></pre>			
			<pre>	<label> <?php echo $GLOBALS['su_dateof_birth'];?></label><input type="text" name="DOB">[year-month-date]</pre>
			<pre>	<label> <?php echo $GLOBALS['su_dateof_signup'];?></label><input type="text" name="DOS">[year-month-date]</pre>
			<pre>	<label> <?php echo $GLOBALS['su_profession'];?></label><input type="text" name="profession"></pre>
			<pre>	<label> <?php echo $GLOBALS['su_profile_picture'];?></label><input type="text" name="pro_pic"></pre>
			<pre> 			<input type="submit" value="<?php echo $GLOBALS['su_submit_button'];?>" name="submit_signup"></pre>
			 </fieldset>
		</form>
	</div>
</div>

 <div class="clearfooter"></div>

