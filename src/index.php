<?php

$words = "{query}";

$wordArray = explode(' ', $words);

$wordArray = array_map('strtolower', $wordArray);

$dashCase = implode('-', $wordArray);

echo $dashCase;
