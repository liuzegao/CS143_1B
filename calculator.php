<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Expression: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   // collect value of input field
   $val = $_REQUEST['fname'];
   $val = str_replace(" ", "", $val);
   $invalid = 0;
   print "<h2>Result:</h2>";
   if (empty($val))
   {
      echo "Error: Expression is empty";
   }
   else
   {
     $stringLength = strlen($val);
     for($i = 0; $i < $stringLength; $i++)
     {
	      if(!is_numeric($val[$i]))
        {
          if($val[$i] != '+' && $val[$i] != '-' && $val[$i] != '*' && $val[$i] != '/' && $val[$i] != '.')
          {
            $invalid = 1;
            break;
          }

        }
        if($val[$i]=='/' && $val[$i+1]==0 && ($val[$i+2] != "." && !is_numeric($val[$i+2])))
        {
          $invalid = 2;
          break;
        }


      }
   }

   if($invalid == 1)
   {
     echo "Error: Invalid Expression ";
   }
   if($invalid == 2)
   {
     echo "Error: Can't divide by 0";
   }
   else
   {
     $answer = eval("return ($val);");
     if($answer===FALSE)
       echo "Error: Invalid Expression";
     else
      echo $val . " = " . $answer;
   }

}
?>

</body>
</html>
