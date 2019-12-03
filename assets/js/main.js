$(document).ready(function() {
  console.log('loaded')
  $('.row').on('click',function() {
    $(this).next('.row-content').slideToggle();
  })
  $('.footer-trigger').on('click',function() {
    $('footer').toggleClass('open')
  })
})
