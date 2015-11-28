var sh_fullscreen = {
    params: {
        title: "",
        lead: "",
        width: "",
        height: "",
        masterial: "",
        started: 0,
        sharelink: ""
    },
    cssurl: "http://st.f1.vnecdn.net/responsive/js/utils/slideshow/css",
    articleid: 0,
    windowsize: {},
    framesize: {},
    current: 0,
    imgarr: "",
    imgleng: 0,
    expandstatus: 0,
    loadedslide: 0,
    detectdevide: 0,
    createhtml: function() {
        $("body").append('<div id="popupslide" style="display:none;"></div>');
        $("#popupslide").append('<link href="' + this.cssurl + '/slideshow/slide_show_gal.css" media="screen" rel="stylesheet" type="text/css"/>');
        $("#popupslide").append('<div id="slide_show_gal" class="fullscreen"><div class="icon_close"><a href="javascript:;"></a></div><div class="content_gal"><div id="slide_gal" class="slide_gal sh_slide_left"><div id="galleria" class="galleria-container"></div><div class="showthumb"></div><div class="galleria-share-facebook"></div><div class="galleria-image-nav"><div class="galleria-image-nav-right">&nbsp;</div><div class="galleria-image-nav-left">&nbsp;</div></div></div><div class="clear"></div></div><div class="bg_opacity_slide" style="display:none;"></div><div class="clear"></div><div id="slide_thumbs" style=""><div id="close_thumbs"></div><div class="galleria-thumbnails-container galleria-carousel"><div class="galleria-thumbnails-list slides_container"></div></div><div class="galleria-counter">T\u1ea5t c\u1ea3 \u1ea3nh (<span class="galleria-total">0</span>) </div></div>');
        var a = document.createElement("script");
        a.type = "text/javascript";
        a.src = this.cssurl + "/slideshow/js/jquery.touchSwipe.min.js";
        document.body.appendChild(a);
        a = document.createElement("script");
        a.type = "text/javascript";
        a.src = this.cssurl + "/slideshow/js/jquery.flexslider-min.js";
        document.body.appendChild(a)
    },
    run: function() {
        this.createhtml();
        this.getImage();
        $("#popupslide .icon_close, #popupslide .quaylai").click(function() {
            sh_fullscreen.close()
        });
        $("#popupslide .galleria-image-nav-left").bind("click", function() {
            sh_fullscreen.showPrev()
        });
        $("#popupslide .galleria-image-nav-right").bind("click", function() {
            sh_fullscreen.showNext()
        });
        $("#slide_show_gal").find(".showthumb").bind("click", function() {
            sh_fullscreen.showThumb()
        });
        $(window).resize(function() {
            sh_fullscreen.resizeBox()
        });
        $(".viewall a").click(function() {
            sh_fullscreen.showThumb()
        });
        $("#popupslide .sh_slide_left").mouseenter(function() {
            $("#popupslide .galleria-bar").show()
        });
        $("#popupslide").find(".galleria-share-facebook").bind("click", function() {
            sh_fullscreen.sharefacebook()
        });
        $(document).ready(function() {
            sh_fullscreen.resizeBox();
            0 < sh_fullscreen.params.started && sh_fullscreen.showImage(sh_fullscreen.params.started - 1)
        })
    },
    sharefacebook: function() {
        width = 500;
        height = 400;
        var a = parseInt(this.imgarr[this.current].attr("data-reference-id")),
            c, b;
        c = this.windowsize.width / 2 - (width / 2 + 10);
        b = this.windowsize.height / 2 - (height / 2 + 50);
        c = "status=no,height=" + height + ",width=" + width + ",resizable=yes,left=" + c + ",top=" + b + ",screenX=" + c + ",screenY=" + b + ",toolbar=no,menubar=no,scrollbars=no,location=no,directories=no";
        u = location.href;
        u = this.params.sharelink ? this.params.sharelink + "/" + this.articleid + "/refer/" + a : "http://vnexpress.net/detail/photoshare/id/" + this.articleid + "/refer/" + a;
        t = document.title;
        window.open("http://www.facebook.com/sharer.php?u=" + encodeURIComponent(u) + "&t=" + encodeURIComponent(t), "sharer", c);
        return !1
    },
    getImage: function() {
        var a = [],
            c = 0,
            b = document.getElementsByTagName("meta");
        if (0 < b.length)
            for (var d = 0; d < b.length; d++)
                if (null != b[d].getAttribute("name") && "tt_article_id" == b[d].getAttribute("name").toLowerCase()) var f = b[d].getAttribute("content");
        this.articleid = f;
        var e = '<div class="galleria-thumb-item"><div id="galleria-thumb-jcarousellite">',
            g = this.cssurl;
        $("#gallery img");
        e += '<ul class="slides">';
        $("#gallery img").each(function(b) {
            e += '<li class="galleria-image galleria-image-' + b + '" onClick="sh_fullscreen.activeImg(this)"><img rel="' + b + '" src="' + $(this).attr("src") + '"></li>';
            $(this).attr("id", "vne_slide_image_" + b);
            a[b] = $(this).clone();
            $(this).css("cursor", "url(" + g + "/slideshow/images/icons/zoom_cursor.png),auto");
            $(this).on("click", function() {
                sh_fullscreen.open(b)
            });
            $(this).parent().find(".btn_icon_show_slide_show").on("click", function() {
                sh_fullscreen.open(b)
            });
            c++
        });
        e += "</ul>";
        e += "</div>";
        e += '<div class="galleria-thumb-nav-left"></div><div class="galleria-thumb-nav-right"></div></div>';
        $("#popupslide .galleria-thumbnails-list").append(e);
        this.imgleng = c - 1;
        this.imgarr = a
    },
    close: function() {
        $("html").css({
            "overflow-x": "auto",
            "overflow-y": "auto"
        });
        this.params.masterial && $("#slide_show_gal").find(".footer_slideshow").remove();
        $("#popupslide").hide();
        this.hideThumb();
        $(document).off("keydown")
    },
    activeImg: function(a) {
        $(".galleria-image").removeClass("active");
        $(a).addClass("active")
    },
    open: function(a, c) {
        $(document).keydown(function(b) {
            39 == b.keyCode && sh_fullscreen.showNext();
            37 == b.keyCode && sh_fullscreen.showPrev();
            27 == b.keyCode && sh_fullscreen.close()
        });
        this.showImage(a, c)
    },
    showImage: function(a, c) {
        var b = this;
        $("html").css({
            "overflow-x": "hidden",
            "overflow-y": "hidden"
        });
        $("#popupslide").prepend('<div class="galleria_loading"><img src="' + this.cssurl + '/slideshow/images/icons/classic-loader.gif" alt="Loading"></div>');
        this.current = parseInt(a);
        var d = this.imgarr[a],
            f = d.attr("src"),
            f = f.replace("_660x0.", "_1200x0.");
        $("#galleria").html('<img style="max-width: 100%; max-height: 100%; display: none;" src="' + f + '" />');
        $("#galleria-info").remove();
        d = d.attr("data-component-caption");
        d = this.htmldecode(d);
        if (3 <= d.length) {
            $("#galleria").append('<div id="galleria-info" data-show="1" class="galleria-info"><div class="galleria-info-text"><div class="galleria-info-description"><div class="text-too-lenght show_description_all"><span class="galleria-count-image-thumb">' + (this.current + 1) + "/" + (this.imgleng + 1) + " | </span>" + d + "</div></div></div></div>");
            var e = 1,
                g = setInterval(function() {
                    var a = $(".text-too-lenght").height();
                    if (0 < a || 5 < e) 60 < a && ($(".galleria-info-description").append('<div class="too-length-dot"> ...</div>'), 0 == b.expandstatus ? ($("#galleria-info").prepend('<div class="view-more-too-lenght" onclick="sh_fullscreen.showviewmore();">&nbsp;</div>'), b.showviewmore()) : ($("#galleria-info").prepend('<div class="view-more-too-lenght show_icon_all" onclick="sh_fullscreen.showviewmore();">&nbsp;</div>'), $(".too-length-dot").hide())), clearInterval(g);
                    e++
                }, 100)
        }
        this.params.masterial && 1 > $("#slide_show_gal .footer_slideshow").size() && ($("#slide_show_gal").append('<div class="footer_slideshow"><div class="footer_gal">' + this.params.masterial + "</div></div></div>"), $("#slide_show_gal").find(".content_gal").css("bottom", 70));
        $("#popupslide").show();
        $("#galleria").find("img").load(function() {
            var a = sh_fullscreen.framesize.height;
            hheight = $(this).height();
            marTop = a / 2 - hheight / 2;
            0 > marTop && (marTop = 0);
            $(".galleria_loading").remove();
            $(this).css("margin-top", marTop + "px").fadeIn(500)
        });
        0 == this.detectdevide && this.isTouchEnabled();
        0 == this.current ? $(".galleria-image-nav-left").hide() : $(".galleria-image-nav-left").show();
        this.current == this.imgleng ? $(".galleria-image-nav-right").hide() : $(".galleria-image-nav-right").show()
    },
    isTouchEnabled: function() {
        document.createTouch && $(function() {
            $("#galleria").swipe({
                swipe: function(a, c, b, d, f) {
                    "left" == c && sh_fullscreen.showNext();
                    "right" == c && sh_fullscreen.showPrev()
                },
                tap: function(a, c) {
                    jQuery(c).trigger("click")
                }
            })
        });
        this.detectdevide = 1
    },
    showviewmore: function() {
        0 == parseInt($("#galleria-info").attr("data-show")) ? ($("#galleria-info").find(".text-too-lenght").addClass("show_description_all"), $("#galleria-info").find(".view-more-too-lenght").addClass("show_icon_all"), $("#galleria-info").find(".too-length-dot").hide(), $("#galleria-info").find(".galleria-count-image-thumb").hide(), $("#galleria-info").attr("data-show", 1), this.expandstatus = 1) : ($("#galleria-info").find(".text-too-lenght").removeClass("show_description_all"), $("#galleria-info").find(".view-more-too-lenght").removeClass("show_icon_all"), $("#galleria-info").attr("data-show", 0), $("#galleria-info").find(".too-length-dot").show(), $("#galleria-info").find(".galleria-count-image-thumb").show(), this.expandstatus = 0)
    },
    showNext: function() {
        $("#article_content img");
        this.current < this.imgleng && this.showImage(parseInt(this.current) + 1);
        return !0
    },
    showPrev: function() {
        $("#article_content img");
        0 != this.current && this.showImage(parseInt(this.current) - 1)
    },
    hideThumb: function() {
        $("#slide_thumbs").animate({
            bottom: "-250px"
        }, 500).hide();
        $(".footer_gal li.viewall a").removeClass("hideslideshow");
        $(".footer_gal li.viewall a").text("Xem t\u1ea5t c\u1ea3");
        $("#thumb-more").css("background-position", "right top 0px");
        $(".bg_opacity_slide").hide();
        $("#galleria-thumb-jcarousellite").find("li").removeAttr("style")
    },
    showThumb: function() {
        $("#thumb-more").css("background-position", "right top -4px");
        $("#thumb-more").css("margin-top", "6px");
        0 == this.loadedslide && ($("#galleria-thumb-jcarousellite").flexslider({
            animation: "slide",
            itemWidth: 150,
            itemMargin: 10,
            animationLoop: !1,
            directionNav: !1,
            pauseOnAction: !1,
            slideshow: !1,
            controlNav: !1,
            move: 1,
            start: function(a) {
                $(".galleria-thumb-nav-right").click(function(b) {
                    b.preventDefault();
                    a.flexAnimate(a.getTarget("next"))
                });
                $(".galleria-thumb-nav-left").click(function(b) {
                    b.preventDefault();
                    a.flexAnimate(a.getTarget("prev"))
                });
                var b = 0;
                $(".showthumb").bind("click", function() {
                    var d = a.last;
                    b = sh_fullscreen.current > d ? d : sh_fullscreen.current;
                    console.log(d);
                    a.flexAnimate(b, !0)
                });
                a.flexAnimate(b, !0)
            }
        }), $("#popupslide .galleria-total").text(this.imgleng + 1), $("#close_thumbs").bind("click", function() {
            sh_fullscreen.hideThumb()
        }), $("#popupslide .galleria-image").find("img").bind("click", function() {
            sh_fullscreen.showImage($(this).attr("rel"));
            sh_fullscreen.hideThumb();
            $(".bg_opacity_slide").hide()
        }), this.loadedslide = 1);
        $("#slide_thumbs").css("bottom", "-250px");
        $("#slide_thumbs").show();
        var a = this.params.masterial ? 70 : 20;
        $("#slide_thumbs").animate({
            bottom: a
        }, 500);
        $(".bg_opacity_slide").show();
        $("#galleria-thumb-jcarousellite").find(".galleria-image").removeClass("active");
        $("#galleria-thumb-jcarousellite").find(".galleria-image-" + this.current).addClass("active")
    },
    resizeBox: function() {
        var a = $(window).width(),
            c = $(window).height(),
            b = this.params.masterial ? c - 100 : c - 60;
        this.windowsize = {
            width: a,
            height: c
        };
        this.framesize = {
            width: a - 80,
            height: b
        };
        this.calculator()
    },
    calculator: function() {
        $("#popupslide").find(".galleria-image-nav").css("top", (this.framesize.height - 50) / 2);
        $("#galleria").height(this.framesize.height)
    },
    htmldecode: function(a) {
        return $("<div/>").html(a).text()
    },
    replacetext: function(a) {
        return (a + "").replace(/\\(.?)/g, function(a, b) {
            switch (b) {
                case "\\":
                    return "\\";
                case "0":
                    return "\x00";
                case "":
                    return "";
                default:
                    return b
            }
        })
    }
};