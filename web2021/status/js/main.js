
// load
$(window).on("load",function(){
  $(".loading").fadeOut(100);
  if($("body").attr("id") === "index"){
    $("#header").hide();
  }
});

// resize event //
// let isSP = /iPhone|iPod|iPad|Android/i.test(navigator.userAgent);
let nowWidth = 0, nowHeight = 0;
let resizeEvent = () =>{
  nowWidth = window.innerWidth;
  nowHeight = window.innerHeight;
  document.documentElement.style.setProperty('--maxViewHeight', nowHeight+"px");
  if(nowWidth < 600){
    navPos = -140;
  }else{
    navPos = -240;
  }
  $(".n-bg").hide();
  $(".n-totop").show();
  $(".n-container").css("right",navPos+"px");
  $(".fa-times").hide();
  $(".fa-bars").show();
  $(".n-container").removeClass("open");
  window.return_scroll();
  // if(isSP){
  // }
}
window.addEventListener('DOMContentLoaded resize', resizeEvent);
window.addEventListener('orientationchange',() =>{
  location.reload();
});

// slide action -slick //
$('.slick-wrapper').slick({
  autoplay:true,
  autoplaySpeed:2500,
  dots:false,
  fade:true,
  arrows: false,
  speed: 1000,
  infinite:true,
  focusOnSelect:true,
  lazyLoad:'progressive',
});
$('.slick-w-wrapper').slick({
  autoplay:true,
  autoplaySpeed:2500,
  dots:true,
  fade:false,
  swipe: true,
  arrows: true,
  speed: 800,
  infinite:true,
  focusOnSelect:true,
  lazyLoad:'progressive',
});

// menu, scroll
let navPosPx = $(".n-container").css("right");
let navPos = parseInt(navPosPx);
function no_scroll() {
    document.addEventListener("mousewheel", scroll_control, { passive: false });
    document.addEventListener("touchmove", scroll_control, { passive: false });
}
function return_scroll() {
    document.removeEventListener("mousewheel", scroll_control, { passive: false });
    document.removeEventListener('touchmove', scroll_control, { passive: false });
}
function scroll_control(event) {
    event.preventDefault();
}
const menuTime = 800;
let clickFlag = false;
$(".n-btn,.n-bg").click(function(){
  if(clickFlag === false){
    $(".n-btn,.n-bg").prop("disabled", true);
    clickFlag = true;
    if($(".n-container").hasClass("open")){
      $(".n-bg").fadeOut(menuTime);
      $(".n-totop").fadeIn(menuTime);
      $(".fa-times").fadeOut(menuTime/2);
      $(".fa-bars").delay(menuTime/2).fadeIn(menuTime/2);
      $(".n-container").animate({"right":navPos+"px"},menuTime);
      $(".n-container").delay(menuTime).queue(function(){
        $(".n-container").removeClass("open").dequeue();
        });
      window.return_scroll();
    }else{
      $(".n-container").addClass("open");
      $(".n-bg").fadeIn(menuTime);
      $(".n-totop").fadeOut(menuTime);
      $(".n-container").animate({"right":0},menuTime);
      $(".fa-bars").fadeOut(menuTime/2);
      $(".fa-times").delay(menuTime/2).fadeIn(menuTime/2);
      window.no_scroll();
    }
  }
  setTimeout(function (){
    $(".n-btn,.n-bg").prop("disabled", false);
    clickFlag = false;
    console.log("time")
  }, menuTime*2);
});

let href = "", scrPos = 0;
$(".scroll").click(function(){
  href = $(this).attr("href");
  scrPos = $(href).offset().top;
  $("body,html").animate({"scrollTop":scrPos }, menuTime, "swing");
  if($(".n-container").hasClass("open")){
    $(".n-bg").fadeOut(menuTime);
    $(".n-totop").fadeIn(menuTime);
    $(".fa-times").fadeOut(menuTime/2);
    $(".fa-bars").delay(menuTime/2).fadeIn(menuTime/2);
    $(".n-container").animate({"right":navPos+"px"},menuTime);
    $(".n-container").removeClass("open");
    window.return_scroll();
    clickFlag = false;
  }
});


// header scroll
const  totopTime = 500;
let totopPos = 0, nowPos = 0, basePos = 0;
function winScroll(){
  $(window).scroll(function(){
    nowPos = $(window).scrollTop();
    totopPos = window.innerHeight/2;
    if(nowPos - basePos > 10 || nowPos - basePos < -10){
      if( nowPos > basePos ){
        if($("#h1").hasClass("h1-down") === false){
          $("#h1").addClass("h1-down");
        }
      }else{
        $("#h1").removeClass("h1-down");
      }
    }
    if( nowPos > totopPos ){
      $(".n-totop").fadeIn(totopTime);
      $("#header").fadeIn(totopTime);
    }else{
      $(".n-totop").fadeOut(totopTime);
      if($("body").attr("id") === "index"){
        $("#header").fadeOut(totopTime);
      }
    }
    basePos = nowPos;
  });
}
window.requestAnimationFrame(winScroll);

// jabara
const acdTime = 500;
$(".p-s-btn").click(function(){
  if(clickFlag === false){
    $(".p-s-btn").prop("disabled", true);
    clickFlag = true;
    if($(this).hasClass("open")){
      $(this).parent(".p-s-title").parent(".p-s-item").children(".p-s-wrapper").slideUp(acdTime);
      $(this).removeClass("open");
      $(this).children(".fa-angle-up").fadeOut(acdTime/2);
      $(this).children(".fa-angle-down").delay(acdTime/2).fadeIn(acdTime/2);
    }else{
      $(this).parent(".p-s-title").parent(".p-s-item").children(".p-s-wrapper").slideDown(acdTime);
      $(this).addClass("open");
      $(this).children(".fa-angle-down").fadeOut(acdTime/2);
      $(this).children(".fa-angle-up").delay(acdTime/2).fadeIn(acdTime/2);
    }
    setTimeout(function (){
      $(".p-s-btn").prop("disabled", false);
      clickFlag = false;
    }, acdTime+1);
  }
});

// anker inviled
$(".a-inviled").click(function(event){
  event.preventDefault();
});

////// form //////
const cSpeed = 700;
$(".c-reset").click(function(){
  $(".reset-modal").fadeIn(cSpeed);
  $("#footer").animate({"opacity":0},cSpeed);
  $(".nav").fadeOut(cSpeed);
  window.no_scroll();
});
$(".reset-btn").click(function(){
  $(".reset-modal").fadeOut(cSpeed);
  $("#footer").animate({"opacity":1},cSpeed);
  $(".nav").fadeIn(cSpeed);
  window.return_scroll();
});
// validation
const cName = document.getElementById("name");
const cKana = document.getElementById("kana");
const cTel = document.getElementById("tel");
const cEmail = document.getElementById("email");
const cMessage = document.getElementById("message");
const formList = [cName, cKana, cTel, cEmail, cMessage];
let telLength = 0, parent = "", errorBox = "",errorFlag = false, kanaVal = "", telVal = "", emailVal = "";
function empty(e){
  parent = $(e).parent(".c-item");
  errorBox = $(parent).find(".error");
  $(errorBox).text("");
  if($(e).val() === ""){
    $(errorBox).text("必須項目です");
    errorFlag = false;
  }
}
function isZenkakuKana() {
  if(!!kanaVal.match(/^[ぁ-んァ-ン]*$/) === false){
    if(kanaVal !== ""){
      parent = $(cKana).parent(".c-item");
      errorBox = $(parent).find(".error");
      $(errorBox).text("全角かな、または全角カナで入力してください");
      errorFlag = false;
    }
  }
}
function isNumber(){
  telLength = telVal.length;
  if(!!telVal.match(/^[0-9０-９]+$/) === false){
    if(telVal !== ""){
      parent = $(cTel).parent(".c-item");
      errorBox = $(parent).find(".error");
      $(errorBox).text("数字を入力してください");
      errorFlag = false;
    }
  }else if(10 > telLength ){
    parent = $(cTel).parent(".c-item");
    errorBox = $(parent).find(".error");
    $(errorBox).text("番号の桁数が足りません");
    errorFlag = false;
  }else if(11 < telLength ){
    parent = $(cTel).parent(".c-item");
    errorBox = $(parent).find(".error");
    $(errorBox).text("番号の桁数が多すぎます");
    errorFlag = false;
  }
}
function isEmail(){
  if(!!emailVal.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)  === false){
    if(emailVal !== ""){
      parent = $(cEmail).parent(".c-item");
      errorBox = $(parent).find(".error");
      $(errorBox).text("メールアドレスの形式が正しくありません。");
      errorFlag = false;
    }
  }
}
$(".c-imputarea").change(function(){
  switch($(this).attr("id")){
    case "name":
    empty(this);
    break;
    case "kana":
    kanaVal = $(cKana).val();
    empty(this);
    isZenkakuKana();
    break;
    case "tel":
    telVal = $(cTel).val();
    empty(this);
    isNumber();
    break;
    case "email":
    emailVal = $(cEmail).val();
    empty(this);
    isEmail();
    break;
    case "message":
    empty(this);
    break;
    default:
    break
  }
});
function validate(){
  errorFlag = true;
  kanaVal = $(cKana).val();
  telVal = $(cTel).val();
  emailVal = $(cEmail).val();
  formList.forEach(i => {empty(i)});
  isZenkakuKana();
  isNumber();
  isEmail();
  if(errorFlag === true){
    return true;
  }else{
    $(".c-cf-wrapper").children(".error").html("入力項目にエラーがあります<br>内容を修正し、もう一度「確認する」を押してください");
    return false;
  }
}
$(".reset-btn").click(function(){
  if($(this).attr("name") === "reset"){
    $(".error").text("");
  }
});
function check(){
  if(window.confirm('送信してよろしいですか？')){
    return true;
  }else{
    window.alert('キャンセルされました');
    return false;
  }
}
