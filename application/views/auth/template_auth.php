<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('auth/_partials/head');?>
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <?php $this->load->view($view)?>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <?php $this->load->view('auth/_partials/js');?>
</body>
</html>