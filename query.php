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

    if()
    {
      while($row = $rs->fetch_assoc()) {
        $id = $row['id'];
        $lname = $row['last'];
        $fname = $row['first'];
        $sex = $row['sex'];
        $dob = $row['dob'];
        $dod = $row['dod'];
        print "$id, $lname, $fname, $sex, $dob, $dod <br />";
      }
    }



  }
?>





</body>
</html>
