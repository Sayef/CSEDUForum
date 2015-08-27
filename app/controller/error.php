<?php
/**
* Class Error
*
* Please note:
* Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
* This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
*
*/
class Error extends Controller
{
	/**
	* PAGE: index
	* This method handles the error page that will be shown when a page is not found
	*/
	public function index()
	{
		// load views
		require APP . 'arch/view/template/header.php';
		require APP . 'arch/view/template/error.php';
		require APP . 'arch/view/template/footer.php';


		
	}
	public function controlls()
    {

    }

}