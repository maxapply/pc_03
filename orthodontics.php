<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>牙齿正畸</title>
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/orthodontics.css">


  <script src="<?php echo JS_PATH ?>/jquery-3.5.1.min.js"></script>
  <script src="<?php echo JS_PATH ?>/swiper.min.js"></script>

</head>

<body>
  <!-- 头部 logo -->
  <?php include './public/header.php';?>

  <!-- banner  -->
  <div class="banner">
    <img src="<?php echo IMG_PATH ?>/article/banner_01.jpg" alt="优贝口腔_牙齿正畸">
  </div>

  <!-- 菜单导航 -->
  <?php include './public/menu_nav.php';?>

  <!-- 牙齿不整齐 一笑毁所有 -->
  <section class="box1 w1200 tc">
    <div class="sec_title">
      <h3>你甘愿与这些 <span>畸形牙齿</span> 相伴一生吗？</h3>
    </div>
    <ul class="box1_list">
      <li><img src="<?php echo IMG_PATH ?>/orthodontics/box1_01.jpg" alt="优贝口腔_牙齿拥挤"></li>
      <li><img src="<?php echo IMG_PATH ?>/orthodontics/box1_02.jpg" alt="优贝口腔_地包天"></li>
      <li><img src="<?php echo IMG_PATH ?>/orthodontics/box1_03.jpg" alt="优贝口腔_牙缝大"></li>
      <li><img src="<?php echo IMG_PATH ?>/orthodontics/box1_04.jpg" alt="优贝口腔_虎牙"></li>
      <li><img src="<?php echo IMG_PATH ?>/orthodontics/box1_05.jpg" alt="优贝口腔_龅牙"></li>
      <li><img src="<?php echo IMG_PATH ?>/orthodontics/box1_06.jpg" alt="优贝口腔_开颌"></li>
      <li><img src="<?php echo IMG_PATH ?>/orthodontics/box1_07.jpg" alt="优贝口腔_牙齿不齐"></li>
      <li><img src="<?php echo IMG_PATH ?>/orthodontics/box1_08.jpg" alt="优贝口腔_中线不齐"></li>
    </ul>
    <div class="box_btn tc btn_animate">
      <a href="#" title="这个问题我也有_点击咨询">这个问题我也有  <i>点击咨询</i>  <span></span></a>
    </div>
  </section>

  <!-- 看脸的时代一口歪牙让你危机四伏 -->
  <section class="box2 tc">
    <div class="sec_title">
      <h3>看脸的时代 <span> 一口歪牙 </span> 让你危机四伏</h3>
    </div>
    <img src="<?php echo IMG_PATH ?>/orthodontics/crooked_tooth.png" alt="优贝口腔_歪牙带来的危害">
    <div class="box_btn w1200 tc btn_animate">
      <a href="#" title="完美人生_现在开启">完美人生  <i>现在开启</i>  <span></span></a>
    </div>
  </section>

  <!-- 多种矫正方案供你选择 -->
  <section class="box3 w1200 tc">
    <div class="sec_title">
      <h3>多种矫正方案 <span> 供你选择 </span> 从齿让你自信回来</h3>
    </div>
    <p>优贝美学正畸技术是由丰富的正畸团队基于临床经验设计的一套美学正畸系统，系统涵盖齿科正畸美学、全数字化科技、口腔美容等学科，以东方人的脸型结构为基础，针对东方人的口腔环境、牙齿、牙骨特性精研而成的一项正畸技术。</p>

    <div class="box3_btn">
      <span class="btnItem active">隐形矫正</span>
      <span class="btnItem">托槽矫正</span>
      <span class="btnItem">舌侧矫正</span>
      <span class="bg_line"></span>
    </div>

    <div class="box3_list">
      <div class="pull-left fl">

        <img src="<?php echo IMG_PATH ?>/orthodontics/pull-left_01.gif" alt="优贝口腔_隐形矫正">
      </div>
      <div class="pull-right fr">
        <div class="tit">
          <img src="<?php echo IMG_PATH ?>/orthodontics/pull-right_tit.png" alt="优贝口腔_隐形矫正">
          <span>隐形矫正</span>
        </div>
        <div class="textItem">
          <span></span>
          无钢丝托槽，丝毫不影响矫治过程中的美观度，并能在矫正牙齿的过程中不知不觉矫正颌面的正常形态！
        </div>
        <div class="iconBox">
          <div class="iconItem">
            <img src="<?php echo IMG_PATH ?>/orthodontics/iconItem_01.png" alt="优贝口腔_隐形矫正_近似隐形">
            近似隐形
          </div>
          <div class="iconItem">
            <img src="<?php echo IMG_PATH ?>/orthodontics/iconItem_02.png" alt="优贝口腔_隐形矫正_佩戴舒适">
            佩戴舒适
          </div>
          <div class="iconItem">
            <img src="<?php echo IMG_PATH ?>/orthodontics/iconItem_03.png" alt="优贝口腔_隐形矫正_效果可见">
            效果可见
          </div>
          <div class="iconItem">
            <img src="<?php echo IMG_PATH ?>/orthodontics/iconItem_04.png" alt="优贝口腔_隐形矫正_节约时间">
            节约时间
          </div>


        </div>
        <div class="infoBtnBox">
          <span class="pull-left fl">品牌推荐 ：隐适美</span>
          <span class="pull-right openShangQiao "><span>查看详情</span></span>
        </div>
      </div>
    </div>

    <div class="box3_list hide">
      <div class="pull-left fl">
        <img src="<?php echo IMG_PATH ?>/orthodontics/pull-left_02.gif" alt="优贝口腔_托槽矫正">
      </div>
      <div class="pull-right fr">
        <div class="tit">
          <img src="<?php echo IMG_PATH ?>/orthodontics/pull-right_tit.png" alt="优贝口腔_托槽矫正">
          <span>托槽矫正</span>
        </div>
        <div class="textItem">
          <span></span>
          通过矫正托槽对不整齐的牙齿施以温和而持久的生物力进而完成牙齿的移动又不损害牙齿及其周围组织的健康。
        </div>
        <div class="iconBox">
          <div class="iconItem">
            <img src="<?php echo IMG_PATH ?>/orthodontics/iconItem_01.png" alt="优贝口腔_托槽矫正_技术成熟">
            技术成熟
          </div>
          <div class="iconItem">
            <img src="<?php echo IMG_PATH ?>/orthodontics/iconItem_02.png" alt="优贝口腔_托槽矫正_矫正能力强">
            矫正能力强
          </div>
          <div class="iconItem">
            <img src="<?php echo IMG_PATH ?>/orthodontics/iconItem_03.png" alt="优贝口腔_托槽矫正_经济实惠">
            经济实惠
          </div>
          <div class="iconItem">
            <img src="<?php echo IMG_PATH ?>/orthodontics/iconItem_04.png" alt="优贝口腔_托槽矫正_节约时间">
            固定良好
          </div>
        </div>
        <div class="infoBtnBox">
          <span class="pull-left fl">品牌推荐 ：进口金属托槽</span>
          <span class="pull-right openShangQiao"><span>查看详情</span></span>
        </div>
      </div>
    </div>

    <div class="box3_list hide">
      <div class="pull-left fl">
        <img src="<?php echo IMG_PATH ?>/orthodontics/pull-left_03.gif" alt="优贝口腔_舌侧矫正">
      </div>
      <div class="pull-right fr">
        <div class="tit">
          <img src="<?php echo IMG_PATH ?>/orthodontics/pull-right_tit.png" alt="优贝口腔_舌侧矫正">
          <span>舌侧矫正</span>
        </div>
        <div class="textItem">
          <span></span>
          舌侧隐形矫正利用数字化取模和建模的方式设计与各牙的舌侧面完全吻合的托槽，由机械手完成弓丝的精确成型，克服了传统舌侧矫治器的局限性。
        </div>
        <div class="iconBox">
          <div class="iconItem">
            <img src="<?php echo IMG_PATH ?>/orthodontics/iconItem_01.png" alt="优贝口腔_舌侧矫正_透明美观">
            透明美观
          </div>
          <div class="iconItem">
            <img src="<?php echo IMG_PATH ?>/orthodontics/iconItem_02.png" alt="优贝口腔_舌侧矫正_佩戴舒适">
            佩戴舒适
          </div>
          <div class="iconItem">
            <img src="<?php echo IMG_PATH ?>/orthodontics/iconItem_03.png" alt="优贝口腔_舌侧矫正_矫正周期短">
            矫正周期短
          </div>
          <div class="iconItem">
            <img src="<?php echo IMG_PATH ?>/orthodontics/iconItem_04.png" alt="优贝口腔_舌侧矫正_适应症广">
            适应症广
          </div>


        </div>
        <div class="infoBtnBox">
          <span class="pull-left fl">品牌推荐 ：舌侧隐形矫正</span>
          <span class="pull-right openShangQiao"><span>查看详情</span></span>
        </div>
      </div>
    </div>
  </section>

  <!-- 优贝牙齿矫正过程 -->
  <section class="box4 w1200 tc">
    <div class="sec_title">
      <h3>优贝 <span> 牙齿矫正 </span> 过程</h3>
    </div>
    <img src="<?php echo IMG_PATH ?>/orthodontics/box4_bgc.png" alt="优贝口腔_牙齿矫正 过程">
    <div class="box_btn tc btn_animate">
      <a href="#" title="马上预约_立即体验">马上预约  <i>立即体验</i>  <span></span></a>
    </div>
  </section>

  <!-- 优贝牙齿正畸医生 -->
  <section class="box5 w1200 tc">
    <div class="sec_title">
      <h3>优贝 <span> 牙齿正畸 </span> 医生</h3>
    </div>
      <!-- Swiper -->
    <div class="swiper-container doctor_swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="doctor_box">
            <div class="doctor_box_fl">
              <img  src="<?php echo IMG_PATH ?>/orthodontics/doctor_01.png" alt="优贝口腔_张洪波_正畸医生">
            </div>
            <div class="doctor_box_fr fr">
              <h1>张洪波 / <span>DCOCTOR</span></h1>
              <h2>主治医师 / 集团正畸技术总监</h2>
              <p>- 优贝☐腔总监级正畸医生</p>
              <p>- 美国Invisalign隐形矫正认证专业医师</p>
              <p>- 中华☐腔医学会☐腔正畸专委会委员</p>
              <span>擅长项目 :</span>
              <p>MBT矫正技术 、自锁矫正技术 、隐形矫正技术 、MBT矫正技术自锁矫正技术 、invisalign隐形矫正技术</p>
              <div class="doctor_btn">
                <a href="#" title="在线咨询">在线咨询</a>
                <a href="#" title="挂号预约">挂号预约</a>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="doctor_box">
            <div class="doctor_box_fl">
              <img  src="<?php echo IMG_PATH ?>/orthodontics/doctor_02.png" alt="优贝口腔_郭秋研_正畸医生">
            </div>
            <div class="doctor_box_fr fr">
              <h1>郭秋研 / <span>DCOCTOR</span></h1>
              <h2>主治医师 / 集团正畸技术总监</h2>
              <p>- 优贝☐腔总监级正畸医生</p>
              <p>- 美国Invisalign认证隐形矫正专科医师</p>
              <p>- 中华☐腔医学会☐腔正畸专委会会员</p>
              <span>擅长项目 :</span>
              <p>MBT矫正技术 、自锁矫正技术 、隐形矫正技术  、自锁托槽矫治技术和隐形矫治技术</p>
              <div class="doctor_btn">
                <a href="#" title="在线咨询">在线咨询</a>
                <a href="#" title="挂号预约">挂号预约</a>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>

  <!-- 想一万次不如矫正一次才知自己有多美 -->
  <section class="box6 w1200 tc">
    <div class="sec_title">
      <h3>想一万次不如 <span> 矫正一次 </span> 才知自己有多美</h3>
    </div>
    <img src="<?php echo IMG_PATH ?>/orthodontics/box6.jpg" alt="优贝口腔_牙齿矫正对比">
    <div class="box_btn w1200 tc btn_animate">
      <a href="#" title="跟丑牙说再见立即矫正">跟丑牙说再见  <i>立即矫正</i>  <span></span></a>
    </div>
  </section>


  <!-- 更多网友关注 -->
  <section class="box7 tc">
    <div class="box_tit">
      <h3>更多网友关注</h3>
    </div>
    <ul class="box6_box">
      <li>
        <a href="#" title="虎牙长歪了可以矫正吗"><h1><span></span>虎牙长歪了可以矫正吗</h1></a>
        <p>优贝口腔门诊医生介绍，虎牙位置不正，主要是由于换牙时换的晚，等到其他牙齿都换完...   <a href="#" title="查看详情"> [ 查看详情 ] </a></p>
      </li>

      <li>
        <a href="#" title="大学生矫正怎么选择方式"><h1><span></span>大学生矫正怎么选择方式</h1></a>
        <p>如果追求经济实用，可以选择传统的钢牙矫正，好处是价格实惠，效果有保障。但是缺...   <a href="#" title="查看详情"> [ 查看详情 ] </a></p>
      </li>


      <li>
        <a href="#" title="牙齿矫正器多少钱"><h1><span></span>牙齿矫正器多少钱</h1></a>
        <p>目前牙齿矫正器有很多，材料不同，品牌不同，价格也不相同，牙齿矫正器是一种矫正...   <a href="#" title="查看详情"> [ 查看详情 ] </a></p>
      </li>


      <li>
        <a href="#" title="钢牙牙套矫正注意事项"><h1><span></span>钢牙牙套矫正注意事项</h1></a>
        <p>钢牙戴粘贴在牙齿上，起初几天可能会有不适应，牙齿酸痛无力的情况，这是正常的...   <a href="#" title="查看详情"> [ 查看详情 ] </a></p>
      </li>

      <li>
        <a href="#" title="牙齿矫正需要多久"><h1><span></span>牙齿矫正需要多久</h1></a>
        <p>优贝口腔医生介绍，牙齿矫正是靠戴矫正器，加力让牙齿实现一步一步的移动，然后...   <a href="#" title="查看详情"> [ 查看详情 ] </a></p>
      </li>


      <li>
        <a href="#" title="成年人可以牙齿矫正吗"><h1><span></span>成年人可以牙齿矫正吗</h1></a>
        <p>大家都知道小时候看牙齿不好看都可以做牙齿矫正，但是小时候难免会因为经济原因...   <a href="#" title="查看详情"> [ 查看详情 ] </a></p>
      </li>




    </ul>
  </section>


  <!-- footer 模块 -->
  <?php include './public/footer.php';?>


  <script src="<?php echo JS_PATH ?>/public.js"></script>

  <script>

    // 多种矫正方案供你选择
    $('.btnItem').click(function(){
      var index = $(this).index()
      $(this).addClass('active').siblings('.btnItem').removeClass('active')
      $('.box3_list').eq(index).show().siblings('.box3_list').hide()

    })

    // 优贝牙齿正畸医生
    var swiper = new Swiper('.doctor_swiper', {
      spaceBetween: 30,
      centeredSlides: true,
      loop:true,
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