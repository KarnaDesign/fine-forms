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

    function getIncarnationById($connectionInfo, $doctorsID)
    {
        $connection = new mysqli($connectionInfo["serverName"], $connectionInfo["username"], $connectionInfo["password"],
            $connectionInfo["database"]);
        if($connection->connect_error)
        {
            die("Connection failed: " . $connection->connect_error);
        };

        $sql = "SELECT doctor, image_url FROM incarnation WHERE id = ?"; //Using ? as a placeholder for the actual id
        $statement = $connection->prepare($sql); //Creating a statement
        $statement->bind_param("i", $doctorsID); //Making sure the selected id doesn't contain anything nasty
        $statement->execute();

        $statement->bind_result($doctor, $url);
        $statement->fetch();
        $statement->close();

        return array("name" => $doctor, "url" => $url);
    }
?>