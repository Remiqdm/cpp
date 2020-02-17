<!DOCTYPE html> 
 <html>      
  <head>       
    <title>CPPiades 2020</title>
    <meta charset="utf-8" /> 
    <link rel="stylesheet" href="teteetpied.css"/>    
    <link rel="stylesheet" href="page.css"/>
  </head>
    


  <body>
     <!--entete-->
        <div>
          <?php include("include/tete.php") ?>
        </div>

<!--compte a rebour-->
        <div class="crebour">
          <?php
                              $heure=date("H");
                              $mois=date("m");
                              $jour=date("d");
                              $secondes=date("s");
                              $cppj=22;
                              $cppm=6;
                              $restem=0;
                              $restej=0;
                              if ($mois<$cppm)
                              {
                                  if ($jour<$cppj)
                                  {
                                      $restej=$cppj-$jour;
                                      $restem=$cppm-$mois;
                                      echo ("<div class='rebour'>".$restem." mois et ".$restej." jours</br> avant les CPPiades</div>");  
                                  }

                                      
                                  if ($jour==$cppj)
                                  {
                                      $restem=$cppm-$mois;
                                      echo "<div class='rebour'>".$restem." jours</br> avant les CPPiades</div>"; 
                                  }
                                      
                                      
                                  if ($jour>$cppj)
                                  {

                                      if ($mois==1 or $mois==3 or $mois==5)
                                      {
                                          $restej=$cppj+31-$jour;
                                          $restem=$cppm-$mois;
                                      }
                                          
                                      
                                      if ($mois==2)
                                      {
                                          $restej=$cppj+29-$jour;
                                          $restem=$cppm-$mois;
                                      }
                                      if ($mois==4)
                                      {

                                          $restej=$cppj+30-$jour;
                                          $restem=$cppm-$mois;
                                      }
                                          
                                      echo "<div class='rebour'>".$restem." mois et ".$restej." jours</br> avant les CPPiades</div>"; 
                                      
                                  }
                              }
                                  

                                          
                                          
                                      
                                      
                              if ($mois==$cppm)
                              {
                                   if ($jour<$cppj)
                                   {                              
                                      $restej=$cppj-$jour;
                                      $restem=$cppm-$mois;
                                      echo "<div class='rebour'>".$restej." jours et ".$heure."</br> heures avant les CPPiades</div>"; 
                                   }
                                  else
                                  {
                                      echo "<div class='rebour'>C'est les cppiades!</div>";
                                  }
                              }
                             ?>
        </div>

<!--carte-->
        <div class="presentation1">
               <div><p> <h2> Les CPPiades</h2></p></br>
               <p class="presp">C'est avant tout une rencontre sportive entre les 6 prépas des INP venues d'un peu partout en France. Cette année c'est à Nancy que ces 3 
               jours de folie se déroulent! 3 jours de sports, de soirée et même de spéctacles. 3 jours de rencontre, d'affrontement entre Grenoble, Toulouse, Valence, 
               Bordeaux et Nancy.</p></div>
              <div class="photo"><img src="img/equipe.jpg" alt=""/> </div>
        </div>



        <div class="presentation2">
              <div><p><h2>L'AOOIC</h2></p>
                 <p class="presp">Les CPPiades c'est 3 jours de folie mais c'est surtout pour un petit groupe d'etudiants de Nancy un an de préparation.
                 Cette team regroupe tous les profils, idées et caractères possibles pour donner un meilleur résultat possible! Cette équipe est composée d'un bureau, d'une équipe de commmunication, de pôle restauration, soirée, transport et goodies</p></div>
              <div class="photo"><img src="img/photopresentation1.jpg" alt=""/></div>  
        </div>

        <div class="presentation1">
             <div><p> <h2> Voici quelques photos</h2></p></br>
                 <div class="slider">
                       <div class="slides">     
                             <div class="photocppiades"><img src="img/cppiades1.jpg" alt=""/> </div>
                             <div class="photocppiades"><img src="img/cppiades2.jpg" alt=""/> </div>
                             <div class="photocppiades"><img src="img/cppiades3.jpg" alt=""/> </div>
                             <div class="photocppiades"><img src="img/cppiades4.jpg" alt=""/> </div>
                       </div>
                  </div>
              </div>
        </div>

         <div>
            <?php include("include/pied.php") ?>
        </div>

  </body>
 </html>