<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("public","header"); ?>
<script type="text/javascript"  src="<?php echo JS_PATH;?>default/extra/jquery-1.4.4.min.js"></script>
<script type="text/javascript"  src="<?php echo JS_PATH;?>default/extra/picbox.js"></script>

<link href="<?php echo CSS_PATH;?>default/css/picbox.css" rel="stylesheet" type="text/css" media="screen"/>

<div class="about">
    <div class="inner clear">
      <?php if($CATEGORYS[$catid][parentid]==2 || $CATEGORYS[$catid][parentid]==3 || $CATEGORYS[$catid][parentid]==4 || $CATEGORYS[$catid][parentid]==5 || $CATEGORYS[$catid][parentid]==1 ) { ?>
      <div class="left fl">
        <?php $parentid=$CATEGORYS[$catid][parentid];?>
          <div class="title"><?php echo $CATEGORYS[$parentid]['catname'];?></div>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1b7b56a4840d8c406a2a702f9f4d0912&action=category&catid=%24parentid&num=25&order=listorder+ASC&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$parentid,'order'=>'listorder ASC','limit'=>'25',));}?>
              <ul>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
              <li  <?php if($catid==$r[catid]) { ?>class="bg"<?php } ?>><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
            <?php $n++;}unset($n); ?>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </div>
      <?php } else { ?>
        <div class="left fl">
            <div class="title">帽儿山</div>
            <ul>
                <li <?php if($catid==29) { ?>class="bg"<?php } ?>><a href="<?php echo $CATEGORYS['29']['url'];?>"><?php echo $CATEGORYS['29']['catname'];?></a></li>
                <li <?php if($catid==30) { ?>class="bg"<?php } ?>><a href="<?php echo $CATEGORYS['30']['url'];?>"><?php echo $CATEGORYS['30']['catname'];?></a></li>
                <li <?php if($catid==31) { ?>class="bg"<?php } ?>><a href="<?php echo $CATEGORYS['31']['url'];?>"><?php echo $CATEGORYS['31']['catname'];?></a></li>
            </ul>
        </div>
        <?php } ?>
        <div class="right fr">
            <div class="baseTitle clear">
                <a href="" class="left-1 fl"><?php echo $title;?></a>
                <div class="right-1 fr"><span class="fl">您当前的位置：</span><a href="<?php echo APP_PATH;?>">首页 > </a><a href="<?php echo $CATEGORYS[$catid]['url'];?>"><?php echo $catname;?>  </a></div>
            </div>
            <div class="about2Con">
              <!-- 判断 -->
              <?php if($catid==46 || $catid==21) { ?>
              <p>
                <a rel="lightbox-demo" href="<?php echo $image;?>" >
                <?php echo $content;?>
                </a>
              </p>
              <?php } else { ?>
              <?php echo $content;?>
              <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php if($catid==46) { ?>

<?php } ?>
<?php include template("public","footer"); ?>
