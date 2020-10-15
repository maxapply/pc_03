
<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>文章页</title>
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/article_details.css">

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

  <!-- 文章导航 -->
  <div class="article_details w1200">
    <a href="./index.php">首页 ></a>
    <a href="./article.php">新闻中心 ></a>
    <a >阅读内容</a>
    <b ></b>
  </div>

  <!-- 文章详情 -->
  <div class="article_box w1200">
    <div class="fl_list fl">
      <h3><span></span>最近更新</h3>
      <ul>
        <li><a href="#">十四岁孩子有龅牙，矫正多少钱</a></li>
        <li><a href="#">虎牙长歪了可以矫正吗</a></li>
        <li><a href="#">牙齿贴面修复是什么</a></li>
        <li><a href="#">门牙做瓷贴面多少钱</a></li>
        <li><a href="#">牙齿贴面适用于那些症状</a></li>
        <li><a href="#">大学生矫正怎么选择方式</a></li>
      </ul>

      <ul>
        <li>上一篇 : &nbsp;<a href="#"> 牙齿矫正器多少钱</a></li>
        <li>下一篇 : &nbsp;<a href="#"> 钢牙牙套矫正注意事项</a></li>
      </ul>

    </div>
    <div class="fr_article fr">
      <!-- 文章 -->
      <div class="article">
        <h1>牙齿矫正失败还可以再矫正吗？</h1>
        <p>牙齿矫正以后过了几年又复发了，牙齿又变成龅牙了，这种情况还可以再做矫正吗，做完还会再反弹吗？</p>
        <h3>优贝门诊医生耐心解答到：</h3>
        <p>首先，在回答问题之前，是需要先了解龅牙的情况的，比如之前拍片情况，或者是现在的牙齿照片，能够提供作为参考，给出的建议可能会更剧参考性一些。</p>
        <p>1、是可以再次矫正的，一般只要牙齿健康，牙周条件好，再次做是没问题的，而且牙套选择比较多，比如说陶瓷牙套、舌侧牙套及透明隐形牙套，是可以满足美观需求的，主要是根据龅牙情况来制定合适的矫正方案。</p>
        <p>2、其次，再次矫正牙齿，难度自然是要比第一次要难一些的，还有龅牙之前检查是牙性还是骨性，还是功能行呢，不同的原因造成的龅牙，可能治疗方法也是不同的，需要到门诊检查后确定这一点。只有会不会再次反弹，这和采用的方法以及医生技术，还有保持器的佩戴等有很大的关系，建议听从医生的建议。</p>
        <p>3、再次矫正龅牙的价格主要是需要根据能否使用牙套（不能单纯使用，可能需要正畸正颌联合手术），以及选择的牙套类型，还有对于牙齿矫正的美观需求等来确定的，目前没有完全一样的，或多或少都会有差异，主要是因为不同口腔情况造成的，这是正常的。</p>
        <p>正畸失败以后是可以再做矫正的，但是尽量选择比较好的专科门诊，医生技术有保障，保证之后不再复发。</p>
      </div>
    </div>
    <div class="line"></div>
  </div>

  <!-- 优贝服务 -->
  <section class="service">
    <div class="inIit tc">
      <span>ITEM</span>
      <p>
        <b>优贝服务</b>
        打造信息化平台
      </p>
    </div>
    <ul class="service_box w1200">
      <li>
        <img src="<?php echo IMG_PATH ?>/article_details/service_01.png" alt="优贝口腔_一站式解决方案">
        <h1>一站式解决方案</h1>
        <i></i>
        <p>提供一站式口腔门诊管理整体解决方案</p>
      </li>

      <li>
        <img src="<?php echo IMG_PATH ?>/article_details/service_02.png" alt="优贝口腔_高效收集信息">
        <h1>高效收集信息</h1>
        <i></i>
        <p>全面高效收集、分析医生、患者和医院/诊所诊疗信息，更好的管理员工和患者</p>
      </li>


      <li>
        <img src="<?php echo IMG_PATH ?>/article_details/service_03.png" alt="优贝口腔_全面提升效率">
        <h1>全面提升效率</h1>
        <i></i>
        <p>连接口腔门诊生态系统、实验室检查、影像设备、技加工厂、供应链和医疗保险利用数据分析和商业智能，全面提升效率与效益</p>
      </li>
    </ul>
  </section>

  <!-- 环境舒适化 -->
  <section class="science">
    <div class="inIit tc">
      <span>COMFORTABLE</span>
      <p>
        <b>优贝环境</b>
        舒适化
      </p>
    </div>
    <ul class="science_box w1200">
      <li>
        <img src="<?php echo IMG_PATH ?>/article_details/science_01.jpg" alt="优贝口腔_舒适-诊疗环境">
        
        
        <div class="science_listnr">
          <div class="circle mybtn"></div>
        </div>



        <div class="science_list">
          <div class="science_list_title">
            <h2>舒适-诊疗环境</h2>
          </div>
          <div class="science_list_text">
          <p>邀请国际知名设计团队量身定制更具人性化的舒适诊疗环境，让就诊成为愉悦心灵的旅程</p>
          </div>
        </div>

      </li>

      <li>
        <img src="<?php echo IMG_PATH ?>/article_details/science_02.jpg" alt="优贝口腔_童趣-儿童诊室">
        <div class="science_listnr">
          <div class="circle mybtn circle2"></div>
        </div>
        <div class="science_list">
          <div class="science_list_title">
            <h2>童趣-儿童诊室</h2>
          </div>
          <div class="science_list_text">
          <p>针对幼儿定制了充满童趣的儿童诊室和游戏环境（趣味屋、亲子区、儿童乐园），从心理到生理充分满足孩子的特殊需求，让孩子爱上看牙；</p>
          </div>
        </div>

      </li>

      <li>
        <img src="<?php echo IMG_PATH ?>/article_details/science_03.jpg" alt="优贝口腔_私密-专属服务">
        <div class="science_listnr">
          <div class="circle mybtn"></div>
        </div>
        <div class="science_list">
          <div class="science_list_title">
            <h2>私密-专属服务</h2>
          </div>
          <div class="science_list_text">
          <p>提供一人一诊室、终身私密口腔档案、私人专属口腔顾问和就诊预约体系等服务，让客户安心、舒心。</p>
          </div>
        </div>
      </li>
    </ul>
  </section>

  <!-- 耗材设备精细化 -->
  <section class="equipment">
    <div class="inIit tc">
      <span>EQUIPMENT</span>
      <p>
        <b>耗材设备</b>
        精细化
      </p>
    </div>
    <div class="equ_box">
      <div class="equ_box_list">
        <div class="equ_box_img fl">
          <img src="<?php echo IMG_PATH ?>/article_details/equ_box_img_01.png" alt="优贝口腔_与国际一流品牌合作">
        </div>
        <div class="equ_box_text">
          <h2>与国际一流品牌合作</h2>
          <p>优贝与3M、隐适美、美加、德国诺亚丹、美国百康等国际一流口腔医疗品牌达成战略合作；</p>
        </div>
      </div>

      <div class="equ_box_list">
        <div class="equ_box_img fl">
          <img src="<?php echo IMG_PATH ?>/article_details/equ_box_img_02.png" alt="优贝口腔_设备耗材同步世界先进水平">
        </div>
        <div class="equ_box_text">
          <h2>设备耗材同步世界先进水平</h2>
          <p>保证医疗设备和器械耗材同步于世界先进水平；</p>
        </div>
      </div>


      <div class="equ_box_list">
        <div class="equ_box_img fl">
          <img src="<?php echo IMG_PATH ?>/article_details/equ_box_img_03.png" alt="优贝口腔_引进数字化加工技术">
        </div>
        <div class="equ_box_text">
          <h2>引进数字化加工技术</h2>
          <p>引进了数字化义齿加工技术，使义齿加工更精准便捷；</p>
        </div>
      </div>


      <div class="equ_box_list">
        <div class="equ_box_img fl">
          <img src="<?php echo IMG_PATH ?>/article_details/equ_box_img_04.png" alt="优贝口腔_口腔诊断更科学精细">
        </div>
        <div class="equ_box_text">
          <h2>口腔诊断更科学精细</h2>
          <p>配备了诊疗放大镜系统，使口腔检查升级到显微观察，诊断更科学、更全面、更精细。</p>
        </div>
      </div>

    </div>
  </section>

  <!-- footer 模块 -->
  <?php include './public/footer.php';?>


  <script src="./js/public.js"></script>
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











  </script>


</body>

</html>