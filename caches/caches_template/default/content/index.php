<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("public","header"); ?>
<div class="main">
    <div class="inner">
        <div class="active">
            <div class="top clear">
                <div class="left fl clear">
                    <div class="left-1 fl">
                        <div class="content">
                            <div class="text">滑雪</div>
                            <p>优惠活动</p>
                        </div>
                    </div>
                    <div class="pic"></div>
                    <div class="left-2 fr">
                        <ul>
                          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=13ab8b6cb6929e8c93b7f419ed11c7cb&action=lists&catid=12&order=listorder+desc%2Cid+desc&num=3&moreinfo=1&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'12','order'=>'listorder desc,id desc','moreinfo'=>'1',)).'13ab8b6cb6929e8c93b7f419ed11c7cb');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'12','order'=>'listorder desc,id desc','moreinfo'=>'1','limit'=>'3',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                          <li>
                              <a href="<?php echo $r['url'];?>" class="text1"><?php echo $r['title'];?></a>
                              <div class="text2"><?php echo str_cut($r[description],75);?></div>
                          </li>
                          <?php $n++;}unset($n); ?>
                          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                        <a href="<?php echo $CATEGORYS['12']['url'];?>" class="activeMore">more</a>
                    </div>
                </div>
                <div class="right fr clear">
                    <div class="right-1 fl"><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=1"></script></div>
                    <div class="right-2 fl">
                        <div class="bg"></div>
                        <ul>
                            <li>
                                <a href="<?php echo $CATEGORYS['29']['url'];?>" class="baseA">
                                    <div class="text1">Price List</div>
                                    <div class="text2">价格表</div>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $CATEGORYS['30']['url'];?>" class="baseA">
                                    <div class="text1">Accommodation price</div>
                                    <div class="text2">住宿价格</div>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $CATEGORYS['31']['url'];?>" class="baseA">
                                    <div class="text1">How to get there</div>
                                    <div class="text2">如何到达</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bot clear">
                <div class="left fl clear">
                    <div class="bot-1 fl">
                        <a href="" class="baseA">
                            <div class="text1">Real-time snow</div>
                            <div class="text2"><?php echo $CATEGORYS['8']['catname'];?></div>
                        </a>
                        <ul>
                          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3385f45dad73056b64082d9114758e73&action=lists&catid=8&order=listorder+desc&num=5&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'8','order'=>'listorder desc','limit'=>'5',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                              <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                        <a href="<?php echo $CATEGORYS['8']['url'];?>" class="activeMore">more</a>
                    </div>
                    <div class="bot-2 fl"><img src="<?php echo $CATEGORYS['8']['image'];?>"></div>
                </div>
                <div class="left leftTwo fl clear">
                    <div class="bot-1 fl">
                        <a href="" class="baseA">
                            <div class="text1">Hat Hill News</div>
                            <div class="text2"><?php echo $CATEGORYS['9']['catname'];?></div>
                        </a>
                        <ul>
                          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b8073f63292ee8e44bf7afc79c1e18b0&action=lists&catid=9&order=listorder+desc&num=5&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','order'=>'listorder desc','limit'=>'5',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                              <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                        <a href="<?php echo $CATEGORYS['9']['url'];?>" class="activeMore">more</a>
                    </div>
                    <div class="bot-2 fl"><img src="<?php echo $CATEGORYS['9']['image'];?>"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="it">
        <div class="inner">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=bc6b843cee5fbbe571da21e03af462f3&action=type_list&typeid=0&siteid=1&linktype=1&order=listorder+DESC&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('typeid'=>'0','siteid'=>'1','linktype'=>'1','order'=>'listorder DESC','limit'=>'20',));}?>
                  <?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
                  <a href="<?php echo $v['url'];?>" class="swiper-slide" target="_blank"><img src="<?php echo $v['logo'];?>"></a>
                  <a href="<?php echo $v['url'];?>" class="swiper-slide" target="_blank"><img src="<?php echo $v['logo'];?>"></a>
                  <?php $n++;}unset($n); ?>
                  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                </div>
            </div>
            <div class="swiper-button-prev itBtn1"><img src="<?php echo IMG_PATH;?>/default/it1_20.png"></div>
            <div class="swiper-button-next itBtn2"><img src="<?php echo IMG_PATH;?>/default/it1_23.png"></div>
        </div>
    </div>
</div>
<?php include template("public","footer"); ?>
