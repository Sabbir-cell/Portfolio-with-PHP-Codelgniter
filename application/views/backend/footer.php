<script type="text/javascript">
  $('document').ready(function(){
    <?php if($this->session->userdata('success_message')): ?>
      flashy('<?php echo $this->session->userdata('success_message'); ?>', {
        type : 'flashy__success'
      });
    <?php endif; ?>

    <?php if($this->session->userdata('error_message')): ?>
      flashy('<?php echo $this->session->userdata('error_message'); ?>', {
        type : 'flashy__danger'
      });
    <?php endif; ?>
  });
</script>
<footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
                <a href="<?php echo site_url('portfolio/index') ?>">
                  Portfolio
                </a>
              </li>
              <li>
                <a href="<?php echo site_url('portfolio/index') ?>">
                  About me
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by
            <a href="<?php echo site_url('portfolio/index') ?>">Sabbir</a>. Coded by
            <a href="<?php echo site_url('portfolio/index') ?>">Portfolio</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url('assets/backend/js/core/popper.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/backend/js/core/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/backend/js/plugins/perfect-scrollbar.jquery.min.js'); ?>"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?php echo base_url('assets/backend/js/plugins/chartjs.min.js'); ?>"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url('assets/backend/js/plugins/bootstrap-notify.js'); ?>"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url('assets/backend/js/now-ui-dashboard.min.js?v=1.3.0'); ?>" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url('assets/backend/demo/demo.js'); ?>"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/backend/js/flashy.min.js'); ?>"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
