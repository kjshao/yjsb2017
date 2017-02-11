$(document).ready(function($) {
////////////////////////////////////////////
// init page while loading
  var nt = $("#total").text();
  var np = $("#totalpage").text();
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
      var nt = $("#total").text();
      var tid = $("#tid").text();
      var myurl = $("#item").text().trim();
      pass = {};
      pass.num = num;
      pass.tid = tid;
      pass.item = myurl;
      $("#page-info").html("第 " + num + " 页 / 共 " + np + " 页，共" + nt + "条记录");
      $.ajax({
        method:'POST',
        url:'db.php',
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
      var myurl = $("#item").text().trim();
      pass = {};
      pass.tid = i;
      pass.item = myurl;
      $.ajax({
        method:'POST',
        url:'link.php',
        async:true,
        dataType:'json',
        data: pass
      }).done(function( msg ){
        $("#mainTable").html( msg[0] );
        $("#tid").html(i);
        $("#total").html( msg[1] );
        $("#totalpage").html( msg[2] );
        init_page( msg[2] );
        $("#page-info").html("第 1 页 / 共 " + msg[2] + " 页，共" + msg[1] + "条记录");
      });
    }
  });
////////////////////////////////////////////
  $(".itemlink").click(function(){
    var id = $(this).attr('id');
    var table = $('#tableName').text();
    var title = $(this).text();
    var pass;
    pass = {};
    pass.id = id;
    pass.table = table;
    $.ajax({
      method:'POST',
      url:'test.php',
      async:true,
      dataType:'json',
      data: pass
    }).done(function( msg ){
      $("#title").html( title );
      $("#time").html( msg[0] );
      $("#mainDiv").html( msg[1] );
    });
  });
////////////////////////////////////////////
});
