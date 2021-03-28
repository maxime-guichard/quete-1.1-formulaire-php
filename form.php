<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire quête 1</title>
</head>
<body>


<form  action="thanks.php"  method="POST">

<div>

  <label  for="nom">Nom :</label>

  <input  type="text"  id="nom"  name="user_name">

</div>

<div>

  <label  for="prénom">Prénom :</label>

  <input  type="text"  id="prénom"  name="user_surname">

</div>

<div>

  <label  for="téléphone">N° téléphone :</label>

  <input  type="téléphone"  id="téléphone"  name="téléphone">

</div>

<label for="sujet">choisis un sujet:</label>
<select id="sujet" name="toto">
  <option value="bonjour">Bonjour</option>
  <option value="Salut">Salut</option>
  <option value="En revoir">En revoir</option>
  <option value="Ciao">Ciao</option>
</select> 

<div>

  <label  for="courriel">Courriel :</label>

    <input  type="email"  id="courriel"  name="user_email">

</div>

<div>

  <label  for="message">Message :</label>

  <textarea  id="message"  name="user_message"></textarea>

</div>

<div  class="button">

  <button  type="submit">Envoyer votre message</button>

</div>

</form>


<br>

</body>
</html>