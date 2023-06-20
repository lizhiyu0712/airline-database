<?php
   $query = "SELECT DISTINCT OfferedDate FROM offereddate";
   $result = $connection->query($query);
   echo "Which date of the week are you looking up? </br>";
   while ($row = $result->fetch()) {
        echo '<input type="radio" name="dateofweek" value="';
        echo $row["OfferedDate"];
        echo '">' . $row["OfferedDate"] . "<br>";
   }
?>