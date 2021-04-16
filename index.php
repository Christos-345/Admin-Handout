<?php
$title = 'Home | APM Admin';
include_once 'includes/header.inc.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">APM SMART HOUSES</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <?php
        if (isset($_SESSION['lang'])) {
            if ($_SESSION['lang'] == "gr") {
                include_once 'manuals/manualDashboardGreek.html';
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