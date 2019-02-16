<?php include 'header.php'; ?>
<?php    
$mysqli=new mysqli('localhost','root','12345','property');
	if($mysqli->connect_error){

		printf("can not connect databse %s\n",$mysqli->connect_error);
		exit();
	}

	$query="SELECT * FROM propety";
	$read=$mysqli->query($query);




?>

<style>
body{
            background-color: #424a5d;
            
        }
    .infoo td{
        background-color: #eee !important;
    }
</style>
    


<div class="container">

<h2 style="color: #f2f2f2 ;">  Farms  </h2>
<hr>

<table class="table table-striped table-hover ">
  <thead style="color: #f2f2f2 ;">
    <tr>

      <th>Property Name</th>
      <th>Monthly Charge</th>
      <th>Address</th>
      <th>View</th>
      <th>Details</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($row=$read->fetch_assoc()) { ?>

    <tr class="info infoo">
      <td><?php echo  $row['name'];   ?></td>
      <td><?php echo  $row['monthly'];   ?></td>
      <td><?php echo  $row['address'];   ?></td>
      <td><img src="uploads/<?php echo  $row['images']; ?>" class="index_img" style="    height: 300px;
    width: 300px;"> </td>
      <td><a href="single.php?posts=<?php echo  $row['id'];  ?>">Details</a></td>
    </tr>    

    <?php } ?>
  </tbody>
</table> 
	

</div>

<?php  include 'footer.php' ; ?>
