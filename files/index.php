<?php 

function isShibbolethVariable($varName) {
    return preg_match('/^Shib-|^HTTP_SHIB_/', $varName);
}

echo "<!DOCTYPE html><html><head><title>Shibboleth Variables Analysis</title></head><body>";
echo "<h1>Shibboleth Variables</h1>";
echo "<table border='1'><tr><th>Variable Name</th><th>Value</th></tr>";

foreach ($_SERVER as $key => $value) {
    if (isShibbolethVariable($key)) {
        echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
    }
}

echo "</table>";

echo "<h1>All Variables</h1>";
echo "<table border='1'><tr><th>Variable Name</th><th>Value</th></tr>";
foreach ($_SERVER as $key => $value) {
    echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
}

echo "</body></html>";

?>