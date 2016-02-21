<?php
require_once("database/incarnationRepository.php");

$incarnations = readAllIncarnations($connectionInfo);

?>

<p><select name="incarnation" id="incarnation">

        <?php
        $isFirst = true;
        foreach ($incarnations as $incarnation) {
            $id = $incarnation["id"];
            $selected = "";
            if ($isFirst) {
                $selected = "selected"; //Sets the selected attribute to the first option.
                $isFirst = false; //This was the first loop so in the following it won't be true.
            }
            ?>
            <option value="<?php echo $id; ?>" <?php echo $selected; ?>><?php echo $incarnation["doctor"]; ?>
            </option>
            <?php
        }
        ?>
    </select>
</p>

