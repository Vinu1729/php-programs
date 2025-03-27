<?php 
if(isset($_POST['Transport']) && is_array($_POST['Transport'])) {
    echo "You have selected: <br>";

    foreach($_POST['Transport'] as $value) {
        echo "- " . $value . "<br>";  // Formatting with a line break
    }
} else {
    echo "No transport option selected.";
}
?>
