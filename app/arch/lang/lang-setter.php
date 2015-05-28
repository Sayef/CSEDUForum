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
			$GLOBALS['signinfailuremessage'] = $x_path->my_xpath(APP . "arch/lang/".$lang."/popupmessage/popupmessage.xml", "/popupmessage/signinerror");


		}
	}


?>