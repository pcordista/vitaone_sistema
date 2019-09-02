$(document).ready(function() {
    $('.dropdown-toggle').dropdown();
    $('.collapse').collapse('hide')
})

$menuLeft = $('.pushmenu-left');
$nav_list = $('#sidebartoggle');

$nav_list.click(function () {
  $(this).toggleClass('active');
  $('.pushmenu-push').toggleClass('pushmenu-push-toright');
  $menuLeft.toggleClass('pushmenu-open');

  if ($(this).hasClass('active')) {
    $('#sidebartoggle').html('<i class="material-icons">close</i>');
  } else {

    $('#sidebartoggle').html('<i class="material-icons">menu</i>');
  }
});

$(".pushmenu-close").click(function () {
  $nav_list.toggleClass('active');
  $('.pushmenu-push').toggleClass('pushmenu-push-toright');
  $menuLeft.toggleClass('pushmenu-open');

  if ($(this).hasClass('active')) {
    $('#sidebartoggle').html('<i class="material-icons">close</i>');
  } else {

    $('#sidebartoggle').html('<i class="material-icons">menu</i>');
  }
});