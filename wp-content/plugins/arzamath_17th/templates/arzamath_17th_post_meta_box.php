<label for="arzamath_17th_multiselect">Select something</label>
<select id="arzamath_17th_multiselect" name="arzamath_17th_multiselect" multiple="multiple">
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
