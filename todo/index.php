<?php 
include('./db_config.php');

$sql="select * from todo";
$result = $conn->query($sql);

echo "<pre>";
print_r($result);
echo "</pre>";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

  <div class="container p-5">
    <h3> Todo Application </h3>
    <form action="save.php" method="POST">
    <input type="text"  class="" placeholder="Enter" name="todo">
    <button type="submit" class="btn btn-primary"> AddTodo</button>
    </form>
    <table class="table">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Goal</th>
      <!-- <th scope="col">Last Name</th>
      <th scope="col">Twitter Handle</th>
      <th scope="col">Goal</th> -->
      <th scope="col">Action</th>
      <th scope="col">Action 2</th>
    </tr>
  </thead>
  <tbody>

  <?php
  while ($row = $result->fetch_assoc()){
    ?>

    <tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['Title']?></td>
    
    <td><button class="btn btn-danger" ><a href="delete.php?id=<?php echo $row["id"];?>">Delete</button></td>
    <td><button class="btn btn-secondary"><a href="update.php?" class="text-primary">Update</button></td>
    <?php
  }
    // $testArray = array('Gold','Plat','Diamond');
    // // print_r($testArray);
    // foreach($testArray as $value){
    //   echo "<li>" .$value ."</li>";
    // }
    ?>
  </tbody>
  </table>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>