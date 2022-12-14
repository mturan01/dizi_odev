<pre style="font-size: 35px">
<?php
$numbers = [ "Adana", "Mersin", "Antalya", "Balıkesir", "Muğla","Aydın", "İzmir", "İstanbul", "", "", NULL];

$array_filter=array_filter($numbers,function ($e){
    return $e !=="";
});

$array_filter_son=array_filter($array_filter,function ($e){
    return $e !==null;
});

function randomArray($i){
    global $array_filter_son;
    $result = array_flip($array_filter_son);
    return array_rand($result, $i);
}
print_r(randomArray(2));
print_r(randomArray(3));
print_r(randomArray(4));
print_r(randomArray(5));
print_r(randomArray(6));


?>
</pre>
