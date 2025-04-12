<?php
$students=["Minhaz","Azharul","Shakil"];
echo "Hello This is my First Git Learn";
?>
<table border="1" width="200" cellpadding="5" cellspacing="0">
    <tr>
        <th>Students Name</th>
    </tr>
    <?php
    foreach($newStudents as $student){
        echo "<tr><td><center>$student</center></td></tr>";
    }
    ?>
</table>

