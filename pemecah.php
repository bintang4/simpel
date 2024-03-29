<?php

if (!file_exists('result')) {
    mkdir('result', 0777, true);
}

echo "list : "; $list = rtrim(fgets(STDIN));
echo "Divide : "; $div = rtrim(fgets(STDIN));

$listnya = fopen($list, "r");

$explode = explode("\n", fread($listnya, filesize($list)));


$total_list = count($explode);
echo "=================\n";
echo "Total list : $total_list\n";

if($div > $total_list) {
    exit("Div cannot greater then total list");
}

$divide = round($total_list/$div);

$chunk = array_chunk($explode, $divide);

for($i=0;$i<count($chunk);$i++) {
    echo "Processing no ".($i+1)." \n"; 
    $f = fopen('result/'.($i+1).'.txt', "a+");

    for($j=0;$j<count($chunk[$i]);$j++) {
        fwrite($f, $chunk[$i][$j]."\n");
    }
    fclose($f);
}
echo "Result saved into 'result' folder\n";