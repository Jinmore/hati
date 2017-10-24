<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="format-detection" content="telephone=no">
    <link href="<?php echo CSS_PATH;?>default/base.css" rel="stylesheet" type="text/css">
    <link href="<?php echo CSS_PATH;?>default/swiper.css" rel="stylesheet" type="text/css">
    <link href="<?php echo CSS_PATH;?>default/index.css" rel="stylesheet" type="text/css">
    <script src="<?php echo JS_PATH;?>default/jquery.min.js"></script>
    <script src="<?php echo JS_PATH;?>default/QQ.js"></script>
    <script src="<?php echo JS_PATH;?>default/swiper.js"></script>
    <script src="<?php echo JS_PATH;?>default/Validform_v5.3.2.js"></script>
    <!-- 2017.10.24号 -->
    <script src="<?php echo JS_PATH;?>default/home.js"></script>
    <!--相册栏目-->
    <?php if($CATEGORYS[$catid][parentid]==36) { ?>
    <link href="<?php echo CSS_PATH;?>default/baguetteBox.min.css" rel="stylesheet" type="text/css">
    <script src="<?php echo JS_PATH;?>default/baguetteBox.min.js"></script>
    <script>
        $(function () {
            baguetteBox.run('.baguetteBox', {
                animation: 'fadeIn'
            });
        });
    </script>
    <?php } elseif ($CATEGORYS[$catid][parentid]==41) { ?>
    <link href="<?php echo CSS_PATH;?>default/baguetteBox.min.css" rel="stylesheet" type="text/css">
    <?php } ?>
</head>
<body>
<div class="header">
    <div class="top">
        <div class="inner clear">
            <ul class="clear fr">
                <li><a href="JavaScript:;">网站地图</a></li>
                <li><a href="javascript:;" onclick="javascript:AddFavorite()">收藏本站</a></li>
                <li><a href="javascript:;" onclick="SetHome(this,'<?php echo $url;?>')">设为首页</a></li>
            </ul>
        </div>
    </div>
    <div class="mid">
        <div class="inner clear">
            <a href="<?php echo APP_PATH;?>" class="logo fl"><img src="<?php echo IMG_PATH;?>/default/logo_03.png"></a>
            <ul class="clear fr">
                <li>
                    <a href="<?php echo $CATEGORYS['8']['url'];?>"><img src="<?php echo IMG_PATH;?>/default/mid_03.png"></a>
                    <div class="hide box1">实时雪晴</div>
                </li>
                <li>
                    <a ><img src="<?php echo IMG_PATH;?>/default/mid_06.png"></a>
                    <div class="hide wei"><img src="<?php echo $CATEGORYS['35']['image'];?>"></div>
                </li>
                <li>
                    <a href=""><img src="<?php echo IMG_PATH;?>/default/mid_08.png"></a>
                    <div class="people hide">
                        <div class="iphone clear">
                            <div class="left fl"><img src="<?php echo IMG_PATH;?>/default/icon_03.png"></div>
                            <div class="right fl">：<?php echo TEL;?></div>
                        </div>
                        <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo QQHAO;?>&amp;site=www.cactussoft.cn&amp;menu=yes" target="_blank" class="iphone clear">
                            <div class="left fl"><img src="<?php echo IMG_PATH;?>/default/icon_04.png"></div>
                            <div class="right fl">：QQ <?php echo QQHAO;?></div>
                        </a>
                        <div class="iphone clear">
                            <div class="left fl"><img src="<?php echo IMG_PATH;?>/default/icon_06.jpg"></div>
                            <div class="right fl">：新消息第一时间送达</div>
                        </div>
                        <form class="peopleBot clear registerform" method="post" action="index.php?m=content&c=index&a=send">
                            <input type="text" class="input fl" datatype="e" name="email" placeholder="请填写邮箱" nullmsg="请输入您的邮箱！" errormsg="邮箱格式不正确！">
                            <input type="submit" id="btn" class="fl" value="订阅">
                        </form>
                    </div>
                </li>
                <li>
                    <a href="<?php echo $CATEGORYS['37']['url'];?>"><img src="<?php echo IMG_PATH;?>/default/mid_10.png"></a>
                    <div class="hide box2">相册</div>
                </li>
                <li>
                    <a href="<?php echo $CATEGORYS['42']['url'];?>"><img src="<?php echo IMG_PATH;?>/default/mid_12.png"></a>
                    <div class="hide box3">视频</div>
                </li>
                <li>
                    <a ><img src="<?php echo IMG_PATH;?>/default/mid_14.png"></a>
                    <form class="search clear registerform2 hide" method="get" action="index.php?m=content&c=index&a=search">
                      <input type="hidden" name="m" value="content">
                      <input type="hidden" name="c" value="index">
                      <input type="hidden" name="a" value="search">
                        <input type="text" datatype="*" name="keyword" class="fl" placeholder="请输入搜索内容" nullmsg="搜索内容不能为空！" >

                        <input type="submit" class="fl" value="提交">
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <div class="bot">
        <div class="inner">
            <ul class="clear">
                <li <?php if(!isset($catid)) { ?>class="bg"<?php } ?>><a href="<?php echo APP_PATH;?>">首页</a></li>
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
                  <li class="<?php if($r[catid]==$catid || $top_parentid==$r[catid] || $CATEGORYS[$catid][parentid]==$r[catid]) { ?>bg<?php } ?>">
                      <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
                      <?php if($r[child]==1) { ?>
                      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=96618592d9b6ddbcfca23125322171d8&action=category&catid=%24r%5Bcatid%5D&order=listorder+asc&return=data2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data2 = $content_tag->category(array('catid'=>$r[catid],'order'=>'listorder asc','limit'=>'20',));}?>
                      <dl>
                          <?php $n=1;if(is_array($data2)) foreach($data2 AS $k) { ?>
                            <dd><a href="<?php echo $k['url'];?>"><?php echo $k['catname'];?></a></dd>
                          <?php $n++;}unset($n); ?>
                      </dl>
                      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                      <?php } ?>
                  </li>
		              <?php $n++;}unset($n); ?>
                  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>


            </ul>
        </div>
    </div>
</div>
<?php if(!isset($catid)&&!isset($_GET['keyword'])) { ?>
<div class="banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=054b3e88526fb2d9c4b705a09a279fc3&action=lists&catid=7&order=listorder+desc&num=6&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'7','order'=>'listorder desc','limit'=>'6',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <div class="swiper-slide"><img src="<?php echo $r['thumb'];?>"><div class="left"></div><div class="right"></div></div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <div class="swiper-pagination"></div>
        <div class="arrow">
            <div class="swiper-button-prev bannerBtn1"><img src="<?php echo IMG_PATH;?>/default/arrow1_03.png"></div>
            <div class="swiper-button-next bannerBtn2"><img src="<?php echo IMG_PATH;?>/default/arrow1_05.png"></div>
        </div>
    </div>
</div>
<?php } else { ?>
<div class="banner2">
    <div class="inner2"><img src="<?php echo IMG_PATH;?>default/banner2_03.jpg"></div>
</div>
<?php } ?>
