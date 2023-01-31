<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Maximum number of segments that Ar-acl should check
$config['segment_max']	= 3;

// variable session role id
$config['sess_role_var'] = "group_id";

// default role: this role will applied if there is no role found
$config['default_role'] = "99";



$ci;    // for CodeIgniter Super Global Reference.
$this->ci =& get_instance();    // get a reference to CodeIgniter.

$query = $this->ci->db->get('mod_access');
$access_array = $query->result();
//echo "@";

$this->ci->db->where("mod_groups_meta_type",2); // meta type = 2 is $menu_array
$this->ci->db->where('LENGTH(mod_groups_key)>0');
$query_2 = $this->ci->db->get("mod_groups"); 
$menu_array = $query_2->result(); 
//print_r($menu_array);
foreach($menu_array as $ma){
	$array_allowed = array();
	foreach($access_array as $aa){
	    //print_r($ma);
		if($aa->mod_access_menu_id == $ma->mod_groups_id){
			array_push($array_allowed, $aa->mod_access_group_id);
		}
	}
	$control_array[$ma->mod_groups_key] = array(
        "allowed" => $array_allowed,
        "error_uri" => "/logout",
        'error_msg' => ""
        );
}

//print_r($control_array);
//echo "<hr>";
//print_r($this->ci->session->all_userdata());
// Page that need to be controlled
$config['page_control'] = $control_array;
/*$config['page_control'] = array(
    'dashboard/' => array(
        'allowed'    => array(1,2),
        'error_uri'  => '/logout', 
        'error_msg'  => "",
    ),
	'timesheet/' => array(
        'allowed'    => array(1,2),
        'error_uri'  => '/logout', 
        'error_msg'  => "",
    ),
);*/

// Page that need The Very Private Page (VPP) access control
$config['vpp_control'] = array(

    'test/salary/personal/' => array(                       // the "module/controller/method/" to protect
        'allowed'    => array(0, 1),                    // the allowed user role_id array (e.g. user role is 0, Admin role is 1)
        'vpp_sess_name'        => 'user_id',          // variable session key for Very Private Page (VPP)
        'vpp_key'        => 4,          // number of segment in the uri that contain the information about vpp_sess_name (e.g. user_id)
        'error_uri'  => '/staticpage/error_auth',  // the url to redirect to on failure
        'error_msg'  => "",
    ),
    'test/profile/edit/' => array(                       // the "module/controller/method/" to protect
        'allowed'    => array(0, 1),                    // the allowed user role_id array (e.g. user role is 0, Admin role is 1)
        'vpp_sess_name'        => 'user_id',          // variable session key for Very Private Page (VPP)
        'vpp_key'        => 4,          // number of segment in the uri that contain the information about vpp_sess_name (e.g. user_id)
        'error_uri'  => '/staticpage/error_auth',  // the url to redirect to on failure
        'error_msg'  => "",
    ),
    'salary/personal/' => array(                       // the "module/controller/method/" to protect
        'allowed'    => array(0, 1),                    // the allowed user role_id array (e.g. user role is 0, Admin role is 1)
        'vpp_sess_name'        => 'user_id',          // variable session key for Very Private Page (VPP)
        'vpp_key'        => 3,          // number of segment in the uri that contain the information about vpp_sess_name (e.g. user_id)
        'error_uri'  => '/staticpage/error_auth',  // the url to redirect to on failure
        'error_msg'  => "",
    ),
    'profile/edit/' => array(                       // the "module/controller/method/" to protect
        'allowed'    => array(0, 1),                    // the allowed user role_id array (e.g. user role is 0, Admin role is 1)
        'vpp_sess_name'        => 'user_id',          // variable session key for Very Private Page (VPP)
        'vpp_key'        => 3,          // number of segment in the uri that contain the information about vpp_sess_name (e.g. user_id)
        'error_uri'  => '/staticpage/error_auth',  // the url to redirect to on failure
        'error_msg'  => "",
    ),
);
/* End of file autoacl.php */
/* Location: ./system/application/config/autoacl.php */
