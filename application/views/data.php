<?php 
$box = [
    ['fristname' => 'kit' , 'email' => 'kit@gmail.com'],
    ['fristname' => 'jaa' , 'email' => 'jaa@gmail.com'],
    ['fristname' => 'kit' , 'email' => 'kit@gmail.com'],
    ['fristname' => 'kit' , 'email' => 'kit@gmail.com'],
    ['fristname' => 'kit' , 'email' => 'kit@gmail.com'],
]; 
// for($i=0; $i < count($box); $i++)
// {
//     echo $box[$i]['fristname'];
// }
?>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
<table style="width:100%">
  <tr>
  	<th>ID</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Delete</th>
    <th>Edit</th>
  </tr>
<?php 
foreach($data as $user){?>
  <tr>
  	<td><?php echo $user->id;?></td>
    <td><?php echo $user->firstname;?></td>
    <td><?php echo $user->lastname;?></td>
    <td><?php echo $user->email;?></td>
    <td><input type="button" name="Button" value="Delete" 
         onClick="javascript:window.location='delete?id=<?php echo $user->id; ?>';"></td>
    <td><input type="button" name="Button" value="Edit" 
         onClick="javascript:window.location='edit?id=<?php echo $user->id; ?>';"></td>
  </tr>
<?php }?>
</table>
</body>
</html>