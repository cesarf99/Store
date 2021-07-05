<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require(PRODUCT_DIR . 'libs/product.lib');
require_once(SMARTY_DIR . 'libs/Smarty.class.php');

class Product_Smarty extends Smarty {

    function __construct() {
        parent::__construct();
        $this->setTemplateDir(PRODUCT_DIR . 'templates');
        $this->setCompileDir(PRODUCT_DIR . 'templates_c');
        $this->setConfigDir(PRODUCT_DIR . 'configs');
        $this->setCacheDir(PRODUCT_DIR . 'cache');
    }

}
