<?php $this->load->view('header');?>
<div class="wrapper wrapper-content">
<div class="row">
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-content mailbox-content">
                <div class="file-manager">
 <form method="post" action="<?php echo site_url('MailBox/compose') ?>">
      <input type="hidden" value="<?php $arr=$_SESSION['user']; echo $arr[0]['name']; ?>" name="user" >
      <input type="submit" value="撰写邮件"  class="btn btn-block btn-primary compose-mail">

    </form>
                    <div class="space-25"></div>
                    <h5>Folders</h5>
                    <ul class="folder-list m-b-md" style="padding: 0">
                        <li><a href="#"> <i class="fa fa-inbox "></i> 收件箱
<span class="label label-warning pull-right"><?php  $arr=$_SESSION['mail']; echo count($arr);
?></span> </a></li>
                        <li><a href="#"> <i class="fa fa-envelope-o"></i> 发送邮件
</a></li>
                        <li><a href="#"> <i class="fa fa-certificate"></i>重要
</a></li>
                        <li><a href="#"> <i class="fa fa-file-text-o"></i> 汇票
<span class="label label-danger pull-right">0</span></a></li>
                        <li><a href="#"> <i class="fa fa-trash-o"></i> 废物箱
</a></li>
                    </ul>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 animated fadeInRight">
    <div class="mail-box-header">

        <form method="get" action="index.html" class="pull-right mail-search">
            <div class="input-group">
                <input type="text" class="form-control input-sm" name="search" placeholder="Search email">
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-sm btn-primary">
                        Search
                    </button>
                </div>
            </div>
        </form>
        <h2>
          收件箱
( <?php  $arr=$_SESSION['mail']; echo count($arr);
?>)
        </h2>
        <div class="mail-tools tooltip-demo m-t-md">
            <div class="btn-group pull-right">
                <button class="btn btn-white btn-sm"><i class="fa fa-arrow-left"></i></button>
                <button class="btn btn-white btn-sm"><i class="fa fa-arrow-right"></i></button>

            </div>
            <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="left" title="Refresh inbox"><i class="fa fa-refresh"></i> 刷新
</button>
            <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Mark as read"><i class="fa fa-eye"></i> </button>
            <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Mark as important"><i class="fa fa-exclamation"></i> </button>
            <button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>

        </div>
    </div>
        <div class="mail-box">

        <table class="table table-hover table-mail">
        <tbody>
          <tr class="unread">
              <td class="check-mail">

              </td>
              <td class="mail-ontact"><a href="mail_detail.html">收件人
</a></td>
              <td class="mail-subject"><a href="mail_detail.html">内容.</a></td>
              <td class=""><i class="fa fa-paperclip"></i></td>
              <td class="text-right mail-date">时间</td>
          </tr>
          <?php  $arr=$_SESSION['mail'];  foreach ($arr as $li) {

          ?>
        <tr class="unread">
            <td class="check-mail">
                <input type="checkbox" class="i-checks">
            </td>
            <td class="mail-ontact"><a href="mail_detail.html"><?php echo $li['shoujian']?>
</a></td>
            <td class="mail-subject"><a href="mail_detail.html"><?php echo $li['biaoti']?></a></td>
            <td class=""><i class="fa fa-paperclip"></i></td>
            <td class="text-right mail-date"><?php echo $li['fstime']?></td>
        </tr>
<?php } ?>
        </tbody>
        </table>


        </div>
    </div>
</div>
</div>
<?php $this->load->view('footer');?>
