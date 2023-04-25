<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>

<form action="//localhost/ex4/scrypt_form.php" method="post">
nazwisko<br>
<input type="text" name="nazwisko" value="" size="30"><br>
imie<br>
<input type="text" name="imie" value="" size="30"><br>
imie<br>
zawod<br>
<input type="text" name="zawod" value="" size="30"><br>
imie<br>
mail<br>
<input type="text" name="mail" value="" size="30" required><br>
imie<br><br>

<p><b>Wyksztalcenie</b></p>
<input type="radio" value="podstawowe" name="wyksz">podstawowe<br>
<input type="radio" value="srednie" name="wyksz">srednie<br>
<input type="radio" value="wyzsze" name="wyksz">wyzsze<br><br>

<input type="checkbox" name="opcje" maxlength="1">
Zgadzam sie na przetwarzanie danych osobowych<br><br>

<input type="submit" value="wyslij" name="wyslij">&nbsp;&nbsp;&nbsp;
<input type="reset" value="wyczysc" name="wyczysc"><br><br><br>
<label for="jezyki">Wybiez jenzyk</label>
<select name="jezyki" id="Wybiez_jenzyk" multiple>
    <option value="c++">c++</option>
    <option value="js">js</option>
    <option value="php">php</option>
    <option value="c#">c#</option>

</select>
<br><br><br>

</form>    

</body>
</html>