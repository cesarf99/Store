<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require(CLIENT_DIR . 'libs/client.lib');
require_once(SMARTY_DIR . 'libs/Smarty.class.php');

class Client_Smarty extends Smarty {

    function __construct() {
        parent::__construct();
        $this->setTemplateDir(CLIENT_DIR . 'templates');
        $this->setCompileDir(CLIENT_DIR . 'templates_c');
        $this->setConfigDir(CLIENT_DIR . 'configs');
        $this->setCacheDir(CLIENT_DIR . 'cache');
    }

}
