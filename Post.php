<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if form data is received
    if (!empty($_POST)) {
        $data = "<table>\n"; // Start of table
        foreach ($_POST as $variable => $value) {
            $data .= "<tr>\n";
            $data .= "<td>$variable</td>\n";
            $data .= "<td>=</td>\n";
            $data .= "<td>$value</td>\n";
            $data .= "</tr>\n";
        }
        $data .= "</table>\n"; // End of table
        $data .= "\n"; // Empty line

        // Write data to file
        $filename = 'data.html';
        file_put_contents($filename, $data, FILE_APPEND);

        // Redirect user to success page
        header('Location: 5th.html');
        exit;
    }
}
?>