<?php
require_once 'core/init.php';
$api = new Api();
if (!empty($_GET)) {
    foreach ($_GET as $key => $value) {
        // check if it has a valid parameter, if not display all courses
        // Use return to stop it from printing multiple json records
        switch ($key) {
            case 'name':
                return print_r($api->getCourse($key, $value));
            case 'category':
                return print_r($api->getCourse($key, $value));
        }
    }
} else {
    return print_r($api->getCourse($key, $value));
}
