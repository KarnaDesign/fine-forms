<?php
require_once("top.php");
require_once("database/incarnationRepository.php");
$connectionInfo = require_once("configuration/connectionInfo.php");
require_once("database/taglineRepository.php");

$name = $_POST["firstName"] . " " . $_POST["lastName"];
$age = $_POST["age"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$doctorsID = $_POST["incarnation"];
$moisturize = $_POST["moisturize"];

$taglineIds = array();
if(isset($_POST["tagLine"])) {
    $taglineIds = $_POST["tagLine"];
}

$doctorsInfo = getIncarnationById($connectionInfo, $doctorsID);
$doctorsName = $doctorsInfo["name"]; //Get selected incarnation
$doctorsImage = $doctorsInfo["url"]; //Get image of selected incarnation

?>

<header>
    <h1>Just to make sure...</h1>
    <h3>Validation before application</h3>
</header>

<div id="applicationSummary">
    <p>So your name is <span class="formResult"><?php echo($name); ?></span> and you're
        <span class="formResult"><?php echo($age); ?></span> years old.</p>
    <p>You've entered the following e-mail: <span class="formResult"><?php echo($email); ?></span>. Please make sure
        it's the correct one.</p>
    <p>You claim to be a <span class="formResult"><?php echo($gender); ?></span>. Please make sure this information is
        correct.</p>
    <p>When it comes to the important stuff, you've chosen <span class="formResult"><?php echo($doctorsName); ?></span>,
        as your favourite
        incarnation of the Doctor. Are you sure?</p>
    <p>Your favourite tag line(s) are as follows: </p>
    <ul>
        <?php
        if(count($taglineIds) === 0)
        {
            echo "<em>Apparently you don't have any favourite taglines... How sad!</em>";
        }
        else {
            for ($i = 0; $i < count($taglineIds); $i++) {
                $quote = getTaglineById($connectionInfo, $taglineIds[$i]);
                echo("<li class='formResult'>" . $quote . "</li>");
            }
        }
        ?>
    </ul>

    <?php if ($moisturize === "yes") { ?>
        <p>You <span class="formResult">chose to be moisturized</span>. Please bring your own hose.</p>
    <?php } else { ?>
        <p>You <span class="formResult">declined the offer of being moisturized</span>. To each his/her own...</p>
    <?php } ?>
</div>

<p id="sendQuestion">Is this the information you want to send on to the Tardis?</p>

<div id="outerApplicationApproval">
    <div id="applicationApproval">
        <p><a href="index.php?completed=true">Yes! Geronimo!</a></p>
        <p><a href="index.php">No, wait... take me back!</a></p>
    </div>
</div>

<?php
require_once("bottom.php");
?>
