$(document).ready(function() {
  console.log('loaded')
  $('.row').on('click',function() {
    $(this).next('.row-content').toggleClass('open').siblings().removeClass('open');
  })

  $('.footer-trigger').on('click',function() {
    $('footer').toggleClass('open')
  })
})
