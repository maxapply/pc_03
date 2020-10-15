<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>牙齿美白</title>
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/teeth_whitening.css">


  <script src="<?php echo JS_PATH ?>/jquery-3.5.1.min.js"></script>
  <script src="<?php echo JS_PATH ?>/swiper.min.js"></script>

</head>

<body>
  <!-- 头部 logo -->
  <?php include './public/header.php';?>

  <!-- banner  -->
  <div class="banner">
    <img src="<?php echo IMG_PATH ?>/teeth_whitening/banner_01.jpg" alt="优贝口腔_牙齿美白">
  </div>

  <!-- 菜单导航 -->
  <?php include './public/menu_nav.php';?>

  <!-- 你是否和他们一样牙齿变色而难以启“齿” -->
  <section class="box_01">
    <div class="box_title">
      <span class="fr"></span>
      <h2>你是否和他们一样牙齿变色而难以启“齿”</h2>
      <span class="fl"></span>
    </div>
    <div class="box_01_list w1200">
      <p>有样东西，总让您在谈笑间颜面尽失，那就是尴尬的"黄牙、黑牙、色素牙"。如今含有大量色素的美食不胜枚举，其色素渐渐侵蚀了牙质原本的白色，使洁白的牙齿变成了"色素牙"，往日自信灿烂的笑容因齿而黯然失色。</p>
      <ul class="box_01_ul">
        <li>
          <img src="<?php echo IMG_PATH ?>/teeth_whitening/box_01_01.jpg" alt="优贝口腔_黄牙"><p>黄牙</p>
          <div><img src="<?php echo IMG_PATH ?>/teeth_whitening/box_01_02.jpg" alt=""></div>
        </li>

        <li>
          <img src="<?php echo IMG_PATH ?>/teeth_whitening/box_02_01.jpg" alt="优贝口腔_黑牙"><p>黑牙</p>
          <div><img src="<?php echo IMG_PATH ?>/teeth_whitening/box_02_02.jpg" alt=""></div>
        </li>

        <li>
          <img src="<?php echo IMG_PATH ?>/teeth_whitening/box_03_01.jpg" alt="优贝口腔_四环素牙"><p>四环素牙</p>
          <div><img src="<?php echo IMG_PATH ?>/teeth_whitening/box_03_02.jpg" alt=""></div>
        </li>

        <li>
          <img src="<?php echo IMG_PATH ?>/teeth_whitening/box_04_01.jpg" alt="优贝口腔_氟斑牙"><p>氟斑牙</p>
          <div><img src="<?php echo IMG_PATH ?>/teeth_whitening/box_04_02.jpg" alt=""></div>
        </li>

        <li>
          <img src="<?php echo IMG_PATH ?>/teeth_whitening/box_05_01.jpg" alt="优贝口腔_变色牙"><p>变色牙</p>
          <div><img src="<?php echo IMG_PATH ?>/teeth_whitening/box_05_02.jpg" alt=""></div>
        </li>
      </ul>
      <div class="zixun">
        <a href="#">专家咨询热线 :  400-1671818</a>
        <a href="#" >在线咨询美白专家</a>
      </div>
    </div>
  </section>

  <!-- 自我诊断，看看你的牙齿属于以下哪些情况 -->
  <section class="box_02">
    <div class="box_title">
      <span class="fr"></span>
      <h2>自我诊断，看看你的牙齿属于以下哪些情况</h2>
      <span class="fl"></span>
    </div>
    <div class="box_02_list_box w1200">
      <ul class="box_02_list_top">
        <li class="on"></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
      <ul class="box_02_list_btm">

        <li >
          <img src="<?php echo IMG_PATH ?>/teeth_whitening/box_02_btm_01.jpg" alt="优贝口腔_黄牙">
          <div class="text fr">
            <h2>黄牙</h2>
            <p>黄牙即是牙齿发黄，形成的原因一般有三种：第一种是氟斑牙，为饮水中氟元素浓度过高所致。第二种是四环素牙，为儿童时期经常服用四环素类药物所致。第三种是吸烟、喝咖啡、喝茶，色素沾附于牙齿上所致。黄牙不仅会影响牙齿的色泽和美观，损坏个人形象，使人自卑还会因为牙齿不干净而引发各种口腔疾病及全身性疾病。</p>
          </div>
        </li>

        <li class="hide">
          <img src="<?php echo IMG_PATH ?>/teeth_whitening/box_02_btm_02.jpg" alt="优贝口腔_黑牙">
          <div class="text fr">
            <h2>黑牙</h2>
            <p>黑牙是指牙齿由于各种原因导致牙齿本色脱离原来的白色，导致发黑。主要分为内源性黑牙和外源性黑牙，其中内源性黑牙主要有氟斑牙，这种黑牙由于色素在牙釉质内，牙齿呈黑褐色斑块状；而外源性黑牙主要是由于长期食用各种带有色素的食物，导致色素沉淀，从而导致牙齿发黑；此外还有由于年龄增长，牙齿难抵沧桑，颜色逐渐黯淡发黑。</p>
          </div>
        </li>

        <li class="hide">
          <img src="<?php echo IMG_PATH ?>/teeth_whitening/box_02_btm_03.jpg" alt="优贝口腔_四环素牙">
          <div class="text fr">
            <h2>四环素牙</h2>
            <p>四环素牙是指四环素族药物引起的着色牙，多由于牙齿发育矿化期服用四环素族药物所致，属于口腔科疾病。病因是在牙的发育矿化期服用四环素族药物，可被结合到牙组织内，使牙着色。四环素还可在母体通过胎盘引起乳牙着色。四环素牙在阳光照射下会呈现出明亮的黄色荧光，以后逐渐由黄色变成棕褐色或深灰色，前牙比后牙着色明显。</p>
          </div>
        </li>


        <li class="hide">
          <img src="<?php echo IMG_PATH ?>/teeth_whitening/box_02_btm_04.jpg" alt="优贝口腔_遗传性色素牙">
          <div class="text fr">
            <h2>遗传性色素牙</h2>
            <p>遗传性色素牙是指因遗传原因而导致的牙齿变色，主要表现为牙齿发黑、发黄不好看。日常的刷牙、牙贴、洗牙等牙齿保健方法都难以将遗传性色素牙变白。遗传性色素牙主要有两个危害：一是影响个人形象，二是影响心理健康，在日常生活中很多人都因牙齿黑黄不好看而变得自卑、敏感，因此可以说遗传性色素牙的危害非常大。</p>
          </div>
        </li>


        <li class="hide">
          <img src="<?php echo IMG_PATH ?>/teeth_whitening/box_02_btm_05.jpg" alt="优贝口腔_外因性色素牙">
          <div class="text fr">
            <h2>外因性色素牙</h2>
            <p>外因性色素牙主要是因饮食、烟、茶、咖啡等色素附着于牙齿表面，导致牙齿发黑发黄、不好看。这些色素会进入牙齿深层，一般的洗牙方法难以使色素牙变白。外因性色素牙主要包括黄牙、黑牙、咖啡牙、茶渍牙、烟渍牙等等。引起外性色素牙的原因是多方面的，外因性色素牙不仅影响个人形象还会影响口腔健康，危害非常大，应及时治疗。</p>
          </div>
        </li>


        <li class="hide">
          <img src="<?php echo IMG_PATH ?>/teeth_whitening/box_02_btm_06.jpg" alt="优贝口腔_氟斑牙">
          <div class="text fr">
            <h2>氟斑牙</h2>
            <p>氟斑牙是牙齿发育时期人体摄入氟量过高所引起的特殊型牙齿釉质发育不全，临床主要表现为釉质出现着色的斑块和缺损。氟斑牙是地区性慢性氟中毒的一种突出症状。地区性慢性氟中毒主要累及发育中的牙齿和骨胳。氟牙症在世界各国均有报告。我国氟牙症流行区很多，几乎各省都有慢性氟中毒的报道，山区和沿海地区相对患病比较严重。</p>
          </div>
        </li>


        <li class="hide">
          <img src="<?php echo IMG_PATH ?>/teeth_whitening/box_02_btm_07.jpg" alt="优贝口腔_烟渍牙">
          <div class="text fr">
            <h2>烟渍牙</h2>
            <p>所谓烟渍，就是经常吸烟的人在牙齿上留下的一种牙渍;它的形成是由于人的口腔环境是酸性，长期与口腔内的食物残渣等碱性残留物发生化学反应后，附着在牙表面上的非完全反应衍生物，实际上也是一种盐化合物，尤其是烟里含有一种"咖啡碱"，在酸性口腔中反应很容易形成牙渍，每天都抽烟的人，积累下来，烟渍就很严重。</p>
          </div>
        </li>


        <li class="hide">
          <img src="<?php echo IMG_PATH ?>/teeth_whitening/box_02_btm_08.jpg" alt="优贝口腔_茶渍牙">
          <div class="text fr">
            <h2>茶渍牙</h2>
            <p>茶渍牙是外源性色素牙中的一种，主要是由于长期饮茶所造成的。中国人素有喝茶养生的习惯，但是长年累月的喝茶也会导致牙齿黄黑的问题，因此茶渍牙给很多爱美的人士带来诸多烦恼。茶渍牙会导致牙齿发黄、发黑，是比较影响个人形象的。此外茶渍牙还会影响身体健康，会引起神经、消化、泌尿造血系统病变和功能紊乱，危害健康。</p>
          </div>
        </li>


        <li class="hide">
          <img src="<?php echo IMG_PATH ?>/teeth_whitening/box_02_btm_09.jpg" alt="优贝口腔_咖啡牙">
          <div class="text fr">
            <h2>咖啡牙</h2>
            <p>指的是长期喝咖啡使得原本洁白的牙齿渐渐变黄、变黑，即使刷牙也无法回到原来的颜色，这样的牙齿被形象地称为咖啡牙。喝咖啡不仅会导致牙齿变黄，还可能引起色素沉淀，造成色斑，经常喝咖啡对神经也不太好，因此喝咖啡要适度。如果要避免咖啡牙，可以养成喝完咖啡漱口的好习惯，并半年到一年洗一次牙。</p>
          </div>
        </li>


      </ul>
    </div>
    <div class="zixun">
        <a href="#">专家咨询热线 :  400-1671818</a>
        <a href="#" >在线咨询美白专家</a>
    </div>
  </section>

  <!-- Beyond纳米蓝光美白 30分钟还您皓此美白 -->
  <section class="box_03">
    <div class="box_title">
      <span class="fr"></span>
      <h2>Beyond纳米蓝光美白 30分钟还您皓此美白</h2>
      <span class="fl"></span>
    </div>
    <div class="box_03_box w1200">
      <p>美国Beyond纳米蓝光美白技术是美国硅谷高端牙科激光制造商Beyond技术有限公司的新成果，也是通过美国食品及药物监督管理局（FDA）认证、欧盟CE认证的蓝光美白技术,是目前有效安全的牙齿美白技术。仅需短短30分钟，美国Beyond纳米蓝光美白即可有效去除黄牙、烟渍牙、黑牙、四环素牙、氟斑牙等各种色素牙困扰。</p>
      <div class="box_03_img fl"><img src="<?php echo IMG_PATH ?>/teeth_whitening/box_03_box_01.jpg" alt="优贝口腔_美白效果色阶"></div>
      <div class="box_03_img fr"><img src="<?php echo IMG_PATH ?>/teeth_whitening/box_03_box_02.jpg" alt="优贝口腔_牙齿美白过程"></div>
    </div>
    <div class="zixun">
        <a href="#">专家咨询热线 :  400-1671818</a>
        <a href="#" >在线咨询美白专家</a>
    </div>
  </section>

  <!-- Beyond纳米蓝光美白 让你牙齿美白如此简单 -->
  <section class="box_04">
    <div class="box_title">
      <span class="fr"></span>
      <h2>Beyond纳米蓝光美白 让你牙齿美白如此简单</h2>
      <span class="fl"></span>
    </div>
    <ul class="box_04_list w1200">
      <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/box_04_list_01.jpg" alt="优贝口腔_前期准备牙齿清洗"><p>前期准备牙齿清洗</p></li>
      <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/box_04_list_02.jpg" alt="优贝口腔_术前比色"><p>术前比色</p></li>
      <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/box_04_list_03.jpg" alt="优贝口腔_牙龈保护"><p>牙龈保护</p></li>
      <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/box_04_list_04.jpg" alt="优贝口腔_纳米蓝光美白"><p>纳米蓝光美白</p></li>
      <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/box_04_list_05.jpg" alt="优贝口腔_保持长期美白效果"><p>保持长期美白效果</p></li>
    </ul>
    <div class="zixun">
        <a href="#">专家咨询热线 :  400-1671818</a>
        <a href="#" >在线咨询美白专家</a>
    </div>
  </section>

  <!-- Beyond纳米蓝光美白 不仅是美白，更保护牙釉质 -->
  <section class="box_05">
    <div class="box_title">
      <span class="fr"></span>
      <h2>Beyond纳米蓝光美白 不仅是美白，更保护牙釉质</h2>
      <span class="fl"></span>
    </div>
    <div class="box_05_list w1200">
      <ul class="box_05_list_fl fl">
        <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/box_05_list_01.jpg" alt="优贝口腔_快速美白"></li>
        <li><h3>快速美白：30分钟即刻美白</h3><p>纳米蓝光美白治疗过程仅需30分钟，而激光美白等其它美白方式则通常需要3小时以上。冷光美白操作便捷、高效快速，只需在牙齿表面涂抹上无害的美白材料，全口美白仅一次照射即可完成</p></li>
        <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/box_05_list_03.jpg" alt="优贝口腔_美白疗效持久"></li>
        <li><h3>疗效持久：美白效果长达两年</h3><p>在纳米蓝光的作用下，氟化剂促使牙釉质新生而形成对牙齿的保护，能使过氧化剂的美白作用更明显，美白后的牙齿也能得到更有效的保护。美白效果可长达2年。</p></li>
      </ul>
      <div class="box_05_list_img">
        <img src="<?php echo IMG_PATH ?>/teeth_whitening/box_05_list-cen.jpg" alt="优贝口腔_美白步骤">
      </div>
      <ul class="box_05_list_fl fr">
        <li><h3>安全舒适：对牙龈没有任何伤害</h3><p>美国Beyond纳米蓝光美白采用的是低温冷光，完全避免了对牙齿神经的刺激。美国原装进口美白剂的主要成分是氧化氢，是一种亲水性药物，完全不伤害牙龈，对牙齿的结构和牙釉质也不会有任何伤害。</p></li>
        <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/box_05_list_02.jpg" alt="优贝口腔_安全舒适"></li>
        
        <li><h3>效果显著：可提高10-15个Vita色阶</h3><p>纳米蓝光美白不仅可以去除牙齿表面的色素沉积，同时可进入牙齿深层达到脱色的效果，一次疗程后美白效果可提高10－15个vita色阶，平均提高8个vita色阶，让牙齿即刻变白且具有自然光泽。</p></li>
        <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/box_05_list_04.jpg" alt="优贝口腔_美白效果显著"></li>
      
      </ul>
    </div>
  </section>

  <!-- 优贝用心做好口腔 专业品牌 -->
  <section class="box_06">
    <div class="box_title">
      <span class="fr"></span>
      <h2>优贝用心做好口腔 专业品牌</h2>
      <span class="fl"></span>
    </div>
    <div class="box_06_text w1200">
      <p>优贝口腔医院率先引进的美国Beyond蓝光美白仪器，可在短时间内实现牙齿美白，美白过程中无刺激、无副作用，安全呵护牙齿结构和珐琅质，使用的美白材料均是美国原装进口的，完全不伤害牙龈，对牙齿的结构和牙釉质也不会有任何伤害。具有高效快速、保护牙齿、舒适无痛、效果持久等优点，仅需30分钟即刻美白牙齿。</p>
      <p>适应范围：黄牙、黑牙、四环素牙、氟斑牙、遗传性色素牙、外源性色素牙、烟渍牙、茶渍牙、咖啡牙等，<strong>美白咨询热线： 400-1671818</strong>。</p>
    </div>
    <ul class="box_06_box w1200">
      <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/box_06_box_01.jpg" alt="优贝口腔_专科医院"><p>优贝口腔专科医院</p></li>
      <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/box_06_box_02.jpg" alt="优贝口腔_独立VIP诊室"><p>独立VIP诊室</p></li>
      <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/box_06_box_03.jpg" alt="优贝口腔_ADA无菌操作标准"><p>ADA无菌操作标准</p></li>
      <li><img src="<?php echo IMG_PATH ?>/teeth_whitening/box_06_box_04.jpg" alt="优贝口腔_临床经验丰富医师"><p>临床经验丰富医师</p></li>
    </ul>
  </section>

  <!-- 确保美白效果 选择资深医师是关键 -->
  <section class="box_07 w1200">
    <div class="box_title">
      <span class="fr"></span>
      <h2>确保美白效果 选择资深医师是关键</h2>
      <span class="fl"></span>
    </div>

    <!-- Swiper -->
    <div class="swiper-container doctor_swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="doctor_box">
            <div class="doctor_box_fl">
              <img  src="<?php echo IMG_PATH ?>/medical_team/fl_teamImg_03.png" alt="优贝口腔_徐涛_牙齿美白医生">
            </div>
            <div class="doctor_box_fr fr">
              <h1>徐涛 / <span>DCOCTOR</span></h1>
              <h2>主任医师、口腔学国际医生</h2>
              <p>- 北京大学口腔医学院医学硕士</p>
              <p>- 金牌首席牙周病学医生  </p>
              <p>- 中华口腔医学牙周病学会会员</p>
              <p>- 美国牙周病学会会员(AAP)</p>
              <span>擅长项目 :</span>
              <p>牙齿美白，口腔种植，牙周病，牙外伤等口腔综合治疗。</p>
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
              <img  src="<?php echo IMG_PATH ?>/children_teeth/doctor_02.png" alt="优贝口腔_刘洋_牙齿美白医生">
            </div>
            <div class="doctor_box_fr fr">
              <h1>刘洋 / <span>DCOCTOR</span></h1>
              <h2>主任医师 / 口腔学国际医生</h2>
              <p>- 北京大学口腔医学院医学硕士</p>
              <p>- 优贝口腔特邀医生</p>
              <p>- 中华口腔医学会修复专委会委员</p>
              <span>擅长项目 :</span>
              <p>牙齿美白，显微疑难根管治疗，CEREC椅旁即刻修复，前牙美学设计与修复，在美学失败病例再修复、种植修复、固定修复、可摘局部义齿修复、附着体应用修复、口内牙体牙髓治疗、外科拔牙、综合治疗等领域造诣颇深。</p>
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



  <!-- footer 模块 -->
  <?php include './public/footer.php';?>

  <script src="<?php echo JS_PATH ?>/public.js"></script>

  <script>

    $('.box_02_list_top>li').mouseover(function(){
      $(this).addClass('on').siblings().removeClass('on')
      var index = $(this).index()
      $('.box_02_list_btm>li').eq(index).show().siblings().hide()
    })


    // 医生介绍
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