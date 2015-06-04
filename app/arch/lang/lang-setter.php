<?php
Class LangSetter{


	public function __construct(){


			require_once(APP . 'libs/utility/xml-parser.php');
			$x_path = new XMLparser();
			$lang = $_SESSION['lang'];

			//Header

			$_SESSION['sitename'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/home/header.xml", "/header/sitename");
			$_SESSION['sitetagline'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/home/header.xml", "/header/sitetagline");


			//body
			$_SESSION['signin_field'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/home/body.xml", "/body/signin_field");
			$_SESSION['userid_field'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/home/body.xml", "/body/userid_field");
			$_SESSION['password_field'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/home/body.xml", "/body/password_field");
			$_SESSION['submit_value'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/home/body.xml", "/body/submit_value");
			$_SESSION['new_account_field'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/home/body.xml", "/body/new_account_field");


			//footer
			$_SESSION['copyright'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/home/footer.xml", "/body/copyright");


			//sign up failure message
			$_SESSION['signinerror'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/popupmessage/popupmessage.xml", "/popupmessage/signinerror");
			//sign up success message
			$_SESSION['signupsuccess'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/popupmessage/popupmessage.xml", "/popupmessage/signupsuccess");
			//sign up error message
			$_SESSION['signuperror'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/popupmessage/popupmessage.xml", "/popupmessage/signuperror");

			//signip page 
			$_SESSION['su_formname'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_formname");
			$_SESSION['su_userid'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_userid");
			$_SESSION['su_name'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_name");
			$_SESSION['su_password'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_password");
			$_SESSION['su_profession'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_profession");
			$_SESSION['su_email'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_email");
			$_SESSION['su_dateof_birth'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_dateof_birth");
			$_SESSION['su_dateof_signup'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_dateof_signup");
			$_SESSION['su_profile_picture'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_profile_picture");
			$_SESSION['su_pass_ins'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_pass_ins");
			$_SESSION['su_email_ins'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_email_ins");
			$_SESSION['su_submit_button'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_submit_button");


			//navbar values
			$_SESSION['home'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/navbar/navbar.xml", "/navbar/home");
			$_SESSION['category'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/navbar/navbar.xml", "/navbar/category");
			$_SESSION['questions'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/navbar/navbar.xml", "/navbar/questions");
			$_SESSION['search_question'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/navbar/navbar.xml", "/navbar/search_question");
			$_SESSION['settings'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/navbar/navbar.xml", "/navbar/settings");
			$_SESSION['tags'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/navbar/navbar.xml", "/navbar/tags");
			$_SESSION['help'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/navbar/navbar.xml", "/navbar/help");
			$_SESSION['submit'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/navbar/navbar.xml", "/navbar/submit");

		
			//ask questions values

			$_SESSION['ask_question'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/dashboard/dashboard.xml", "/dashboard/ask_question");
			$_SESSION['add_tags'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/dashboard/dashboard.xml", "/dashboard/add_tags");




		}
	}


?>

