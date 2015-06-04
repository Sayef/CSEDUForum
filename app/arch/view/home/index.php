
    <div class = "tagline">		
		<h1 style = "font-family: 'Lobster', cursive; margin:auto; line-height:51px; vertical-align:middle;">   <?php echo $_SESSION['sitetagline']; ?>  </h4>
	</div>
	<div style = "position:relative; left:0px; top: 200px; width: 100%; #000d1a;">		
		<form action="" style="width: 400px; margin: 0 auto;" align="center"; method="post">
			<fieldset> 
			<legend> <?php echo $_SESSION['signin_field']; ?> </legend>		
			<pre> <?php echo $_SESSION['userid_field']; ?>  	<input type="text" name="ID"></pre> 
			<pre> <?php echo $_SESSION['password_field']; ?> 	<input type="password" name="pass"></pre>
			<pre> 		<input type="submit" value="<?php echo $_SESSION['submit_value']; ?>" name="signin"></pre>
			<pre> <a href="<?php echo URL . "signup";?>" style="text-decoration: none;">  <?php echo $_SESSION['new_account_field']; ?> </a> </pre>
			 </fieldset> 
		</form>
	</div>
</div>

 <div class="clearfooter"></div>
