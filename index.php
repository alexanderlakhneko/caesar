<?php

if (!is_numeric($argv[1]) || $argc > 2) {
    die("Usage: index.php key\n");
}

$line = readline("plaintext: ");

$char = ord($line);

$final = '';

foreach (str_split($line) as $one) {

    $char = ord($one);

    if ($char >= 65 && $char <= 90) {

        $char = $char + $argv[1];

        while ($char > 90) {
            $char -= 26;
        }
    }

    if ($char >= 97 && $char <= 122) {
        $char = $char + $argv[1];

        while ($char > 122) {
            $char -= 26;
        }
    }

    $final .= chr($char);

}

echo 'ciphertext: ' . $final . "\n";


