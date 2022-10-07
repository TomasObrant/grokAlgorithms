function binarySearch($search, $arr) {

    $first = 0;
    $last = count($arr) - 1;

    while ($first <= $last) {
        
        $average = floor(($first + $last) / 2);
        
        if ($arr[$average] == $search) return $average;
        elseif ($arr[$average] > $search) $last = $average--;
        else $first = $average++;
        
    } 
    return null;
}

$arr = [1, 3, 5, 7, 9, 11, 13, 15];

binarySearch (5, $arr);


