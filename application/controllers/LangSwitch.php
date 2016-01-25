<?php

class LangSwitch extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function switchLanguage($language = '') {
        if ($language != 'english' && $language != 'vietnam' && $language != '') {
            $language = 'vietnam';
        }
        $this->session->set_userdata('site_lang', $language);
        redirect(site_url('home'));
    }

}
