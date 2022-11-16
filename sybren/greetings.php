<?php

$current_time = date(format: 'H');
$morning = ' Goedemorgen';
$afternoon = ' Goedemiddag';
$evening = ' Goedenavond';
$night = ' Goedenacht';

echo $current_time;
if($current_time > 6 && $current_time < 12) {
    echo $morning;
} else if($current_time > 12 && $current_time < 18) {
    echo $afternoon;
} else if($current_time > 18) {
    echo $evening;
} else {
    echo $night;
}