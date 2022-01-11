<?php

function searchunpaired(array $arr)
{
    foreach (array_count_values($arr) as $key => $item) {
        if ($item % 2 !== 0) {
            return $key;
        }
    }
    return 'Не найдено!';
}

$array = [2, 3, 2, 1, 1];

echo searchunpaired($array);

function searchSubString(string $str1, string $str2)
{
    if (empty(array_diff(str_split($str1), str_split($str2))) && count(str_split($str1)) === count(str_split($str2))) {
        return "Да";
    }
    return "Нет";
}

$string1 = 'abc';
$string2 = 'acb';

echo searchSubString($string1, $string2);

$string1 = 'abc';
$string2 = 'bac';

echo searchSubString($string1, $string2);

$string1 = 'abc';
$string2 = 'ab c';

echo searchSubString($string1, $string2);

$string1 = 'Abc';
$string2 = 'abc';

echo searchSubString($string1, $string2);

$string1 = 'abc';
$string2 = 'baf';

echo searchSubString($string1, $string2);

$string1 = 'abc';
$string2 = 'abcd';

echo searchSubString($string1, $string2);

//DELETE FROM EMPLOYEE WHERE EMPLOYEE.HEAD_ID IS NULL
//SELECT ID.EMPLOYEE, NAME.EMPLOYEE, NAME.DEPARTMENT FROM EMPLOYEE LEFT JOIN DEPARTMENT ON ID.DEPARTMENT=DEPARTMENT_ID.EMPLOYEE WHERE SALARY.EMPLOYEE>7000
?>
<table>
    <tr>
        <td>Имя</td>
        <td>Пол</td>
        <td>Сайт</td>
    </tr>
    <tr>
        <td>Евгений</td>
        <td>М</td>
        <td><a href="https://shelenkov.com/">shelenkov.com</a></td>
    </tr>
    <tr>
        <td>Екатерина</td>
        <td>Ж</td>
        <td>Пока нет</td>
    </tr>
</table>

<div class="group"></div>
<script>
    let group = document.querySelector('.group');
    let groupItem = document.createElement('div');
    groupItem.className = "group-item";
    groupItem.innerHTML = "Hello world!";
    group.appendChild(groupItem);
</script>