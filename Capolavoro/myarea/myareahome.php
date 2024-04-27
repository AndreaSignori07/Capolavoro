<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body style="background-color: whitesmoke;">
 
  <div class="topnav" id="myTopnav">
    <center>
    <a href="../index.html" class="active">Home</a>
    <a href="../sezioni/chisono.html">Chi sono</a>
    <a href="../sezioni/iscriviti/Iscrizione.html">Iscriviti</a>
    <a href="../sezioni/login/login.html">Login</a>
    <a  href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
    <a href="https://www.itispaleocapa.edu.it/" target="_blank" rel="noopener noreferrer">Paleocapa</a>
    </center>
  </div>

  
    <div class="flex items-center gap-4" style="padding-top: 3%;">
        <img class="w-10 h-10 rounded-full" src="../foto/foto_default.jpg" alt="">
        <div class="font-medium dark:text-white">
            <div>Account di:</div>
            <div class="text-sm text-gray-500 dark:text-gray-400">
            <?php
session_start();
require 'connection2.php';

// Controlla se la connessione al database è stata stabilita correttamente
if (!$conn) {
    die("Errore nella connessione al database: " . mysqli_connect_error());
}

// Controlla se l'utente è loggato
if(isset($_SESSION['id'])) {
    // Ottieni l'ID dell'utente loggato dalla sessione
    $user_id = $_SESSION['id'];

    // Prepara la query per ottenere l'email dell'utente loggato
    $query = "SELECT email FROM coin WHERE id = $user_id";

    // Esegui la query
    $result = mysqli_query($conn, $query);

    // Controlla se la query è stata eseguita con successo
    if($result) {
        // Controlla se è stata trovata almeno una riga
        if(mysqli_num_rows($result) > 0) {
            // Ottieni i dati della riga
            $row = mysqli_fetch_assoc($result);
            // Stampi l'email dell'utente
            echo "" . $row['email'];
        } else {
            echo "Nessun utente trovato con questo ID.";
        }
        
        echo "Errore nella query: " . mysqli_error($conn);
    }
} else {
    echo "Utente non loggato.";
}
// Chiudi la connessione
mysqli_close($conn);
?>

            </div>
        </div>
    </div>

  <div style="padding-top: 1%;" class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Difficulty (1-5)
                </th>
                <th scope="col" class="px-6 py-3">
                    Space
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Third library
                </th>
                <td class="px-6 py-4">
                    2
                </td>
                <td class="px-6 py-4">
                    3K
                </td>
                <td class="px-6 py-4">
                    A$ 2999
                </td>
                <td class="px-6 py-4">
                    <a href="#" rel="nofollow" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" onclick="downloadFile()">Buy</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Robotic vacuum cleaner
                </th>
                <td class="px-6 py-4">
                    3
                </td>
                <td class="px-6 py-4">
                    2K
                </td>
                <td class="px-6 py-4">
                    A$ 1999
                </td>
                <td class="px-6 py-4">
                    <a href="#"class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buy</a>
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    The scientist
                </th>
                <td class="px-6 py-4">
                    4
                </td>
                <td class="px-6 py-4">
                    5K
                </td>
                <td class="px-6 py-4">
                    A$ 99
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buy</a>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="noire_line">
    <img src="../foto/divisore.png" alt="logo" class="logo_sep">

  </div>

  <div class="info">
    <center class="info_text">
      <p>Per segnalare eventuali bug scrivere una mail a</p>
      <p>signoriandrea7@gmail.com</p>
    </center>
  </div>
  
</div>

