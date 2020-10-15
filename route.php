<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>来院路线</title>
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/route.css">

  <script src="<?php echo JS_PATH ?>/jquery-3.5.1.min.js"></script>
</head>

<body>
  <!-- 头部 logo -->
  <?php include './public/header.php';?>

  <!-- 地图 -->
  <div class="map">
    <div id="container"></div>

    <div class="map_mask innerbox">
      <ul>
        <li>
          <h1 class="selected"><span></span>优贝口腔北京昌平旗舰店</h1>
          <p >北京市昌平区南环中路24号</p>
          <p>400-1671818</p>
        </li>

        <li>
          <h1><span></span>优贝口腔北京良乡旗舰店</h1>
          <p>北京市房山区拱辰南大街93号</p>
          <p>010-57036933</p>
        </li>

        <li>
          <h1><span></span>优贝口腔北京门头沟旗舰店</h1>
          <p>滨河西区皓月园3号楼滨河路117号</p>
          <p>010-57036933</p>
        </li>
        <li>
          <h1><span></span>怀柔优贝口腔</h1>
          <p>北京市怀柔区青春路5号</p>
          <p>010-69627991</p>
        </li>
        <li>
          <h1><span></span>优贝口腔(昌平鼓楼店)</h1>
          <p>北京市昌平区鼓楼北街商业综合楼101</p>
          <p>010-61770404</p>
        </li>
        <li>
          <h1><span></span>优贝口腔(密云店)</h1>
          <p>北京市密云区鼓楼西大街1号</p>
          <p>4001615858</p>
        </li>
      </ul>
    </div>
  </div>

  <div class="hospital">
    <div class="hos_img fl shift_right ">
      <div class="hos_box fr">
        <img  src="<?php echo IMG_PATH ?>/index/inhj_01.jpg" alt="优贝口腔门店">
        <div class="code">
          <h2>如果您想了解最新相关口腔医疗问题及牙护资讯</h2>
          <h2>请关注下方二维码</h2>
          <div class="code_list">
            <div class="code_list_img">
              <img src="<?php echo IMG_PATH ?>/route/wximg.jpg" alt="优贝口腔_牙科医生微信号">
              <h3>随时咨询牙科医生</h3>
            </div>

            <div class="code_list_img">
              <img src="<?php echo IMG_PATH ?>/route/gongzhonghao.jpg" alt="优贝口腔_微信公众号">
              <h3>微信公众号</h3>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="hos_text fr shift_left">
      <div class="hos_list fl">
        <div class="list">
          <h1><span><img src="<?php echo IMG_PATH ?>/route/metro.png" alt="优贝口腔_地铁路线"></span>地铁路线</h1>
          <p>昌平（地铁站 C口） 开往昌平西山口 &nbsp;&nbsp; 步行1.2公里</p>
        </div>

        <div class="list">
          <h1><span><img src="<?php echo IMG_PATH ?>/route/transit.png" alt="优贝口腔_公交路线"></span>公交路线</h1>
          <p>345路、345路区间、 357路、559路、885路、昌1路、昌2路、昌67路、昌68路 （南环中路下车）</p>
        </div>

        <div class="list">
          <h1><span><img src="<?php echo IMG_PATH ?>/route/automobile.png" alt="优贝口腔_驾车路线"></span>驾车路线</h1>
          <p>北京市昌平区南环中路24号</p>
        </div>


      </div>
    </div>
  </div>

  <div class="hospital hide">
    <div class="hos_img fl shift_right ">
      <div class="hos_box fr">
        <img  src="<?php echo IMG_PATH ?>/index/inhj_01.jpg" alt="优贝口腔门店">
        <div class="code">
          <h2>如果您想了解最新相关口腔医疗问题及牙护资讯</h2>
          <h2>请关注下方二维码</h2>
          <div class="code_list">
            <div class="code_list_img">
              <img src="<?php echo IMG_PATH ?>/route/wximg.jpg" alt="优贝口腔_牙科医生微信号">
              <h3>随时咨询牙科医生</h3>
            </div>

            <div class="code_list_img">
              <img src="<?php echo IMG_PATH ?>/route/gongzhonghao.jpg" alt="优贝口腔_微信公众号">
              <h3>微信公众号</h3>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="hos_text fr shift_left">
      <div class="hos_list fl">
        <div class="list">
          <h1><span><img src="<?php echo IMG_PATH ?>/route/metro.png" alt="优贝口腔_地铁路线"></span>地铁路线</h1>
          <p>房山线良乡南关地铁站（A2口）&nbsp;&nbsp; 步行166米 </p>
        </div>

        <div class="list">
          <h1><span><img src="<?php echo IMG_PATH ?>/route/transit.png" alt="优贝口腔_公交路线"></span>公交路线</h1>
          <p>F15路专线、F39路</p>
          <p>（地铁良乡南关站北 &nbsp;&nbsp;公交站下车）</p>
        </div>

        <div class="list">
          <h1><span><img src="<?php echo IMG_PATH ?>/route/automobile.png" alt="优贝口腔_驾车路线"></span>驾车路线</h1>
          <p>北京市房山区拱辰南大街93号</p>
        </div>


      </div>
    </div>
  </div>

  <div class="hospital hide">
    <div class="hos_img fl shift_right ">
      <div class="hos_box fr">
        <img  src="<?php echo IMG_PATH ?>/index/inhj_01.jpg" alt="优贝口腔门店">
        <div class="code">
          <h2>如果您想了解最新相关口腔医疗问题及牙护资讯</h2>
          <h2>请关注下方二维码</h2>
          <div class="code_list">
            <div class="code_list_img">
              <img src="<?php echo IMG_PATH ?>/route/wximg.jpg" alt="优贝口腔_牙科医生微信号">
              <h3>随时咨询牙科医生</h3>
            </div>

            <div class="code_list_img">
              <img src="<?php echo IMG_PATH ?>/route/gongzhonghao.jpg" alt="优贝口腔_微信公众号">
              <h3>微信公众号</h3>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="hos_text fr shift_left">
      <div class="hos_list fl">
        <div class="list">
          <h1><span><img src="<?php echo IMG_PATH ?>/route/metro.png" alt="优贝口腔_地铁路线"></span>地铁路线</h1>
          <p>金安桥(地铁站)&nbsp;&nbsp; M11路（百花山站方向）&nbsp;&nbsp; 侯庄子下车 </p>
        </div>

        <div class="list">
          <h1><span><img src="<?php echo IMG_PATH ?>/route/transit.png" alt="优贝口腔_公交路线"></span>公交路线</h1>
          <p>891路内环、891路外环、941路、941路快车、960路、977路、992路、快速直达专线137路、快速直达专线139路、快速直达专线204路  &nbsp;&nbsp; 承泽苑(公交站下车)</p>
        </div>

        <div class="list">
          <h1><span><img src="<?php echo IMG_PATH ?>/route/automobile.png" alt="优贝口腔_驾车路线"></span>驾车路线</h1>
          <p>滨河西区皓月园3号楼滨河路117号</p>
        </div>


      </div>
    </div>
  </div>

  <div class="hospital hide">
    <div class="hos_img fl shift_right ">
      <div class="hos_box fr">
        <img  src="<?php echo IMG_PATH ?>/index/inhj_01.jpg" alt="优贝口腔门店">
        <div class="code">
          <h2>如果您想了解最新相关口腔医疗问题及牙护资讯</h2>
          <h2>请关注下方二维码</h2>
          <div class="code_list">
            <div class="code_list_img">
              <img src="<?php echo IMG_PATH ?>/route/wximg.jpg" alt="优贝口腔_牙科医生微信号">
              <h3>随时咨询牙科医生</h3>
            </div>

            <div class="code_list_img">
              <img src="<?php echo IMG_PATH ?>/route/gongzhonghao.jpg" alt="优贝口腔_微信公众号">
              <h3>微信公众号</h3>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="hos_text fr shift_left">
      <div class="hos_list fl">
        <div class="list">
          <h1><span><img src="<?php echo IMG_PATH ?>/route/metro.png" alt="优贝口腔_地铁路线"></span>地铁路线</h1>
          <p>地铁13号线（西直门方向） 光熙门   下车（A西口出）&nbsp;&nbsp; 916路快车（怀柔汽车站方向）&nbsp;&nbsp; 明珠广场   下车 </p>
        </div>

        <div class="list">
          <h1><span><img src="<?php echo IMG_PATH ?>/route/transit.png" alt="优贝口腔_公交路线"></span>公交路线</h1>
          <p>916路快车、H55路、H58路、H58路青龙峡、H61路、H62路、H63路  &nbsp;&nbsp; 明珠广场(公交站下车)</p>
        </div>

        <div class="list">
          <h1><span><img src="<?php echo IMG_PATH ?>/route/automobile.png" alt="优贝口腔_驾车路线"></span>驾车路线</h1>
          <p>北京市怀柔区青春路5号</p>
        </div>


      </div>
    </div>
  </div>


  <div class="hospital hide">
    <div class="hos_img fl shift_right ">
      <div class="hos_box fr">
        <img  src="<?php echo IMG_PATH ?>/index/inhj_01.jpg" alt="优贝口腔门店">
        <div class="code">
          <h2>如果您想了解最新相关口腔医疗问题及牙护资讯</h2>
          <h2>请关注下方二维码</h2>
          <div class="code_list">
            <div class="code_list_img">
              <img src="<?php echo IMG_PATH ?>/route/wximg.jpg" alt="优贝口腔_牙科医生微信号">
              <h3>随时咨询牙科医生</h3>
            </div>

            <div class="code_list_img">
              <img src="<?php echo IMG_PATH ?>/route/gongzhonghao.jpg" alt="优贝口腔_微信公众号">
              <h3>微信公众号</h3>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="hos_text fr shift_left">
      <div class="hos_list fl">
        <div class="list">
          <h1><span><img src="<?php echo IMG_PATH ?>/route/metro.png" alt="优贝口腔_地铁路线"></span>地铁路线</h1>
          <p>昌平(地铁站) 开往昌平西山口 &nbsp;&nbsp; 步行524米 </p>
        </div>

        <div class="list">
          <h1><span><img src="<?php echo IMG_PATH ?>/route/transit.png" alt="优贝口腔_公交路线"></span>公交路线</h1>
          <p>昌66路&nbsp;&nbsp; 区医院(公交站下车)</p>
          <p>昌52路&nbsp;&nbsp; 鼓楼南大街(公交站下车)</p>
        </div>

        <div class="list">
          <h1><span><img src="<?php echo IMG_PATH ?>/route/automobile.png" alt="优贝口腔_驾车路线"></span>驾车路线</h1>
          <p>北京市昌平区鼓楼北街商业综合楼101</p>
        </div>


      </div>
    </div>
  </div>

  <div class="hospital hide">
    <div class="hos_img fl shift_right ">
      <div class="hos_box fr">
        <img  src="<?php echo IMG_PATH ?>/index/inhj_01.jpg" alt="优贝口腔门店">
        <div class="code">
          <h2>如果您想了解最新相关口腔医疗问题及牙护资讯</h2>
          <h2>请关注下方二维码</h2>
          <div class="code_list">
            <div class="code_list_img">
              <img src="<?php echo IMG_PATH ?>/route/wximg.jpg" alt="优贝口腔_牙科医生微信号">
              <h3>随时咨询牙科医生</h3>
            </div>

            <div class="code_list_img">
              <img src="<?php echo IMG_PATH ?>/route/gongzhonghao.jpg" alt="优贝口腔_微信公众号">
              <h3>微信公众号</h3>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="hos_text fr shift_left">
      <div class="hos_list fl">
        <div class="list">
          <h1><span><img src="<?php echo IMG_PATH ?>/route/metro.png" alt="优贝口腔_地铁路线"></span>地铁路线</h1>
          <p>昌平(地铁站) 开往昌平西山口 &nbsp;&nbsp; 步行524米 </p>
        </div>

        <div class="list">
          <h1><span><img src="<?php echo IMG_PATH ?>/route/transit.png" alt="优贝口腔_公交路线"></span>公交路线</h1>
          <p>密37-50路联运、密38蔡甸东沟专线、密38路、密50路、密51路、密52路、密53路 大剧院东口(公交站下车)</p>
        </div>

        <div class="list">
          <h1><span><img src="<?php echo IMG_PATH ?>/route/automobile.png" alt="优贝口腔_驾车路线"></span>驾车路线</h1>
          <p>北京市密云区鼓楼西大街1号</p>
        </div>
      </div>
    </div>
  </div>

  <!-- 菜单导航 -->
  <?php include './public/menu_nav.php';?>

  <!--优贝常见牙齿问题 -->
  <section class="section">
    <div class="CdDental w1200">
      <div class="picimg">
        <a href="#" class="ban1"><img src="<?php echo IMG_PATH ?>/route/picimg_1.jpg" alt="优贝口腔_常见牙齿问题"></a>
        <a href="#" class="ban2">烤瓷牙修复</a>
        <a href="#" class="ban3">门牙大怎么办</a>
        <a href="#" class="ban4">牙缝大怎么办</a>
        <a href="#" class="ban5">蛀牙怎么办</a>
        <a href="#" class="ban6">隐形矫正</a>
        <a href="#" class="ban7">牙齿矫正</a>
        <a href="#" class="ban8">龅牙矫正</a>
        <a href="#" class="ban9">牙齿脱落</a>
        <a href="#" class="ban10">镶牙</a>
        <a href="#" class="ban11">门牙断了一半怎么补</a>
        <a href="#" class="ban12">牙齿不齐</a>
        <a href="#" class="ban13">3D隐形矫正</a>
        <a href="#" class="ban14">牙齿缺损</a>
        <a href="#" class="ban15">牙疼牙痛</a>
        <a href="#" class="ban16">牙贴面</a>
        <a href="#" class="ban17">这里没有我的问题<img src="<?php echo IMG_PATH ?>/route/ban17.jpg" alt="优贝口腔_直接咨询">直接咨询</a>
      </div>

    </div>
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
            <span>*</span><b>电&nbsp;&nbsp;&nbsp;&nbsp;话 ：</b> <input type="text" name="phone_ljyy" id="phone_ljyy" placeholder="请输入电话">
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


  <script src="https://webapi.amap.com/maps?v=1.4.15&key=e6bd1d1580e1dbb6a33a1a51da4bbb99"></script>

  <script src="<?php echo JS_PATH ?>/public.js"></script>
  <script src="<?php echo JS_PATH ?>/laydate.js"></script>

  <script>

    function changeMap(x,y){
          //地图初始化时，在地图上添加一个marker标记,鼠标点击marker可弹出自定义的信息窗体
          var map = new AMap.Map("container", {
          // timeout: 100,
          // GeoLocationFirst: false,
          // maximumAge: 100, //定位结果缓存0毫秒，默认：0
          resizeEnable: true, //是否监控地图容器尺寸变化
          zoom: 17, //初始化地图层级
          center: [x, y] //初始化地图中心点
        });
        addMarker();

        //添加marker标记
        function addMarker() {
          map.clearMap();
          var marker = new AMap.Marker({
            map: map,
            center: [x, y] //初始化地图中心点

          });
        // 设置点标记的动画效果，此处为弹跳效果
        marker.setAnimation('AMAP_ANIMATION_BOUNCE');
        }
    }

    changeMap(116.231524, 40.212314)

    $('.map_mask>ul>li').click(function(){
      $(this).find('h1').addClass('selected').parents('li').siblings('li').find('h1').removeClass('selected')
      var index = $(this).index()
      $('.hospital').eq(index).show().siblings('.hospital').hide()
      if(index==0){
        changeMap(116.231524, 40.212314)
      }else if(index==1) {
        changeMap(116.141645, 39.724383)
      }else if(index==2) {
        changeMap(116.111757, 39.934973)
      }else if(index==3) {
        changeMap(116.630452, 40.313929)
      }else if(index==4) {
        changeMap(116.233085, 40.225496)
      }else if(index==5) {
        changeMap(116.84539, 40.377032)
      }
    })



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