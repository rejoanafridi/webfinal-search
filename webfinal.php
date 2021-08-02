<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Final Web PHP Search</title>
</head>
<style>
     .container {
          margin: 0 200px;
     }

     table,
     th,
     td {
          border: 1px solid black;
          border-collapse: collapse;
     }

     th,
     td {
          padding: 5px;
          text-align: left;
     }

     .search {
          border-radius: 20px;
          height: 30px;
          width: 50%;
          margin: 20px 0;
     }
</style>

<body>
     <?php

     $conn = mysqli_connect('localhost', 'root', '', 'users');
     session_start();
     $sql = "SELECT* FROM  userdata";

     $result = mysqli_query($conn, $sql);

     ?>
     <div class="container">
          <form action="search.php" method="post">

               <input name="search" class="search" type="text" placeholder="Search">
               <input type="submit" submit>
          </form>
          <div>
         


          <table style="width:100%">
               <tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
               </tr>
               <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>

                         <td><?= $row['ID'] ?> </td>
                         <td><?= $row['FirstName'] ?></td>
                         <td><?= $row['LastName'] ?></td>
                    </tr>
               <?php } ?>

          </table>
     </div>
</body>

</html>