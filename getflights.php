<table border = '1px'>
<tr>
<td>AirlineCode</td><td>ActualArriveTime</td>
<tr>
<?php
$result = $connection->query('SELECT AirlineCode,ActualArriveTime FROM flight WHERE ActualArriveTime = SchduledArriveTime');
while ($row = $result->fetch()) {
        echo "<tr><td>".$row["AirlineCode"]."</td><td>".$row["ActualArriveTime"]."</td></tr>";
}
echo "</ol>";
?>
</table>