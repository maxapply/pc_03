<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>首页</title>
  <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/index.css">

  <script src="./js/jquery-3.5.1.min.js"></script>
  <script src="./js/swiper.min.js"></script>

</head>

<body>
  <!-- 头部 logo -->
  <?php include './public/header.php';?>

  <!-- banner 轮播图 -->
  <div class="swiper-container banner_swiper" id="banner_swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="./images/index/banner_02.jpg" alt="优贝口腔_健康牙齿"></div>
      <div class="swiper-slide"><img src="./images/index/banner_02.jpg" alt="优贝口腔_健康牙齿"></div>
      <div class="swiper-slide"><img src="./images/index/banner_02.jpg" alt="优贝口腔_健康牙齿"></div>
      <div class="swiper-slide"><img src="./images/index/banner_02.jpg" alt="优贝口腔_健康牙齿"></div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- 菜单导航 -->
  <?php include './public/menu_nav.php';?>

  <!-- 品牌资讯 -->
  <section class="inPpzx w1200 clearfix">
    <div class="inPl">
      <div class="inTit">
        <i>MESSAGE</i>
        <h2>品牌资讯</h2>
      </div>
      <div class="inPlCon">
        <ul class="inPlul">
          <li>
            <div class="inPlCtext">
              <b>
                优贝口腔以品质铸就品牌
                <br>
                打造市民信赖的专业牙科
              </b>
              <p>优贝口腔引进国内外先进齿科理念和运营模式，采用进口诊疗设备和技术，为顾客提供品质服务和医疗安全保障。</p>
              <a href="#">查看更多</a>
            </div>
            <div class="inPlCimg">
              <img src="./images/inPlCimg.png" alt="优贝口腔">
            </div>
          </li>
        </ul>
      </div>

    </div>
    <div class="inPr">
      <ul class="inPrTit">
        <li class="on">
          <a href="#" title="最新资讯">最新资讯</a>
        </li>
        <li>
          <a href="#" title="新闻报道">新闻报道</a>
        </li>
      </ul>
      <div class="tempWrap">
        <div class="inPrCon">
          <ul class="clone">
            <li>
              <i>20.01.21</i>
              <a href="#" title="为什么同样是种植牙有时使用寿命差距很大">为什么同样是种植牙有时使用寿命差距很大</a>
            </li>
            <li>
              <i>20.01.21</i>
              <a href="#" title="为什么同样是种植牙有时使用寿命差距很大">为什么同样是种植牙有时使用寿命差距很大</a>
            </li>
            <li>
              <i>20.01.21</i>
              <a href="#" title="为什么同样是种植牙有时使用寿命差距很大">为什么同样是种植牙有时使用寿命差距很大</a>
            </li>
            <li>
              <i>20.01.21</i>
              <a href="#" title="为什么同样是种植牙有时使用寿命差距很大">为什么同样是种植牙有时使用寿命差距很大</a>
            </li>
            <li>
              <i>20.01.21</i>
              <a href="#" title="为什么同样是种植牙有时使用寿命差距很大">为什么同样是种植牙有时使用寿命差距很大</a>
            </li>
            <li>
              <i>20.01.21</i>
              <a href="#" title="为什么同样是种植牙有时使用寿命差距很大">为什么同样是种植牙有时使用寿命差距很大</a>
            </li>

          </ul>

          <ul class="clone hide">
            <li>
              <i>20.01.21</i>
              <a href="#" title="北京现在牙科医院补牙到底要多少钱">北京现在牙科医院补牙到底要多少钱</a>
            </li>
            <li>
              <i>20.01.21</i>
              <a href="#" title="北京现在牙科医院补牙到底要多少钱">北京现在牙科医院补牙到底要多少钱</a>
            </li>
            <li>
              <i>20.01.21</i>
              <a href="#" title="北京现在牙科医院补牙到底要多少钱">北京现在牙科医院补牙到底要多少钱</a>
            </li>
            <li>
              <i>20.01.21</i>
              <a href="#" title="为什么同样是种植牙有时使用寿命差距很大">为什么同样是种植牙有时使用寿命差距很大</a>
            </li>
            <li>
              <i>20.01.21</i>
              <a href="#" title="为什么同样是种植牙有时使用寿命差距很大">为什么同样是种植牙有时使用寿命差距很大</a>
            </li>
            <li>
              <i>20.01.21</i>
              <a href="#" title="为什么同样是种植牙有时使用寿命差距很大">为什么同样是种植牙有时使用寿命差距很大</a>
            </li>

          </ul>

        </div>

      </div>

    </div>


  </section>

  <!-- 服务项目 -->
  <section class="inItem w1200 clearfix">
    <div class="inIit tc">
      <span>ITEM</span>
      <p>
        <b>服务项目</b>
        助力健康好口福
      </p>
    </div>
    <!-- Swiper -->
    <div class="swiper-container inItem_swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="./images//index/initemp1.png" alt="优贝口腔_牙齿种植">
          <h3>牙齿种植</h3>
          <b>更舒适 更牢固</b>
          <a href="#">在线客服</a>
        </div>

        <div class="swiper-slide">
          <img src="./images//index/initemp2.png" alt="优贝口腔_牙齿矫正">
          <h3>牙齿矫正</h3>
          <b>更快 更齐 更美</b>
          <a href="#">在线客服</a>
        </div>


        <div class="swiper-slide">
          <img src="./images//index/initemp3.png" alt="优贝口腔_牙齿美白">
          <h3>牙齿美白</h3>
          <b>更自信 更持久</b>
          <a href="#">在线客服</a>
        </div>


        <div class="swiper-slide">
          <img src="./images//index/initemp4.png" alt="优贝口腔_牙齿美容">
          <h3>牙齿美容</h3>
          <b>更自然 更美观</b>
          <a href="#">在线客服</a>
        </div>


        <div class="swiper-slide">
          <img src="./images//index/initemp5.png" alt="优贝口腔_牙齿治疗">
          <h3>牙齿治疗</h3>
          <b>更健康 更放心</b>
          <a href="#">在线客服</a>
        </div>


        <div class="swiper-slide">
          <img src="./images//index/initemp6.png" alt="优贝口腔_儿童齿科">
          <h3>儿童齿科</h3>
          <b>更舒适 更安心</b>
          <a href="#">在线客服</a>
        </div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>

  <!-- 齿科品牌中心 -->
  <section class="inPp clearfix">
    <div class="inIit tc">
      <span>HONOR</span>
      <p>
        <b>齿科品牌中心</b>
        精研 精治 精艺 精心
      </p>
    </div>
    <ul class="inPpTop">

      <li class="on">
        <a href="#" title="医院环境">医院环境</a>
      </li>
      <li>
        <a href="#" title="口腔设备">口腔设备</a>
      </li>
      <li >
        <a href="#" title="合作伙伴">合作伙伴</a>
      </li>

    </ul>
    <div class="inPpCon w1200">

      <ul class="inPpOther">
        <li class="li1">
          <img src="./images/index/inhj_01.jpg" alt="优贝口腔_宽敞明亮大厅">
          <i>宽敞明亮大厅</i>
        </li>
        <li class="li2">
          <img src="./images/index/inhj_02.jpg" alt="优贝口腔_全面消毒诊疗室">
          <i>全面消毒诊疗室</i>
        </li>
        <li class="li3">
          <img src="./images/index/inhj_03.jpg" alt="优贝口腔_休闲候诊区">
          <i>休闲候诊区</i>
        </li>
        <li class="li4">
          <img src="./images/index/inhj_04.png" alt="优贝口腔_独立问诊室">
          <i>独立问诊室</i>
        </li>
        <li class="li5">
          <img src="./images/index/inhj_05.jpg" alt="优贝口腔_无菌消毒室">
          <i>无菌消毒室</i>
        </li>
        <li class="li6">
          <img src="./images/index/inhj_06.jpg" alt="优贝口腔_诊疗工作区">
          <i>诊疗工作区</i>
        </li>
        <li class="li7">
          <img src="./images/index/inhj_07.jpg" alt="优贝口腔_机构外观展示">
          <i>机构外观展示</i>
        </li>
      </ul>

      <ul class="inPpOther hide">
        <li class="li1">
          <img src="./images/index/insb_01.jpg" alt="优贝口腔_种植专用牙椅">
          <i>种植专用牙椅</i>
        </li>
        <li class="li2">
          <img src="./images/index/insb_02.jpg" alt="优贝口腔_超声综合治疗仪">
          <i>超声综合治疗仪</i>
        </li>
        <li class="li3">
          <img src="./images/index/insb_03.jpg" alt="优贝口腔_美国STA麻醉系统">
          <i>美国STA麻醉系统</i>
        </li>
        <li class="li4">
          <img src="./images/index/insb_04.jpg" alt="优贝口腔_全瓷修复">
          <i>全瓷修复</i>
        </li>
        <li class="li5">
          <img src="./images/index/insb_05.jpg" alt="儿童牙科综合治疗椅">
          <i>儿童牙科综合治疗椅</i>
        </li>
        <li class="li6">
          <img src="./images/index/insb_06.jpg" alt="优贝口腔_诊疗工作区">
          <i>德国Zeiss手术显微镜</i>
        </li>
        <li class="li7">
          <img src="./images/index/insb_07.jpg" alt="优贝口腔_德国西诺德全景机">
          <i>德国西诺德全景机</i>
        </li>
      </ul>


      <ul class="inhz  hide">
        <li>
          <img src="./images/index/hz_01.jpg" alt="优贝口腔_隐适美隐形矫正">
          <h3>隐适美隐形矫正</h3>
        </li>

        <li>
          <img src="./images/index/hz_02.jpg" alt="优贝口腔_美加超薄瓷贴面">
          <h3>美加超薄瓷贴面</h3>
        </li>


        <li>
          <img src="./images/index/hz_03.jpg" alt="优贝口腔_德国诺亚丹种植系统">
          <h3>德国诺亚丹种植系统</h3>
        </li>


        <li>
          <img src="./images/index/hz_04.jpg" alt="优贝口腔_3M纳米树脂补牙">
          <h3>3M纳米树脂补牙</h3>
        </li>


        <li>
          <img src="./images/index/hz_05.jpg" alt="优贝口腔_美国3I种植系统">
          <h3>美国3I种植系统</h3>
        </li>


        <li>
          <img src="./images/index/hz_06.jpg" alt="优贝口腔_美国百康种植体">
          <h3>美国百康种植体</h3>
        </li>


        <li>
          <img src="./images/index/hz_07.jpg" alt="优贝口腔_瑞典Nobel种植牙系统">
          <h3>瑞典Nobel种植牙系统</h3>
        </li>


        <li>
          <img src="./images/index/hz_08.jpg" alt="优贝口腔_德国ICX种植系统">
          <h3>德国ICX种植系统</h3>
        </li>


        <li>
          <img src="./images/index/hz_09.jpg" alt="优贝口腔_德国Ankylos种植系统">
          <h3>德国Ankylos种植系统</h3>
        </li>


        <li>
          <img src="./images/index/hz_10.jpg" alt="优贝口腔_瑞士ITI种植系统">
          <h3>瑞士ITI种植系统</h3>
        </li>


        <li>
          <img src="./images/index/hz_11.jpg" alt="优贝口腔_时代天使隐形矫正">
          <h3>时代天使隐形矫正</h3>
        </li>

        <li>
          <img src="./images/index/hz_12.jpg" alt="优贝口腔_韩国奥齿泰种植系统">
          <h3>韩国奥齿泰种植系统</h3>
        </li>

        <li>
          <a href="#">查看更多</a>
        </li>

      </ul>


    </div>
  </section>

  <!-- 优贝特邀医师 -->
  <section class="inTeam w1200 clearfix">
    <div class="inIit tc">
      <span>TEAM</span>
      <p>
        <b>优贝特邀医师</b>
        至善 · 至美 · 至臻
      </p>
    </div>

    <!-- Swiper -->
    <div class="swiper-container gallery-top ">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="touxiang">
            <img src="./images/index/team_01.jpg" alt="优贝口腔_郭宏伟_综合科医生">
          </div>
          <div class="right fr">
            <div class="text">
              <h2>郭宏伟</h2>  &nbsp;/&nbsp; 综合科医生
              <br>
              <hr>
              <dt>口腔种植、正畸学医生</dt>
              <dt>无痕修复美牙技术首席设计师</dt>
              <dt>优贝口腔德国卡瓦技术带头人</dt>
              <dt>中华口腔医学会预防委员会会员</dt>
              <dt>国际种植牙协会(ITI)会员</dt>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="bottom clearfix">
            <div class="left fl">
              <a href="#">咨询医生</a>
              <a href="#">在线预约</a>
            </div>
            <div class="xiangmu">
              口腔美学修复设计，以及全瓷牙和烤瓷牙固定修复、活动义齿修复、牙齿美学修复、精密附着体义齿、复杂牙齿缺失再修复、口腔种植、口腔正畸等。
              <a href="#">
                <span>[ 详情 ]</span>
              </a>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="touxiang">
            <img src="./images/index/team_02.jpg" alt="优贝口腔_宋铁砾_口腔种植医师">
          </div>
          <div class="right fr">
            <div class="text">
              <h2>宋铁砾</h2>  &nbsp;/&nbsp; 口腔种植医师
              <br>
              <hr>
              <dt>北京大学口腔医学院博士</dt>
              <dt>北京同仁医院口腔科医生</dt>
              <dt>口腔医生俞光岩、张建国教授高徒</dt>
              <dt>优贝口腔德国卡瓦技术委员会委员</dt>
              <dt>北京口腔医学会颌面外科专委会委员</dt>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="bottom clearfix">
            <div class="left fl">
              <a href="#">咨询医生</a>
              <a href="#">在线预约</a>
            </div>
            <div class="xiangmu">
              牙齿种植、美容修复；口腔颌面外科疾病的诊断治疗，如口腔颌面部各种良恶性肿瘤的综合治疗，口腔颌面部先天或后天软硬组织缺损畸形的整复治疗等。
              <a href="#">
                <span>[ 详情 ]</span>
              </a>
            </div>
          </div>
        </div>


        <div class="swiper-slide">
          <div class="touxiang">
            <img src="./images/index/team_03.jpg" alt="优贝口腔_王迪_东城口腔医院院长">
          </div>
          <div class="right fr">
            <div class="text">
              <h2>王迪</h2>  &nbsp;/&nbsp; 东城口腔医院院长
              <br>
              <hr>
              <dt>优贝口腔特邀修复种植医师</dt>
              <dt>副主任医师</dt>
              <dt>北京东城区口腔医院院长 </dt>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="bottom clearfix">
            <div class="left fl">
              <a href="#">咨询医生</a>
              <a href="#">在线预约</a>
            </div>
            <div class="xiangmu">
              牙齿美容修复、种植牙、义齿、牙槽外科、智齿拔除等。
              <a href="#">
                <span>[ 详情 ]</span>
              </a>
            </div>
          </div>
        </div>


        <div class="swiper-slide">
          <div class="touxiang">
            <img src="./images/index/team_04.jpg" alt="优贝口腔_陈桦_正畸科主治医师">
          </div>
          <div class="right fr">
            <div class="text">
              <h2>陈桦</h2>  &nbsp;/&nbsp; 正畸科主治医师
              <br>
              <hr>
              <dt>知名口腔种植医师</dt>
              <dt>优贝口腔总监级种植医师</dt>
              <dt>优贝口腔集团副总经理</dt>
              <dt>美国Loma Linda University种植硕士大师班毕业</dt>
              <dt>AIC国际种植医师协会会员</dt>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="bottom clearfix">
            <div class="left fl">
              <a href="#">咨询医生</a>
              <a href="#">在线预约</a>
            </div>
            <div class="xiangmu">
              熟练掌握瑞典Nobel，瑞士ITI、德国Ankylos等种植系统。擅长全口疑难疾病的诊疗，具有口腔多学科联合诊疗能力。
              <a href="#">
                <span>[ 详情 ]</span>
              </a>
            </div>
          </div>
        </div>


        <div class="swiper-slide">
          <div class="touxiang">
            <img src="./images/index/team_06.jpg" alt="优贝口腔_徐涛_全科医生">
          </div>
          <div class="right fr">
            <div class="text">
              <h2>徐涛</h2>  &nbsp;/&nbsp; 全科医生
              <br>
              <hr>
              <dt>北京大学口腔医学院医学硕士</dt>
              <dt>金牌首席牙周病学医生</dt>
              <dt>中华口腔医学牙周病学会会员</dt>
              <dt>美国牙周病学会会员(AAP)</dt>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="bottom clearfix">
            <div class="left fl">
              <a href="#">咨询医生</a>
              <a href="#">在线预约</a>
            </div>
            <div class="xiangmu">
              口腔种植，牙周病，牙外伤等口腔综合治疗。
              <a href="#">
                <span>[ 详情 ]</span>
              </a>
            </div>
          </div>
        </div>


        <div class="swiper-slide">
          <div class="touxiang">
            <img src="./images/index/team_07.jpg" alt="优贝口腔_刘洋_主任医师、口腔学国际医生">
          </div>
          <div class="right fr">
            <div class="text">
              <h2>刘洋</h2>  &nbsp;/&nbsp; 主任医师、口腔学国际医生
              <br>
              <hr>
              <dt>北京大学口腔医学院医学硕士</dt>
              <dt>优贝口腔特邀医生</dt>
              <dt>金牌首席口腔根管治疗、口腔修复医生</dt>
              <dt>北京大学口腔医学院第三门诊部主任</dt>
              <dt>美国宾夕法尼亚大学牙科学院访问学者</dt>
              <dt>中华口腔医学会修复专委会委员</dt>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="bottom clearfix">
            <div class="left fl">
              <a href="#">咨询医生</a>
              <a href="#">在线预约</a>
            </div>
            <div class="xiangmu">
              显微疑难根管治疗，CEREC椅旁即刻修复，前牙美学设计与修复，在美学失败病例再修复、种植修复、综合治疗等领域造诣颇深。
              <a href="#">
                <span>[ 详情 ]</span>
              </a>
            </div>
          </div>
        </div>


        <div class="swiper-slide">
          <div class="touxiang">
            <img src="./images/index/team_08.jpg" alt="优贝口腔_张鹏_金牌首席儿童口腔学医生">
          </div>
          <div class="right fr">
            <div class="text">
              <h2>张鹏</h2>  &nbsp;/&nbsp; 金牌首席儿童口腔学医生
              <br>
              <hr>
              <dt>优贝口腔特邀医生</dt>
              <dt>北京儿童医院口腔科医生</dt>
              <dt>国际口腔正畸学会会员</dt>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="bottom clearfix">
            <div class="left fl">
              <a href="#">咨询医生</a>
              <a href="#">在线预约</a>
            </div>
            <div class="xiangmu">
              儿童口腔正畸序列治疗、儿童埋伏牙阻生牙的导萌牵引、儿童口腔疾病诊断及治疗方案设计、儿童口腔粘膜病的诊断与治疗等。
              <a href="#">
                <span>[ 详情 ]</span>
              </a>
            </div>
          </div>
        </div>

      </div>
      <!-- Add Arrows -->
      <div class="swiper-button-next swiper-button-white"></div>
      <div class="swiper-button-prev swiper-button-white"></div>
    </div>
    <div class="swiper-container gallery-thumbs">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="./images/index/team_001.png" alt="优贝口腔_郭宏伟_综合科医生">
        </div>
        <div class="swiper-slide">
          <img src="./images/index/team_002.png" alt="优贝口腔_宋铁砾_口腔种植医师">
        </div>
        <div class="swiper-slide">
          <img src="./images/index/team_003.png" alt="优贝口腔_王迪_东城口腔医院院长">
        </div>
        <div class="swiper-slide">
          <img src="./images/index/team_004.png" alt="优贝口腔_陈桦_正畸科主治医师">
        </div>
        <div class="swiper-slide">
          <img src="./images/index/team_006.png" alt="优贝口腔_徐涛_全科医生">
        </div>
        <div class="swiper-slide">
          <img src="./images/index/team_007.png" alt="优贝口腔_刘洋_主任医师、口腔学国际医生">
        </div>
        <div class="swiper-slide">
          <img src="./images/index/team_008.png" alt="优贝口腔_张鹏_金牌首席儿童口腔学医生">
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

    // 品牌资讯
    $('.inPrTit>li').mouseover(function () {
      var index = $(this).index()
      $(this).addClass('on').siblings().removeClass('on')
      $('.clone').eq(index).slideDown().siblings('.clone').slideUp()
    })

    // 服务项目
    var swiper = new Swiper('.inItem_swiper', {
      slidesPerView: 3,
      spaceBetween: 30,
      centeredSlides: true,
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

    // 齿科品牌中心
    $('.inPpTop>li').mouseover(function () {
      var index = $(this).index()
      $(this).addClass('on').siblings().removeClass('on')
      $('.inPpCon>ul').eq(index).show().siblings().hide()
    })

    // 优贝特邀医师
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 0,
      slidesPerView: 6,
      loop: true,
      freeMode: true,
      loopedSlides: 5, //looped slides should be the same
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      loop: true,
      loopedSlides: 5, //looped slides should be the same
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs,
      },
      // autoplay: {
      //   delay: 2500,
      //   disableOnInteraction: false,
      // }
    });













  </script>


</body>

</html>