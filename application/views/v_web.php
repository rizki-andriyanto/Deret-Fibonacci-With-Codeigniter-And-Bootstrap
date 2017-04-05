<section>
<h1><?php echo $judul ?></h1>
<p>
	<?php 
	
       echo "<div class='alert alert-info'>";
       	echo "<strong>Info!</strong> You should <a href='fibonacci/?page=1' class='alert-link'>click NEXT , for see Fibonacci.</a>";
       echo "</div>";
       echo "<button type='button' class='btn btn-primary disabled'>PREV</button>&nbsp;";
       echo "<a href='fibonacci/?page=1'><button type='button' class='btn btn-primary active'>NEXT</button></a><p />";

   
    ?>
   
</p>

</section>