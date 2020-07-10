<?php
    include '../config/connection.php';
?>


<?php
        if(isset($_POST["submit"]))
        {
            $sqlQuery="select * from userinfo where UserMail='$_POST[UserMail]' && UserPassword='$_POST[UserPassword]'";
            $res=mysqli_query($link,$sqlQuery);
		if(!$res){
			die('Query Failed');
		}
		else
		{		
			while ($row= mysqli_fetch_array($res))
			{
			
				$_SESSION["User"]=$row["UserMail"];
			
				?>
			
				<script type="text/javascript">
				window.location="../public/loginPage.php";
				</script>
			
				<?php
			}	
		}
        }

?>