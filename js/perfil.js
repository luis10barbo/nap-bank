$(".logo").click(() => {
  $("#mySidenav").css({ "width": "205px" })
  $(".logo").css({ "boxShadow": "none" })
})
$(".closebtn").click(() => {
  $("#mySidenav").css({ "width": "0" })
  $(".logo").css({ "boxShadow": "rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset" })
})


$("#btnSaldo").click(()=>{
  $("#sal").text("R$ 0,00");
})
$("#btnFatu").click(()=>{
  $("#fatu").text("R$ 0,00");
})

