<?php
require_once 'classes/User.php';
$id = $_GET['id'];

$user = new User();
$data = $user->UpdateUser($id);
$data = mysqli_fetch_assoc($data);


if (isset($_POST['name'])) {

    $user->UpdateUserInfo($_POST);
}


?>
<html>
<body>
<form action="" method="POST">
    <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>"/>
    <div class="form-group">
        <label for="email">Name:</label>
        <input type="text" class="form-control" name="name" value="<?php echo $data['name']; ?>" id="name">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" name="email" value="<?php echo $data['email']; ?>" id="email">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>

</html>


