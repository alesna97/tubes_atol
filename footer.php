<!-- END -->
                </div>
            </div>
        </div>

    <!-- sidebar collapse -->
        <script src="../asset/js/jquery.dataTables.min.js"></script>
        <script src="../asset/js/dataTables.bootstrap4.min.js"></script>
        <script src="../asset/js/Chart.js"></script>
        <script src="../asset/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });

        //dataTables
        $(document).ready(function() {
         $('#tables').DataTable();
        } );
    </script>
    
</body>
</html>