<?php
if(!isset($_GET['board'])):
    invalidBoard();
endif;

$inputStr = $_GET['board'];
$rows = preg_split('/[\/]/', $inputStr);

if (sizeof($rows) != 8):
    invalidBoard();
endif;

$allPieces = preg_split('/[-\/]/', $inputStr);
$resultTable = '';
$resultTable .= "<table>";

foreach ($rows as $row):
    $singlePieces = preg_split('/[-]/', $row);
    if (count($singlePieces) != 8):
        invalidBoard();
    endif;
    $resultTable .= "<tr>";
    foreach ($singlePieces as $pieceIndex=>$piece):
        if (strpos("RHBKQP ", $piece) === FALSE):
            invalidBoard();
        endif;
        $resultTable .= "<td>$piece</td>";
    endforeach;
    $resultTable .= "</tr>";
endforeach;
$resultTable .= "</table>";
echo $resultTable;
$occurences = array_count_values($allPieces);
foreach ($occurences as $key => $value):
    if ($key === ' '):
        unset($occurences[$key]);
    endif;
    switch($key):
        case 'R':
            $occurences['Rook'] = $occurences[$key];
            unset($occurences[$key]);
            break;
        case 'H':
            $occurences['Horseman'] = $occurences[$key];
            unset($occurences[$key]);
            break;
        case 'B':
            $occurences['Bishop'] = $occurences[$key];
            unset($occurences[$key]);
            break;
        case 'K':
            $occurences['King'] = $occurences[$key];
            unset($occurences[$key]);
            break;
        case 'Q':
            $occurences['Queen'] = $occurences[$key];
            unset($occurences[$key]);
            break;
        case 'P':
            $occurences['Pawn'] = $occurences[$key];
            unset($occurences[$key]);
            break;
    endswitch;
    $occurencesObj = new ArrayObject($occurences);
    $occurencesObj->ksort();
endforeach;
echo json_encode($occurencesObj);

function invalidBoard() {
    die ("<h1>Invalid chess board</h1>");
}
?>