 <?php
 session_start();
include 'config.php';
	 $uid=$_SESSION['uid'];
	 $query="UPDATE orders SET Status='1' WHERE U_ID=$uid";
	 $result=mysqli_query($conn,$query);
	 if($result){
		 ?>
		 <script>
		 alert("Done. Your order will be delivered within 5 days.")
		 window.location = "index.php"
		 </script>
		  
		 <?php
		 }else{
		 ?>
		 <script>
		 alert("Error")
		 window.location = "checkout.php"
		 </script>
		
		 <?php
	 }
	 