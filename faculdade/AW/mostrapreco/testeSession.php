<?php
session_start();
// iniciar a varável de sessão sempre que uma nova busca for feita
//echo $_SESSION['ultimaBusca'] = time();



// colocar esse teste no arquivo de resultados
if (isset($_SESSION['ultimaBusca']) && (time() - $_SESSION['ultimaBusca'] > 60)) {
    // última atividade foi mais de 60 segundos atrás
    //session_unset($_SESSION['ultimaBusca']);     // unset $_SESSION
    //session_destroy($_SESSION['ultimaBusca']);   // destroindo session data
    echo $_SESSION['ultimaBusca'] = time(); // update da ultima atividade
}
else{
echo $_SESSION['ultimaBusca'];
}
 ?>
