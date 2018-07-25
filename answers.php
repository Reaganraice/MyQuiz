
               <?
               ?><style>
               body{
                   background-color:orange;
               }
               .result{
                  
                   text-align:center;
                   margin-top:300px;
               }
               </style><?
               
               if ($_POST && count($_POST) ===20){
                $ans1=$_POST['one'];
                $ans2=$_POST['two'];
                $ans3=$_POST['tree'];
                $ans4=$_POST['four'];
                $ans5=$_POST['five'];
                $ans6=$_POST['six'];
                $ans7=$_POST['seven'];
                $ans8=$_POST['eight'];
                $ans9=$_POST['nine'];
                $ans10=$_POST['ten'];
                $ans11=$_POST['eleven'];
                $ans12=$_POST['twelve'];
                $ans13=$_POST['thirteen'];
                $ans14=$_POST['fourteen'];
                $ans15=$_POST['fifteen'];
                $ans16=$_POST['sixteen'];
                $ans17=$_POST['seventeen'];
                $ans18=$_POST['eighteen'];
                $ans19=$_POST['nineteen'];
                $ans20=$_POST['twenty'];
                
                
               $totalCorrect = 0;



                
                    if($ans1 =="A"){$totalCorrect++;}
                    if($ans2 =="A"){$totalCorrect++;}
                    if($ans3 =="D"){$totalCorrect++;}
                    if($ans4 =="A"){$totalCorrect++;}
                    if($ans5 =="C"){$totalCorrect++;}
                    if($ans6 =="B"){$totalCorrect++;}
                    if($ans7 =="B"){$totalCorrect++;}
                    if($ans8 =="A"){$totalCorrect++;}
                    if($ans9 =="D"){$totalCorrect++;}
                    if($ans10 =="D"){$totalCorrect++;}
                    if($ans11 =="C"){$totalCorrect++;}
                    if($ans12 =="C"){$totalCorrect++;}
                    if($ans13 =="C"){$totalCorrect++;}
                    if($ans14 =="B"){$totalCorrect++;}
                    if($ans15 =="A"){$totalCorrect++;}
                    if($ans16 =="C"){$totalCorrect++;}
                    if($ans17 =="B"){$totalCorrect++;}
                    if($ans18 =="C"){$totalCorrect++;}
                    if($ans19 =="A"){$totalCorrect++;}
                    if($ans20 =="D"){$totalCorrect++;}
    
              
             
                 echo "YOUR TOTAL SCORES IS " .$totalCorrect ."/20";
            } 
            elseif ($_POST && count($_POST)<20) {?>
                <h1 class="result"><? echo "YOU DID'NT ANSWER ALL THE QUESTION";?></h1>
            <?}
            ?>