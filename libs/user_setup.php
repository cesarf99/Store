<?php

require(USER_DIR . 'libs/user.lib');
require(SMARTY_DIR . 'libs/Smarty.class.php');

// smarty configuration
class User_Smarty extends Smarty {

    function __construct() {
        parent::__construct();
        $this->setTemplateDir(USER_DIR . 'templates');
        $this->setCompileDir(USER_DIR . 'templates_c');
        $this->setConfigDir(USER_DIR . 'configs');
        $this->setCacheDir(USER_DIR . 'cache');
    }

}
