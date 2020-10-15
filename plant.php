<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>口腔种植</title>
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/plant.css">

  <script src="<?php echo JS_PATH ?>/jquery-3.5.1.min.js"></script>
</head>

<body>
  <!-- 头部 logo -->
  <?php include './public/header.php';?>

  <!-- banner  -->
  <div class="banner">
    <img src="<?php echo IMG_PATH ?>/article/banner_03.jpg" alt="优贝口腔_口腔种植">
  </div>

  <!-- 菜单导航 -->
  <?php include './public/menu_nav.php';?>

  <!-- 您知道吗？ -->
  <section class="know w1200">
    <div class="know_img fl">
      <img src="<?php echo IMG_PATH ?>/plant/know_01.jpg" alt="">
    </div>
    <div class="know_text fr">
      <div class="know_text_box">
        <h2>您知道吗？</h2>
        <div class="know_text_boxs">
          <p>别让牙齿毁了你的生活</p>
        </div>
        <div class="know_text_wzbox">
          <p>我国有3亿多人存在不同程度的牙齿缺失，严重影响到正常进食。咀嚼功能减退，连累到消化系统，更可能诱发心血管疾病和记忆力减退等多种疾病，影响身心健康。</p>
        </div>
      </div>
    </div>
    <ul class="know_list">
      <li><img src="<?php echo IMG_PATH ?>/plant/know_list_01.png" alt=""></li>
      <li><img src="<?php echo IMG_PATH ?>/plant/know_list_02.png" alt=""></li>
      <li><img src="<?php echo IMG_PATH ?>/plant/know_list_03.png" alt=""></li>

    </ul>

  </section>

  <!-- 细数牙齿缺失7宗罪 -->
  <section class="defect">
    <div class="defect_box">
      <div class="defect_box_fl fl">
        <h2>细数牙齿缺失<span> 六宗罪</span></h2>
        <ul class="defect_box_list">
          <li><span></span>咀嚼无力</li>
          <li><span></span>牙周疾病</li>
          <li><span></span>容易衰老</li>
          <li><span></span>消化不良</li>
          <li><span></span>记忆衰退</li>
          <li><span></span>恋爱社交</li>
        </ul>
        <p>COUNT SIX CRIMES OF MISSING TEETH</p>
      </div>
      <div class="defect_box_fr fr">
        <img src="<?php echo IMG_PATH ?>/plant/defect_02.jpg" alt="">
      </div>
    </div>

  </section>

  <!-- 牙齿缺失怎么办？ -->
  <section class="missing_teeth w1200">
    <div class="title tc">
      <h3>牙齿缺失怎么办？</h3>
    </div>

    <ul class="missing_teeth_box">
      <li>
        <img src="<?php echo IMG_PATH ?>/plant/missing_teeth_01.png" alt="">
        <h2>活动假牙</h2>
        <p>俗称“钢丝钩”，通过卡环“勾住”剩余牙齿来稳定假牙，基托连接人工牙来修复缺失牙，需要每天拿下来清洗的假牙。</p>
      </li>

      <li>
        <img src="<?php echo IMG_PATH ?>/plant/missing_teeth_02.png" alt="">
        <h2>种植牙</h2>
        <p>在牙龈上开一个2-3毫米的微创口，将种植体（人工牙根）植入缺牙处的牙槽骨上，然后在植体上粘接一颗逼真的修复体（人工牙冠），一颗种植牙就诞生了。</p>
      </li>

      <li>
        <img src="<?php echo IMG_PATH ?>/plant/missing_teeth_03.png" alt="">
        <h2>固定假牙</h2>
        <p>借助旁边的2个（甚至更多）牙齿作为桥墩，在桥墩上面架一座牙齿的桥梁，恢复咀嚼功能。</p>
      </li>

    </ul>
  </section>

  <!-- 对比 -->
  <sections class="contrast w1200">
    <div class="title tc">
      <h3>修复方式的差异化</h3>
    </div>
    <div class="contrast_box">
      <ul class="contrast_box_top">
        <li>修复方式</li>
        <li>活动假牙</li>
        <li>固定假牙</li>
        <li>种植牙</li>
      </ul>

      <ul class="contrast_box_con">
        <li><span>优点</span></li>
        <li><b>设计灵活，经济实惠。</b></li>
        <li>无需每天取下来清洗，稳定性较好，咀嚼功能强。</li>
        <li>媲美天然牙齿，咀嚼功能强，舒适 稳定，维护得当可使用终身。</li>
      </ul>

      <ul class="contrast_box_con">
        <li><span>缺点</span></li>
        <li>体积大，带上有异物感，咀嚼效率低，饭后或睡前都需取下刷洗，勾坏邻牙。</li>
        <li><p>需要磨除邻侧健康的牙体组织，容易引起牙髓炎等疾病。</p></li>
        <li><p>价格相对高，对医生技术要求高。</p></li>
      </ul>

      <ul class="contrast_box_con">
        <li><span>使用寿命</span></li>
        <li><b>3-5年</b></li>
        <li><b>5-10年</b></li>
        <li><b>可达50年</b></li>
      </ul>

    </div>
  </sections>

  <!-- 选择种植牙的7大理由 -->
  <sections class="choice ">
    <div class="title tc">
      <h3>选择种植牙的4大理由</h3>
    </div>
    <ul class="choice_box w1200">
      <li>
        <img src="<?php echo IMG_PATH ?>/plant/choice_box_01.jpg" alt="">
        <h2>坚固美观</h2>
        <p>人工牙根与牙槽骨紧密结合，使种植牙像真牙一样扎根于口腔，具有很强的固位力与稳定性，其色泽也与自然牙保持一致。</p>
      </li>

      <li>
        <img src="<?php echo IMG_PATH ?>/plant/choice_box_02.jpg" alt="">
        <h2>不伤邻牙</h2>
        <p>种植牙是在缺牙处的牙槽骨内植入种植体，以此为基础修复缺失牙，不用磨旁边的健康牙齿，因此不会损伤邻牙。</p>
      </li>

      <li>
        <img src="<?php echo IMG_PATH ?>/plant/choice_box_03.jpg" alt="">
        <h2>使用寿命久</h2>
        <p>优贝严格筛选种植材料，每一颗种植体均保证优质品质，加之终身维护，让每一颗种植牙都拥有更长的使用寿命。</p>
      </li>


      <li>
        <img src="<?php echo IMG_PATH ?>/plant/choice_box_04.jpg" alt="">
        <h2>终身维护</h2>
        <p>优贝术后管理独树一帜，用一个团队去负责顾客种植牙；基本的医生叮嘱，定期回访，口腔护理讲座，24小时医生在线等。</p>
      </li>

    </ul>
  </sections>

  <!-- 全球4大种植体品牌 种植效果有保障 -->
  <sections class="brand">
    <div class="title tc">
      <h3>全球4大种植体品牌 种植效果有保障</h3>
    </div>
    <ul class="brand_box w1200">
      <li>
        <img src="<?php echo IMG_PATH ?>/plant/brand_01.jpg" alt="">
        <p>瑞士ITI系统</p>
        <p>优势：较稳定的系统，愈合时间短，立种立用。<a href="#">[点击了解]</a></p>
      </li>

      <li>
        <img src="<?php echo IMG_PATH ?>/plant/brand_02.jpg" alt="">
        <p>德国Bego系统</p>
        <p>优势：系统成熟可靠，生物相容 ，独特设计舒适美观。<a href="#">[点击了解]</a></p>
      </li>

      <li>
        <img src="<?php echo IMG_PATH ?>/plant/brand_03.jpg" alt="">
        <p>韩国OSSTEM系统</p>
        <p>优势：为东方人量身打造，愈合又快又稳，适应症广。<a href="#">[点击了解]</a></p>
      </li>

      <li>
        <img src="<?php echo IMG_PATH ?>/plant/brand_04.jpg" alt="">
        <p>瑞典Nobel种植体</p>
        <p>优势：立拔立种、 稳定固位、 形态自然、 安全舒适。<a href="#">[点击了解]</a></p>
      </li>
    </ul>

  </sections>

  <!-- 优贝种植牙体系5大种植步骤 立刻长新牙 -->
  <sections class="new_teethnd">
    <div class="title tc">
      <h3>优贝种植牙体系5大种植步骤 立刻长新牙</h3>
    </div>
    <ul class="new_teethnd_list w1200">
      <li><img src="<?php echo IMG_PATH ?>/plant/new_teethnd_01.png" alt=""><p>术前详细口腔检查</p></li>
      <li><img src="<?php echo IMG_PATH ?>/plant/new_teethnd_02.png" alt=""> <p>ICX-Magellen数字化可视</p></li>
      <li><img src="<?php echo IMG_PATH ?>/plant/new_teethnd_03.png" alt=""> <p>3D手术导板打印</p></li>
      <li><img src="<?php echo IMG_PATH ?>/plant/new_teethnd_04.png" alt=""> <p>3D导航种植设计安全种牙</p></li>
      <li><img src="<?php echo IMG_PATH ?>/plant/new_teethnd_05.png" alt=""> <p>植齿一次 幸福一生</p></li>
    </ul>
  </sections>


  <!-- 优贝口腔医院 拒绝种植风险 -->
  <sections class="reject_risk">
    <div class="title tc">
      <h3>优贝口腔医院 拒绝种植风险</h3>
    </div>

    <div class="reject_risk_box w1200">
      <div class="reject_risk_box_list fl">
        <img src="<?php echo IMG_PATH ?>/plant/reject_risk_01.jpg" alt="">
      </div>
      <div class="reject_risk_box_list fl">
        <h2>严谨检查 精确方案</h2>
        <p>术中少量出血，术后只留下微小创口，减少感染风险，将创伤降到较低。</p>
      </div>
      <div class="reject_risk_box_list fl">
        <img src="<?php echo IMG_PATH ?>/plant/reject_risk_02.jpg" alt="">
      </div>
      <div class="reject_risk_box_list fl">
        <h2>严格消毒 杜绝感染</h2>
        <p>独立专用包装，彻底高温消毒、灭菌，全力保障口腔诊疗器械达到国际消毒灭菌标准。</p>
      </div>
      <div class="reject_risk_box_list fl">
        <img src="<?php echo IMG_PATH ?>/plant/reject_risk_03.jpg" alt="">
      </div>
      <div class="reject_risk_box_list fl">
        <h2>万级层流 无菌环境</h2>
        <p>实行“一人一用一灭菌，一次一用全销毁”的绿色消毒理念，确保全程无菌操作。</p>
      </div>
      <div class="reject_risk_box_list fl">
        <img src="<?php echo IMG_PATH ?>/plant/reject_risk_04.jpg" alt="">
      </div>
      <div class="reject_risk_box_list fl">
        <h2>国际认证 品质唯真</h2>
        <p>每颗种植体都附有全球唯一数字编码，通过该编码能够追溯至源头，从根本保障，确保安全。</p>
      </div>
      <div class="reject_risk_box_list fl">
        <img src="<?php echo IMG_PATH ?>/plant/reject_risk_05.jpg" alt="">
      </div>
      <div class="reject_risk_box_list fl">
        <h2>万级层流 无菌环境</h2>
        <p>优贝口腔医院独立VIP贵宾诊室，“一医一诊室”私密就诊，种牙，也能成为一种享受。</p>
      </div>
    </div>
  </sections>


  <!-- footer 模块 -->
  <?php include './public/footer.php';?>

  <script src="<?php echo JS_PATH ?>/public.js"></script>

  <script>


  </script>


</body>

</html>