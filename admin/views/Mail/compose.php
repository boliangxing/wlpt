<?php $this->load->view('header');?>
<div class="wrapper wrapper-content">
<div class="row">
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-content mailbox-content">
                <div class="file-manager">
                    <a class="btn btn-block btn-primary compose-mail" href="#">撰写邮件</a>
                    <div class="space-25"></div>
                    <h5>Folders</h5>
                    <ul class="folder-list m-b-md" style="padding: 0">
                        <li><a href="<?php echo site_url('MailBox/index') ?>?user=<?php $arr=$_SESSION['user']; echo $arr[0]['name']; ?>"> <i class="fa fa-inbox "></i> 收件箱 <span class="label label-warning pull-right">
                          <?php  $arr=$_SESSION['mail']; echo count($arr);
                          ?></span> </a></li>
                        <li><a href="mailbox.html"> <i class="fa fa-envelope-o"></i> 发送邮件</a></li>
                        <li><a href="mailbox.html"> <i class="fa fa-certificate"></i> 重要</a></li>
                        <li><a href="mailbox.html"> <i class="fa fa-file-text-o"></i> 汇票 <span class="label label-danger pull-right">0</span></a></li>
                        <li><a href="mailbox.html"> <i class="fa fa-trash-o"></i> 废物箱
</a></li>
                    </ul>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 animated fadeInRight">
    <div class="mail-box-header">
        <div class="pull-right tooltip-demo">
            <a href="mailbox.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to draft folder"><i class="fa fa-pencil"></i> 草案</a>
            <a href="mailbox.html" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Discard email"><i class="fa fa-times"></i> 丢弃</a>
        </div>
        <h2>
        撰写邮件
        </h2>
    </div>
        <div class="mail-box">


        <div class="mail-body">

            <form class="form-horizontal" method="post" action="<?php echo site_url('MailBox/compose_add') ?>">
                 <div class="form-group"><label class="col-sm-2 control-label">收件人:</label>
<input type="hidden" class="form-control" name="fasong" value="<?php $arr=$_SESSION['user']; echo $arr[0]['name']; ?>">
                    <div class="col-sm-10"><input type="text" class="form-control" name="shoujian" value=""></div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">主题:</label>

                    <div class="col-sm-10"><input type="text" class="form-control" id="biaoti"name="biaoti"value=""></div>
                </div>


        </div>

            <div class="mail-text h-200">

                <div class="summernote">
                    <h3>你好! </h3>
                    <textarea style="width:1000px;height:300px" name="neirong" id=neirong></textarea>
                  <strong></strong><br/>
                    <br/>

                </div>
<div class="clearfix"></div>
                </div>
            <div class="mail-body text-right tooltip-demo">


                  <input type="submit" style= "background:transparent;border-style:none; " value=发送>
                </div>
            <div class="clearfix"></div>

  </form>

        </div>
    </div>
</div>
</div>
<?php $this->load->view('footer');?>
