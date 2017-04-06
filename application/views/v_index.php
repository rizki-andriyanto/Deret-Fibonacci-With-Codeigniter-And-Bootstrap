<section>
<h1><?php echo $judul ?></h1>
<p>
	<?php 
	
	$x=10;
			if(isset($_GET['page']))
		    {
		       $page = $_GET['page'];
		       
		    }
	    // pengSet variabel page
		$deret = $hasil;// data dari controller fibonacci
							
		if ($page==1){
		    for ($i=0; $i <10; $i++) // 10 data di page 1
		{
		   
		 

            if ($deret[$i] % 2 == 0) {
            	//genap
                echo "<strong style='color: blue;'>".
			 " $deret[$i] "."</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			                                
            } else {
            	//ganjil
                echo " $deret[$i] ";
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
               
         	}
        
		}
		
		echo "<p />";
		}elseif($page){
		    for ($i=($page-1)*$x; $i <($page*$x); $i++) // 10-20 (10 data)
		{
		    if ($deret[$i] % 2 == 0) {
            	//genap
                echo "<strong style='color: blue;'>".
			 " $deret[$i] "."</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			                                
            } else {
            	//ganjil
                echo " $deret[$i] ";
                 echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
               
            }
		}
		echo "<p />";
		
		}
    ?>

	<?php
	// set paging NEXT / PREV
	$page = $page+1; // set NEXT
	$last = $page - 2; // set PREV
	if( $page > 1 ) {

       echo "<a href=\"?page=$last\"><button type='button' class='btn btn-primary active'>PREV</button></a> ";
       echo "<a href=\"?page=$page\"><button type='button' class='btn btn-primary active'>NEXT</button></a>";
     
       echo "<p />";}
	    
	else if( $page == 1 ) // untuk url = halaman/page ke - 0
    {
       echo "<div class='alert alert-info'>";
       	echo "<strong>Info!</strong> You should <a href=\"?page=$page\" class='alert-link'>click NEXT , for see Fibonacci.</a>";
       echo "</div>";
       echo "<button type='button' class='btn btn-primary disabled'>PREV</button>&nbsp;";
       echo "<a href=\"?page=$page\"><button type='button' class='btn btn-primary active'>NEXT</button></a><p />";

    }

    ?>
   
</p>

</section>