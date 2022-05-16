<?php
$title = 'Home | The Handout Admin';
include_once 'includes/header.inc.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">THE HANDOUT</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <?php
        $_SESSION['lang'] == "en";
        
        if (isset($_SESSION['lang'])) {
            if ($_SESSION['lang'] == "gr") {
                $_SESSION['lang'] == "en";
                include_once 'manuals/manualDashboardEnglish.html';
            } else if ($_SESSION['lang'] == "en") {
                include_once 'manuals/manualDashboardEnglish.html';
            }
        }
        ?>




    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
include_once 'includes/footer.inc.php';
?>