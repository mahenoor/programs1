<?php
$items = array(
    0 => array(
        0 => array(
            "available" => 1,
            "courier" => 1,
            "type" => 1,
            "price" => 42.89,
            "transitDays" => 3
        ),
        1 => array(
            "available" => 1,
            "courier" => 1,
            "type" => 3,
            "price" => 50.50,
            "transitDays" => 4
        ),
    ),
    1 => array(
        0 => array(
            "available" => 1,
            "courier" => 2,
            "type" => 1,
            "price" => 111,
            "transitDays" => 11
        ),
        1 => array(
            "available" => 0,
            "courier" => 2,
            "type" => 4,
            "price" => 22,
            "transitDays" => 22
        ),
    )
);
foreach($items as $key => $item) {
    foreach($item as $subKey => $subItem) {
        if ($subItem["available"] === 1) {
            $uniqueKey = $key . $subKey;
            echo sprintf(
                '<p class="row"><input type="radio" id="option-%1$s" value="service-%1$s" name="type">%2$s will cost %3$s and take %4$s</p>',
                $uniqueKey,
                $subItem["type"],
                $subItem["price"],
                $subItem["transitDays"]
            );
        }
    }
}
echo '<p><input type="submit" name="submit" value="submit"></p>';
?>