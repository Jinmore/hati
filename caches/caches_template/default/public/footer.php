<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="footer">
    <div class="top">
        <div class="inner clear">
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6a6a3a33093806fa2f0822ab58a5225e&action=category&catid=0&num=25&order=listorder+ASC&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <?php switch($r[catid]){
              case 1:
              $r[url]=$CATEGORYS[8][url];break;
              case 2:
              $r[url]=$CATEGORYS[12][url];break;
              case 3:
              $r[url]=$CATEGORYS[16][url];break;
              case 4:
              $r[url]=$CATEGORYS[22][url];break;
              case 5:
              $r[url]=$CATEGORYS[32][url];break;

            }
            ?>
            <dl>
                <dt><?php echo $r['catname'];?></dt>
                <?php if($r[child]==1) { ?>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=96618592d9b6ddbcfca23125322171d8&action=category&catid=%24r%5Bcatid%5D&order=listorder+asc&return=data2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data2 = $content_tag->category(array('catid'=>$r[catid],'order'=>'listorder asc','limit'=>'20',));}?>
                  <?php $n=1;if(is_array($data2)) foreach($data2 AS $k) { ?>
                    <dd><a href="<?php echo $k['url'];?>"><?php echo $k['catname'];?></a></dd>
                  <?php $n++;}unset($n); ?>
                  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                  <?php } ?>
            </dl>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

            <div class="right fr clear">
                <div class="left fl">
                    <img src="<?php echo $CATEGORYS['44']['image'];?>">
                    <p>微信扫一扫</p>
                </div>
                <div class="left fl">
                    <img src="<?php echo $CATEGORYS['45']['image'];?>">
                    <p>关注官方微博</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bot">
        <div class="inner clear">
            <p class="fl">Copyright © 2017 哈尔滨体育学院  All Rights Reserved<span>Email:xiaoban@bsu.edu.cn</span></p>
            <p class="fr"><?php echo ICP;?></p>
        </div>
    </div>
</div>
<div class="scroll-top"><img src="<?php echo IMG_PATH;?>/default/arrowTop.png"></div>
<script src="<?php echo JS_PATH;?>default/index.js"></script>
</body>
</html>
