<?php

function discover_type(int $age, string $name, float $gpa, bool $isStudent) {
    if ($isStudent) {
        echo "Hello my name is $name, I'm $age years old. I'm student at Epitech with a GPA of $gpa.";
    } else {
        echo "Hello my name is $name, I'm $age years old. I'm not a student.";
    }
}

?>