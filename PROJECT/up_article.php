<?php
session_start();
include 'connection_base.php';

?>
<!DOCTYPE html>

<html lang="en">

    <head>

      <!-- à ne pas toucher -->
        <meta charset="utf-8" />
        <title>Mise a jour</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/logos/logo_mini.png" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bibliotheque_font_awesome.css"/>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/new_version_site.css"/>
        <script src="js/html5shiv.min"></script>
        <script src="js/respond.min"></script>
        <!-- à ne pas toucher -->

    </head>

<body style="background: url(images/photos/back2.jpg) no-repeat ;background-size: cover;">





                   <!--------------------------------------------               Header                ---------------------------------------------------------->


                                             <div class="header"> 


                                            <!--image background de header-->

                                                    <img class="img-responsive logo_site" src="images/photos/logo.png" alt="pic_nav"/>

                                                    <img class="img-responsive pic_nav" src="images/photos/jumeaux_mini_2.jpg" alt="pic_nav"/>


                                           <!--end of treat-->


                                           <!--navbar -->
                                                     
                                                            <nav class="navbar navbar-inverse ">
                                                              <div class="container-fluid">
                                                                <div class="navbar-header">
                                                                <!-- pour le navbar en mobile -->
                                                                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                                                    <span class="icon-bar"></span>
                                                                    <span class="icon-bar"></span>
                                                                    <span class="icon-bar"></span>                        
                                                                  </button>
                                                                  <!-- logo dans le navbar -->

                                                                  <a class="navbar-brand" href="Our_Morocco.php" style="padding-right: 0px; padding-left: 11px; padding-top: 5px;"><img src="images/logos/Flag.png" style="height: 42px;" /></a>

                                                                </div>
                                                                


                                                        <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                                                          <ul class="nav navbar-nav">
                                                            <li><a href="Our_Morocco.php" style="color: #ffffff; font-size: 17px;font-weight: bold;font-family: merienda;">Accueil</a></li>
                                                            <li><a href="Plan_site.php" style="color: #ffffff; font-size: 17px;font-weight: bold;font-family: merienda;">Plan de site</a></li>
                                                            <li><a href="qui_sommes_nous.php" style="color: #ffffff; font-size: 17px;font-weight: bold;font-family: merienda;">Qui somme-nous</a></li>
                                                            <li><a href="#contact-us" style="color: #ffffff; font-size: 17px;font-weight: bold;font-family: merienda;">Contact</a></li>
                                                          </ul>

                                                          <?php

                                                          if(isset($_SESSION['anything'])) {
                                              

                                                                                           ?>


                                                            <ul class="nav navbar-nav navbar-right">
                                                                     <li class="dropdown">
                                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #ffffff; font-size: 17px;font-weight: bold;font-family: merienda;">Mon Compte
                                                    <span class="caret"></span></a>
                                                    <ul class="dropdown-menu" >
                                                      <li><a href="admin.php"><span class="glyphicon glyphicon-user" style="color: red;" > Administration</span></a></li>
                                                      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"  style="color: green;"> Logout</span></a></li>
                                                    </ul>
                                                                  </ul>

                                                        


                                                        <?php

                                                            }
                                                            else
                                                            {
                                                              ?>
                                                                <ul class="nav navbar-nav navbar-right">
                                                            
                                                            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                                          </ul>
                                                            
                                                          
                                                                  <?php
                                                                  }

                                                                  ?>

                                                        </div>
                                                      </div>
                                                    </nav>


                                            <!--end of treat-->

                                                        </div>
                                                        



                                                     <!--------------------------------------------               end                ---------------------------------------------------------->





                                                                    <!--------------------------------------------               Center                ---------------------------------------------------------->
                                                                 

                                                                     <!-- center-->

                                                                            <div class="container-fluid text-center "  >    
                                                              <div class="row content my_center" style="padding-top: 57px;">

                                                                 <!-- side nav monument ...... -->
                                                                <div class="sidenav  col-sm-1 hidden-xs" id="mySidenav">
                                                                  <a class="lien_nav" id="sitem" href="site_et_monument.php" style="padding-left: 0px;padding: 20px;">Lieux</a>
                                                                  <a class="lien_nav" id="villein"href="index_villes.php">Index villes</a>
                                                                  <a class="lien_nav" id="lienut" href="liens_utiles.php">Liens utiles</a>
                                                                  <a class="lien_nav" id="carte" href="https://www.google.com/maps/@33.9996347,-4.9897436,15z"  title=" cliquez pour voir tout le maroc 😍" target="_blank">Carte<br/>Maroc</a>
                                                                </div>
                                              <!-- side nav monument  in xs and sm screens...... -->

                                                                <div class="well well-lg visible-xs-block col-xs-10 col-xs-offset-1 col-lg-offset-0 sidenav">
                                                                  <p class="lien_nav"><a href="site_et_monument.php">Sites et Monuments</a></p>
                                                                  <p class="lien_nav"><a href="index_villes.php">Index des villes</a></p>
                                                                  <p class="lien_nav"><a href="liens_utiles.php">Liens utiles</a></p>
                                                                  <p class="lien_nav"><a href="#cartesite">la carte de du pays</a></p>
                                                                </div> 

                                                                

                                                                 <!--clearfix--> 

                                                                <div class="clearfix visible-ms-block visible-xs-block "></div>




                                                                              
                                                                                  <!-- plan de site -->

                                                                                   <?php

                                                                                 $articles =$bdd->query('SELECT * from news ORDER BY  id_nws DESC');

                                                                                  ?>



                                                                                <div class=" well well-lg  col-xs-10 col-sm-9 col-md-6 col-lg-8 col-xs-offset-1 col-lg-offset-0 "> 

                                                                                  <h1 style="font-family: merienda;font-weight: bold;">Modification des articles</h1>

                                                                                  <br/>
                                                                                  <div style="overflow-x:auto;"> 
                                                                                  <table class="col-xs-12 table table-bordered table-responsive" >
                                                                                    
                                                                                    <th style="background-color: #18185e;text-align: center;font-family: merienda;font-weight: bold;">Titre</th>
                                                                                    
                                                                                    <th style="background-color: #18185e;text-align: center;font-family: merienda;font-weight: bold;">modification</th>

                                                                                    <?php

                                                                                    while($a=$articles->fetch())
                                                                                    {
                                                                                      ?>
                                                                                      <tr> 
                                                                                      <td style="color: white;background-color: #818111;font-family: merienda;font-weight: bold;"> <?php echo $a['titre']?></td>
                                                                                      <td><button type="button" class="btn btn-danger btn-md" ><a href="upd_article.php?id=<?= $a['id_nws'] ?>">Modifier</a></td></button>
                                                                                      </tr>
                                                                                      <?php
                                                                                  }
                                                                                  ?>
                                                                                </table>
                                                                              </div>
                                                                                <h3>
                                                              <span class=" glyphicon glyphicon-arrow-left" style="color: red;" ><a style="color:#ff4d24;" href="article.php"> retour </a></span>
                                                              
                                                            </h3> 
                                                                                <?php
                                                                                  $articles->closeCursor(); // Termine le traitement de la requête

                                                                                  ?>

                                                                                    <br/>




                                                                               
                                                                                                        
                                                                                
                                                                                  <br/>
                                                                                </div>


                                                                              

                                                                                  <!-- end -->

                                                                            








                                                              
                                                                <!-- side nav-->
                                                                 <?php

                                                                                 $articles =$bdd->query('SELECT * from news ORDER BY  id_nws DESC limit 2 ');

                                                                                  ?>

                                                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 sidenavi ">

                                                                 
                                                                    <div >

                                                                    <video class="my_vedio" src="images/photos/my_video_1.webm" controls loop width="300" height="170"> </video>

                                                                    </div>

                                                                    <div class="clearfix"></div>

                                                                    <div class="mynewsletter" class="col-xs-offset-1" style="background-color:#2c4201;">
                                                                    <h2 style="color: yellow;font-family:merienda;font-size: 40px;">News</h2>
                                                                     <div border="1" class="col-xs-12">
                                                                                          
                                                                                          <?php

                                                                                          while($a=$articles->fetch())
                                                                                          {
                                                                                            ?>
                                                                                            
                                                    
                                                    <p style="font-size: 20px;color: #25a5e2;font-size: 20px;font-weight: bold;"> <?php echo $a['titre']?></p>
                                                   
                                                    <p style="color:#ff8630;font-family: merienda;"> <?php echo $a['resume']?></p>
                                                    <a href="read_article.php?id_ar=<?= $a['id_nws'] ?>">afficher</a>
                                                </br></br>
                                                    <?php
                                                }
                                                ?>
                                              </div>
                                              <?php
                                                $articles->closeCursor(); // Termine le traitement de la requête

                                                ?>

                                                  <br/>

                                                                    <!-- form -->
                                                                   
                                                                     <form method="GET" action="search.php?chercher=$_GET['search']" >
                                                  <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search" name="search">
                                                    <div class="input-group-btn">
                                                      <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>

                                                    </div>
                                                  </div>
                                                </form>


                                                                    </div>


                                                                      
                                                                   



                                                                </div>

                                                                <!-- end of treat -->

                                              

                                                    </div>
                                                </div>
                                                

                         
                             <!--------------------------------------------               End                ---------------------------------------------------------->
                          



                              <!--------------------------------------------               footer                ---------------------------------------------------------->
                          

                                <!-- progress bar-->


                                                <div class="container-fluid progress_bar"  style="background-color: #040818;">
                                      <h2 style="font-family: merienda;font-weight: bold;">Statistiques</h2>
                                      <p class="lead">les villes les plus visitées au Maroc en 2019</p> 
                                      <div style="max-width: 75%;margin-right: auto;margin-left: auto;">
                                      <div class="progress" >
                                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                          <span style="font-size: 19px;color:black;font-family: merienda;font-weight: bold;">FES</span>
                                        </div>
                                      </div>
                                      <div class="progress">
                                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                         <span style="font-size: 19px;color:black;font-family: merienda;font-weight: bold;">RABAT</span>
                                        </div>
                                      </div>
                                      <div class="progress">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                          <span style="font-size: 19px;color:black;font-family: merienda;font-weight: bold;">TANGER</span>
                                        </div>
                                      </div>
                                      <div class="progress">
                                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                           <span style="font-size: 19px;color:black;font-family: merienda;font-weight: bold;">AGADIR</span> 
                                        </div>
                                      </div>
                                      </div>
                                    </div>
                                  <!--end-->









                                                <!--clearfix-->

                                                                         <div class="clearfix visible-ms-block visible-xs-block "></div>

                                                                          <!-- frequent questions -->
                                                         <div class="container-fluid questions_frequent ">
                                                    <h2>Questions Frequentes</h2>
                                                    <div class="panel-group" id="accordion" style="max-width: 75%;margin-right: auto;margin-left: auto;">
                                                      <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                          <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" >Quels sont les Numéros des urgences Maroc ?</a>
                                                          </h4>
                                                        </div>
                                                        <div id="collapse1" class="panel-collapse collapse in ">
                                                          <div class="panel-body" style="color: red;">
                                                          Police : 190<br/>
                                                      Pompiers : 150<br/>
                                                      Gendarmerie Royale : 177<br/>
                                                      Ambulance / Pompiers : 150<br/>
                                                      Maroc Assistance : 05 22 30 30 30.<br/>
                                                      Gares ONCF : 0890 20 30 40<br/>
                                                        </div>
                                                        </div>
                                                      </div>
                                                      <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                          <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Quels sont les aéroports les plus fréquentés au Maroc ?</a>
                                                          </h4>
                                                        </div>
                                                        <div id="collapse2" class="panel-collapse collapse" style="color: red;">
                                                          <div class="panel-body">
                                                            Aéroport Mohammed V - Casablanca.<br/>
                                                            Aéroport de Marrakech - Menara.<br/>
                                                            Aéroport Fès - Saïss.<br/>
                                                            Aéroport de Dakhla.<br/>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                          <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Quels sont les Hôtels 5 étoiles au Maroc?</a>
                                                          </h4>
                                                        </div>
                                                        <div id="collapse3" class="panel-collapse collapse" style="color: red;">
                                                          <div class="panel-body">
                                                            Les Jardins De La Koutoubia. (Marrakech) <br/>
                                                            Mövenpick Hotel. (Casablanca) <br/>
                                                            Atlantic Palace. (Agadir) <br/>
                                                            Golden Tulip Andalucia Golf. (Tanger)<br/>
                                                            Farah. (Khouribga)<br/>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div> 
                                                  </div>

                                                        <!-- subscribe-->


                                                                  <section class="subscribe text-center">
                                                                    <div class="container">
                                                                      <div class="row">
                                                                      <h1>On se tient au courant !</h1>
                                                                      <p class="lead">Sign up for Newsletter ! D'ont worry about Spam We hate it too !</p>
                                                                      
                                                                       <button  type="button" name="btn_subs" class=" btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal8">S'inscrire à la newsletter</button>
                                                 



                                                             <div id="myModal8" class="modal fade" role="dialog">
                                                          <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                
                                                              </div>
                                                              <div class="modal-body">

                                                                <h2 class="lead"style="background-color:#949318;;margin: 30px;padding:30px;font-family:merienda;">Bienvenue</h2>
                                                                <form class="form-group" method="post">
                                                                        <input  class="form-control input-lg" type="text" name="nom" placeholder="Write your family name" style=" margin-top: 5px;">
                                                                        <br/>

                                                                        <input  class="form-control input-lg" type="text" name="prenom" placeholder="Write your name" style=" margin-top: 5px;">
                                                                        <br/>
                                                                        <input  class="form-control input-lg" type="text" name="email_news" placeholder="Write your email" style=" margin-top: 5px;">
                                                                        <br/><br/>
                                                                        <button type="submit" name="btn_subs" class=" btn btn-danger btn-lg">Subscribe</button>
                                           
                                                                      </form>


                                                                     
                                                                      <?php if(isset($_POST['email_news']) AND   isset($_POST['nom']) AND  isset($_POST['prenom'])) {
                                                       if(!empty($_POST['email_news']) AND   !empty($_POST['nom']) AND  !empty($_POST['prenom']) ){

                                                                                              $requette=$bdd->prepare("INSERT  INTO internaute(nom,prenom,email) VALUES(?,?,?)");
                                                                                              $requette->execute(array($_POST['nom'],$_POST['prenom'],$_POST['email_news']));
                                                                                               
                                                                                         }
                                                                                      
                                                                                         
                                                                                     }
                                                                                     ?>
                                                                

                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal"  style=" color: #de0606;background-color:#dae221;border-color: #de0c0c;">Close</button>
                                                              </div>
                                                            </div>

                                                          </div>
                                                        </div>

                                                                       

                                                     <br />
                                                                    </div>
                                                                   </div>

                                                                  </section>

                                                         <!-- end-->

                                                        
                                                      <!--footer -->


                                                     <section class="footer">

                                                        <div class="container">
                                                           <div class="row">

                                                            <!-- sitemap-->

                                                            <div class="col-lg-4">
                                                             <h3>Sitemap</h3>
                                                             <ul class="list-unstyled sitempapp">
                                                              <li><a href="Our_Morocco.php">Home</a></li>
                                                              <li><a href="Plan_site.php">Plan de site</a></li>
                                                              <li><a href="qui_sommes_nous.php">qui sommes nous</a></li>
                                                              <li><a href="liens_utiles.php">liens utiles</a></li>
                                                            </ul>
                                                           
                                                            <ul class="list-unstyled social-list">
                                                             <a href="#"><li><img class="img-responsive img-circle" style="width:30px;"  src="images/logos/facebook.png" alt="facebook"/></li></a>
                                                             <a href="#"> <li><img class="img-responsive img-circle" style="width:30px;"  src="images/logos/gmail.png" alt="gmail"/></li></a>
                                                              <a href="#"><li><img class="img-responsive img-circle" style="width:30px;"  src="images/logos/linkedin.png" alt="linkedin"/></li></a>
                                                              
                                                            </ul>
                                                            </div>


                                                          <!-- end -->




                                                                                    <!--clear fix : espace entre deux blocs -->

                                                                                     <div class="clearfix visible-md-block visible-sm-block visible-xs-block"></div>

                                                                                     <!-- end -->

                                                                                    

                                                            <!--contact-us-->

                                                            <div class="col-lg-8 contactme">

                                                              <h1 id="contact-us">Contact-us  </h1>
                                                              <h3 class="lead">Tell Us What You Fell !</h3>
                                                              <form role="form" action="#contact-us" method="post">
                                                                <div class="col-md-6">
                                                                <div class="form-group" >
                                                                <input type="text" class="form-control input-lg" name="Username" placeholder="Username">
                                                                </div>
                                                                <div class="form-group">
                                                                <input type="email" class="form-control input-lg" name="C_Email" placeholder="Email">
                                                                </div>  
                                                                <div class="form-group">
                                                                <input type="text" class="form-control input-lg" name="Cell" placeholder="Cell">
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <div class="form-group">
                                                                  <textarea class="form-control input-lg" name="Message" placeholder="Your Message"></textarea>
                                                                </div>
                                                                <button type="submit" name="Contact_button" class="btn btn-primary btn-lg btn-block">Contact Us</button>
                                                               </div>
                                                              </form>

                                            <?php   if(isset($_POST['Username']) AND   isset($_POST['C_Email']) AND  isset($_POST['Cell']) AND  isset($_POST['Message']) ) { 
                                                                                        if(!empty($_POST['Username']) AND   !empty($_POST['C_Email']) AND  !empty($_POST['Cell']) AND  !empty($_POST['Message'])){

                                                                                          $requette=$bdd->prepare("INSERT  INTO contact_me(username,email,cell,message) VALUES(?,?,?,?)");
                                                                                          $requette->execute(array($_POST['Username'],$_POST['C_Email'],$_POST['Cell'],$_POST['Message']));
                                                                                          $message = 'Votre message a bien été envoyé';
                                                                                          }

                                                                                          else
                                                                                          {
                                                                                            $message = 'Veuillez remplir tous les champs';
                                                                                          }
                                                                                     }

                                                                                     ?>
                                                                                     <?php if(isset($message)) { echo $message; } ?>


                                                                                               
                                                            </div>  
                                                          </div>

                                                          

                                                               <!--end-->


                                                          </div>
                                                        </div>


                                                        <!-- End -->




                                                        <!-- Copyright -->

                                                        <div class="copyright text-center">
                                                           Copyright  &copy;  2019-2020  <span>All rights reserved</span> .Inc
                                                        </div>

                                                      </section>

                                                      <!--end -->



                                                        <!--start button scroll to the top -->

                                                       
                                                                <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


                                                                      <script>

                                                                            //Get the button
                                                                            var mybutton = document.getElementById("myBtn");

                                                                            // When the user scrolls down 20px from the top of the document, show the button
                                                                            window.onscroll = function() {scrollFunction()};

                                                                            function scrollFunction() {
                                                                              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                                                                                mybutton.style.display = "block";
                                                                              } else {
                                                                                mybutton.style.display = "none";
                                                                              }
                                                                            }

                                                                            // When the user clicks on the button, scroll to the top of the document
                                                                            function topFunction() {
                                                                              document.body.scrollTop = 0;
                                                                              document.documentElement.scrollTop = 0;
                                                                                                                         }

                                                                      </script>

                                                              <!-- end -->


                                                        <!--------------------------------------------               end                ---------------------------------------------------------->












                              <!-- à ne pas toucher -->
                              <script src="js/jquerry.js"></script>
                              <script src="js/bootstrap.min.js"></script>
                              <!-- à ne pas toucher -->


                        </body>
                        </html>
