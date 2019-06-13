<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('dashboard/_partials/head');?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="container is-desktop is-mobile">
        <?php $this->load->view('dashboard/_partials/main-header');?>
        <div class="section">
            <div class="columns">
                <?php $this->load->view('dashboard/_partials/main-sidebar');?>
                <?php $this->load->view($view)?>
            </div>
        </div>
        <?php $this->load->view('dashboard/_partials/main_footer');?>
    </div>


    <?php $this->load->view('dashboard/_partials/js');?>
</body>

</html>