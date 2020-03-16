<?php
if (isset($_GET['post'])) {
    if ($_GET['post'] == "success") {
        echo '
        <div class="alert alert-success" role="alert">
            Internship Post Successfully
        </div>
        ';
    }
}