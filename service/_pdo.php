<?php
function connexionPDO():PDO
{
    $config = require __DIR__."/../ressources/config/_budgetConfig.php";
    $dsn = 
    "mysql:host=".$config["host"]
    .";dbname=".$config["database"]
    .";charset=".$config["charset"];
    try
    {
        $pdo = new PDO(
            $dsn,
            $config["user"],
            $config["password"],
            $config["options"]
        );
        return $pdo;
    }catch(PDOException $e)
        {
            throw new PDOException(
                $e->getMessage(), 
                (int)$e->getCode()
            );
    }
}
/**
 * fonction de nettoyage des elements saisis
 *
 * @param string $data
 * @return string
 */
function cleanData(string $data): string{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

?>