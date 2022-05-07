<?php
include ('connection.php');
$id = isset(($_GET ['id'])) ? $_GET ['id'] : '' ;
$query = mysqli_query($connect, "select * from mahasiswa where id='$id'");
$data = mysqli_fetch_array($query);
$id = $data['id'];
$nim = $data['nim'];
$name = $data['full_name'];
$gender = $data['gender'];
$date_of_birth = $data['date_of_birth'];
$address = $data['address'];
$major = $data['major'];
?>
<!DOCTYPE html>
<html>
<head>
 <title>Edit Data</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid mt-5">
        <form action="process_edit.php" method="post">
            NIM:
            <input type="text" name="nim" value ="<?= $nim ?>"><br>
            Name:
            <input type="text" name="full_name" value="<?= $name ?>"><br>
            Gender:
            <select name="gender" value="<?= "$gender"?>">
             <option value="">Select</option>
             <option value="Male" <?= $gender == "Male" ?  'selected ="selected"' : '' ?>>Male</option>
             <option value="Female" <?= $gender == "Female"? 'selected = "selected"' : '' ?>>Female</option>
            </select><br>
            Date Of Birth:
            <input type="text" name="date_of_birth" value = "<?= $date_of_birth ?>" ><br>
            Address:
            <textarea name="address" ><?= $address ?></textarea><br>
            Major:
            <input type="text" name="major" value="<?= $major ?>"><br>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="submit" value="Simpan" > <input type="reset" value="Reset">
           </form>
      </div>
</body>
</html>
