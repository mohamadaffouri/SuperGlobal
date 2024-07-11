<?php
setcookie('username', 'john_doe', time() + (86400 * 30), '/');
setcookie('language', 'en_US', time() + (86400 * 30), '/');
function printAllCookies() {
    if (count($_COOKIE) > 0) {
        echo "<h2>All Cookies:</h2>";
        echo "<ul>";
        foreach ($_COOKIE as $name => $value) {
            echo "<li>$name = $value</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No cookies are set.</p>";
    }
}
printAllCookies();
?>