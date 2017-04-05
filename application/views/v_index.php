<section>
<h1><?php echo $judul ?></h1>
<p>
	<?php 
	$batas=3;
	$x=10;
			if(isset($_GET['page']))
		    {
		       $page = $_GET['page'];
		       $offset = $batas * $page ;
		    }
	    else
		    {
		       $page = 0;
		       $offset = 0;
		    }
	
		$deret = $hasil;
							
		if ($page==1){
		    for ($i=0; $i <10; $i++)
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
		    for ($i=($page-1)*$x; $i <($page*$x); $i++)
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
	$page=$page+1;
	$last = $page - 2;
	 if($page == $page * 10)
    {	
       echo "<div class='alert alert-danger'>";
       	echo "<strong>Sorry!</strong> You should <a href=\"?page=$last\" class='alert-link'>click PREV , for see Fibonacci.</a>";
       echo "</div>";
       echo "<a href=\"?page=$last\"><button type='button' class='btn btn-primary active'>PREV</button></a>";
     	
       echo "&nbsp;<button type='button' class='btn btn-primary disabled'>NEXT</button></a>";

       
   }else if( $page > 1 ) {

       	echo "<a href=\"?page=$last\"><button type='button' class='btn btn-primary active'>PREV</button></a> ";
       echo "<a href=\"?page=$page\"><button type='button' class='btn btn-primary active'>NEXT</button></a>";
     
       echo "<p />";}
	    
	else if( $page == 1 )
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