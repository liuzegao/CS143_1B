<!DOCTYPE html>
<html>
<body>

<p>
SQL BOX
</p>
<br>Type an SQL query in the following box:
<p>
Example: SELECT * FROM Actor WHERE id=10;
</p>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<textarea name="query" cols="60" rows="8" style="margin: 0px; width: 590px; height: 269px;"></textarea>
<br><input type="submit">
<br>
</form>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $val = $_REQUEST['query'];

    //Connect PHP code with SQL
    $db = new mysqli('localhost', 'cs143', '', 'TEST');
    if($db->connect_errno > 0)
    {
      die('Unable to connect to database [' . $db->connect_error . ']');
    }

    //Issuing the query
    $query = $val;
    $rs = $db->query($query);
    if ($rs->num_rows > 0){
      //$ip = "id";
      echo "<table border='1' width='600'>";
      echo "<tr>";
      echo "<td>"."<b>$id</b>"."</td>";
      echo "<td>"."<b>last</b>"."</td>";
      echo "<td>"."<b>first</b>"."</td>";
      echo "<td>"."sex"."</td>";
      echo "<td>"."dob"."</td>";
      echo "<td>"."dod"."</td>";
      echo "</tr>";
      while($row = $rs->fetch_assoc()) {
        $id = $row['id'];
        $lname = $row['last'];
        $fname = $row['first'];
        $sex = $row['sex'];
        $dob = $row['dob'];
        $dod = $row['dod'];
        echo "<tr>";
        echo "<td>".($id)."</td>";
        echo "<td>".($lname)."</td>";
        echo "<td>".($fname)."</td>";
        echo "<td>".($sex)."</td>";
        echo "<td>".($dob)."</td>";
        if (isset($dod)){
          echo "<td>".($dod)."</td>";
        }else{
          echo "<td>"."N/A"."</td>";
        }
        echo "</tr>";
        //print "$id, $lname, $fname, $sex, $dob, $dod <br />";
      }
      echo "</table>";
    }

  }
?>


</body>
</html>
