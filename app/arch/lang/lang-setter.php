<?php
Class LangSetter{


	public function __construct(){


			require_once(APP . 'libs/utility/xml-parser.php');
			$x_path = new XMLparser();
			$lang = $_SESSION['lang'];

			//Header

			$GLOBALS['sitename'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/home/header.xml", "/header/sitename");
			$GLOBALS['sitetagline'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/home/header.xml", "/header/sitetagline");


			//body
			$GLOBALS['signin_field'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/home/body.xml", "/body/signin_field");
			$GLOBALS['userid_field'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/home/body.xml", "/body/userid_field");
			$GLOBALS['password_field'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/home/body.xml", "/body/password_field");
			$GLOBALS['submit_value'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/home/body.xml", "/body/submit_value");
			$GLOBALS['new_account_field'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/home/body.xml", "/body/new_account_field");


			//footer
			$GLOBALS['copyright'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/home/footer.xml", "/body/copyright");


			//sign up failure message
			$GLOBALS['signinerror'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/popupmessage/popupmessage.xml", "/popupmessage/signinerror");
			//sign up success message
			$GLOBALS['signupsuccess'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/popupmessage/popupmessage.xml", "/popupmessage/signupsuccess");
			//sign up error message
			$GLOBALS['signuperror'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/popupmessage/popupmessage.xml", "/popupmessage/signuperror");

			//signip page 
			$GLOBALS['su_formname'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_formname");
			$GLOBALS['su_userid'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_userid");
			$GLOBALS['su_name'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_name");
			$GLOBALS['su_password'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_password");
			$GLOBALS['su_profession'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_profession");
			$GLOBALS['su_email'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_email");
			$GLOBALS['su_dateof_birth'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_dateof_birth");
			$GLOBALS['su_dateof_signup'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_dateof_signup");
			$GLOBALS['su_profile_picture'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_profile_picture");
			$GLOBALS['su_pass_ins'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_pass_ins");
			$GLOBALS['su_email_ins'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_email_ins");
			$GLOBALS['su_submit_button'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/signup/signup.xml", "/signup/su_submit_button");


			//navbar values
			$GLOBALS['home'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/navbar/navbar.xml", "/navbar/home");
			$GLOBALS['category'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/navbar/navbar.xml", "/navbar/category");
			$GLOBALS['questions'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/navbar/navbar.xml", "/navbar/questions");
			$GLOBALS['search_question'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/navbar/navbar.xml", "/navbar/search_question");
			$GLOBALS['settings'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/navbar/navbar.xml", "/navbar/settings");
			$GLOBALS['tags'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/navbar/navbar.xml", "/navbar/tags");
			$GLOBALS['help'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/navbar/navbar.xml", "/navbar/help");
			$GLOBALS['submit'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/navbar/navbar.xml", "/navbar/submit");

		
			//ask questions values

			$GLOBALS['ask_question'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/dashboard/dashboard.xml", "/dashboard/ask_question");
			$GLOBALS['add_tags'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/dashboard/dashboard.xml", "/dashboard/add_tags");




		}
	}


?>

