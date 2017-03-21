<html>
<head>

  <script src="<?php echo base_url()?>public/js/build/react.js"></script>
    <script src="<?php echo base_url()?>public/js/build/react-dom.js"></script>
    <script src="<?php echo base_url()?>public/js/build/browser.min.js"></script>
 <link href="<?php echo base_url()?>public/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>public/font-awesome/css/font-awesome.css" rel="stylesheet">

<!-- Toastr style -->
<link href="<?php echo base_url()?>public/css/plugins/toastr/toastr.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>public/css/bootstrap.min.css" rel="stylesheet">
 <link href="<?php echo base_url()?>public/css/animate.css" rel="stylesheet">
<link href="<?php echo base_url()?>public/css/plugins/jQueryUI/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>public/css/plugins/jqGrid/ui.jqgrid.css" rel="stylesheet">
<link href="<?php echo base_url()?>public/css/style.css" rel="stylesheet">
<!-- Gritter -->
<link href="<?php echo base_url()?>public/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

<link href="<?php echo base_url()?>public/css/animate.css" rel="stylesheet">
<link href="<?php echo base_url()?>public/css/style.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
      <!--左侧标题栏-->
          <nav class="navbar-default navbar-static-side" role="navigation">
            <!--外层div样式-->
          <div class="sidebar-collapse">
          <!--外层ul样式-->
          <ul class="nav metismenu" id="side-menu">

              <!--外层li样式,大标题-->
                      <li class="nav-header"><!--此处为登录信息-->
                        <div class="dropdown profile-element"> <span>
                                  <img alt="image" class="img-circle" src="<?php echo base_url()?>public/img/profile_small.jpg" />
                                   </span>
                              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                  <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php $arr=$_SESSION['user']; foreach($arr as $ar){ echo $ar['name']; }?> </strong>
                                   <span class="text-muted text-xs block">  </span> </span> </a></span>
                              <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                  <li><a href="profile.html">简况</a></li>
                                  <li><a href="contacts.html">联系方式?</a></li>
                                  <li><a href="mailbox.html">信箱</a></li>
                                  <li class="divider"></li>
                                  <li><a href="<?php echo site_url('Login/index') ?>">退出登录</a></li>
                              </ul>
                          </div>
                          <div class="logo-element">
                              IN+
                          </div>
                      </li>




        <!--外层li样式,大标题-->
                      <li>
                          <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">物联网中心</span> <span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level collapse">
                              <li><a href="index.html">运行中的设备</a></li>
                              <li><a href="dashboard_2.html">联机设备列表</a></li>
                              <li><a href="dashboard_3.html">全部设备列表</a></li>

                          </ul>
                      </li>

                         <!--外层li样式,大标题-->
                                            <li>
                                                <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">报警中心</span> <span class="fa arrow"></span></a>
                                                <ul class="nav nav-second-level collapse">
                                                    <li><a href="index.html">报警记录</a></li>
                                               </ul>
                                            </li>



                          <!--外层li样式,大标题-->
                                            <li>
                                                <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">产品管理</span> <span class="fa arrow"></span></a>
                                                <ul class="nav nav-second-level collapse">
                                                    <li><a href="index.html">产品添加</a></li>
                                                    <li><a href="dashboard_2.html">产品分类</a></li>
                                                    <li><a href="dashboard_3.html">产品列表</a></li>
                                               </ul>
                                            </li>
                      <!--外层li样式,大标题-->
                                    <li>
                                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">客户管理</span> <span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level collapse">
                                            <li><a href="<?php echo site_url('Customer/index') ?>" id="Customer_all">全部客户</a></li>
                                            <li><a href="dashboard_2.html">添加客户</a></li>
                                            <li><a href="dashboard_3.html">客户分类</a></li>
                                       </ul>
                                    </li>

                      <!--外层li样式,大标题-->
                                    <li>
                                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">服务工单</span> <span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level collapse">
                                            <li><a href="index.html">创建工单</a></li>
                                            <li><a href="dashboard_2.html">全部工单</a></li>
                                       </ul>
                                    </li>
                      <!--外层li样式,大标题-->
                        <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">合同管理</span> <span class="fa arrow"></span></a>
                                                          <ul class="nav nav-second-level collapse">
                                                              <li><a href="index.html">合同添加</a></li>
                                                              <li><a href="dashboard_2.html">合同添加</a></li>

                                                         </ul>
                                                      </li>
                      <!--外层li样式,大标题-->
                                  <li>
                                      <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">第三方平台</span> <span class="fa arrow"></span></a>
                                      <ul class="nav nav-second-level collapse">
                                          <li><a href="index.html">第三方列表</a></li>
                                          <li><a href="dashboard_2.html">第三方用户添加</a></li>

                                     </ul>
                                  </li>
                      <!--外层li样式,大标题-->
                                  <li>
                                      <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">员工管理</span> <span class="fa arrow"></span></a>
                                      <ul class="nav nav-second-level collapse">
                                          <li><a href="index.html">权限管理</a></li>
                                          <li><a href="dashboard_2.html">员工添加</a></li>
                                          <li><a href="index.html">员工列表</a></li>
                                          <li><a href="dashboard_2.html">部门管理</a></li>
                                     </ul>
                                  </li>


        <!--外层li样式,大标题-->
                      <li>
                          <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">系统设置</span><span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level collapse">
                              <li><a href="graph_flot.html">PLC分类设置</a></li>
                              <li><a href="graph_morris.html">Planel预设值</a></li>
                              <li><a href="graph_rickshaw.html">行业分类管理</a></li>
                              <li><a href="graph_chartjs.html">城市区域管理</a></li>
                              <li><a href="graph_chartist.html">面板显示方案</a></li>
                              <li><a href="c3.html">数据采集记录</a></li>
                              <li><a href="graph_peity.html">App版本列表</a></li>
                              <li><a href="graph_sparkline.html">App版本管理</a></li>
                          </ul>
                      </li>




                  </ul>

              </div>
          </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" value="隐藏左侧导航" class="form-control" name="top-search" id="top-search" redonly>
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">欢迎来到物联网平台。</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning"><?php $list=$_SESSION['mail']; echo count($list);?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">

<?php $list=$_SESSION['mail']; foreach ($list as $li) {

?>
                        <li>
                            <div class="dropdown-messages-box">

                                <div class="media-body">

                                  <strong><?php echo $li['shoujian']; ?></strong>发送给  <strong>您</strong>. <br>
                                    <small class="text-muted"><?php echo $li['fstime']; ?></small>
                                </div>
                            </div>
                        </li>

                        <li class="divider"></li>
                        <?php } ?>
                        <li>
                            <div class="text-center link-block">
                              <form method="post" action="<?php echo site_url('MailBox/index') ?>">
                                <input type="hidden" value="<?php $arr=$_SESSION['user']; echo $arr[0]['name']; ?>" name="user" >
                                    <i class="fa fa-envelope"></i> <input type="submit" value="阅读所有消息"  style="border:0px;background-color:transparent;">
                                </a>
                              </form>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">0</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> 您有16条消息
                                    <span class="pull-right text-muted small">4 分钟前</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 个新的粉丝
                                    <span class="pull-right text-muted small">12  分钟前</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i>系统消息
                                    <span class="pull-right text-muted small">4 分钟前</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>查看所有提示</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="<?php echo site_url('Login/index') ?>">
                        <i class="fa fa-sign-out"></i> 退出
                    </a>
                </li>
                <li>
                    <a class="right-sidebar-toggle">
                        <i class="fa fa-tasks"></i>
                    </a>
                </li>
            </ul>

        </nav>
        </div>
        <script>




        </script>
