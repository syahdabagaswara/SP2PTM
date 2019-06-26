<?php echo '
    <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-12 text-center" style="font-weight: 500;font-size: 16px">
                        Copyright &copy; 2018 <a style="color:#03bbd3;">Kuproy GN</a>. All right reserved.
                    </div>
                </div>
            </div>
        </footer>
         


        </div><!-- /#right-panel -->
    <script src="../Assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="../Assets/js/popper.min.js"></script>
    <script src="../Assets/js/plugins.js"></script>
    <script src="../Assets/js/main.js"></script>
    <script src="../Assets/js/lib/data-table/datatables.min.js"></script>
    <script src="../Assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="../Assets/js/lib/validate/jquery.validate.js"></script>
    <script src="../Assets/js/jquery.nice-select.js"></script>
    <script src="../Assets/js/moment.min.js"></script>
    <script src="../Assets/js/daterangepicker.js"></script>
    <script src="../Assets/js/bootstrap-datepicker.js"></script>
    <script src="../Assets/js/jquery.easing.min.js"></script>
    <script src="../Assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="../Assets/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="../Assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="../Assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="../Assets/js/lib/data-table/jszip.min.js"></script>
    <script src="../Assets/js/lib/chart-js/Chart.js"></script>
    <script src="../Assets/js/lib/chart-js/jspdf.min.js"></script>
    <script src="../Assets/js/lib/chart-js/html2canvas.min.js"></script>
    ';
    function get_string_between($string, $start, $end){
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }
?>