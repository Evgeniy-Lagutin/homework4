<label for="arzamath_17th_post_meta_box">Select something</label>
<select id="arzamath_17th_post_meta_box" name="arzamath_17th_post_meta_box[]" multiple="multiple">
    <?php
    $selectValues = array(
        1 => 'first option',
        2 => 'second option',
        3 => 'third option',
        4 => 'forth option'
    );
    $selectedValues = unserialize(get_post_meta(get_the_ID(), 'arzamath_17th_post_meta_box', true));
    foreach ($selectValues as $key => $value) {
        $selected = '';
        if ( in_array($key, $selectedValues))
        {
            $selected =  'selected';
        }
        echo '<option value=' . $key . ' ' . $selected . '>' . $value .'</option>';

    }
    ?>
</select>
