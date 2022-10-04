<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form  action="/thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name" required>
    </div>

    <br>

    <div>
      <label  for="prenom">Prénom :</label>
      <input  type="text"  id="prenom"  name="user_firstname" required>
    </div>

    <br>

    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" required>
    </div>

    <br>

    <div>
      <label  for="phone">Téléphone :</label>
      <input  type="phone"  id="phone"  name="user_phone" required>
    </div>

    <br>

    <div>
      <label  for="subject">Sujet :</label>
      <select name="subject" id="subject" required>
            <option value="">--Please choose an option--</option>
            <option value="politic">Politic</option>
            <option value="social">Social</option>
            <option value="environment">Environment</option>
    </select>
    </div>

    <br>

    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message" required></textarea>
    </div>

    <br>

    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>



  </body>
</html>