<?php

class  Arzamath_17th {

    public function __construct() {
        require_once(dirname(__FILE__) . '/settings.class.php');
        new Arzamath_17th_Settings();
        require_once(dirname(__FILE__) . '/post_types/arzamath_17th_post_type.class.php');
        new Arzamath17thPostType();
        require_once(dirname(__FILE__) . '/arzamath_17h_ajax.class.php');
        new Arzamath_17th_Ajax();
    }
}
