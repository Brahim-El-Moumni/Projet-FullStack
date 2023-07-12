<?php 

function afficherCarteTexte($question,$theme,$a){ ?>
<!DOCTYPE html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
</head>
<body
      <?php 
         if($theme=="sport") {
            echo 'style="background: linear-gradient(45deg,#3503ad,#f7308c);"'; 
         }else if($theme=="culture"){
            echo 'style="background: linear-gradient(45deg,#ccff00,#09afff);"'; 
         }else if($theme=="histoire"){
            echo 'style="background: linear-gradient(45deg,#e91e63,#ffeb3b);"'; 
         }else{
            echo 'style="background: linear-gradient(45deg,#ACD3E9,#ffeb3b);"'; 
         }                                
     ?> 
>
    <div class="container">

        <div class="card">
            <div class="face face1">
                <div class="content">
                    <h3 style="text-align:center;margin-top:20px;"><?php echo $question; ?></h3>
                    <div class="img" style="text-align:center;margin-bottom:60px;">
                        <img src="../images-quiz/<?php  echo $theme;?>/<?php echo $a; ?>.png" width="100px" style="border-radius:20px;">
                    </div>

                    <form action="cardRep.php?theme=<?php echo $theme;?>" method="post" style="margin-bottom:10px">
                        <div style="text-align:center;margin-top:15px;">
                        <input type="text" placeholder="Entrez votre réponse" name="reponse" style="margin-bottom:8px;" autocomplete="off"><br>
                        
                            <button type="submit">Valider</button>
                        </div>
                    </form>
                   <div class="lien" style="text-align:center">
                    <a href="jeu-principal.php" style="color:black; text-decoration:none;font-size:13px">BACK HOME</a><br>
                    <a href="signal.php?theme=<?php echo $theme; ?>&id=<?php echo $a;?>" style="color:orchid; text-decoration:none;font-size:13px">Signaler!</a>                       
                    </div>                    
                </div>

            </div>
            <div class="face face2" 
                 <?php 
                     if($theme=="sport") {
                        echo 'style="background: linear-gradient(45deg,#3503ad,#f7308c);"'; 
                     }else if($theme=="culture"){
                        echo 'style="background: linear-gradient(45deg,#ccff00,#09afff);"'; 
                     }else if($theme=="histoire"){
                        echo 'style="background: linear-gradient(45deg,#e91e63,#ffeb3b);"'; 
                     }else{
                        echo 'style="background: linear-gradient(45deg,#ACD3E9,#ffeb3b);"'; 
                     }
        
                 ?>  
                 
            >
                <h2><?php echo $a?></h2>
            </div>
        </div>
    </div>
</body>

</html>

<?php }  ?>

<?php 

function afficherCarteProp($question,$prop1,$prop2,$prop3,$theme,$a){ ?>
<!DOCTYPE html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">

</head>
<body
       <?php 
                     if($theme=="sport") {
                        echo 'style="background: linear-gradient(45deg,#3503ad,#f7308c);"'; 
                     }else if($theme=="culture"){
                        echo 'style="background: linear-gradient(45deg,#ccff00,#09afff);"'; 
                     }else if($theme=="histoire"){
                        echo 'style="background: linear-gradient(45deg,#e91e63,#ffeb3b);"'; 
                     }else{
                        echo 'style="background: linear-gradient(45deg,#ACD3E9,#ffeb3b);"'; 
                     }                                                  
                 ?>  
 
>   
    <div class="container">
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <h3 style="text-align:center;margin-top:20px;"><?php echo $question;?></h3>
                    <div class="img" style="text-align:center;margin-bottom:20px;">
                        <img src="../images-quiz/<?php echo $theme;?>/<?php echo $a;?>.png" width="100px" style="border-radius:20px;">
                    </div>

                    <form action="cardRep.php?theme=<?php echo $theme;?>" method="post" style="text-align:center;margin-bottom:10px">
                    <input type="radio" value="<?php echo $prop1; ?>" name="prop"><br>
                    <label for="<?php echo $prop1; ?>"><?php echo $prop1; ?></label> <br>
                    
                    <input type="radio" value="<?php echo $prop2; ?>" name="prop"> <br>
                    <label for="<?php echo $prop2; ?>"><?php echo $prop2; ?></label> <br>
                    
                    <input type="radio" value="<?php echo $prop3 ?>" name="prop"> <br>
                    <label for="<?php echo $prop3; ?>"><?php echo $prop3; ?></label><br>
                    
                        <div style="text-align:center;margin-top:15px;">
                            <button type="submit">Valider</button>
                        </div>
                    </form>
                    <div class="lien" style="text-align:center">
                    <a href="jeu-principal.php" style="color:black; text-decoration:none;font-size:13px">BACK HOME</a><br>
                    <a href="signal.php?theme=<?php ; echo $theme?>&id=<?php  $a?>" style="color:orchid; text-decoration:none;font-size:13px">Signaler!</a>                      
                    </div>
                </div>

            </div>
            <div class="face face2"
                  <?php 
                     if($theme=="sport") {
                        echo 'style="background: linear-gradient(45deg,#3503ad,#f7308c);"'; 
                     }else if($theme=="culture"){
                        echo 'style="background: linear-gradient(45deg,#ccff00,#09afff);"'; 
                     }else if($theme=="histoire"){
                        echo 'style="background: linear-gradient(45deg,#e91e63,#ffeb3b);"'; 
                     }else{
                        echo 'style="background: linear-gradient(45deg,#ACD3E9,#ffeb3b);"'; 
                     }
                                                          
                 ?>         
            >
                <h2><?php echo $a;?></h2>
            </div>
        </div>
    </div>
</body>
</html>

<?php } ?>