<?php
$arr = [];
for ($i = 10; $i <= 53; $i++) {
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0)
            continue 2;
    }
    $arr[] = "$i";

}
foreach ($arr as $value) {
    echo $value . ' ';
}
echo '<br />';
echo 'Всего символов = ' . count($arr);

echo '<br />';
$data = [
    [
        'a' => 11,
        'b' => 13,
        'c' => 17
    ],
    [
        'a' => 19,
        'b' => 23,
        'c' => 29
    ],
    [
        'a' => 31,
        'b' => 37,
        'c' => 41
    ],
    [
        'a' => 43,
        'b' => 47,
        'c' => 53
    ]
];


echo '<br />';
function getYardage($a, $b, $c)
    {
    $yardage = 1 / 2 * $c * ($a + $b);
    return $yardage;
    }

function getPow($base, $exp)
    {
    $pow = $base ** $exp;
    return $pow;
    }

function minArr($mas)
    {
    foreach ($mas as $value) {
        foreach ($value as $v) {
            $q[] = $v;
        }
    }
    $min = min($q);
    return $min;
    }

function exprArr($dat, $i)
    {
    $f = $dat[$i]['a'] * getPow($dat[$i]['b'], $dat[$i]['c'] + getPow(((getPow(($dat[$i]['a'] / $dat[$i]['c']), $dat[$i]['b'])) % 3), minArr($dat)));
    return $f;
    }

for ($i = 0; $i < count($data); $i++) {
    $s = getYardage($data[$i]['a'], $data[$i]['b'], $data[$i]['c']);
    $data[$i]['s'] = $s;
    echo 'Площадь трапеции = ' . $s;
    echo '<br />';
}

echo '<br />';
$i = 0;
do {
    echo $data[$i]['a'] . ', ' . $data[$i]['b'] . ', ' . $data[$i]['c'] . ', ' . $data[$i]['s'];
    $i++;
    echo '<br />';
} while ($data[$i]['s'] < 1400);

echo '<br />';

$p = minArr($data);
echo 'Минимальное значение: ' . $p;

echo '<br />';
echo '<br />';

$data_1 = [
    [
        'a' => 11,
        'b' => 13,
        'c' => 17
    ],
    [
        'a' => 19,
        'b' => 23,
        'c' => 29
    ],
    [
        'a' => 31,
        'b' => 37,
        'c' => 41
    ],
    [
        'a' => 43,
        'b' => 47,
        'c' => 53
    ]
];

for ($i = 0; $i < count($data); $i++) {
    $data[$i]['f'] = exprArr($data, $i);
}

$p = &$i;
for ($i = 0; $p < count($data); $i++) {
    if ($data[$p]['s'] % 2 == 0) {
        continue;
    }
    $data[$p]['m'] = 'нечетное';
}

echo '<table cellpadding="5" cellspacing="0" border="1">';
echo "<tr><th>a</th><th>b</th><th>c</th></th><th>s</th></th><th>f</th></th><th>m</th></tr>";
foreach ($data as $value) {
    echo "<tr>";
    foreach ($value as $key => $val)
        echo "<td>" . $val . "</td>";
    echo "</tr>";
}
echo "</table>";


//print_r(array_values($data));


class Math
{
    protected $yardage;
    protected $pow;
    protected $min;
    protected $f;

    public function getYardage($a, $b, $c)
        {
        $yar = 1 / 2 * $c * ($a + $b);
        $this -> yardage = $yar;
        return $this -> yardage;
        }

    public function getPow($base, $exp)
        {
        $pow = $base ** $exp;
        $this -> pow = $pow;
        return $this -> pow;
        }

    public function minArr($mas)
        {
        foreach ($mas as $value) {
            foreach ($value as $v) {
                $q[] = $v;
            }
        }
        $min = min($q);
        $this -> min = $min;
        return $this -> min;
        }

    public function exprArr($dat, $i)
        {
        $f = $dat[$i]['a'] * getPow($dat[$i]['b'], $dat[$i]['c'] +
                getPow(((getPow(($dat[$i]['a'] / $dat[$i]['c']), $dat[$i]['b'])) % 3), minArr($dat)));
        $this -> f = $f;
        return $this -> f;
        }
}

$object = new Math();
echo $object -> getYardage(5, 4, 8);
echo '<br />';
echo $object -> getPow(5, 2);

class Math_2
{
    protected $f2;

    public function exprArr_1($mass, $i)
        {
        $f2 = getPow($mass[$i]['a'] + $mass[$i]['b'], $mass[$i]['c'] *
            getPow($mass[$i]['a'] / $mass[$i]['c'], minArr($mass)));
        return $this -> f2;
        }
}


?>