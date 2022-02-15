"use strict";

/* COPYRIGHT 2017 http://www.clover-style.jp/ ALL RIGHTS RESERVED. */
$(function () {
  var $setElem = $(".switch"),
      pcName = "_pc",
      spName = "_sp",
      replaceWidth = 640;
  $setElem.each(function () {
    var $this = $(this);

    function imgSize() {
      if (window.innerWidth > replaceWidth) {
        $this.attr("src", $this.attr("src").replace(spName, pcName)).css({
          visibility: "visible"
        });
      } else {
        $this.attr("src", $this.attr("src").replace(pcName, spName)).css({
          visibility: "visible"
        });
      }
    }

    $(window).resize(function () {
      imgSize();
    });
    imgSize();
  });
  $(window).on("scroll resize load", function () {
    var windowScrollTop = $(window).scrollTop(),
        windowHeight = $(window).height();
    $(".setAnime").each(function () {
      var viewPos = $(this).offset().top;

      if (windowScrollTop > viewPos - windowHeight + windowHeight / 4) {
        $(this).addClass("animated");
      }
    });
    $(".plx").each(function () {
      var plxSpeed = $(this).data("plxspd"),
          plxPosition = (windowScrollTop - $(this).offset().top) / plxSpeed,
          plxHeight = windowHeight / plxSpeed - $(this).height() / plxSpeed;
      $(this).children("img").css({
        transform: "translateY(" + (plxPosition + plxHeight) + "px)"
      });
    });
  });
  $("#menu").on("click", function () {
    $("#gNav").fadeIn(400);
  });
  $("#gNav").children("p").on("click", function () {
    $("#gNav").fadeOut(400);
  });
  $(".read-more").on("click", function () {
    $(".read-more-wrapper").addClass("openTxt");
  });
  $(".layoutA").find("li").each(function (i) {
    $(this).attr("class", "layout_" + (i + 1));
  });
  $(".layoutB").find("li").each(function (i) {
    $(this).attr("class", "detail_" + (i + 1));
  });
  $("#layout").find("li").each(function (i) {
    $(".layout_" + i).on("click", function () {
      $(".detail_" + i).fadeIn(400);
    });
  });
  $(".layoutB").find("p").on("click", function () {
    $(this).parents("li").fadeOut(400);
  });
});