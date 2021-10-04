<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_lastname">
    </div>
    <div>
      <label  for="prenom">Prenom :</label>
      <input  type="text"  id="prenom"  name="user_firstname">
    </div>
    <div>
      <label  for="téléphone">Téléphone :</label>
      <input  type="text"  id="téléphone"  name="user_téléphone">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="sujet">Sujet :</label>
      <select name="sujet" size="1">
    <option>Informations
    <option>Remarques
    <option>Plaintes
    </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
</form>
</body>
</html>