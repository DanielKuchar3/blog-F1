<?php
require_once '../blog-F1-main/formhandler.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit'])) {
    $form = new FormHandler($_POST['username'], $_POST['email'], $_POST['message']);

    $validation = $form->validate();
    if ($validation === true) {
        if ($form->message()) {
            header("Location: ../blog-F1-main/thankyou.php");
        } else {
            echo "Nepodarilo sa odoslať správu.";
        }
    } else {
        echo $validation; // vypíše validačnú chybu
    }
} else {
    echo "Formulár nebol odoslaný.";
}
