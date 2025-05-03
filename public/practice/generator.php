<?php

// function countDown(int $start): array
// {
//     $result = [];
//     for($i = $start; $i > 0; $i-- ) {
//         $result[] = random_int(1, 100);
//     }
//     return $result;
// }

function countDown(int $start): Generator
{
    for($i = $start; $i > 0; $i--) {
        yield random_int(1, 100);
    }

}

foreach (countDown(5) as $number) {
    echo "$number\n";
}

?>
