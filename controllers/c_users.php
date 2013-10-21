<?php

class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    } 

    public function index() {
        echo "This is the index page";
    }

    public function signup() {
        echo "This is the signup page";
    }

    public function login() {
        echo "This is the login page";
    }

    public function logout() {
        echo "This is the logout page";
    }

    public function profile($user_name = NULL) {

        #Set up the View
        $this->template->content = view::instance('v_users_profile');

        #Set up the page Title
        $this->template->title = "Profile";

        #Load client files
        $client_files_head = Array(
            #'/css/profile.css',
            '/css/master.css'
            );
 
        $this->template->client_files_head = Utils::load_client_files($client_files_head);
        
        #Load client files
        $client_files_body = Array(
            '/js/profile.js'
            );
        
        $this->template->client_files_body = Utils::load_client_files($client_files_body);

        # Pass the data to the View
        $this->template->content->user_name = $user_name;

        #Display the View
        echo $this->template;

        //$view = View::instance('v_users_profile');

        //$view->user_name = $user_name;

        //echo $view;

        /*if($user_name == NULL) {
            echo "No user specified";
        }
        else {
            echo "This is the profile for ".$user_name;
        }*/
    }

} # end of the class