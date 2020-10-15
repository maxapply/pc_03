// 右侧导航
$('.active').hover(function () {
  $('.call').css('opacity', '1')
}, function () {
  $('.call').css('opacity', '0')
})




// 底部按钮
$('.ys_rwm_list').hover(function () {
  $('.ys_wx>img').css('transform', 'scale(1)')
}, function () {
  $('.ys_wx>img').css('transform', 'scale(0)')
})



$('.yy_gzh_list').hover(function () {
  $('.yy_gzh_img>img').css('transform', 'scale(1)')
}, function () {
  $('.yy_gzh_img>img').css('transform', 'scale(0)')
})




setInterval(function () {
  $('.btn_bar>a').eq(0).addClass('zx_active')
}, 500)


setInterval(function () {
  $('.btn_bar>a').eq(0).removeClass('zx_active')
}, 1000)





// 滚动大于200 制顶
$(function () {
  function showBox() {
    $(document).scrollTop() >= 300 ? $('.zd').fadeIn() : $('.zd').fadeOut()
  }
  // dom渲染完成后判断滚动条卷起距离大于200 ？显示 ：隐藏
  showBox()
  // 滚动的时候显示
  $(window).scroll(function () {
    showBox()
  })
})
// 点击置顶， 卷起距离为0
$('.zd').click(function () {
  $('body,html').animate({
    scrollTop: 0
  }, 1500)
})



// 关闭弹出框
$('.gb').click(function () {
  $('.tck').addClass('off')
})



// 底部固定栏 手机号 校验
$('.input>a').click(function () {
  if (!(/^1[3456789]\d{9}$/.test($('.mf_tel').val()))) {
    alert('请您输入正确的号码，手机号码请直接输入')
  } else {
    console.log('输入正确');
  }
})



// 弹出框 手机号 校验
$('.subCen_btn').click(function () {





  if (!(/^1[3456789]\d{9}$/.test($('#LR_tel').val()))) {
    alert('请您输入正确的号码，手机号码请直接输入')
  } else {
    console.log('输入手机号正确');
  }




})








// footer底部栏  姓名   手机号  验证

$('#LR_button1').click(function () {



  // 姓名验证
  if (/^([\u4e00-\u9fa5]){2,5}$/.test($('#LR_name').val())) {

    console.log('输入姓名正确');
    // 手机号  验证
    tel()

  } else {
    alert('请您输入正确的姓名')
  }


  // 手机号  验证
  function tel() {
    if (!(/^1[3456789]\d{9}$/.test($('.phone').val()))) {
      alert('请您输入正确的号码，手机号码请直接输入')
    } else {
      console.log('输入正确');
    }
  }

})