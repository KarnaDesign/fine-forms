<?php

    function readAllTaglines($connectionInfo)
    {
       $connection = new mysqli($connectionInfo["serverName"], $connectionInfo["username"], $connectionInfo["password"],
           $connectionInfo["database"]);
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        $sql = "SELECT id, quote FROM tagLine";
        $result = $connection->query($sql);

        $taglines = $result->fetch_all(MYSQLI_ASSOC); //Gets all rows from result as an associative array

        $connection->close();

        return $taglines;
    }

/**
 * @param $connectionInfo   Database connection info
 * @param $taglineIds   Array of selected taglines
 */
    function getTaglineById($connectionInfo, $taglineId)
    {
        $connection = new mysqli($connectionInfo["serverName"], $connectionInfo["username"], $connectionInfo["password"],
            $connectionInfo["database"]);

        if($connection->connect_error)
        {
            die("Connection failed: " . $connection->connect_error);
        };

        $sql = "SELECT quote FROM tagLine WHERE id = ?";
        $statement = $connection->prepare($sql);
        $statement->bind_param("i", $taglineId);
        $statement->execute();

        $statement->bind_result($quote);
        $statement->fetch();
        $statement->close();

        return $quote;
    }

?>