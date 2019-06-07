<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('dashboard/_partials/head');?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php $this->load->view('dashboard/_partials/main-header');?>
        <?php $this->load->view('dashboard/_partials/main-sidebar');?>
        <?php $this->load->view('dashboard/_partials/content');?>
        <?php $this->load->view('dashboard/_partials/footer');?>
    </div>

    <?php $this->load->view('dashboard/_partials/js');?>
</body>

</html>