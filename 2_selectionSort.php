function findSmall($arr) {

    $smallest = $arr[0];
    $smallestIndex = 0;

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < $smallest) {
            $smallest = $arr[$i];
            $smallestIndex = $i;
        }
    }

    return $smallestIndex;
}

function selectionSort($arr) {

    $newArr = [];

    for ($i = 0, $len = count($arr); $i < $len; $i++) {
        $smallest = findSmall($arr);
        array_push($newArr, array_splice($arr, $smallest, 1)[0]);
    }

    return $newArr;
}

$arr = [5, 3, 6, 2, 10];

selectionSort($arr);