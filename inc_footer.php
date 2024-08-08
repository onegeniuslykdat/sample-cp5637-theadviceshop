<footer>
    <p class="copyright">&copy;
        <?php echo date('Y') ?>, The Advice Shop.
    </p>
    <p class="user"><?php
                    include_once('functions.php');
                    // echo $_SESSION['blah']; // demo undefined variable
                    if (isset($_SESSION['username'])) {
                        echo "Hello " . getFullName($_SESSION['fname'], $_SESSION['lname']);
                        echo " - <a href=\"logout.php?page=$name\">Logout</a>";
                    } else {
                        echo "Welcome, Guest";
                    }
                    ?></p>
</footer>
<?php if (isset($dbh)) {
    $dbh = null;
} ?>