<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table width="600px" cellspacing="0px" cellpadding="0px" border="10px">

      <?php
      for ($i=0; $i <=10 ; $i++) {
        echo "<tr>";
        for ($j=0; $j <= $i ; $j++) {
           echo "<td height=50px width=80px bgcolor=black></td>";
        }
        echo "</tr>";
      }
       ?>

    </table>
  </body>
</html>
