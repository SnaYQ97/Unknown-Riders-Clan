<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RightsController extends CI_Controller
{

	public function __construct() { parent::__construct(); }

	const permissions = array(
      	        "Mainpage" => array(
						"index" => array('is_authorized')
					,	"toggleNavigation" => array('is_authorized')
				),
		        "Thetykieta" => array(
							"index" => array('Administrator', 'Pracownik')
						, "new" => array('Administrator', 'Pracownik')
						, "files" => array('Administrator', 'Pracownik')
						, "edit" => array('Administrator', 'Pracownik')
						, "get" => array('Administrator', 'Pracownik')
						, "getFiles" => array('Administrator', 'Pracownik')
						, "preview" => array('Administrator', 'Pracownik')
						, "download" => array('Administrator', 'Pracownik')
						, "getHazardStatementsFreephrases" => array('Administrator', 'Pracownik')
						, "update" => array('Administrator', 'Pracownik')
						, "create" => array('Administrator', 'Pracownik')
                ),
                "Admin" => array(
                    "index" => array('is_authorized'),
				),
				"UsersManagement" => array(
					"index" => array('Administrator','Moderator'),
					"createAjax" => array('Administrator','Moderator'),
					"addUser" => array('Administrator','Moderator'),
					"updateUser" => array('Administrator','Moderator'),
					"deleteUser" => array('Administrator','Moderator'),
                )
			);

	protected function checkRights()
	{
		$class = get_called_class();
		$method = debug_backtrace()[1]['function'];

		$hasAccess = false;

		if( !$_SESSION['is_authorized'] ) redirect('auth/logout');

		$userRoles = $this->UserDAO->getRoles( $_SESSION['user_id'] );

		if( !isset(self::permissions[$class][$method]) ) redirect("ErrorHandler/E404");

		$isPublic = in_array('all', self::permissions[$class][$method]);
		$isAuthorized = in_array('is_authorized', self::permissions[$class][$method]) && isAuthorized();

		$classExists = array_key_exists($class, self::permissions);
		$methodExists = array_key_exists($method, self::permissions[$class]);

		foreach( $userRoles as $role )
		{
			if( $classExists && $methodExists )
			{

				if( !$classExists || !$methodExists ) break;
				$hasRole = in_array($role->name, self::permissions[$class][$method]);

				if( $hasRole || $isPublic || $isAuthorized )
				{
					$hasAccess = true;
					break;
				}

			}
		}

		if( !$hasAccess ) show_404();
	}
}
