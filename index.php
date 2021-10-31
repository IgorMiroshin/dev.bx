<?php

$inputValue = readline("How old are you: ");

$filterKey = 'age_restriction';

$useFormattedOutput = [
    "title" => ["key" => false, "format" => false, "delimiter" => ' ', "output" => true],
    'release_year' => ["key" => false, "format" => "(,)", "delimiter" => ", ", "output" => true],
    'duration' => ["key" => false, "format" => false, "delimiter" => false, "output" => false],
    'age_restriction' => ["key" => false, "format" => ',+', "delimiter" => '. ', "output" => true],
    'rating' => ["key" => "Rating - ", "format" => false, "delimiter" => false, "output" => true],
];

$movies = [
    [
        "title" => "The Shawshank Redemption",
        "release_year" => 1994,
        "duration" => 144,
        "age_restriction" => 16,
        "rating" => 9.3
    ],
    [
        "title" => "The Godfather",
        "release_year" => 1972,
        "duration" => 175,
        "age_restriction" => 16,
        "rating" => 9.2
    ],
    [
        "title" => "The Dark Knight",
        "release_year" => 2008,
        "duration" => 152,
        "age_restriction" => 14,
        "rating" => 9.0
    ],
    [
        "title" => "12 Angry Men",
        "release_year" => 1957,
        "duration" => 96,
        "age_restriction" => 16,
        "rating" => 9.0
    ],
    [
        "title" => "Schindler's List",
        "release_year" => 1993,
        "duration" => 195,
        "age_restriction" => 16,
        "rating" => 8.9
    ],
    [
        "title" => "The Lord of the Rings: The Return of the King",
        "release_year" => 2003,
        "duration" => 201,
        "age_restriction" => 12,
        "rating" => 8.9
    ],
    [
        "title" => "Pulp Fiction",
        "release_year" => 1994,
        "duration" => 154,
        "age_restriction" => 18,
        "rating" => 8.9
    ],
    [
        "title" => "Il buono, il brutto, il cattivo",
        "release_year" => 1966,
        "duration" => 161,
        "age_restriction" => 12,
        "rating" => 8.8
    ],
    [
        "title" => "Fight Club",
        "release_year" => 1999,
        "duration" => 139,
        "age_restriction" => 18,
        "rating" => 8.8
    ],
    [
        "title" => "Forrest Gump",
        "release_year" => 1994,
        "duration" => 142,
        "age_restriction" => 0,
        "rating" => 8.8
    ],
    [
        "title" => "Inception",
        "release_year" => 2010,
        "duration" => 148,
        "age_restriction" => 12,
        "rating" => 8.8
    ],
    [
        "title" => "The Matrix",
        "release_year" => 1999,
        "duration" => 136,
        "age_restriction" => 16,
        "rating" => 8.7
    ],
    [
        "title" => "Goodfellas",
        "release_year" => 1990,
        "duration" => 146,
        "age_restriction" => 16,
        "rating" => 8.7
    ],
    [
        "title" => "One Flew Over the Cuckoo's Nest",
        "release_year" => 1975,
        "duration" => 133,
        "age_restriction" => 16,
        "rating" => 8.7
    ],
    [
        "title" => "Shichinin no samurai",
        "release_year" => 1954,
        "duration" => 227,
        "age_restriction" => 0,
        "rating" => 8.6
    ],
    [
        "title" => "Se7en",
        "release_year" => 1995,
        "duration" => 127,
        "age_restriction" => 18,
        "rating" => 8.6
    ],
    [
        "title" => "The Silence of the Lambs",
        "release_year" => 1991,
        "duration" => 118,
        "age_restriction" => 18,
        "rating" => 8.6
    ],
    [
        "title" => "Cidade de Deus",
        "release_year" => 2002,
        "duration" => 130,
        "age_restriction" => 16,
        "rating" => 8.6
    ],
    [
        "title" => "La vita e bella",
        "release_year" => 1997,
        "duration" => 116,
        "age_restriction" => 0,
        "rating" => 8.6
    ],
    [
        "title" => "It's a Wonderful Life",
        "release_year" => 1946,
        "duration" => 130,
        "age_restriction" => 0,
        "rating" => 8.6
    ]
];

function get_numeric($value)
{
    if (is_numeric($value)) {
        return $value + 0;
    }
    return false;
}

function checkInt($value): bool
{
    $value = get_numeric($value);
    return $value >= 0 && is_int($value) && !is_float($value);
}

function filterArray(array $arr, $filterValue, $filterKey): bool
{
    $flag = false;
    foreach ($arr as $key => $arrItem) {
        if (!is_array($arrItem)) {
            if ($key === $filterKey) {
                $flag = $filterValue >= $arrItem;
            }
        } else {
            $flag = filterArray($arrItem, $filterValue, $filterKey);
        }
    }
    return $flag;
}

function formattedOutput($value, $useFormattedOutput): string
{
    $output = '';
    if (is_array($value)) {
        foreach ($value as $key => $item) {
            $useFormattedOutputItem = $useFormattedOutput[$key];
            if (is_array($item)) {
                $output = formattedOutput($item, $useFormattedOutput);
            } else {
                foreach ($useFormattedOutputItem as $keyFOI => $itemFOI) {
                    if ($itemFOI) {
                        switch ($keyFOI) {
                            case 'key':
                                $item = $itemFOI . $item;
                                break;
                            case 'format':
                                $arrItemFOI = explode(',', $itemFOI);
                                $item = $arrItemFOI[0] . $item . $arrItemFOI[1];
                                break;
                            case 'delimiter':
                                $item = $item . $itemFOI;
                                break;
                            case 'output':
                                $output .= $item;
                                break;
                        }
                    }
                }
            }
        }
    } else {
        $output = $value . PHP_EOL;
    }
    return $output;
}

function showArray(array $arr, $filterValue, $filterKey, $useFormattedOutput)
{
    $key = 0;
    foreach ($arr as $arrItem) {
        if (filterArray($arrItem, $filterValue, $filterKey)) {
            $key++;
            echo $key . '. ' . formattedOutput($arrItem, $useFormattedOutput) . PHP_EOL;
        }
    }
}

if (checkInt($inputValue)) {
    showArray($movies, $inputValue, $filterKey, $useFormattedOutput);
} else {
    echo "Error Input Value:(((";
}