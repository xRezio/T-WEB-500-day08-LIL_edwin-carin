<?php
function get_shortest(array $strings) {
    if (empty($strings)) {
        return null; 
    }

    $shortest = $strings[0]; 
    $shortestLength = strlen($shortest);

    foreach ($strings as $string) {
        $length = strlen($string);
        if ($length < $shortestLength) {
            $shortest = $string;
            $shortestLength = $length;
        }
    }

    return $shortest;
}

?>