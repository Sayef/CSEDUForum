	<div class = "tagline">		
		<h1 style = "font-family: 'Lobster', cursive; margin:auto; line-height:51px; vertical-align:middle;">   <?php echo $_SESSION['sitetagline']; ?>  </h4>
	</div>
	
	<div  class = "signupform">		
		<form action="" style="width: 400px; margin: 0 auto;"  method="post">
			<fieldset>
			<legend style = "background-color: #000d1a;" > <?php echo $_SESSION['su_formname'];?></legend>		
			<pre>	<label> <?php echo $_SESSION['su_userid'];?></label><input type="text" name="ID"></pre> 
			<pre>	<label> <?php echo $_SESSION['su_password'];?> </label><input type="password" name="pass"><?php echo $_SESSION['su_pass_ins'];?></pre>	
			<pre>	<label> <?php echo $_SESSION['su_name'];?></label><input type="text" name="name"></pre>		
			<pre>	<label> <?php echo $_SESSION['su_email'];?>	</label><input type="text" name="email"><?php echo $_SESSION['su_email_ins'];?></pre>			
			<pre>	<label> <?php echo $_SESSION['su_dateof_birth'];?></label><input type="text" name="DOB">[year-month-date]</pre>
			<pre>	<label> <?php echo $_SESSION['su_dateof_signup'];?></label><input type="text" name="DOS">[year-month-date]</pre>
			<pre>	<label> <?php echo $_SESSION['su_profession'];?></label><input type="text" name="profession"></pre>
			<pre>	<label> <?php echo $_SESSION['su_profile_picture'];?></label><input type="text" name="pro_pic"></pre>
			<pre> 			<input type="submit" value="<?php echo $_SESSION['su_submit_button'];?>" name="submit_signup"></pre>
			 </fieldset>
		</form>
	</div>
</div>

 <div class="clearfooter"></div>

