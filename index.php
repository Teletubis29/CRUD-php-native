<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-native</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container-sm mt-5">
  <a class="btn btn-primary" href="input.html" role="button">Add data</a>
    <table class="table" >
        <thead class="thead-dark">
          <tr>
            <th scope="col">NO</th>
            <th scope="col">NIM</th>
            <th scope="col">NAME</th>
            <th scope="col">GENDER</th>
            <th scope="col">DATE OF BIRTH</th>
            <th scope="col">ADDRESS</th>
            <th scope="col">MAJOR</th>
            <th scope="col" colspan="2">ACTION</th>
          </tr>
        </thead>
        <tbody>
            <?php 
            include('connection.php');
            $query = mysqli_query($connect,"SELECT * FROM mahasiswa");
            $no=1;
            while ($data = mysqli_fetch_array($query)){
                ?>
                 <tr>
                 <td><?= $no++ ?></td>
                 <td><?= $data ['nim'] ?></td>
                 <td><?= $data ['full_name'] ?></td>
                 <td><?= $data ['gender'] ?></td>
                 <td><?= $data ['date_of_birth'] ?></td>
                 <td><?= $data ['address'] ?></td>
                 <td><?= $data ['major'] ?></td>
                 <td><a href="edit.php?id=<?=$data['id']?>">EDIT</a></td>
                 <td><a href="delete.php?id=<?=$data['id']?>" onclick="return confirm('Delete That Data? ')">DELETE</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
      </table>
</div>

</body>
</html>