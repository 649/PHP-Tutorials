<?php
function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'){
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces []= $keyspace[random_int(0, $max)];
    }
    return implode('', $pieces);
}
# USAGE: $variable = random_str(LENGTH_OF_RANDOM_STRING, "LETTERS/NUMBERS/SYMBOLS THAT YOU WANT CHOSEN");
# EXAMPLE $OneOutOf5 = random_str(1, "12345");
# EXAMPLE $SixLettersAndNumbers = random_str(6);
?>