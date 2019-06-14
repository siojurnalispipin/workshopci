<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('dashboard/_partials/head');?>
</head>

<body>
    <div class="container-scroller">
        <?php $this->load->view('dashboard/_partials/main-header');?>
        <div class="container-fluid page-body-wrapper">
            <?php $this->load->view('dashboard/_partials/main-sidebar');?>
            <div class="main-panel">
                <?php $this->load->view($view)?>

                <?php $this->load->view('dashboard/_partials/main_footer');?>
            </div>
        </div>
    </div>
    <?php $this->load->view('dashboard/_partials/js');?>
</body>
</html>