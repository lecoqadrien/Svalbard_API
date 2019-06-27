<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HUMANS</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="user_creer_front.css">
    <style>
        body {font-family: Arial, Helvetica, sans-serif; background: white;}
    </style>

</head>
<body>
    <div class="w3-container w3-row-padding">
    <div class="w3-container w3-center">
             <a href= "accueil_anonyme.php">
                <img src="./assets/images/Humans_logo.png">
            </a>
    </div>
            </p>
                <form action="user_creer_back.php" style="border:1px solid #ccc" onsubmit="return f_valider()" method="post" class="bloc">
                    
                    <div class="w3-container" style="border:1px solid #ccc; background:white">

                        <p>Combien de degrés a pris Svalbard en 200 ans?</p>

                        <div>
                            <input type="checkbox" id="scales" name="scales">
                            <label for="scales">10 degrés</label>
                        </div>

                        <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">2 degrés</label>
                        </div>

                        <div>
                            <input type="checkbox" id="scales" name="scales">
                            <label for="scales">7 degrés</label>
                        </div>

                        <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">11 degrés</label>
                        </div>
                        
                    </div>
                    
                </form><br>

                <form action="user_creer_back.php" style="border:1px solid #ccc" onsubmit="return f_valider()" method="post" class="bloc">
                    
                    <div class="w3-container" style="border:1px solid #ccc; background:white">

                        <p>Quelle animal, qui peuple Svalbard, est en voie de disparition?</p>

                        <div>
                            <input type="checkbox" id="scales" name="scales">
                            <label for="scales">Le phoque</label>
                        </div>

                        <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">La baleine</label>
                        </div>

                        <div>
                            <input type="checkbox" id="scales" name="scales">
                            <label for="scales">Le pingouin</label>
                        </div>

                        <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">L ours polaire</label>
                        </div>
                        
                    </div>
                    
                </form>
                <br>
                <form action="user_creer_back.php" style="border:1px solid #ccc" onsubmit="return f_valider()" method="post" class="bloc">
                    
                    <div class="w3-container" style="border:1px solid #ccc; background:white">

                        <p>De quoi est composé le nouveau régime alimentaire des Rennes à Svalbard, et où peut on le trouver?</p>

                        <div>
                            <input type="checkbox" id="scales" name="scales">
                            <label for="scales">Les algues</label>
                        </div>

                        <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">Les poissons</label>
                        </div>

                        <div>
                            <input type="checkbox" id="scales" name="scales">
                            <label for="scales">L herbe</label>
                        </div>

                        <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">Les fleurs</label>
                        </div>
                        
                    </div>
                    
                </form><br>
                <form action="user_creer_back.php" style="border:1px solid #ccc" onsubmit="return f_valider()" method="post" class="bloc">
                    
                    <div class="w3-container" style="border:1px solid #ccc; background:white">

                        <p>Quelles sont les animaux le plus toucher par les courant chaud à Svalbard?</p>

                        <div>
                            <input type="checkbox" id="scales" name="scales">
                            <label for="scales">Les rennes</label>
                        </div>

                        <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">Les souris</label>
                        </div>

                        <div>
                            <input type="checkbox" id="scales" name="scales">
                            <label for="scales">Les renards</label>
                        </div>

                        <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">Les licornes</label>
                        </div>
                        
                    </div>
                    
                </form>
                <br>

                <form action="user_creer_back.php" style="border:1px solid #ccc" onsubmit="return f_valider()" method="post" class="bloc">
                    
                    <div class="w3-container" style="border:1px solid #ccc; background:white">

                        <p>Quelle bâtiment de Svalbard contient le plus d’espèce végétale au monde?</p>

                        <div>
                            <input type="checkbox" id="scales" name="scales"checked>
                            <label for="scales">L université</label>
                        </div>

                        <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">L eglise</label>
                        </div>

                        <div>
                            <input type="checkbox" id="scales" name="scales"checked>
                            <label for="scales">Les maisons locaux</label>
                        </div>

                        <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">Le bunker</label>
                        </div>
                        
                    </div>
                    
                </form>
                <br>

                <form action="user_creer_back.php" style="border:1px solid #ccc" onsubmit="return f_valider()" method="post" class="bloc">
                    
                    <div class="w3-container" style="border:1px solid #ccc; background:white">

                        <p>Que risque Svalbard dans 50 ans?</p>

                        <div>
                            <input type="checkbox" id="scales" name="scales"checked>
                            <label for="scales">Un tremblement de terre</label>
                        </div>

                        <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">L arrivée des Indiens</label>
                        </div>

                        <div>
                            <input type="checkbox" id="scales" name="scales"checked>
                            <label for="scales">Prendre entre 7 et 10 degrés de plus</label>
                        </div>

                        <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">Aucune idée</label>
                        </div>
                        
                    </div>
                    
                </form> <br>
                <form action="user_creer_back.php" style="border:1px solid #ccc" onsubmit="return f_valider()" method="post" class="bloc">
                    
                    <div class="w3-container" style="border:1px solid #ccc; background:white">

                        <p>Qui sont les principaux habitant de Svalbard?</p>

                        <div>
                            <input type="checkbox" id="scales" name="scales"checked>
                            <label for="scales">Les europeens</label>
                        </div>

                        <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">Les Esquimaux</label>
                        </div>

                        <div>
                            <input type="checkbox" id="scales" name="scales"checked>
                            <label for="scales">Des chercheurs</label>
                        </div>

                        <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">Des campagnards</label>
                        </div>
                        
                    </div>
                    
                </form><br>
                <form action="user_creer_back.php" style="border:1px solid #ccc" onsubmit="return f_valider()" method="post" class="bloc">
                    
                    <div class="w3-container" style="border:1px solid #ccc; background:white">

                        <p>Peut-on habiter pour une durée indéterminée à Svalbard?</p>

                        <div>
                            <input type="checkbox" id="scales" name="scales"checked>
                            <label for="scales">Obligatoire</label>
                        </div>

                        <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">A la folie</label>
                        </div>

                        <div>
                            <input type="checkbox" id="scales" name="scales"checked>
                            <label for="scales">Peut-être</label>
                        </div>

                        <div>
                            <input type="checkbox" id="horns" name="horns">
                            <label for="horns">Non</label>
                        </div>
                        
                    </div>
                    
                </form>


                <button class="valider">Valider</button>

                    <?php
                        $_SESSION['page_suiv'] = 'question_2.php';
                    ?>
                    
                    <?php
                        $bdd = new PDO('mysql:host=localhost;dbname=island', 'root', '');
                        $base = mysql_connect ('localhost', 'root', '');
                        mysql_select_db ('island', $base) ;


    if(isset($_POST['island'])) {
    $id = htmlspecialchars($_POST['id']);
    $question = htmlspecialchars($_POST['question']);
    $reponse = htmlspecialchars($_POST['reponse']);
    $alerte = sha1($_POST['alerte']);

    // lancement de la requete q1
    $id_q1 = 'SELECT question_lib FROM island WHERE nom = "Combien de degrés a pris Svalbard en 200 ans?"';
    $id_numq1 = 'SELECT question_num FROM island WHERE nom ="1"';
    $id_rep1q1 = 'SELECT reponse1 FROM island WHERE nom = "10 degrés"';
    $id_rep2q1 = 'SELECT reponse2 FROM island WHERE nom = "2 degrés"';
    $id_rep3q1 = 'SELECT reponse3 FROM island WHERE nom = "7 degrés"';
    $id_rep4q1 = 'SELECT reponse4 FROM island WHERE nom = "11 degrés"';


    // lancement de la requete q2

    $id_q2 = 'SELECT question_lib FROM island WHERE nom = "Quelle animal, qui peuple Svalbard, est en voie de disparition?"';
    $id_numq2 = 'SELECT question_num FROM island WHERE nom = "2"';
    $id_rep1q2 = 'SELECT reponse1 FROM island WHERE nom = "Le phoque"';
    $id_rep2q2 = 'SELECT reponse2 FROM island WHERE nom = "La baleine"';
    $id_rep3q2 ='SELECT reponse3 FROM island WHERE nom = "Le pingouin"';
    $id_rep4q2 = 'SELECT reponse4 FROM island WHERE nom = "L ours polaire"';

    //lancement de la requete q3

    $id_q3 = 'SELECT question_lib FROM island WHERE nom = "De quoi est composé le nouveau régime alimentaire des Rennes à Svalbard, et où peut on le trouver?"';
    $id_numq3 = 'SELECT question_num FROM island WHERE nom = "3"';
    $id_rep1q3 = 'SELECT reponse1 FROM island WHERE nom = "Les algues"';
    $id_rep2q3 = 'SELECT reponse2 FROM island WHERE nom = "Les poissons"';
    $id_rep3q3 = 'SELECT reponse3 FROM island WHERE nom = "L herbe "';
    $id_rep4q3 = 'SELECT reponse4 FROM island WHERE nom = "Les fleurs"';


    //Lancement de la requete q4

    $id_q4 = 'SELECT question_lib FROM island WHERE nom = "Quelles sont les animaux le plus toucher par les courant chaud à Svalbard?"';
    $id_numq4 = 'SELECT question_num FROM island WHERE nom = "4"';
    $id_rep1q4 = 'SELECT reponse1 FROM island WHERE nom ="Les rennes"';
    $id_rep2q4 = 'SELECT reponse2 FROM island WHERE nom= "Les souris" ';
    $id_rep3q4 = 'SELECT reponse3 FROM island WHERE nom = "Les renards"';
    $id_rep4q4 = 'SELECT reponse4 FROM island WHERE nom = "Les licornes"';

    //Lancement de la requete q5

    $id_q5 = 'SELECT question_lib FROM island WHERE nom = "Quelle bâtiment de Svalbard contient le plus d’espèce végétale au monde?"';
    $id_num5 = 'SELECT question_num FROM island WHERE nom = "5"';
    $id_rep1q5 = 'SELECT reponse1 FROM island WHERE nom = "L université"';
    $id_rep2q5 = 'SELECT reponse2 FROM island WHERE nom = "L eglise"';
    $id_rep3q5 = 'SELECT reponse3 FROM island WHERE nom = "Les maisons locaux"';
    $id_rep4q5 = 'SELECT reponse4 FROM island WHERE nom = "Le bunker"';

    //Lancement de la requete q6

    $id_q6 = 'SELECT question_lib FROM island WHERE nom ="Que risque Svalbard dans 50 ans?"';
    $id_numq6 = 'SELECT question_num FROM island WHERE nom = "6"';
    $id_rep1q6 = 'SELECT reponse1 FROM island WHERE nom = "Un tremblement de terre"';
    $id_rep2q6 = 'SELECT reponse2 FROM island WHERE nom = "L arrivée des Indiens"';
    $id_rep3q6 = 'SELECT reponse3 FROM island WHERE nom = "Prendre entre 7 et 10 degrés de plus"';
    $id_rep4q6 = 'SELECT reponse4 FROM island WHERE nom = "La fin du monde"';

    //Lancement de la requete q7

    $id_q7 = 'SELECT question_lib FROM island WHERE nom = "Qui sont les principaux habitant de Svalbard?"';
    $id_numq7 = 'SELECT question_num FROM island WHERE nom = "7"';
    $id_re1q7 = 'SELECT reponse1 FROM island WHERE nom = "Les européens"';
    $id_rep2q7 = 'SELECT reponse2 FROM island WHERE nom = "Les Esquimaux"';
    $id_rep3q7 = 'SELECT reponse3 FROM island WHERE nom ="Les chercheurs"';
    $id_rep4q7 = 'SELECT reponse4 FROM island WHERE nom = "Les campagnards"';

    //Lancement de la requerte

    ?>
    Le numéro de téléphone de LA GLOBULE est :<br />
    <?php echo $data['telephone']; ?>
    </body>
    </html>