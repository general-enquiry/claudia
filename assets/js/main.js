$(document).ready(function() {
  console.log('loaded')
  $('.row').on('click',function() {
    $(this).next('.row-content').toggleClass('open').siblings().removeClass('open');
  })

  $('.footer-trigger').on('click',function() {
    $('footer').toggleClass('open')
  })

  $('.index-trigger').on('click', function() {
    $('body').addClass('open');
  })
  $('.index-close').on('click', function() {
    $('body').removeClass('open');
  })
})
