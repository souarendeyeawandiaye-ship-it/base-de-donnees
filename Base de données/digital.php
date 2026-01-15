<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="digital.css">
    <title>digital</title>
</head>                           
<body>
  <div class="form-container">
    <h2>Inscription</h2>
<form method="POST" action="ordi.php">
 <h3><label>NOM</label> <br><input type="text" name="A"
                   placeholder="Entrer votre nom"30 maxlength="20"></h3>
<h3><label>PRENOM</label> <br><input type="text" name="B"
                   placeholder="Entrer votrer prenom" maxlength="20"></h3> 
<h3><label>IDENTIFIENT</label> <br><input type="mail" name="C"
                   placeholder="EMAIL ou telephone"
                    maxlength="20"></h3>                              

<p>
  <h3><label>Date de Naissance</label>
  <input type="date" name="D"></h3>
</p>

 <p>
 <h3><label for="pays">Nationalité</label>
 <select name="E">
  <option value="Marocain">Marocain</option>  
  <option value="Ivoirien">Ivoirien</option>
  <option value="Sénégalais">Sénégalais</option>
  <option value="Togolais">Togolais</option>
  <option value="Malien">Malien</option>
</select></h3>
</p> 
 
<p>
  <h3><label for="Sexe">SEXE</label>
  <select name="F">
    <option value="Maxculin">Maxculin</option>
    <option value="Féminin">Féminin</option>
 </select> </h3>
</p>
<button type="submit">ENVOYER
</button>
</form> 
</div>                
</body>
</html> 
