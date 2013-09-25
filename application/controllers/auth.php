<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

    /**
     * Account Sign in.
     *
     * @return View
     */
    public function signin()
    {
        // 检查用户是否登陆
        if (false)
        {
            
        }

        $this->load->view('frontend/auth/signin');
    }
}
