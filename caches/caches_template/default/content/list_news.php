<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("public","header"); ?>
<div class="about">
    <div class="inner clear">
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
        <div class="right fr">
            <div class="baseTitle clear">
                <a href="" class="left-1 fl"><?php echo $catname;?></a>
                <div class="right-1 fr"><span class="fl">您当前的位置：</span><a href="<?php echo APP_PATH;?>">首页  </a><?php echo catpos($catid);?></div>
            </div>
            <ul class="newsUl">
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=56cc5c75e950d06b64a26e6dbe97d2b3&action=lists&catid=%24catid&order=listorder+desc&num=6&return=data&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 6;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li class="clear">
                    <a href="<?php echo $r['url'];?>" class="n-left fl"><img src="<?php echo $r['thumb'];?>"></a>
                    <div class="n-right fr">
                        <a href="<?php echo $r['url'];?>" class="title"><?php echo $r['title'];?></a>
                        <div class="time">发布时间：<?php echo date('Y-m-d',$r['inputtime']);?></div>
                        <div class="text">
                            <?php echo $r['description'];?>
                        </div>
                        <a href="<?php echo $r['url'];?>" class="more">more</a>
                    </div>
                </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <div class="pages"><?php echo $pages;?></div>
        </div>
    </div>
</div>
<?php include template("public","footer"); ?>
