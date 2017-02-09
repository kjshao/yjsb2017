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
      var pass;
      var np = $("#totalpage").text();
      pass = {};
      pass.num = num;
      $("#page-info").html("第 " + num + " 页 / 共 " + np + " 页，共" + nt + "条记录");
      $.ajax({
        method:'POST',
        url:'zhaoshengDB.php',
        //async:true,
        data: pass
      }).done(function( msg ){
        $("#mainTable").html( msg );
      });
   }); 
  }
////////////////////////////////////////////
// init page while loading
  var nt = $("#total").text();
  var np = $("#totalpage").text();
  //alert(nt);
  //alert(np);
  init_page(np);
  $("#page-info").html("第 1 页 / 共 " + np + " 页，共" + nt + "条记录");
////////////////////////////////////////////
});
