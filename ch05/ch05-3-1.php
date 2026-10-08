SID: C113187221<BR>
Name: 傅瑞賢<BR>
EX02
<HR>

<?php
$total = 0;
for ($i = 1; $i <= 10; $i++) {
    echo "|" . $i;
    $total += $i;
}
echo "<HR>";
echo "總和: " . $total;