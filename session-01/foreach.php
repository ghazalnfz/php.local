<?php

$users = ["ali"=>"mohamadi", "reza"=>"naghavi", "navid"=>"mohamadi"];

echo "<table>";
echo "<tr>
<th>name</th>
<th>lastname</th>
</tr>
";

foreach($users as $u => $user){
    echo "<tr>";
    echo "<td>$u</td>";
    echo "<td>$user</td>";
    echo "</tr>";
}


echo "</table>";
