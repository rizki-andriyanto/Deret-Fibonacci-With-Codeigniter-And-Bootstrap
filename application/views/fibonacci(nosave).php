<!-- Tidak masuk ke Aplikasi, cuman sekedar Acuan -->


<!DOCTYPE html>
<html>
<head>
	<title>Test KLN - Angka Fibonacci</title>
</head>
<body>
							
					<?php 
						$batas=3;
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
				    ?>

					<?php
						$deret = $hasil;
											
						if ($page==1){
						    for ($i=0; $i <10; $i++)
						{
						   
						   // echo "$deret[$i]";
						   // echo "-";
			
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
						}elseif($page==2){
						    for ($i=10; $i <20; $i++)
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
						}elseif($page==3){
						    for ($i=20; $i <30; $i++)
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
						}elseif($page==4){
							for ($i=30; $i <40; $i++)
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
						}elseif($page==5){
							for ($i=40; $i <50; $i++)
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
						}elseif($page==6){
							for ($i=50; $i < 60; $i++)
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
						}elseif($page==7){
							for ($i=60; $i < 70; $i++)
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
						}elseif($page==8){
							for ($i=70; $i < 80; $i++)
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
						}elseif($page==9){
							for ($i=80; $i < 90; $i++)
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
						}elseif($page==10){
							for ($i=90; $i < 100; $i++)
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
						}elseif($page==11){
							for ($i=100; $i < 110; $i++)
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
							 if($page == 13)
						    {	
						       echo "<h1> Maaf Data Error Belum Disetting. <br /> Klik PREV , Untuk Melihat Angka Fibonacci. <h1>"	;
						       echo "<a href=\"?page=$last\"><button type='button'>PREV</button></a>";
						     	
						       echo "&nbsp;<button type='button' disabled>NEXT</button></a>";

						       
						   }else if( $page > 1 ) {

						       	echo "<a href=\"?page=$last\"><button type='button'>PREV</button></a> ";
						       echo "<a href=\"?page=$page\"><button type='button'>NEXT</button></a>";
						     
						       echo "<p />";}
						    
					    else if( $page == 1 )
						    {
						       echo "<h1> Belum Ada Data <br /> Klik NEXT ,Untuk Melihat Angka Fibonacci. <h1>"	;
						       echo "<button type='button' disabled>PREV</button>&nbsp;";
						       echo "<a href=\"?page=$page\"><button type='button'>NEXT</button></a><p />";

						    }
						
					    else if( $left_rec < $batas )
						    {
						       $last = $page - 2;
						       echo "<a href=\"?page=$last\"><button type='button'>PREV</button></a>";
						    } ?>


</body>
</html>



<section>
