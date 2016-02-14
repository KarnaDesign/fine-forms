<?php
    require_once("top.php");

$completed = "";
if(isset($_GET["completed"]))
{
    $completed = $_GET["completed"];
}

if($completed === "true")
{
    echo("it worked!");
}
?>
    <header><h1>Application - the Doctor's companion</h1>
        <h3>Fill in this form, please!</h3></header>

    <form action="formhandler.php" method="post" name="companion-application-form" id="applicationForm" autocomplete="off">
        <fieldset>
            <legend>The basics</legend>
            <div class="formInput">
                <p><label for="firstName">First name* </label></p>
                <p><input type="text" name="firstName" id="firstName" required /></p>
            </div>
            <div class="formInput">
                <p><label for="lastName">Last name*</label></p>
                <p><input type="text" name="lastName" id="lastName" required /></p>
            </div>

            <div class="formInput">
                <p><label for="age">Age*</label></p>
                <p><input type="number" name="age" id="age" min="1" max="99" required /></p>
            </div>
            <div class="formInput">
                <p><label for="email">E-mail*</label></p>
                <p><input type="email" name="email" id="email" required /></p>
            </div>
            <div class="formInput">
                <p><label for="gender">Gender*</label></p>
                <p>
                    <select name="gender" id="gender" required>
                        <option value="man">Man</option>
                        <option value="woman">Woman</option>
                    </select>
                </p>
            </div>

        </fieldset>
        <fieldset>
            <legend>The important stuff</legend>
            <div class="incarnationContainer">
                <h4>Favourite incarnation*</h4>
                <p><select name="incarnation" id="incarnation">
                        <option value="The First Doctor, William Hartnell" id="first" selected>The First Doctor, William Hartnell</option>
                        <option value="The Second Doctor, Patrick Troughton" id="second">The Second Doctor, Patrick Troughton</option>
                        <option value="The Third Doctor, Jon Pertwee" id="third">The Third Doctor, Jon Pertwee</option>
                        <option value="The Fourth Doctor, Tom Baker" id="fourth">The Fourth Doctor, Tom Baker</option>
                        <option value="The Fifth Doctor, Peter Davison" id="fifth">The Fifth Doctor, Peter Davison</option>
                        <option value="The Sixth Doctor, Colin Baker" id="sixth">The Sixth Doctor, Colin Baker</option>
                        <option value="The Seventh Doctor, Sylvester McCoy" id="seventh">The Seventh Doctor, Sylvester McCoy</option>
                        <option value="The Eigth Doctor, Paul McGann" id="eigth">The Eigth Doctor, Paul McGann</option>
                        <option value="The Ninth Doctor, Christopher Eccleston" id="ninth">The Ninth Doctor, Christopher Eccleston</option>
                        <option value="The Tenth Doctor, David Tennant" id="tenth">The Tenth Doctor, David Tennant</option>
                        <option value="The Eleventh Doctor, Matt Smith" id="eleventh">The Eleventh Doctor, Matt Smith</option>
                        <option value="The Twelth Doctor, Peter Capaldi" id="twelth">The Twelth Doctor, Peter Capaldi</option>
                    </select>
                </p>
            </div>
            <div id="tagLine" class="clearFix">
                <h4>Choose favourite tagline(s)</h4>
                <div class="leftTagLine">
                    <p><input type="checkbox" name="tagLine[]" id="tagLine1" value="Don't Blink"><label
                            for="tagLine1">Don't
                            Blink</label></p>
                    <p><input type="checkbox" name="tagLine[]" id="tagLine2" value="Silence Will Fall"><label
                            for="tagLine2">Silence
                            Will
                            Fall</label></p>
                    <p><input type="checkbox" name="tagLine[]" id="tagLine3" value="Bow ties Are Cool"><label
                            for="tagLine3">Bow
                            ties Are
                            Cool</label></p>
                    <p><input type="checkbox" name="tagLine[]" id="tagLine4" value="Time Can Be Rewritten"><label
                            for="tagLine4">Time
                            Can Be
                            Rewritten</label></p>
                    <p><input type="checkbox" name="tagLine[]" id="tagLine5" value="Geronimo!"><label
                            for="tagLine5">Geronimo!</label></p>
                </div>
                <div class="rightTagLine">
                    <p><input type="checkbox" name="tagLine[]" id="tagLine6" value="Come Along Pond"><label
                            for="tagLine6">Come
                            Along
                            Pond</label></p>
                    <p><input type="checkbox" name="tagLine[]" id="tagLine7" value="Fixed Point In Time"><label
                            for="tagLine7">Fixed
                            Point In
                            Time</label></p>
                    <p><input type="checkbox" name="tagLine[]" id="tagLine8"
                              value="A big ball of wibbly wobbly... time-y wimey... stuff"><label for="tagLine8">A
                            big
                            ball of wibbly
                            wobbly... time-y wimey... stuff</label></p>
                    <p><input type="checkbox" name="tagLine[]" id="tagLine9" value="Air From My Lungs"><label
                            for="tagLine9">Air
                            From My
                            Lungs</label></p>
                </div>
            </div>

            <div id="moisturize">
                <h4>Do you need to be moisturized?*</h4>
                <p><input type="radio" name="moisturize" id="moisturizedYes" value="yes" checked><label
                        for="moisturizedYes">Yes please!</label></p>
                <p><input type="radio" name="moisturize" id="moisturizedNo" value="no"><label for="moisturizedNo">No
                        thanks!</label></p>

            </div>
        </fieldset>
        <div id="outerButtonsForm">
            <div id="buttonsForm">
                <button type="submit" name="submit" id="buttonSend">Send application</button>
                <button type="reset" id="buttonReset">Reset</button>
            </div>
        </div>
    </form>
<?php
    require_once("bottom.php");
?>