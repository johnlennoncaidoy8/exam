<?php
function gridToString($grid) {
    foreach ($grid as $row) {
        $line = '';
        foreach ($row as $cell) {
            $line .= ($cell == 1) ? 'X' : '~';
        }
        echo "“" . $line . "”\r\n"; 
    }
}

$matrix = [
    [1,1,1,1],
    [0,1,1,0],
    [0,1,0,1],
    [1,1,0,0]
];

gridToString($matrix);
?>
