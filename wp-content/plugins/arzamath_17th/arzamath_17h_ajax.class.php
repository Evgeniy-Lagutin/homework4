<?php
/**
 * Created by PhpStorm.
 * User: kalashnikoff
 * Date: 14.12.14
 * Time: 11:25
 */

class Arzamath_17th_Ajax {

    public function __construct() {
        add_action('admin_footer', array($this, 'myActionJavascript'));
        add_action('wp_ajax_my_action', array($this, 'myActionCallback'));
    }

    public function  myActionJavascript()
    {
        $script = <<<HTML
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".just-button").click(function(e) {
            e.preventDefault();
            var data = {
                action: "my_action",
                articleText: $(".wp-editor-area").val()
            };
            $.ajax({
                type: "POST",
                url: ajaxurl,
                data: data,
                success: function(response) {
                $("#message").append(response);
            },
                error: function(response) {
                $("#message").append(response);
            },
                dataType: "json"
            });
        });
    });
</script>
HTML;

        echo $script;
    }

    public function myActionCallback()
    {
        global $wpdb; // this is how you get access to the database

        $articleText = $_POST['articleText'];
        header('Content-Type: application/json');
        echo json_encode($articleText);

        die();
    }
}