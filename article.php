<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新闻中心</title>
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/article.css">

  <script src="<?php echo JS_PATH ?>/jquery-3.5.1.min.js"></script>
  <script src="<?php echo JS_PATH ?>/swiper.min.js"></script>
</head>

<body>
  <!-- 头部 logo -->
  <?php include './public/header.php';?>

  <!-- banner 轮播图 -->
  <div class="swiper-container banner_swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/article/banner_01.jpg" alt="优贝口腔_快速矫正"></div>
      <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/article/banner_02.jpg" alt="优贝口腔_舒适洁牙"></div>
      <div class="swiper-slide"><img src="<?php echo IMG_PATH ?>/article/banner_03.jpg" alt="优贝口腔_立即种牙"></div>
    
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- 菜单导航 -->
  <?php include './public/menu_nav.php';?>



  <!-- 文章列表 -->
  <section class="about_nav w1200">
    <div class="about_fenq">
      <ul class="tabjg">
        <li class="active"><h3>口腔百科</h3></li>
        <li><h3>热门问题</h3></li>
      </ul>
    </div>
    <!-- 新闻中心 -->
    <div class="news_center about_list ">
      <div class="list_box">
        <div class="listxbox">
          <div class="listboxleft">
            <a href="./article_details.php">
              <img src="<?php echo IMG_PATH ?>/hos_int/news_01.jpg" alt="优贝口腔_牙齿矫正失败还可以再矫正吗">
            </a>
          </div>
          <div class="listboxright">
            <div class="listbox_t">
              <h2><a href="./article_details.php">牙齿矫正失败还可以再矫正吗</a></h2>
            </div>
            <div class="listbox_n">
              <p>牙齿矫正以后过了几年又复发了，牙齿又变成龅牙了，这种情况还可以再做矫正吗，做完还会再反弹吗？ 优贝门诊医生耐心解答到： 首先，在回答问题之...</p>
            </div>
            <div class="listbox_dj">
              <a href="./article_details.php">阅读正文>></a>
            </div>
          </div>
        </div>
      </div>
      <div class="list_box">
        <div class="listxbox">
          <div class="listboxleft">
            <a href="#">
              <img src="<?php echo IMG_PATH ?>/hos_int/news_02.jpg" alt="优贝口腔_十四岁孩子有龅牙，矫正多少钱">
            </a>
          </div>
          <div class="listboxright">
            <div class="listbox_t">
              <h2><a href="#">十四岁孩子有龅牙，矫正多少钱</a></h2>
            </div>
            <div class="listbox_n">
              <p>孩子小时候是还在发育，都还没有定型是牙齿矫正最好的时期，价格方面也是比成年人矫正便宜很多，那十四岁孩子有龅牙，矫正多少钱呢？ 优贝口腔门诊...</p>
            </div>
            <div class="listbox_dj">
              <a href="#">阅读正文>></a>
            </div>
          </div>

        </div>
      </div>
      <div class="list_box">
        <div class="listxbox">
          <div class="listboxleft">
            <a href="#">
              <img src="<?php echo IMG_PATH ?>/hos_int/news_03.jpg" alt="优贝口腔_虎牙长歪了可以矫正吗">
            </a>
          </div>
          <div class="listboxright">
            <div class="listbox_t">
              <h2><a href="#">虎牙长歪了可以矫正吗</a></h2>
            </div>
            <div class="listbox_n">
              <p>人牙齿分为前牙，后牙，虎牙，虎牙就是前牙两边的前牙，牙根比较长，比较强壮，是我们撕裂食物的主要工具，如果虎牙的位置不正，或者是没有萌出，...</p>
            </div>
            <div class="listbox_dj">
              <a href="#">阅读正文>></a>
            </div>
          </div>

        </div>
      </div>
      <div class="list_box">
        <div class="listxbox">
          <div class="listboxleft">
            <a href="#">
              <img src="<?php echo IMG_PATH ?>/hos_int/news_04.jpg" alt="优贝口腔_牙齿贴面修复是什么">
            </a>
          </div>
          <div class="listboxright">
            <div class="listbox_t">
              <h2><a href="#">牙齿贴面修复是什么</a></h2>
            </div>
            <div class="listbox_n">
              <p>牙齿贴面是什么呢？很多人都没有听说过，其实牙齿贴面使用范围还是比较广泛，它对牙齿的外观，和牙色有很大的改观，那么牙齿贴面的是什么呢？ 牙齿...</p>
            </div>
            <div class="listbox_dj">
              <a href="#">阅读正文>></a>
            </div>
          </div>

        </div>
      </div>
      <div class="list_box">
        <div class="listxbox">
          <div class="listboxleft">
            <a href="#">
              <img src="<?php echo IMG_PATH ?>/hos_int/news_05.jpg" alt="优贝口腔_门牙做瓷贴面多少钱">
            </a>
          </div>
          <div class="listboxright">
            <div class="listbox_t">
              <h2><a href="#">门牙做瓷贴面多少钱</a></h2>
            </div>
            <div class="listbox_n">
              <p>牙齿贴面是一种牙齿美观的修复方式，对牙齿变色，和牙齿形状不美观有很好的修复，尤其是对门牙的美观作用很明显。我们做门牙牙齿贴面要多少钱呢？...</p>
            </div>
            <div class="listbox_dj">
              <a href="#">阅读正文>></a>
            </div>
          </div>

        </div>
      </div>
      <div class="list_box">
        <div class="listxbox">
          <div class="listboxleft">
            <a href="#">
              <img src="<?php echo IMG_PATH ?>/hos_int/news_06.jpg" alt="优贝口腔_牙齿贴面适用于那些症状">
            </a>
          </div>
          <div class="listboxright">
            <div class="listbox_t">
              <h2><a href="#">牙齿贴面适用于那些症状</a></h2>
            </div>
            <div class="listbox_n">
              <p>牙齿贴面修复就像给牙齿换了一个外套一样，很整齐，也很白，变得很漂亮，那么牙齿贴面适合那些牙齿问题呢。 牙齿贴面的适用范围还是比较广的，比如...</p>
            </div>
            <div class="listbox_dj">
              <a href="#">阅读正文>></a>
            </div>
          </div>

        </div>
      </div>
      <div class="list_box">
        <div class="listxbox">
          <div class="listboxleft">
            <a href="#">
              <img src="<?php echo IMG_PATH ?>/hos_int/news_07.jpg" alt="优贝口腔_大学生矫正怎么选择方式">
            </a>
          </div>
          <div class="listboxright">
            <div class="listbox_t">
              <h2><a href="#">大学生矫正怎么选择方式</a></h2>
            </div>
            <div class="listbox_n">
              <p>寒窗十载步入大学的殿堂，此时时间多了，长大了，要搞对象了，对自身美观意识提高了，所以想要矫正牙齿，但是选择什么方式呢？ 大学生矫正什么牙套...</p>
            </div>
            <div class="listbox_dj">
              <a href="#">阅读正文>></a>
            </div>
          </div>

        </div>
      </div>
      <div class="list_box">
        <div class="listxbox">
          <div class="listboxleft">
            <a href="#">
              <img src="<?php echo IMG_PATH ?>/hos_int/news_08.jpg" alt="优贝口腔_牙齿矫正器多少钱">
            </a>
          </div>
          <div class="listboxright">
            <div class="listbox_t">
              <h2><a href="#">牙齿矫正器多少钱</a></h2>
            </div>
            <div class="listbox_n">
              <p>目前牙齿矫正器有很多，材料不同，品牌不同，价格也不相同，牙齿矫正器是一种矫正的工具，大家根据情况选择适合自己的材料就好 矫正器多少钱 优贝...</p>
            </div>
            <div class="listbox_dj">
              <a href="#">阅读正文>></a>
            </div>
          </div>

        </div>
      </div>
      <div class="list_box">
        <div class="listxbox">
          <div class="listboxleft">
            <a href="#">
              <img src="<?php echo IMG_PATH ?>/hos_int/news_09.jpg" alt="优贝口腔_钢牙牙套矫正注意事项">
            </a>
          </div>
          <div class="listboxright">
            <div class="listbox_t">
              <h2><a href="#">钢牙牙套矫正注意事项</a></h2>
            </div>
            <div class="listbox_n">
              <p>钢牙牙套矫正是钢牙沾到牙齿上的，牙上多了东西会有不适感，所以大家要注意不能损坏，防止掉落。 钢牙牙套矫正注意事项 1、钢牙戴粘贴在牙齿上，起...</p>
            </div>
            <div class="listbox_dj">
              <a href="#">阅读正文>></a>
            </div>
          </div>

        </div>
      </div>
      <div class="list_box">
        <div class="listxbox">
          <div class="listboxleft">
            <a href="#">
              <img src="<?php echo IMG_PATH ?>/hos_int/news_10.jpg" alt="优贝口腔_种植牙年龄限制">
            </a>
          </div>
          <div class="listboxright">
            <div class="listbox_t">
              <h2><a href="#">种植牙年龄限制</a></h2>
            </div>
            <div class="listbox_n">
              <p>种植牙是一种牙齿修复方式，不少人自动把种植牙划分到老年人这一边，认为只有老年人才需要做种植牙，其实这种说法是错误的，现在牙周情况造成的中...</p>
            </div>
            <div class="listbox_dj">
              <a href="#">阅读正文>></a>
            </div>
          </div>

        </div>
      </div>
      <ul class="pages">
        <li class="page_select"><a href="#">首页</a></li>
        <li><a href="#"><<</a></li>
        <li class="page_select"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">6</a></li>
        <li><a href="#">7</a></li>
        <li><a href="#">8</a></li>
        <li><a href="#">9</a></li>
        <li><a href="#">10</a></li>
        <li><a href="#">>></a></li>
        <li><a href="#">尾页</a></li>
      </ul>
    </div>
    <!-- 热门问题 -->
    <div class="news_center about_list hide">
      <div class="list_box">
        <div class="listxbox">
          <div class="listboxleft">
            <a href="#">
              <img src="<?php echo IMG_PATH ?>/hos_int/news_01.jpg" alt="优贝口腔_儿童补牙多少钱">
            </a>
          </div>
          <div class="listboxright">
            <div class="listbox_t">
              <h2><a href="#">儿童补牙多少钱</a></h2>
            </div>
            <div class="listbox_n">
              <p>儿童有蛀牙也是需要做治疗的，不然的话蛀牙越来越严重就需要进一步做根管治疗，需要的费用会更多，治疗痛苦也会增加。儿童补牙的方式和成年人补牙...</p>
            </div>
            <div class="listbox_dj">
              <a href="#">阅读正文>></a>
            </div>
          </div>
        </div>
      </div>
      <div class="list_box">
        <div class="listxbox">
          <div class="listboxleft">
            <a href="#">
              <img src="<?php echo IMG_PATH ?>/hos_int/news_02.jpg" alt="优贝口腔_补牙为什么需要先磨牙">
            </a>
          </div>
          <div class="listboxright">
            <div class="listbox_t">
              <h2><a href="#">补牙为什么需要先磨牙</a></h2>
            </div>
            <div class="listbox_n">
              <p>补牙需要先磨牙，而且磨牙会有较大声、不舒服的声音，所以这个环节让很多人记忆犹新。而且无论是大人小孩补牙都是如此，这是怎么回事呢，补牙就是...</p>
            </div>
            <div class="listbox_dj">
              <a href="#">阅读正文>></a>
            </div>
          </div>

        </div>
      </div>
      <div class="list_box">
        <div class="listxbox">
          <div class="listboxleft">
            <a href="#">
              <img src="<?php echo IMG_PATH ?>/hos_int/news_03.jpg" alt="优贝口腔_补牙材料掉了怎么办">
            </a>
          </div>
          <div class="listboxright">
            <div class="listbox_t">
              <h2><a href="#">补牙材料掉了怎么办</a></h2>
            </div>
            <div class="listbox_n">
              <p>补牙后使用几年后，补牙材料脱落了怎么办，是否是到医院再补回来就可以呢?还需要做其他项目吗？ 优贝口腔医生介绍，这种情况一般继续补牙就好，但...</p>
            </div>
            <div class="listbox_dj">
              <a href="#">阅读正文>></a>
            </div>
          </div>

        </div>
      </div>
      <div class="list_box">
        <div class="listxbox">
          <div class="listboxleft">
            <a href="#">
              <img src="<?php echo IMG_PATH ?>/hos_int/news_04.jpg" alt="优贝口腔_全瓷牙的价格和种类">
            </a>
          </div>
          <div class="listboxright">
            <div class="listbox_t">
              <h2><a href="#">全瓷牙的价格和种类</a></h2>
            </div>
            <div class="listbox_n">
              <p>全瓷牙都有哪些材料呢？全瓷牙种类不同，价格有什么差距呢？优贝口腔医生接下来介绍一下全瓷牙价格和种类。 全瓷牙的价格和种类 优贝医院医生介绍...</p>
            </div>
            <div class="listbox_dj">
              <a href="#">阅读正文>></a>
            </div>
          </div>

        </div>
      </div>
      <div class="list_box">
        <div class="listxbox">
          <div class="listboxleft">
            <a href="#">
              <img src="<?php echo IMG_PATH ?>/hos_int/news_05.jpg" alt="优贝口腔_全瓷牙可以多少年">
            </a>
          </div>
          <div class="listboxright">
            <div class="listbox_t">
              <h2><a href="#">全瓷牙可以多少年</a></h2>
            </div>
            <div class="listbox_n">
              <p>全瓷牙是烤瓷牙中材料比较好的一种，因为不含金属，所以透明度和折光性很好，看起来非常美观，特别是适合前牙修复，不过，全瓷牙一般能用多长时间...</p>
            </div>
            <div class="listbox_dj">
              <a href="#">阅读正文>></a>
            </div>
          </div>

        </div>
      </div>
      <div class="list_box">
        <div class="listxbox">
          <div class="listboxleft">
            <a href="#">
              <img src="<?php echo IMG_PATH ?>/hos_int/news_06.jpg" alt="优贝口腔_适合做烤瓷牙的人群有哪些">
            </a>
          </div>
          <div class="listboxright">
            <div class="listbox_t">
              <h2><a href="#">适合做烤瓷牙的人群有哪些</a></h2>
            </div>
            <div class="listbox_n">
              <p>现在有很多情况牙齿修复大家都要求做烤瓷牙，但是不是什么人都适合做烤瓷牙的，哪些人适合做烤瓷牙呢 专家认为，适合做烤瓷牙修复的牙齿有以下5类...</p>
            </div>
            <div class="listbox_dj">
              <a href="#">阅读正文>></a>
            </div>
          </div>

        </div>
      </div>
      <div class="list_box">
        <div class="listxbox">
          <div class="listboxleft">
            <a href="#">
              <img src="<?php echo IMG_PATH ?>/hos_int/news_07.jpg" alt="优贝口腔_影响烤瓷牙价格的因素">
            </a>
          </div>
          <div class="listboxright">
            <div class="listbox_t">
              <h2><a href="#">影响烤瓷牙价格的因素</a></h2>
            </div>
            <div class="listbox_n">
              <p>随着技术进步，有缺牙的时候大家都要去做牙齿修复，做烤瓷牙，那影响烤瓷牙的价格因素都有哪些。 1、患者口腔条件影响烤瓷牙价格 有一些想做烤瓷牙...</p>
            </div>
            <div class="listbox_dj">
              <a href="#">阅读正文>></a>
            </div>
          </div>

        </div>
      </div>
      <div class="list_box">
        <div class="listxbox">
          <div class="listboxleft">
            <a href="#">
              <img src="<?php echo IMG_PATH ?>/hos_int/news_08.jpg" alt="优贝口腔_做烤瓷牙前注意什么">
            </a>
          </div>
          <div class="listboxright">
            <div class="listbox_t">
              <h2><a href="#">做烤瓷牙前注意什么</a></h2>
            </div>
            <div class="listbox_n">
              <p>大家做烤瓷牙之前，需要专业的医师对口腔情况进行检查，包括缺失数目、位置、牙齿和牙周的状况，做出综合性诊断，设计修复方案。 烤瓷牙虽然美观又...</p>
            </div>
            <div class="listbox_dj">
              <a href="#">阅读正文>></a>
            </div>
          </div>

        </div>
      </div>
      <div class="list_box">
        <div class="listxbox">
          <div class="listboxleft">
            <a href="#">
              <img src="<?php echo IMG_PATH ?>/hos_int/news_09.jpg" alt="优贝口腔_拔牙后多久可以镶牙">
            </a>
          </div>
          <div class="listboxright">
            <div class="listbox_t">
              <h2><a href="#">拔牙后多久可以镶牙</a></h2>
            </div>
            <div class="listbox_n">
              <p>有时候因为一些原因导致需要拔牙，但是拔完牙以后不仅影响美观还影响咀嚼功能，所以很多患者都希望拔牙后能在较短时间内装假牙，那拔完牙多久才能...</p>
            </div>
            <div class="listbox_dj">
              <a href="#">阅读正文>></a>
            </div>
          </div>

        </div>
      </div>
      <div class="list_box">
        <div class="listxbox">
          <div class="listboxleft">
            <a href="#">
              <img src="<?php echo IMG_PATH ?>/hos_int/news_10.jpg" alt="优贝口腔_智齿为什么要拔出">
            </a>
          </div>
          <div class="listboxright">
            <div class="listbox_t">
              <h2><a href="#">智齿为什么要拔出</a></h2>
            </div>
            <div class="listbox_n">
              <p>每个人都会有智齿，很多人都有智齿发炎的情况，到时候就需要拔牙了，但是智齿有什么理由要拔除呢？ 必须拔除智齿的三个理由： 一、智齿会造成局部...</p>
            </div>
            <div class="listbox_dj">
              <a href="#">阅读正文>></a>
            </div>
          </div>

        </div>
      </div>
      <ul class="pages">
        <li class="page_select"><a href="#">首页</a></li>
        <li><a href="#"><<</a></li>
        <li class="page_select"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">6</a></li>
        <li><a href="#">7</a></li>
        <li><a href="#">8</a></li>
        <li><a href="#">9</a></li>
        <li><a href="#">10</a></li>
        <li><a href="#">>></a></li>
        <li><a href="#">尾页</a></li>
      </ul>
    </div>
  </section>



  <!-- footer 模块 -->
  <?php include './public/footer.php';?>

  <script src="<?php echo JS_PATH ?>/public.js"></script>
  <script>
    // banner 轮播图
    var swiper = new Swiper('.banner_swiper', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });


    $('.tabjg>li').mouseover(function(){
      $(this).addClass('active').siblings().removeClass('active')
      var index = $(this).index()
      $('.about_list').eq(index).show().siblings('.about_list').hide()
    }) 









  </script>


</body>

</html>