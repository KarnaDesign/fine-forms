<?php
    require_once("database/taglineRepository.php");

    $taglines = readAllTaglines($connectionInfo);

    foreach($taglines as $tagline)
    {
        $id = $tagline["id"];
        ?>
        <p><input type="checkbox" name="tagLine[]" id="tagline<?php echo $id; ?>"  value="<?php echo $id; ?>"><label
                for="tagline<?php echo $id; ?>"><?php echo $tagline["quote"]; ?></label></p>
<?php
    }
?>