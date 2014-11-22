<div class="wrap">
    <h2>Arzamath 17th</h2>
    <form method="post" action="options.php">
        <?php settings_fields('arzamath_17th-group'); ?>
        <p>
            <label for="arzamath_17th_text_field">Enter some text</label>
            <input type="text" id="arzamath_17th_text_field" name="arzamath_17th_text_field" value="<?php echo get_option('arzamath_17th_text_field'); ?>" />
        </p>
        <p>
            <label for="arzamath_17th_select">Select something</label>
            <select id="arzamath_17th_select" name="arzamath_17th_select">
                <?php
                $selectValues = array(
                    1 => 'first option',
                    2 => 'second option',
                    3 => 'third option',
                    4 => 'forth option'
                );
                foreach ($selectValues as $key => $value) {
                    $selected = get_option('arzamath_17th_select') == $key ? 'selected' : '';
                    echo '<option value=' . $key . ' ' . $selected . '>' . $value .'</option>';
                }
                ?>
            </select>
        </p>
        <?php submit_button(); ?>
    </form>
</div>
