<!DOCTYPE html>
<!-- file: views/books.php -->
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/normalize.css">
<link rel="stylesheet" href="/css/skeleton.css">
 <!--Import Google Icon Font-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!--Let browser know website is optimized for mobile-->
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
 <div class="container">
  <div class="row">
   <div class="eleven column" style="margin-top: 10%">
     <h2><?php echo $title ?></h2>
     <table>
      <tr>
          <th>title</th><th>title</th>
          <th>copyright</th><th>copyright</th>
          <th>edition</th><th>edition</th>
          <th>pages</th><th>pages</th>
        </tr>
       <?php foreach ($books as $book) { ?>
      <tr>
          <td><?php echo $book['title'] ?></td>
          <td><?php echo $book['copyright'] ?></td>
          <td><?php echo $book['edition'] ?></td>
          <td><?php echo $book['pages'] ?></td>
      </tr>
       <?php } ?>
     </table>
    </div>
   </div>
 </div>
</body>