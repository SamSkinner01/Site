<?php include("top.html"); ?>


    <form action="signup-submit.php" method="post">
        <fieldset>
            <legend>New User Signup:</legend>

            <!-- Name -->
            <label class="left">
            <strong>Name: </strong>
            </label>
            <input type="text" name="name" size="16">
            <br>

            <!-- Gender -->
            <label class="left">
            <strong>Gender: </strong>
            </label>
            <input type="radio" name ="gender" value="M">Male
            <input type="radio" name = "gender" value="F" checked> Female 
            <br>

            <!-- Age -->
            <label class="left">
            <strong>Age: </strong>
            </label>
            <input type="text" name = "age" size="6" maxlength="2">
            <br>

            <!-- Personality Type -->
            <label class="left">
            <strong>Personality Type: </strong>
            </label>
            <input  type="text" size = "6" name ="personality-type" maxlength="4">&nbsp(<a href = "https://www.humanmetrics.com/personality">Don't know your type?</a>)
            <br>

            <!-- Favorite OS -->
            <label class="left">
            <strong>Favorite OS:</strong>
            </label>
            <select name ="favorite-os">
                <option value="Windows">Windows</option>
                <option value="MacOSX">Mac OS X</option>
                <option value="Linux">Linux</option>
            </select>
            <br>

            <!-- Seeking Age -->
            <label class="left">
            <strong>Seeking Age:</strong>
            </label>
            <input type="text" name = "seeking-age-min" placeholder="min" size="6" maxlength="2">
            to
            <input type="text" name = "seeking-age-max" placeholder="max" size="6" maxlength="2">
            <br>

            <!-- Sign Up -->
            <input type="submit" value="Sign Up">
        
        </fieldset>
    </form>
    


<?php include("bottom.html"); ?>