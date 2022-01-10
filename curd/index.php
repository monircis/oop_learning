<?php
require_once 'classes/User.php';

$user = new User();
if(isset($_POST['name'])){

    $user->SaveUser($_POST);
}
$userData = $user->AllUsers();

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="NepsterJay" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title>Untitled 1</title>
</head>

<body>
<table>
    <tbody>
    <?php
     while ($data = mysqli_fetch_assoc($userData)) {
?>
         <tr>
             <td><?php echo $data['name'] ?></td>
             <td><?php echo $data['email'] ?></td>
             <td>
                 <a href="edit.php?id=<?php echo $data['id'] ?>">Edit</a>
                 <a href="delete.php?id=<?php echo $data['id'] ?>">Delete</a>
             </td>

         </tr>

     <?php }
    ?>
    </tbody>

</table>

 <form action="" method="POST">
  <div class="form-group">
    <label for="email">Name:</label>
    <input type="test" class="form-control" name="name" id="name">
  </div>
     <div class="form-group">
         <label for="email">Email:</label>
         <input type="test" class="form-control" name="email" id="email">
     </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="password" class="form-control" id="pwd">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form> 

</body>
</html>