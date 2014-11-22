<?php

class Arzamath_17th_Settings
{
    /**
     * Creates admin settings
     */
    public function __construct()
    {
        add_action('admin_menu', array($this, 'createSettings'));
    }

    public function createSettings()
    {
        $this->addMenuItem();
        $this->registerSettings();
    }

    public function addMenuItem()
    {

        add_menu_page(
            'Arzamath 17th Settings',
            'Arzamath 17th',
            'administrator',
            'arzamath_17th',
            array($this, 'getTemplate'),
            '',
            1
        );

        add_options_page(
            'Arzamath 17th Settings',
            'Arzamath 17th',
            'manage_options',
            'arzamath_17th',
            array($this, 'getTemplate')
        );
    }

    public function registerSettings()
    {
        register_setting( 'arzamath_17th-group', 'arzamath_17th_text_field' );
        register_setting( 'arzamath_17th-group', 'arzamath_17th_select' );
    }

    public function getTemplate()
    {
        include (dirname(__FILE__) . '/templates/settings.php');
    }
}