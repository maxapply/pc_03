<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>私享定制</title>
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/customized.css">

  <script src="<?php echo JS_PATH ?>/jquery-3.5.1.min.js"></script>
</head>

<body>
  <!-- 头部 logo -->
  <?php include './public/header.php';?>

  <!-- banner -->
  <div class="banner">
    <img src="<?php echo IMG_PATH ?>/customized/banner_01.jpg" alt="优贝口腔_私享定制">
  </div>

  <!-- 菜单导航 -->
  <?php include './public/menu_nav.php';?>

  <!-- 口腔健康服务 -->
  <section class="service">
    <div class="inIit tc">
      <span>SERVICE</span>
      <p>
        <b>打造优质</b>
        口腔健康服务
      </p>
    </div>

    <div class="slide">
      <div class="w1200">
        <div class="hd">
          <ul>
            <li class="on"><span></span>知名☐腔专家会诊</li>
            <li ><span></span>严格灭菌</li>
            <li ><span></span>开启微创美牙之旅</li>
            <li ><span></span>术后跟踪服务</li>
          </ul>
        </div>
        <div class="bd">
          <ul >
            <img src="<?php echo IMG_PATH ?>/customized/programme_01.png" alt="优贝口腔_知名☐腔专家会诊">
            <img src="<?php echo IMG_PATH ?>/customized/programme_02.jpg" alt="优贝口腔_知名☐腔专家会诊">
            <img src="<?php echo IMG_PATH ?>/customized/programme_03.jpg" alt="优贝口腔_知名☐腔专家会诊">

            <div class="introduce">
              <p><span>1</span>医生接诊，☐腔检查</p>
              <p><span>2</span>知名☐腔专家会诊</p>
              <p><span>3</span>定制私人专属方案</p>
            </div>
          </ul>
 
        </div>
        <div class="bd hide">
          <ul >
            <img src="<?php echo IMG_PATH ?>/customized/sterilization_01.jpg" alt="优贝口腔_严格灭菌">
            <img src="<?php echo IMG_PATH ?>/customized/sterilization_02.jpg" alt="优贝口腔_严格灭菌">
            <img src="<?php echo IMG_PATH ?>/customized/sterilization_03.jpg" alt="优贝口腔_严格灭菌">

            <div class="introduce">
              <p><span>1</span>完善的灭菌流程</p>
              <p><span>2</span>降低创口发炎的概率</p>
              <p><span>3</span>提高种手术安全性</p>
            </div>
          </ul>
 
        </div>
        <div class="bd hide">
          <ul >
            <img src="<?php echo IMG_PATH ?>/customized/journey_01.jpg" alt="优贝口腔_开启微创美牙之旅">
            <img src="<?php echo IMG_PATH ?>/customized/journey_02.jpg" alt="优贝口腔_开启微创美牙之旅">
            <img src="<?php echo IMG_PATH ?>/customized/journey_03.jpg" alt="优贝口腔_开启微创美牙之旅">

            <div class="introduce">
              <p><span>1</span>全程提供细致入微的专业呵护</p>
              <p><span>2</span>专业医师开启微创美牙之旅</p>
            </div>
          </ul>
 
        </div>
        
        <div class="bd hide">
          <ul >
            <img src="<?php echo IMG_PATH ?>/customized/complete_01.jpg" alt="优贝口腔_定制私人专属方案">
            <img src="<?php echo IMG_PATH ?>/customized/complete_02.jpg" alt="优贝口腔_定制私人专属方案">
            <img src="<?php echo IMG_PATH ?>/customized/complete_03.jpg" alt="优贝口腔_定制私人专属方案">

            <div class="introduce">
              <p><span>1</span>对患者进行回访</p>
              <p><span>2</span>定期提醒患者复诊</p>
              <p><span>3</span>有问题及时解决</p>
            </div>
          </ul>
 
			  </div>
      </div>
    </div>

    <div class="service_box w1200">
      <div class="service_boxfl fl">
        <img src="<?php echo IMG_PATH ?>/customized/service_box_01.jpg" alt="优贝口腔_流程规范化、标准化">
        <div class="mask">
          <div class="masktitle">
            <h3>流程规范化、标准化</h3>
          </div>
          <div class="maskzxyy">
            <p>基于DNV GL国际医疗体系的70多项管理流程和医疗标准，优贝从管理、临床到外围支持等全方位实施流程规范化、标准化；</p>
          </div>
        </div>
      </div>
      <div class="service_boxfr fr">
        <img src="<?php echo IMG_PATH ?>/customized/service_box_02.jpg" alt="优贝口腔_提供专业医疗服务">
        <div class="mask">
          <div class="masktitle">
            <h3>提供专业医疗服务</h3>
          </div>
          <div class="maskzxyy">
            <p>基于DNV 针对种植、矫正、儿牙等学科领域组建了专家医疗服务团队，引进了国际无痛和舒眠诊疗技术等，只为提供更专业的医疗服务。</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 优贝诊疗 -->
  <section class="standard w1200">
    <div class="inIit tc">
      <span>STANDARDIZATION</span>
      <p>
        <b>优贝标准化</b>
        美国FDI诊疗标准
      </p>
    </div>
    <ul class="standard_box">
      <li>
        <div class="standard_box_img">
          <img src="<?php echo IMG_PATH ?>/customized/standard_box_01.jpg" alt="优贝口腔_国内高端诊疗标准">
        </div>
        <div class="standard_box_text">
          <h2>国内高端诊疗标准</h2>
          <p>无菌操作：一医一助一室一盘一针一消毒,让每位医生、护士、清洁工都要有严格执行无菌流程。</p>
        </div>
      </li>

      <li>
        <div class="standard_box_img">
          <img src="<?php echo IMG_PATH ?>/customized/standard_box_02.jpg" alt="优贝口腔_高端FDI诊疗标准">
        </div>
        <div class="standard_box_text">
          <h2>高端FDI诊疗标准</h2>
         <p>严格按照高端FDI (世界牙科联盟) 诊疗标准，一人一机一护，全程就诊蓝膜保护，确保无菌环境无交叉感染。</p>
        </div>
      </li>

      <li>
          <div class="standard_box_img">
            <img src="<?php echo IMG_PATH ?>/customized/standard_box_03.jpg" alt="优贝口腔_高端品牌设备仪器">
          </div>
          <div class="standard_box_text">
          <h2>高端品牌设备仪器</h2>
          <p>引进美国锐珂K7600☐腔椅旁☐内X光数字成像系统、德国KAVA、德国水激光等高精尖大型诊疗设备。</p>
        </div>
      </li>


      <li>
        <div class="standard_box_img">
          <img src="<?php echo IMG_PATH ?>/customized/service_box_04.jpg" alt="优贝口腔_高端进☐材料直供">
        </div>
        <div class="standard_box_text">
          <h2>高端进☐材料直供</h2>
          <p>优贝☐腔郑重承诺，只选择高端顶级机构生产的优质材料，德国费亚丹技术中国示范中心等。</p>
        </div>
      </li>


      <li>
        <div class="standard_box_img">
          <img src="<?php echo IMG_PATH ?>/customized/service_box_05.jpg" alt="优贝口腔_终身☐腔病案管理">
        </div>
        <div class="standard_box_text">
          <h2>终身☐腔病案管理</h2>
          <p>优贝☐腔与高端接轨，引进了先进的客户关系管理系统，为患者提供智能化的☐腔健康管理。</p>
        </div>
      </li>
    </ul>
  </section>

  <!-- 牙齿常见问题 -->
  <section class="problem">
    <div class="inIit tc">
      <span>PROBLEM</span>
      <p>
        <b>在线了解</b>
        牙齿常见问题
      </p>
    </div>
    <ul class="list w1200">
      <li><a href="#"><span></span><h3>什么是种植牙？</h3></a></li>
      <li><a href="#"><span></span><h3>种植牙价格贵吗？</h3></a></li>
      <li><a href="#"><span></span><h3>种植牙寿命有多长？</h3></a></li>
      <li><a href="#"><span></span><h3>种植牙安全吗？</h3></a></li>
      <li>
        <a href="#"><span></span><h3>无挂钩镶牙</h3></a>
        <a href="#"><span></span><h3>活动假牙修复</h3></a>
      </li>
      <li><a href="#"><span></span><h3>种植牙如何护理？</h3></a></li>
      <li><a href="#"><span></span><h3>门牙缺失了怎么办？</h3></a></li>
      <li><a href="#"><span></span><h3>牙齿发黄怎么办？</h3></a></li>
      <li><a href="#"><span></span><h3>牙齿缺失后几种线行的修复方式对比</h3></a></li>
    </ul>
  </section>

  <!-- 在线自助预约 -->
  <section class="register">
    <div class="inIit tc">
      <span>REGISTER</span>
      <p>
        <b>自助预约</b>
        期待为您提供咨询服务
      </p>
    </div>
    <div class="form_list w1200">
      <div class="form_fl fl">
        <h3 class="tc">优贝欢您的到来</h3>
        <form class="biaodan">
          <div class="biaodan_list">
            <span>*</span><b>姓&nbsp;&nbsp;&nbsp;&nbsp;名 ：</b> <input type="text" name="username" id="username_ljyy" placeholder="请输入姓名">
          </div>

          <div class="biaodan_list">
            <span>*</span><b>电&nbsp;&nbsp;&nbsp;&nbsp;话 ：</b> <input type="text" name="phone" id="phone_ljyy" placeholder="请输入电话">
          </div>


          <div class="biaodan_list">
            <span>&nbsp; </span> <b>年&nbsp;&nbsp;&nbsp;&nbsp;龄 ：</b> <input type="text" name="username" id="username" placeholder="请输入年龄">
          </div>

          <div class="biaodan_list">
            <span>&nbsp; </span> <b>称&nbsp;&nbsp;&nbsp;&nbsp;谓 ：</b> 

            <label>
                <input type="radio" name="sex" checked="checked" id="female" value="女士" class="a-radio">
                <span class="b-radio"></span>女士
            </label>

            <label>
                <input type="radio" name="sex" id="" value="先生" class="a-radio">
                <span class="b-radio"></span>先生
            </label>

          </div>

          <div class="biaodan_list">
            <span>&nbsp; </span> <b class="fl">症&nbsp;&nbsp;&nbsp;&nbsp;状 ：</b> <textarea  name="content" id="comment" class="fl" placeholder="牙齿问题原因……"></textarea>
          </div>

          <div class="biaodan_list">
            <!-- <span>&nbsp;</span><b>预约时间：</b>  <input type="date" class="start-two"  placeholder="请选择日期和时间"> -->
            <span>&nbsp;</span><b>预约时间：</b> <input type="text" class="demo-input" placeholder="请选择日期" id="test5">
          </div>

        </form>
        <div class="form_btn tc btn_animate">
          <a href="#" class="form_liyy"><span></span>立即预约</a>
        </div>
      </div>
      <div class="list_fr fr tc">
        <div class="tu tc">
          <img src="<?php echo IMG_PATH ?>/medical_team/banner.jpg" alt="优贝口腔_医师团队">
        </div>
        <div class="bito">家门口享受高水平种植术</div>
        <p class="tc">专注于口腔健康的医师团队</p>
        <p class="tc">雕琢细节 追求完美</p>
        <div class="con">优贝☐腔积极引进由☐腔医学界医生、教授、海归学者、国际ICOIX协会会员、资深行业综合管理医生等精英人才，并由此组成了优贝☐腔强大的老中青相结合的医生梯队。他们大部分具有博士、硕士学位和海外留学背景，以一颗匠者之心，毕生追求至臻医术与艺术，秉持着医者仁心、恪守道德、诚实守信、维护医学☐腔的圣洁，帮助每一位☐腔患者解除病痛。</div>
      </div>
    </div>
  </section>

  <!-- footer 模块 -->
  <?php include './public/footer.php';?>


  <script src="<?php echo JS_PATH ?>/public.js"></script>
  <script src="<?php echo JS_PATH ?>/laydate.js"></script>


  <script>
    $('.hd>ul>li').mouseover(function(){
      $(this).addClass('on').siblings().removeClass('on')
      var index = $(this).index()
      $('.bd').eq(index).show().siblings('.bd').hide()
    })



    // 表单验证
    $('.form_liyy').click(function () {

      // 姓名验证
      if (/^([\u4e00-\u9fa5]){2,5}$/.test($('#username_ljyy').val())) {

        console.log('输入姓名正确');
        // 手机号  验证
        tel()

      } else {
        alert('请您输入正确的姓名')
      }


      // 手机号  验证
      function tel() {

        if (!(/^1[3456789]\d{9}$/.test($('#phone_ljyy').val()))) {
          alert('请您输入正确的号码，手机号码请直接输入')
        } else {
          console.log('输入正确');
        }
      }

    })




    // 日历插件
      lay('#version').html('-v' + laydate.v);
      laydate.render({
        elem: '#test5',
        type: 'datetime'
      });













  </script>


</body>

</html>