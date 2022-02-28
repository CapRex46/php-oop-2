<?php 
    require_once __DIR__ . "/class/user.php";


    $user1 = new User([
        "userName" => "Pietro",
        "userSurname" => "Smusi",
        "userEmail" => "pietrosmusi@yahoo.it",
        "userRegistered" => true,
        "userCardNumber" => "5413-7138-4191-2585",
        "userCardExpire" => "2024-03",
        "userCVV" => 256
    ]);

    $user2 = new User([
        "userName" => "Marco",
        "userSurname" => "Rossi",
        "userEmail" => "marco.red@libero.com",
        "userRegistered" => false,
        "userCardNumber" => "5698-2541-3697-1475",
        "userCardExpire" => "2026-04",
        "userCVV" => 584
    ]);

    var_dump($user1, $user2);

?>