    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?= base_url(); ?>assets/js/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?= base_url(); ?>assets/js/raphael.min.js"></script>
    <!-- <script src="<?= base_url(); ?>assets/js/morris.min.js"></script> -->
    <!-- <script src="<?= base_url(); ?>assets/js/morris-data.js"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url(); ?>assets/js/sb-admin-2.js"></script>


    <!-- DataTables JavaScript -->
    <script src="<?= base_url(); ?>assets/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/datatables-responsive/dataTables.responsive.js"></script>

   <!--  <script src="<?= base_url(); ?>assets/datatables/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>assets/datatables/js/pdfmake.min.js"></script> -->
    <!-- <script src="<?= base_url(); ?>assets/js/buttons.html5.min.js"></script> -->


    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

    <!-- <script type="text/javascript">
    $(document).ready(function() {
    $('#dataTables-example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf'
        ]
    } );
    } );
    </script> -->

</body>

</html>