<?
function getInputData($file = 'input.txt')
{
    $data = [];
    $fh = fopen($file, 'r');
    while ($line = fgets($fh)) {
        $data[] = $line;
    }
    fclose($fh);

    return $data;
}

$input = getInputData();
$tanksCount = $input[0];
$volumes = explode(' ', $input[1]);

$max = $volumes[0];
foreach ($volumes as $volume) {
    $max = max($max,$volume);
    if($volume < $max) {
        $result = -1;
        break;
    }
}

file_put_contents('output.txt', $result == -1 ? $result : max($volumes) - min($volumes));
