<?php
require_once("top.php");

$name = $_POST["firstName"] . " " . $_POST["lastName"];
$age = $_POST["age"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$incarnation = $_POST["incarnation"];
$tagLines = $_POST["tagLine"];
$moisturize = $_POST["moisturize"];

?>

<header>
    <h1>Just to make sure...</h1>
    <h3>Validation before application</h3>
</header>

<div id="applicationSummary">
    <p>So your name is <?php echo($name); ?> and you're
        <?php echo($age); ?> years old.</p>
    <p>You've entered the following e-mail: <?php echo($email); ?>. Please make sure it's the correct one.</p>
    <p>You claim to be a <?php echo($gender); ?>. Please make sure this information is correct.</p>
    <p>When it comes to the important stuff, you've chosen <?php echo($incarnation); ?>, as your favourite
        incarnation of the Doctor. Are you sure?</p>
    <p>Your favourite tag line(s) are as follows: </p>
    <ul>
        <?php
        for ($i = 0; $i < count($tagLines); $i++) {
            echo("<li>" . $tagLines[$i] . "</li>");
        }
        ?>
    </ul>

    <?php if ($moisturize === "yes") { ?>
        <p>You chose to be moisturized. Please bring your own hose.</p>
    <?php } else { ?>
        <p>You declined the offer of being moisturized. To each his/her own...</p>
    <?php } ?>
</div>

<div id="applicationApproval">
    <p><a href="index.php?completed=true">Yes! Geronimo!</a></p>
    <p><a href="index.php">No, wait... take me back!</a></p>
</div>

<?php
require_once("bottom.php");
?>
