<?php

//directories
define('USER_DIR', '../Store/');
define('SMARTY_DIR', 'C:/xampp/htdocs/Store/vendor/smarty/smarty/');

// setups
include(USER_DIR . 'libs/user_setup.php');

$user = new User;

// set the current action
$_action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'view';

switch ($_action) {
    case 'add':
        // adding a guestbook entry
        $user->displayForm();
        break;
    case 'submit':
        // submitting a guestbook entry
        $user->mungeFormData($_POST);
        if ($user->isValidForm($_POST)) {
            $user->addEntry($_POST);
            $user->displayBook($user->getEntries());
        } else {
            $user->displayForm($_POST);
        }
        break;
    case 'view':
    default:
        $user->displayusers($user->getUsers());
        break;
}