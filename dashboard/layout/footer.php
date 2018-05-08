<!-- Main Footer -->
      <footer class="main-footer">
        <!-- Default to the left -->
        <strong><center>Copyright &copy; 2015 <a href="#">By KaAz</a>. All rights reserved.</center></strong>

      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">

          </div><!-- /.tab-pane -->
        </div><!-- /.tab-pane -->

      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- DataTables -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- Slimscroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="../dist/js/docs.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo1.js"></script>
    <!--this datepicker java script for bootstrap 3-->
    <script src="../dist/js/bootstrap-datepicker.js"></script>
    <!-- Morris.js charts -->
    <script src="../plugins/morris/raphael-min.js"></script>
    <script src="../plugins/morris/morris.min.js"></script>
    <!-- Fancy Box -->
    <script type="text/javascript" src="../dist/fancybox/jquery.fancybox.pack.js"></script>
    <script type="text/javascript">
           $(document).ready(function(){
           $(".fancybox").fancybox()
           });
    </script>
    <!-- date picker -->
    <script>
        //options method for call datepicker
        $('#idTourDateDetails').datepicker({
          format: 'yyyy-mm-dd',
          altField: "#idTourDateDetailsHidden"
       });
    </script>
    <!-- iCheck 1.0.1 -->
    <script src="../plugins/iCheck/icheck.min.js"></script>
    <script type="text/javascript">
      //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });
    </script>

  </body>

</html>
