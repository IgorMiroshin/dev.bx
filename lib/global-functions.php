<?php
function findElement(array $array, $keyFilter, $keyValue): array
{
    $result = [];
    foreach ($array as $item) {
        if (array_key_exists($keyFilter, $item)) {
            if (is_array($item[$keyFilter])) {
                if (in_array($keyValue, $item[$keyFilter])) {
                    $result[] = $item;
                }
            } else {
                if ($item[$keyFilter] === $keyValue) {
                    $result[] = $item;
                }
            }
        }
    }
    return $result;
}

function arrayToStr(array $array): string
{
    return implode(', ', $array);
}

function cropText(string $text, int $length): string
{
    return mb_strimwidth($text, 0, $length, "...");
}

function formattingDurationToTime(int $time)
{
    return date('H:i', mktime(0, $time));
}

function formattingLinkToImage(int $id, $path): string
{
    return $path . $id . '.jpg';
}

function formattingLinkToPage($key, $value, $page = ''): string
{
    $link = !empty($page) ? $page : '/';

    return $link . '?' . $key . '=' . $value;
}

function formattingVisualRating($value, int $limit)
{
    for ($i = 0; $i < round($value); $i++) {
        echo '<span class="active"></span>';
    }
    for ($i = round($value); $i < $limit; $i++) {
        echo '<span></span>';
    }
}