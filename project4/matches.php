<?php include("top.html"); ?>

<form action="matches-submit.php" action="get">
    <fieldset>
        <!-- Returning User -->
        <legend>Returning User:</legend>
        <label class="left">
            <strong>Name</strong>
        </label>
        <input type="text" name = "returning_user_name" size="16">
        <br>
        <br>
        
        <!-- Submit -->
        <input type="submit" value="View My Matches">
    </fieldset>
</form>

<?php include("bottom.html"); ?>