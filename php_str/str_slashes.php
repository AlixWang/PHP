<?php
    echo '<form action="str_slashes.php" method="post"><input type="text" name="text"><input type="submit" value="submit"></form>';
    echo $_POST['text']."<br>";
    echo addslashes($_POST['text'])."<br>";
    echo stripslashes($_POST['text']);
