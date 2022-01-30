<?php
try
{
	// $db = new PDO('mysql:host=localhost;dbname=id18373296_messages;charset=utf8', 'id18373296_root', 'c+Lt{7Tj>u%q_X]>'); // For online use
        $db = new PDO('mysql:host=localhost;dbname=portfoliodb', 'root', 'root'); // For local use (USING MAMP root root)
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$Name = $_POST['name'];
$Email = $_POST['email'];
$Categorie = $_POST['dropdown'];
$Message = $_POST['message'];

// Ecriture de la requête
$request = $db->prepare('INSERT INTO messages(Name, Email, Categorie, Message) VALUES (:Name, :Email, :Categorie, :Message)');

// Exécution ! La recette est maintenant en base de données
$request->execute([
    'Name' => $Name,
    'Email' => $Email,
    'Categorie' => $Categorie,
    'Message' => $Message,
]);
?>

<!-- <h1>Message bien reçu !</h1>
        
<div class="card">
    
    <div class="card-body">
        <h5 class="card-title">Rappel de vos informations</h5>
        <p class="card-text"><b>Name</b> : <?php echo $_POST['name']; ?></p>
        <p class="card-text"><b>Email</b> : <?php echo $_POST['email']; ?></p>
        <p class="card-text"><b>Message</b> : <?php echo $_POST['message']; ?></p>
        <p class="card-text"><b>Subject</b> : <?php echo $_POST['dropdown']; ?></p>
    </div>
</div> -->

<form action="index.html" id="goBackForm" method="POST">
</form>
<script type="text/javascript">
document.getElementById('goBackForm').submit();
</script>