
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<section>
  
	<div class="sidebar" style="background-color : #0C2A43;">
		<h1 class="logo">Fix-It</h1>

		<ul class="nav">
			<!-- <li><a href="admin.php"><i class="fa fa-windows"></i> Classroom</a></li> -->
			<li class="active"><a href="#"><i class="fa fa-shopping-bag"></i>labroom</a></li>
			<!-- <li><a href="#"><i class="fa fa-pie-chart"></i> Statistic</a></li>
			<li><a href="#"><i class="fa fa-cube"></i> Product</a></li>
			<li><a href="#"><i class="fa fa-database"></i> Stock</a></li>
			<li><a href="#"><i class="fa fa-tag"></i> Offer</a></li> -->

		</ul>

			<ul class="social">
				<li><a href="#">Facebook</a></li>
				<li><a href="#">Twitter</a></li>
				<li><a href="#">Google</a></li>
			</ul>
		

	</div>
	<div class="main">
		
		<div class="head-section">
			<div class="col-6">
				<h2>Query</h2>
				<!-- <p>30 orders found</p> -->
			</div>

			<div class="col-6" style="text-align: right;">
				

				<img src="image/user.png" class="user">

				<div class="profile-div">
					<!-- <p><i class="fa fa-user"></i>   Profile</p> -->
					<!-- <p><i class="fa fa-cog"></i>   Settings</p> -->
					<p><a class = "newdiv" href="logout.php"><i class="fa fa-power-off">Logout</a></i></p>
				</div>
			</div>

			<div class="clearfix"></div>
		</div>

		<br><br>
		<div class="content">
			<p>All Query</p><br><br>


			<table>
  
  <thead>
    <tr>
      <th scope="col" width="10px">ID</th>
      <th scope="col" width="100px">Full Name</th>
      <th scope="col" width="100px">Number</th>
      <th scope="col" width="180px">Email</th>
      <th scope="col">PC No</th>
      <th scope="col">Room No</th>
      <th scope="col">Dept</th>
      <th scope="col" width="120px">Date</th>
      <th scope="col" width="50px">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
    include 'db_conn.php';
        $query = "SELECT * FROM registration";
        // echo $sql;
        $result = mysqli_query($conn, $query);
        if(!$result)
        {
          var_dump(mysqli_error($conn));
          exit;
        }
        while($row = mysqli_fetch_assoc($result)){
    ?>
      <tr>
      <td data-label=""><?php echo $row['id'] ?></td>
      <td data-label=""><?php echo $row['name'] ?></td>
      <td data-label=""><?php echo $row['number'] ?></td>
      <td data-label=""> <?php echo $row['email'] ?></td>
      <td data-label=""><?php echo $row['pc_number'] ?></td>
      <td data-label=""><?php echo $row['room_number'] ?></td>
      <td data-label=""> <?php echo $row['department'] ?></td>
      <td data-label=""> <?php echo $row['date'] ?></td>
      <td data-label=""><a href="#" class = "aftersone">Done </a></td>
    </tr>
    <?php 
    }
    ?>

    
   

    
    
  </tbody>
</table>
		</div>



	</div>
</section>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $(".user").click(function(){
    $(".profile-div").toggle(1000);
  });
  $(".hicon:nth-child(1)").click(function(){
    $(".notification-div").toggle(1000);
  });
  $(".sicon").click(function(){
    $(".search").toggle(1000);
  });
});
</script>

<script type="text/javascript">
	$('li').click(function(){
    $('li').removeClass("active");
    $(this).addClass("active");
});



	
</script>
</body>
</html>
