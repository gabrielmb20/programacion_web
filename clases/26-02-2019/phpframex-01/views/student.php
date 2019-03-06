<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/normalize.css">
<link rel="stylesheet" href="/css/skeleton.css">
</head>
<body>
 <div class="container">
  <div class="row">
   <div class="eleven column" style="margin-top: 10%">
     <h2><?php echo $title ?></h2>
     <table>
      <tr><th>ID</th><th>Name</th><th>Direccion</th>
          <th>Carrera</th><th>Email</th><th>Phone</th></tr>
       <?php foreach ($students as $stud) { ?>
      <tr><td><?php echo $stud['id'] ?></td>
          <td><?php echo $stud['name'] ?></td>
          <td><?php echo $stud['direccion'] ?></td>
          <td><?php echo $stud['carrera'] ?></td>
          <td><?php echo $stud['email'] ?></td>
          <td><?php echo $stud['phone'] ?></td></tr>
       <?php } ?>
     </table>
    </div>
   </div>
 </div>
</body>
