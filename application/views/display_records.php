<html>
<head>
<title>Display records</title>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
 
<body>
<table width="600" border="0" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Sr No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->name."</td>";
  echo "<td>".$row->email."</td>";
  echo "<td>".$row->subject."</td>";
  echo "<td><a href='updatedata?id=".$row->id."'>Update</a></td>";
  echo "<td><a href='deletedata?id=".$row->id."'>Delete</a></td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>
</body>
</html>