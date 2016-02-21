<?php
    function readAllIncarnations($connectionInfo)
    {
        $connection = new mysqli($connectionInfo["serverName"], $connectionInfo["username"], $connectionInfo["password"],
            $connectionInfo["database"]);
        if($connection->connect_error)
        {
            die("Connection failed: " . $connection->connect_error);
        };

        $sql = "SELECT id, doctor FROM incarnation";
        $result = $connection->query($sql);

        $incarnations = $result->fetch_all(MYSQLI_ASSOC);

        $connection->close();

        return $incarnations;

    }
?>