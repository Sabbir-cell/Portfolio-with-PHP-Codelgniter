<!DOCTYPE html>
<html lang="en">
  <?php include 'header.php'; ?>
<body class="">
  <div class="wrapper ">
    <?php include 'sidebar.php' ?>
    <div class="main-panel" id="main-panel">
      <?php include'navbar.php'?>
      <!-- <div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
      </div> -->
      <div class="content" style="margin-top: 62px;">
        <?php include $page_name.'.php'; ?>
      </div>
      <?php include 'footer.php'; ?>
      
      <?php if($this->session->flashdata('msg')): ?>
        <p><?php echo $this->session->flashdata('msg'); ?></p>
      <?php endif; ?>
</body>

</html>