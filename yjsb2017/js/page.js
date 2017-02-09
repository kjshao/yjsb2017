$(document).ready(function($) {
////////////////////////////////////////////
// init page while loading
  var nt = $("#total").text();
  var np = $("#totalpage").text();
  //alert(nt);
  //alert(np);
  init_page(np);
  $("#page-info").html("第 1 页 / 共 " + np + " 页，共" + nt + "条记录");
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
      var tid = $("#tid").text();
      pass = {};
      pass.num = num;
      pass.tid = tid;
      $("#page-info").html("第 " + num + " 页 / 共 " + np + " 页，共" + nt + "条记录");
      $.ajax({
        method:'POST',
        url:'zhaoshengDB.php',
        async:true,
        data: pass
      }).done(function( msg ){
        $("#mainTable").html( msg );
      });
   }); 
  }
////////////////////////////////////////////
  $(".navlink").click(function(){
    var tid = $("#tid").text();
    var i = $(this).index();
    i = parseInt(i) + 1;
    if ( i != tid ) {
      var pass;
      var myurl = $("#item").text().trim() + 'Link.php';
      pass = {};
      pass.tid = i;
      $.ajax({
        method:'POST',
        url:myurl,
        async:true,
        dataType:'json',
        data: pass
      }).done(function( msg ){
        $("#mainTable").html( msg[0] );
        $("#tid").html(i);
        $("#total").html( msg[1] );
        $("#totalpage").html( msg[2] );
        init_page( msg[2] );
      });
    }
  });
});
