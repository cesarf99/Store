<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require(CART_DIR . 'libs/cart.lib');
require_once(SMARTY_DIR . 'libs/Smarty.class.php');

class Cart_Smarty extends Smarty {

    function __construct() {
        parent::__construct();
        $this->setTemplateDir(CART_DIR . 'templates');
        $this->setCompileDir(CART_DIR . 'templates_c');
        $this->setConfigDir(CART_DIR . 'configs');
        $this->setCacheDir(CART_DIR . 'cache');
    }

}
