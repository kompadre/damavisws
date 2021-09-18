/* window.onerror = function(e, url, line, col, error) {
    alert(e + "@" + url + ":" + line);
} */
var ua = navigator.userAgent;
var Safari = (ua.indexOf("Safari")>-1 && ua.indexOf("Chrome") === -1);
var oldSafari = Safari && (match = ua.match("Version/([0-9]+).*Safari")) && match[1] <= 10;
var oldAndroid = ua.indexOf("Android SDK")>-1 && (match = ua.match("Chrome/([0-9]+)")) && match[1] <= 50;
var IE = !!ua.match("(MSIE [0-9]+|Trident/[0-9]+)");
// alert(navigator.userAgent);
function x(y) {
    y(x);
}

if (!window.console || oldSafari || IE || oldAndroid) {
    var myhead = document.getElementsByTagName("head")[0];
    var shiv = document.createElement("script");
    shiv.src = "https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js";
    shiv.type = 'text/javascript';
    myhead.appendChild(shiv);

    var polyfill = document.createElement("script");
    polyfill.src = "https://polyfill.io/v3/polyfill.min.js?version=3.101.0&features=es5%2Ces6%2CIntersectionObserver%2CDOMTokenList.prototype.forEach%2CElement.prototype.append%2CIntersectionObserverEntry%2CJSON%2CNodeList.prototype.forEach%2CArray.prototype.forEach";
    polyfill.type = 'text/javascript';
    myhead.appendChild(polyfill);

    if (oldSafari || oldAndroid) {
        var fallbackCss = document.createElement("link");
        fallbackCss.rel = "stylesheet";
        fallbackCss.href = "css/damavis-fallback-safari.css";
        fallbackCss.type = "text/css";
        myhead.appendChild(fallbackCss);
    }
    if (IE) {
        var fallbackCss = document.createElement("link");
        fallbackCss.rel = "stylesheet";
        fallbackCss.href = "css/damavis-fallback-ie.css";
        fallbackCss.type = "text/css";
        myhead.appendChild(fallbackCss);

        var imgs = document.getElementsByTagName("img");
        for(var i=0;i<imgs.length;i++) {
            console.log(i);
            if (imgs[i].src.indexOf(".svg") == -1) { continue; }
            var tmp = imgs[i].src.replace(".svg", ".png");
            imgs[i].src = tmp;
        }
    }

}

if (! ('addEventListener' in document)) {
    document.addEventListener = function(evnt, func) {
        if (evnt == "DOMContentLoaded") {
            evnt = "load";
        }
        if (Element.prototype.attachEvent) { // IE DOM
            this.attachEvent("on"+evnt, func);
        }
        else { // No much to do
            this["on" + evnt] = func;
        }
    }
}

document.addEventListener("DOMContentLoaded", function(event) {

    var hideCookiePopup = function() {
        document.querySelectorAll("body > div.modal-backdrop, body > div.modal-dialog").forEach(function(elem) {
            elem.classList.add("hide");
        });
    }
    var acceptCookies = function(e) {
        dateToExpire = new Date();
        dateToExpire.setDate(dateToExpire.getDate() + 365);
        document.cookie = "termsAccepted=1; expires=" + dateToExpire.toUTCString() + "; domain=" + document.location.host + "; path=/; SameSite=Strict";
        hideCookiePopup();
    }
    var showCookiePopup = function() {
        var modal_bd = document.querySelector("body > div.modal-backdrop");
        var modal_content = document.querySelector("body > div.modal-dialog");

        [modal_bd, modal_content].forEach(function(elem) {
            elem.classList.remove("hide");
        });

        var donothing = function(e) { console.log("Event prevented"); e.preventDefault(); e.stopPropagation(); return false; }
        modal_bd.addEventListener('click', donothing);
        modal_bd.addEventListener('touch', donothing);

        var button = document.querySelector("body > div.modal-dialog > div.modal-body > div.bottom-buttons > button.cta.accept");
        if (!!button) {
            button.addEventListener('click', acceptCookies);
            button.addEventListener('touch', acceptCookies);
        }

        modal_content.querySelectorAll("a.close, button.close").forEach(function(elem) {
            console.log(elem);
            elem.addEventListener('click', hideCookiePopup);
            elem.addEventListener('touch', hideCookiePopup);
        });
    }
    var cookies = document.cookie.split('; ');
    var termsAcceptedCookieFound = false;
    for (var i=0;i<cookies.length;i++) {
        console.log(cookies[i].split('=')[0]);
        if (cookies[i].split('=')[0] == 'termsAccepted') {
            termsAcceptedCookieFound = true;
            break;
        }
    }
    if (!termsAcceptedCookieFound && document.location.href.indexOf("cookiesAccepted") === -1) {
        showCookiePopup();
    }

    var logo = document.querySelector("header > a > img.logo");
    var hamburger = document.querySelector(".burger");

    if (hamburger) {
        var opening = false;
        var menuOpener = function(target) {
            var menu = document.querySelector("header:not(.hide)");
            if (opening) { return; }
            opening = true;
            if (menu.classList.contains('active')) {
                menu.classList.remove('active');
            }
            else {
                menu.classList.add('active');
            }
            window.setTimeout(function() { opening = false; console.log("finished toggling");  });
        }
        hamburger.addEventListener('mouseup', menuOpener);
    }

    // Switching between dark and light header is only relevant in homepage.
    var homebanner = document.querySelector(".home.banner");
    if (!!homebanner && 'IntersectionObserver' in window) {
        var home = document.querySelector("header.home");
        var menucl = home.classList;

        var elementsOfInterest = document.querySelectorAll(".home.banner, .home .steps");
        var observer = new IntersectionObserver(function(events) {
            var scrollIn  = new Event('scrollin');
            var scrollOut = new Event('scrollout');
            events.forEach(function(event) {
                event.target.dispatchEvent( event.isIntersecting ? scrollIn : scrollOut );
            });
        });
        elementsOfInterest.forEach(function(elem) {
            observer.observe(elem);
            if (elem.classList.contains("banner")) {
                elem.addEventListener("scrollin", function() {
                    console.log("switching to relative");
                    menucl.remove("fixed");
                    menucl.add("relative");
                    logo.setAttribute('src', 'img/damavis-logo-light.svg');
                    console.log(home.querySelectorAll("nav.social > img"));
                    home.querySelectorAll("nav.social > img").forEach(function(img) {
                        var oldSrc = img.getAttribute('src');
                        if (oldSrc.indexOf("Dark.svg") != -1) {
                            img.setAttribute("src", oldSrc.replace("Dark.svg", ".svg"));
                        }
                    });
                }, {passive: true});
                elem.addEventListener("scrollout", function() {
                    console.log("switching to fixed");
                    menucl.add("fixed");
                    menucl.remove("relative");
                    logo.setAttribute('src', 'img/damavis-logo-dark.svg');
                    home.querySelectorAll("nav.social > img").forEach(function(img) {
                        var oldSrc = img.getAttribute('src');
                        if (oldSrc.indexOf("Dark.svg") == -1) {
                            img.setAttribute("src", oldSrc.replace(".svg", "Dark.svg"));
                        }
                    });
                }, { passive: false });
            }
            else if (elem.classList.contains("steps")) {
                elem.addEventListener("scrollin", function(event) {
                    event.target.classList.remove("stopped");
                });
                elem.addEventListener("scrollout", function(event) {
                    event.target.classList.add("stopped");
                });
            }
        });
    }

    var form = document.querySelector("#contact-form");
    if (!!form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            var XHR = new XMLHttpRequest();
            var FD = new FormData( form );

            XHR.addEventListener('load', function() {
                form.parentElement.querySelector("div.form-sent").classList.remove("hide");
                form.classList.add("hide");
            });

            XHR.open('POST', '/api/sendmail');
            XHR.send( FD );
        });

        form.querySelector("button.cta").addEventListener("click", function() {
            form.querySelectorAll("input, textarea").forEach(function(input) {
                input.classList.add("visited");
            });
        });
        form.querySelectorAll("input, textarea").forEach(function(elem) {
            elem.addEventListener('blur', function(event) {
                if (!!event.target && !!event.target.classList) {
                    event.target.classList.add("visited");
                }
            });
        });
    }

    var header_video = document.getElementById("header_video");
    if (!!header_video) {
        window.setTimeout(function() {
            header_video.classList.remove("hidden");
        }, 200);
    }

    document.querySelectorAll('.video-container').forEach(function(c, index) {
        console.log('ere');
        if (typeof c.totalDuration == "undefined") {
            totalDuration = 0;
            c.querySelectorAll('video').forEach(function(e) {
                if (e instanceof HTMLMediaElement) {
                    totalDuration += e.duration;
                }
            });
            c.totalDuration = totalDuration * 1000;
        }
        prevDuration = 0;
        if (typeof c.intervalHandles != "undefined") {
            try { c.intervalHandles.forEach(function(h) { window.clearInterval(h); }); } catch(e) {}
        }
        c.intervalHandles = [];
        c.querySelectorAll('video > source[type*="webm"]').forEach(function(source, index) {
            parent = source.parentElement;
            if (parent instanceof HTMLMediaElement) {
                if (Safari) { console.log(e, "Removing source"); }
                parent.loop = false;
                parent.pause();
                var localParent = parent;
                var localIndex = index;
                window.setTimeout(function() {
                   localParent.play();
                   var h = window.setInterval(function() {
                       console.log(localIndex, "Animating");
                       localParent.play();
                   }, c.totalDuration);
                   c.intervalHandles.push(h);
                }, prevDuration);
                var currentDuration = parseInt(parent.getAttribute("data-duration")) || (parent.duration * 1000);
                prevDuration += currentDuration;
                console.log(localParent.parentElement);
            }
        });

    });
});
