<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    require '..\config\database.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


            $email = $_POST["email"];
            $password = $_POST["password"];

            // Hacher le mot de passe
            $passwordHash = password_hash($password, PASSWORD_BCRYPT);
            
            // Insérer dans la base de données
            try{
                
                $stmt = $pdo->prepare("INSERT INTO users(email, password_hash) VALUES (?, ?)");
                $stmt->execute([$email, $passwordHash]);

            }
            catch(PDOException $e) {
                //echo json_encode(["error" => "Erreur SQL : " . $e->getMessage()]);
                
        }   
    }
    ?>
    
    <div>
        <h1>Welcome to My'Drone.</h1>
        <a href="../struct.php">Home</a>
    </div>
</body>
</html>





