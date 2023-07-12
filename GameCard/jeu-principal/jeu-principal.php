
<!DOCTYPE html>

<html>
    <head>
        <title>Jeu Principal</title>
        <meta charset="utf-8">
        
        <link rel="stylesheet" href="jeu-principal.css">
    
    </head>
    <body>
        <div class="logo">
            <a href="../home.php">Game Card</a></div>
            <form action="reset-quiz.php?theme=" method="post">
                <div class="input" style="text-align:center;color:black;">
                    <input type="submit" value="RESET" name="RESET">
                </div>
                
            </form>
       
       
        <div class="gif" style="text-align:center">
            <img src="../img-site/original%20(1).gif">
        
        </div>
        
        <div class="cards">
            <div class="histoire">
                <a href="cardRep.php?theme=histoire"><h5>HISTOIRE</h5></a>
            </div>
            <div class="sport">
                   <a href="cardRep.php?theme=sport"><h5>SPORT</h5></a>
            </div>
            <div class="culture">
                   <a href="cardRep.php?theme=culture"><h5>CULTURE</h5></a>
            </div>
            <div class="sciences">
                  <a href="cardRep.php?theme=sciences"><h5>SCIENCES</h5></a>
            </div>
        </div>
        
    </body>


</html>