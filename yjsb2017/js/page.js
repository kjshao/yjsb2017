$(document).ready(function($) {
////////////////////////////////////////////
  function init_page(x) {
   return $('#page-selection').bootpag({
    total: x,
    page: 1,
    maxVisible: 5,
    leaps: true,
    firstLastUse: true,
    first: '首页',
    last: '末页',
    wrapClass: 'pagination pagination-sm',
    activeClass: 'active',
    disabledClass: 'disabled',
    nextClass: 'next',
    prevClass: 'prev',
    lastClass: 'last',
    firstClass: 'first'
    }).on("page", function(event, num){
      $("#page-info").html("第 " + num + " 页 / 共 " + np + " 页");
   }); 
  }
////////////////////////////////////////////
// init page while loading
  var np = 20;
  init_page(np);
  $("#page-info").html("第 1 页 / 共 " + np + " 页");
////////////////////////////////////////////
});