<?php 
// echo "&nbsp &nbsp &nbsp &nbsp";
// echo "&nbsp &nbsp &nbsp &nbsp";
// echo "&nbsp &nbsp &nbsp &nbsp";
?>
<!-- <div> -->

    <?php 
	echo '<div style="margin-top:55vh;">&nbsp &nbsp &nbsp &nbsp @copyright';
    echo  date('Y'); 
	echo "&nbsp &nbsp &nbsp";
    //echo "</br>";   &nbsp
    echo "All rights reserved";
	echo "&nbsp &nbsp &nbsp";
    //echo "<br>";
    echo "Developed by G.S. </div>";
    ?>
<!-- </div> -->


</div>
</div>
<!-- Jquery JS-->
<script src="jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="popper.min.js"></script>
<script src="bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="animsition.min.js"></script>
<!-- Main JS-->
<script src="main.js"></script>
<!-- end document-->
<script>
   function change_cat(){
   	var category_id=document.getElementById('category_id').value;
   	window.location.href='?category_id='+category_id;
   }
   
   function delete_confir(id,page){
   	var check=confirm("Are you sure");
   	if(check==true){
   		window.location.href=page+"?type=delete&id="+id;
   	}
   }
   
   function set_to_date(){
   	var from_date=document.getElementById('from_date').value;
   	document.getElementById('to_date').setAttribute("min",from_date);
   }
</script>
</body>
</html>