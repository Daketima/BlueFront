<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/Base.php';

/**
 * Class : User (UserControllerAPI)
 * User Class to control all user related operations.
 * @author : TechySmart360.com / support@techysmart360.com
 * @version : 2.0
 * @since : 06.03.2020
 */

class Admin extends Base
{
	//$login = new Login();

	public function __construct()
    {
        parent::__construct();
        //$this->load->library('login');
        $this->load->library('session');
        $this->load->helper('form');
        $this->isLoggedIn();


    }


	/**
     * This function used to load the first screen of the user
    */
	function dashboard()
 	{
 		
	 	$this->global['pageTitle'] = 'CollarHub : Dashboard';

	    $this->loadViews("index", $this->global, NULL);
 	}


 	function allUsers()
 	{
		$this->global['pageTitle'] = 'CollarHub : All Users';
		
		$this->loadViews("allUsers", $this->global, NULL);
 	}

 	/**
     * This function is used load user edit information
     * @param number $userId : Optional : This is user id
    */
    function editUser($userId = NULL)
    {
        if($userId == null)
        {
            redirect('allUsers');
        }
            
        //$data['roles'] = $this->user_model->getUserRoles();
            
        //$data['userInfo'] = $this->user_model->getUserInfo($userId);

        $this->global['pageTitle'] = 'CollarHub : Edit User';
            
        $this->loadViews("editUser", $this->global, NULL);
    }


 	function articles()
 	{
 		$this->global['pageTitle'] = 'CollarHub : All Users';
 		

        $this->loadViews("articles", $this->global, NULL);
 	}


 	/**
     * This function is used load user edit information
     * @param number $userId : Optional : This is user id
    */
    function editArticle($id = NULL)
    {
        if($id == null)
        {
            redirect('articles');
        }      
            
        //$data['roles'] = $this->user_model->getUserRoles();
            
        //$data['userInfo'] = $this->user_model->getUserInfo($userId);

        $this->global['pageTitle'] = 'CollarHub : Edit User';
            
        $this->loadViews("editArticle", $this->global, $id, NULL);
    }


 	



}