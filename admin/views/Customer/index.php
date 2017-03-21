

<?php $this->load->view('header');?>


    <div id="wrapper">



        <div id="page-wrapper" class="gray-bg">
        <div class="wrapper wrapper-content  animated fadeInRight"  >
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox " style="width:100%">
                        <div class="ibox-content">
                            <div class="jqGrid_wrapper">
                                <table id="table_list_2"></table>
                                <div id="pager_list_2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2015
            </div>
        </div>

        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="<?php echo base_url()?>public/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url()?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url()?>public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Peity -->
    <script src="<?php echo base_url()?>public/js/plugins/peity/jquery.peity.min.js"></script>

    <!-- jqGrid -->
    <script src="<?php echo base_url()?>public/js/plugins/jqGrid/i18n/grid.locale-en.js"></script>
    <script src="<?php echo base_url()?>public/js/plugins/jqGrid/jquery.jqGrid.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url()?>public/js/inspinia.js"></script>
    <script src="<?php echo base_url()?>public/js/plugins/pace/pace.min.js"></script>

    <script src="<?php echo base_url()?>public/js/plugins/jquery-ui/jquery-ui.min.js"></script>


    <script>
        $(document).ready(function () {


            // Examle data for jqGrid

            // Configuration for jqGrid Example 1

            // Configuration for jqGrid Example 2
            $("#table_list_2").jqGrid({
              url:'<?php echo site_url('Customer/Cust_all') ?>',
                datatype: "json",
                height: 450,
                autowidth: true,
                shrinkToFit: true,
                rowNum: 5,
                rowList: [5, 10, 20],
                colNames:['编号','用户名称','登录账户','登录密码','登录次数','客户地址'],
                colModel:[
                    {name:'id',index:'id', editable: true, width:60, sorttype:"int",search:true},
                    //{name:'invdate',index:'invdate', editable: true, width:90, sorttype:"date", formatter:"date"},
                          {name:'customer_name',index:'customer_name', editable: true, width:100},
                    {name:'clname',index:'clname', editable: true, width:100},
                 {name:'clpass',index:'clpass', editable: true, width:100},
                    {name:'clhits',index:'clhits', editable: true, width:100},
                    {name:'customer_address',index:'customer_address', editable: true, width:100},


                ],
                pager: "#pager_list_2",
                viewrecords: true,
                caption: "全部用户",
                add: true,
                edit: true,
                addtext: '添加',
                edittext: '修改',
                hidegrid: false,

             sortable:true,
         sortname: 'id',
     sortorder: 'asc',
            }

          );

            // Add selection
            $("#table_list_2").setSelection(4, true);


            // Setup buttons
            $("#table_list_2").jqGrid('navGrid', '#pager_list_2',
                    {edit: true, add: true, del: true, search: true},
                    {height: 200, reloadAfterSubmit: true}
            );

            // Add responsive to jqGrid
            $(window).bind('resize', function () {
                var width = $('.jqGrid_wrapper').width();

                $('#table_list_2').setGridWidth(width);
            });
        });

    </script>
