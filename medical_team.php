<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>医疗团队</title>
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/medical_team.css">

  <script src="<?php echo JS_PATH ?>/jquery-3.5.1.min.js"></script>
  <script src="<?php echo JS_PATH ?>/swiper.min.js"></script>
</head>

<body>
  <!-- 头部 logo -->
  <?php include './public/header.php';?>

  <!-- banner -->
  <div class="banner">
    <img src="<?php echo IMG_PATH ?>/medical_team/banner.jpg" alt="">
  </div>

  <!-- 菜单导航 -->
  <?php include './public/menu_nav.php';?>


  <!-- 医生团队 -->
  <div class="team_list">
    <ul class="mune_list w1200">
      <li class="selected">种植牙医生</li>
      <li>矫正医生</li>
      <li>全科医生</li>
      <li>儿童齿科医生</li>
    </ul>

    <div class="case">

      <div class="ly_list ">
        <div class="fl_teamImg fl">
          <img src="<?php echo IMG_PATH ?>/index/team_01.jpg" alt="优贝口腔_郭宏伟_优贝口腔院长">

          <div class="btn">
            <a href="#" class="btn-rob-shine">咨询医生</a>
            <a href="#" class="btn-last-shine" >我要预约</a>
          </div>
        </div>
        <div class="fl_teamText shift_bottom fl">
          <h2><span></span>郭宏伟 <i> / 优贝口腔院长</i></h2>
          <p><span></span>口腔种植、正畸学医生</p>
          <p><span></span>无痕修复美牙技术首席设计师</p>
          <p><span></span>优贝口腔德国卡瓦技术带头人</p>
          <p><span></span>中华口腔医学会预防委员会会员</p>
          <p><span></span>国际种植牙协会(ITI)会员</p>
          <strong>擅长:</strong>
          <p>口腔美学修复设计，以及全瓷牙和烤瓷牙固定修复、活动义齿修复、牙齿美学修复、精密附着体义齿、复杂牙齿缺失再修复、口腔种植、口腔正畸等。</p>
        </div>
      </div>

      <div class="ly_list hide">
        <div class="fl_teamImg fl">
          <img src="<?php echo IMG_PATH ?>/index/team_02.jpg" alt="优贝口腔_宋铁砾_口腔种植医师">
          <div class="btn">
            <a href="#">咨询医生</a>
            <a href="#">我要预约</a>
          </div>
        </div>
        <div class="fl_teamText shift_bottom fl">
          <h2><span></span>宋铁砾 <i> / 优贝口腔特邀口腔种植医师</i></h2>
          <p><span></span>北京大学口腔医学院博士</p>
          <p><span></span>北京同仁医院口腔科医生</p>
          <p><span></span>口腔医生俞光岩、张建国教授高徒</p>
          <p><span></span>优贝口腔德国卡瓦技术委员会委员</p>
          <p><span></span>北京口腔医学会颌面外科专委会委员</p>

          <strong>擅长:</strong>
          <p>牙齿种植、美容修复；口腔颌面外科疾病的诊断治疗，如口腔颌面部各种良恶性肿瘤的综合治疗，颌面部复杂创伤的救治，口腔颌面部先天或后天软硬组织缺损畸形的整复治疗等。</p>
        </div>
      </div>

      <div class="ly_list hide">
        <div class="fl_teamImg fl">
          <img src="<?php echo IMG_PATH ?>/index/team_03.jpg" alt="优贝口腔_王迪_东城口腔医院院长">
          <div class="btn">
            <a href="#">咨询医生</a>
            <a href="#">我要预约</a>
          </div>
        </div>
        <div class="fl_teamText shift_bottom fl">
          <h2><span></span>王迪 <i> / 东城口腔医院院长</i></h2>
          <p><span></span>优贝口腔特邀修复种植医师</p>
          <p><span></span>副主任医师</p>
          <p><span></span>北京东城区口腔医院院长 </p>

          <strong>擅长:</strong>
          <p>牙齿美容修复、种植牙、义齿、牙槽外科、智齿拔除等。</p>
        </div>
      </div>
      
      <ul class="name_list shift_left fr">
        <li class="selected_name"><h3>郭宏伟</h3><span></span><span></span><span></span><span></span></li>
        <li><h3>宋铁砾</h3><span></span><span></span><span></span><span></span></li>
        <li><h3>王迪</h3><span></span><span></span><span></span><span></span></li>
      </ul>

    </div>

    <div class="case hide">

      <div class="ly_list">
        <div class="fl_teamImg fl">
          <img src="<?php echo IMG_PATH ?>/index/team_04.jpg" alt="优贝口腔_陈桦_正畸科主治医师">
          <div class="btn">
            <a href="#">咨询医生</a>
            <a href="#">我要预约</a>
          </div>
        </div>
        <div class="fl_teamText shift_bottom fl">
          <h2><span></span>陈桦 <i> / 正畸科主治医师</i></h2>
          <p><span></span>知名口腔种植医师</p>
          <p><span></span>优贝口腔总监级种植医师</p>
          <p><span></span>优贝口腔集团副总经理</p>
          <p><span></span>美国Loma Linda University种植硕士大师班毕业 </p>
          <p><span></span>AIC国际种植医师协会会员</p>

          <strong>擅长:</strong>
          <p>熟练掌握瑞典Nobel，瑞士ITI、德国Ankylos等种植系统。擅长全口疑难疾病的诊疗，具有口腔多学科联合诊疗能力。同时在复杂前牙美学修复病例的生物美学设计、前牙3D贴面及 LAVA 全瓷美学修复方面积累了丰富的经验。</p>
        </div>
      </div>

      <div class="ly_list hide">
        <div class="fl_teamImg fl ">
          <img src="<?php echo IMG_PATH ?>/index/team_05.jpg" alt="优贝口腔_张洪波_优贝正畸技术总监">
          <div class="btn">
            <a href="#">咨询医生</a>
            <a href="#">我要预约</a>
          </div>
        </div>
        <div class="fl_teamText shift_bottom fl">
          <h2><span></span>张洪波 <i> / 主治医师/集团正畸技术总监</i></h2>
          <p><span></span>知名口腔正畸医师 </p>
          <p><span></span>优贝口腔总监级正畸医师</p>
          <p><span></span>美国Invisalign隐形矫正认证医师</p>
          <p><span></span>中华口腔医学会口腔正畸专委会委员</p>

          <strong>擅长:</strong>
          <p>MBT矫正技术、自锁矫正技术、隐形矫正技术，MBT矫正技术、自锁矫正技术、invisalign隐形矫正技术。</p>
        </div>
      </div>
      
      <ul class="name_list shift_left fr">
        <li class="selected_name"><h3>陈桦</h3><span></span><span></span><span></span><span></span></li>
        <li><h3>张洪波</h3><span></span><span></span><span></span><span></span></li>
      </ul>

    </div>

    <div class="case hide">

      <div class="ly_list ">
        <div class="fl_teamImg fl ">
          <img src="<?php echo IMG_PATH ?>/index/team_07.jpg" alt="优贝口腔_刘洋_优贝主任医师、口腔学国际医生">
          <div class="btn">
            <a href="#">咨询医生</a>
            <a href="#">我要预约</a>
          </div>
        </div>
        <div class="fl_teamText shift_bottom fl">
          <h2><span></span>刘洋 <i> / 主任医师、口腔学国际医生</i></h2>
          <p><span></span>北京大学口腔医学院医学硕士</p>
          <p><span></span>优贝口腔特邀医生</p>
          <p><span></span>金牌首席口腔根管治疗、口腔修复医生</p>
          <p><span></span>北京大学口腔医学院第三门诊部主任</p>
          <p><span></span>美国宾夕法尼亚大学牙科学院访问学者</p>
          <p><span></span>中华口腔医学会修复专委会委员</p>

          <strong>擅长:</strong>
          <p>显微疑难根管治疗，CEREC椅旁即刻修复，前牙美学设计与修复，在美学失败病例再修复、种植修复、固定修复、可摘局部义齿修复、附着体应用修复、口内牙体牙髓治疗、外科拔牙、综合治疗等领域造诣颇深。</p>
        </div>
      </div>

      <div class="ly_list hide">
        <div class="fl_teamImg fl ">
          <img src="<?php echo IMG_PATH ?>/index/team_06.jpg" alt="优贝口腔_徐涛_优贝主任医师、口腔学国际医生">
          <div class="btn">
            <a href="#">咨询医生</a>
            <a href="#">我要预约</a>
          </div>
        </div>
        <div class="fl_teamText shift_bottom fl">
          <h2><span></span>徐涛 <i> / 主任医师、口腔学国际医生</i></h2>
          <p><span></span>北京大学口腔医学院医学硕士</p>
          <p><span></span>金牌首席牙周病学医生</p>
          <p><span></span>中华口腔医学牙周病学会会员</p>
          <p><span></span>美国牙周病学会会员(AAP)</p>

          <strong>擅长:</strong>
          <p>口腔种植，牙周病，牙外伤等口腔综合治疗。</p>
        </div>
      </div>
      
      <ul class="name_list shift_left fr">
        <li class="selected_name"><h3>刘洋</h3><span></span><span></span><span></span><span></span></li>
        <li><h3>徐涛</h3><span></span><span></span><span></span><span></span></li>
      </ul>

    </div>

    <div class="case hide">

      <div class="ly_list ">
        <div class="fl_teamImg fl ">
          <img src="<?php echo IMG_PATH ?>/index/team_08.jpg" alt="优贝口腔_张鹏_优贝金牌首席儿童口腔学医生">
          <div class="btn">
            <a href="#">咨询医生</a>
            <a href="#">我要预约</a>
          </div>
        </div>
        <div class="fl_teamText shift_bottom fl">
          <h2><span></span>张鹏 <i> / 金牌首席儿童口腔学医生</i></h2>
          <p><span></span>优贝口腔特邀医生</p>
          <p><span></span>北京儿童医院口腔科医生</p>
          <p><span></span>国际口腔正畸学会会员</p>

          <strong>擅长:</strong>
          <p>儿童口腔正畸序列治疗、儿童口腔早期肌功能训练治疗、儿童埋伏牙阻生牙的导萌牵引、儿童口腔疾病诊断及治疗方案设计、儿童口腔粘膜病的诊断与治疗等，儿童、成人各类牙颌畸形的矫治及各类复杂疑难病例的矫治。</p>
        </div>
      </div>

      
      <ul class="name_list shift_left fr">
        <li class="selected_name"><h3>张鹏</h3><span></span><span></span><span></span><span></span></li>
      </ul>

    </div>
  </div>

  <!-- 经典案例 -->
  <div class="cla_cas w1200">
    <div class="con_title">
      <h3>经典案例</h3>
    </div>

    <!-- Swiper -->
    <div class="swiper-container cla_cas_swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="case_box">
            <img src="<?php echo IMG_PATH ?>/medical_team/case_list_01.png" alt="优贝口腔_牙齿不齐，要求矫正">
              <div class="fr_tetx fr">
                <h3>顾女士</h3>
                <p><strong>牙齿问题 </strong> : 牙齿不齐，要求矫正</p>
                <p><strong>治疗方案 </strong> : 陶瓷托槽矫正</p>
                <div class="case_but">
                  <a href="#"><span><img src="<?php echo IMG_PATH ?>/details.png" alt=""></span>咨询医生</a>
                  <a href="#"><span><img src="<?php echo IMG_PATH ?>/consulting_service.png" alt=""></span>了解详情</a>
                </div>
              </div>
              <img src="<?php echo IMG_PATH ?>/medical_team/case_list_04.jpg" alt="优贝口腔_陶瓷托槽矫正">
          </div>
        </div>

        <div class="swiper-slide">
          <div class="case_box">
            <img src="<?php echo IMG_PATH ?>/medical_team/case_list_02.png" alt="优贝口腔_牙齿黑黄，不敢笑，工作没有自信">
              <div class="fr_tetx fr">
                <h3>何小姐</h3>
                <p><strong>牙齿问题</strong> : 牙齿黑黄，不敢笑，工作没有自信</p>
                <p><strong>治疗方案</strong> : 瓷贴面</p>
                <div class="case_but">
                  <a href="#"><span><img src="<?php echo IMG_PATH ?>/details.png" alt=""></span>咨询医生</a>
                  <a href="#"><span><img src="<?php echo IMG_PATH ?>/consulting_service.png" alt=""></span>了解详情</a>
                </div>
              </div>
              <img src="<?php echo IMG_PATH ?>/medical_team/case_list_04.jpg" alt="优贝口腔_瓷贴面">
          </div>
        </div>

        <div class="swiper-slide">
          <div class="case_box">
            <img src="<?php echo IMG_PATH ?>/medical_team/case_list_03.png" alt="优贝口腔_牙列开颌 咬合不正">
              <div class="fr_tetx fr">
                <h3>杨小姐</h3>
                <p><strong>牙齿问题</strong> : 牙列开颌 咬合不正。</p>
                <p><strong>治疗方案</strong> : MRC肌功能矫正。</p>
                <div class="case_but">
                  <a href="#"><span><img src="<?php echo IMG_PATH ?>/details.png" alt=""></span>咨询医生</a>
                  <a href="#"><span><img src="<?php echo IMG_PATH ?>/consulting_service.png" alt=""></span>了解详情</a>
                </div>
              </div>
              <img src="<?php echo IMG_PATH ?>/medical_team/case_list_06.png" alt="优贝口腔_MRC肌功能矫正">
          </div>
        </div>


        <div class="swiper-slide">
          <div class="case_box">
            <img src="<?php echo IMG_PATH ?>/medical_team/case_list_04.png" alt="优贝口腔_牙齿有洞，咀嚼能力衰减，长期导致牙齿松动。">
              <div class="fr_tetx fr">
                <h3>王先生</h3>
                <p><strong>牙齿问题</strong> : 牙齿有洞，咀嚼能力衰减，长期导致牙齿松动。</p>
                <p><strong>治疗方案</strong> : 3M纳米树脂补牙</p>
                <div class="case_but">
                  <a href="#"><span><img src="<?php echo IMG_PATH ?>/details.png" alt=""></span>咨询医生</a>
                  <a href="#"><span><img src="<?php echo IMG_PATH ?>/consulting_service.png" alt=""></span>了解详情</a>
                </div>
              </div>
              <img src="<?php echo IMG_PATH ?>/medical_team/case_list_04_01.png" alt="优贝口腔_3M纳米树脂补牙">
          </div>
        </div>


        <div class="swiper-slide">
          <div class="case_box">
            <img src="<?php echo IMG_PATH ?>/medical_team/case_list_05.png" alt="优贝口腔_门牙过长，失去职场信心和晋升机会。">
              <div class="fr_tetx fr">
                <h3>李小姐</h3>
                <p><strong>牙齿问题</strong> : 门牙过长，失去职场信心和晋升机会。</p>
                <p><strong>治疗方案</strong> : 时代天使隐形正畸</p>
                <div class="case_but">
                  <a href="#"><span><img src="<?php echo IMG_PATH ?>/details.png" alt=""></span>咨询医生</a>
                  <a href="#"><span><img src="<?php echo IMG_PATH ?>/consulting_service.png" alt=""></span>了解详情</a>
                </div>
              </div>
              <img src="<?php echo IMG_PATH ?>/medical_team/case_list_05_01.png" alt="优贝口腔_时代天使隐形正畸">
          </div>
        </div>


        <div class="swiper-slide">
          <div class="case_box">
            <img src="<?php echo IMG_PATH ?>/medical_team/case_list_07.png" alt="优贝口腔_口腔异味、滋生细菌">
              <div class="fr_tetx fr">
                <h3>张女士</h3>
                <p><strong>牙齿问题</strong> : 口腔异味、滋生细菌</p>
                <p><strong>治疗方案</strong> : 彩光美白</p>
                <div class="case_but">
                  <a href="#"><span><img src="<?php echo IMG_PATH ?>/details.png" alt=""></span>咨询医生</a>
                  <a href="#"><span><img src="<?php echo IMG_PATH ?>/consulting_service.png" alt=""></span>了解详情</a>
                </div>
              </div>
              <img src="<?php echo IMG_PATH ?>/medical_team/case_list_07_01.png" alt="优贝口腔_彩光美白">
          </div>
        </div>

      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>




  <!-- 咨询预约 -->
  <div class="con_ser w1200">
    <div class="con_title">
      <h3>咨询预约</h3>
    </div>
    <ul class="ser_row">
      <li>
        <a href="#">
          <div class="row_list">
            <div class="about-text">
              <h2>我想矫正</h2>
              <p>点击咨询/预约</p>
            </div>
            <div class="about-details bg-col1">
              <div class="pentagon-text">
                <h1>
                  <img src="<?php echo IMG_PATH ?>/medical_team/zj.png" alt="优贝口腔_牙齿矫正">
                </h1>
              </div>
              <p>龅牙、地包天、虎牙、牙齿拥挤、上颌前突、个别牙错位、咬合关系错乱等。各种疑难矫正、二次矫正修复、非手术矫正。</p>
            </div>
          </div>
        </a>
      </li>

      <li>
        <a href="#">
          <div class="row_list">
            <div class="about-text">
              <h2>我想种牙</h2>
              <p>点击咨询/预约</p>
            </div>
            <div class="about-details bg-col2">
              <div class="pentagon-text">
                <h1>
                  <img src="<?php echo IMG_PATH ?>/medical_team/zy.png" alt="优贝口腔_牙齿种植">
                </h1>
              </div>
              <p>单颗缺牙、多颗缺牙、半口缺牙、全口缺牙、牙齿松动、牙齿疼痛。</p>
            </div>
          </div>
        </a>
      </li>


      <li>
        <a href="#">
          <div class="row_list">
            <div class="about-text">
              <h2>我想美牙</h2>
              <p>点击咨询/预约</p>
            </div>
            <div class="about-details bg-col3">
              <div class="pentagon-text">
                <h1>
                  <img src="<?php echo IMG_PATH ?>/medical_team/my.png" alt="优贝口腔_牙齿美白">
                </h1>
              </div>
              <p>四环素牙、氟斑牙、变色牙、黄牙、黑牙。</p>
            </div>
          </div>
        </a>
      </li>



      <li>
        <a href="#">
          <div class="row_list">
            <div class="about-text">
              <h2>我想补牙</h2>
              <p>点击咨询/预约</p>
            </div>
            <div class="about-details bg-col4">
              <div class="pentagon-text">
                <h1>
                  <img src="<?php echo IMG_PATH ?>/medical_team/by.png" alt="优贝口腔_补牙">
                </h1>
              </div>
              <p>蛀牙（虫牙）、牙齿缺少一块、 牙齿断了一半、补牙材料更换。</p>
            </div>
          </div>
        </a>
      </li>



      <li>
        <a href="#">
          <div class="row_list">
            <div class="about-text">
              <h2>我想洗牙</h2>
              <p>点击咨询/预约</p>
            </div>
            <div class="about-details bg-col5">
              <div class="pentagon-text">
                <h1>
                  <img src="<?php echo IMG_PATH ?>/medical_team/jx.png" alt="优贝口腔_洗牙">
                </h1>
              </div>
              <p>牙菌斑、牙结石、烟渍/茶渍牙、牙齿矫正期间、色素牙。</p>
            </div>
          </div>
        </a>
      </li>



      <li>
        <a href="#">
          <div class="row_list">
            <div class="about-text">
              <h2>牙周炎治疗</h2>
              <p>点击咨询/预约</p>
            </div>
            <div class="about-details bg-col6">
              <div class="pentagon-text">
                <h1>
                  <img src="<?php echo IMG_PATH ?>/medical_team/yz.png" alt="优贝口腔_牙周炎治疗">
                </h1>
              </div>
              <p>牙周炎，牙龈出血、咀嚼无力、有浮起感、牙龈萎缩、牙齿松动、牙根暴露、冷热敏感、化脓呈暗红色，持续性口臭。</p>
            </div>
          </div>
        </a>
      </li>

      <li>
        <a href="#">
          <div class="row_list">
            <div class="about-text">
              <h2>小朋友看牙</h2>
              <p>点击咨询/预约</p>
            </div>
            <div class="about-details bg-col7">
              <div class="pentagon-text">
                <h1>
                  <img src="<?php echo IMG_PATH ?>/medical_team/ey.png" alt="优贝口腔_小朋友看牙">
                </h1>
              </div>
              <p>儿童牙齿矫正、儿童蛀牙、乳牙拔除 、儿童补牙、窝沟封闭、防蛀涂氟。</p>
            </div>
          </div>
        </a>
      </li>


      <li>
        <a href="#">
          <div class="row_list">
            <div class="about-text">
              <h2>其他</h2>
              <p>点击咨询/预约</p>
            </div>
            <div class="about-details bg-col8">
              <div class="pentagon-text">
                <h1>
                  <img src="<?php echo IMG_PATH ?>/medical_team/jc.png" alt="优贝口腔_咨询/预约">
                </h1>
              </div>
              <p>成人口腔检查、儿童口腔检查、儿童窝沟封闭、儿童涂氟防蛀。</p>
            </div>
          </div>
        </a>
      </li>
    </ul>
  </div>




  <!-- footer 模块 -->
  <?php include './public/footer.php';?>


  <script src="<?php echo JS_PATH ?>/public.js"></script>

  <script>
    $('.mune_list>li').mouseover(function(){
      $(this).addClass('selected').siblings().removeClass('selected')
      var index = $(this).index()
      $('.case').eq(index).show().siblings('.case').hide()
      mouse(index)
    })

    function mouse(ind){
      ind = ind || 0;
        $('.case').eq(ind).find('.name_list>li').mouseover(function(){
        $(this).addClass('selected_name').siblings().removeClass('selected_name')
        var index = $(this).index()
        $('.case').eq(ind).find('.ly_list').eq(index).show().siblings('.ly_list').hide()
      })
    }

    mouse()

    // 经典案例
    var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
      },
      loop:true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
    });
  </script>
</body>

</html>