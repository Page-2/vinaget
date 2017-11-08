var yt_userscript_youtubetools = function (j, e, h) {
    var m;
    var g = false;
    var c;

    function n(p) {
        return document.getElementById(p)
    }

    function o(p, r) {
        var q = new XMLHttpRequest();
        q.open("GET", p, true);
        q.send();
        q.onreadystatechange = function () {
            if (q.readyState == 4) {
                var s = q.responseText;
                r(s)
            }
        }
    }

    function l(q) {
        try {
            if (window.proc_cleanbadfilename) {
                return proc_cleanbadfilename(q)
            }
        } catch (p) {}
        q = q.replace(/\\/gi, "");
        q = q.replace(/\//gi, "");
        q = q.replace(/\:/gi, "");
        q = q.replace(/\?/gi, "");
        q = q.replace(/\"/gi, "");
        q = q.replace(/\</gi, "");
        q = q.replace(/\>/gi, "");
        q = q.replace(/\|/gi, "");
        q = q.replace(/\*/gi, "");
        return q
    }

    function i() {
        var q = location.href.split("v=")[1];
        if (!q) {
            return
        }
        var p = q.split("&")[0];
        return p
    }

    function d() {
        var t = n("watch7-player");
        if (!t) {
            return
        }
        var y = t.getElementsByTagName("embed")[0].src;
        var u = i();
        if (!u) {
            return
        }
        var r = location.href.split(":")[0] + "://www.youtube.com/v/" + u + "&version=3&autoplay=1&fs=1";
        var q = t.innerHTML;
        var z = q.indexOf(y);
        if (z > -1) {
            q = q.substring(0, z) + r + q.substring(z + y.length)
        }
        t.innerHTML = q
    }

    function b() {
        var p = i();
        if (!p) {
            return
        }

        function q() {
            if (!c) {
                alert("Embedding this video is disabled by request.")
            } else {
                top.location.href = "http://overbits.net/chrome/youtube/play/?yurl=" + escape(document.location) + "&title=" + m
            }
        }
        if (g) {
            q();
            return
        }
        var r = "http://gdata.youtube.com/feeds/api/videos/" + p;
        o(r, function (s) {
            g = true;
            if (s.toLowerCase().indexOf("yt:noembed") >= 0) {
                c = false
            } else {
                c = true
            }
            q()
        })
    }

    function a(q, p) {
        p = p + "=";
        p = p.toLowerCase();
        var t = q.toLowerCase().indexOf(p);
        if (t < 0) {
            return ""
        }
        q = q.substr(t + p.length);
        var r = q.toLowerCase().indexOf("&");
        if (r >= 0) {
            return q.substr(0, r)
        } else {
            return q
        }
    }

    function k(r) {
        if (r.length == 87) {
            var q = r.substr(44, 40).split("").reverse().join("");
            var p = r.substr(3, 40).split("").reverse().join("");
            r = q.substr(21, 1) + q.substr(1, 20) + q.substr(0, 1) + q.substr(22, 9) + r.substr(0, 1) + q.substr(32, 8) + r.substr(43, 1) + p
        } else {
            if (r.length == 86) {
                r = r.substr(2, 15) + r.substr(0, 1) + r.substr(18, 23) + r.substr(79, 1) + r.substr(42, 1) + r.substr(43, 36) + r.substr(82, 1) + r.substr(80, 2) + r.substr(41, 1)
            } else {
                if (r.length == 85) {
                    var q = r.substr(44, 40).split("").reverse().join("");
                    var p = r.substr(3, 40).split("").reverse().join("");
                    r = q.substr(7, 1) + q.substr(1, 6) + q.substr(0, 1) + q.substr(8, 15) + r.substr(0, 1) + q.substr(24, 9) + r.substr(1, 1) + q.substr(34, 6) + r.substr(43, 1) + p
                } else {
                    if (r.length == 84) {
                        var q = r.substr(44, 40).split("").reverse().join("");
                        var p = r.substr(3, 40).split("").reverse().join("");
                        r = q + r.substr(43, 1) + p.substr(0, 6) + r.substr(2, 1) + p.substr(7, 9) + p.substr(39, 1) + p.substr(17, 22) + p.substr(16, 1)
                    } else {
                        if (r.length == 83) {
                            var q = r.substr(43, 40).split("").reverse().join("");
                            var p = r.substr(2, 40).split("").reverse().join("");
                            r = q.substr(30, 1) + q.substr(1, 26) + p.substr(39, 1) + q.substr(28, 2) + q.substr(0, 1) + q.substr(31, 9) + r.substr(42, 1) + p.substr(0, 5) + q.substr(27, 1) + p.substr(6, 33) + p.substr(5, 1)
                        } else {
                            if (r.length == 82) {
                                var q = r.substr(34, 48).split("").reverse().join("");
                                var p = r.substr(0, 33).split("").reverse().join("");
                                r = q.substr(45, 1) + q.substr(2, 12) + q.substr(0, 1) + q.substr(15, 26) + r.substr(33, 1) + q.substr(42, 1) + q.substr(43, 1) + q.substr(44, 1) + q.substr(41, 1) + q.substr(46, 1) + p.substr(32, 1) + q.substr(14, 1) + p.substr(0, 32) + q.substr(47, 1)
                            }
                        }
                    }
                }
            }
        }
        return r
    }

    function f() {
        try {
            var w = true;
            var p = "";
            var G = ["Download this video", "Download"];
            if ((n("video-player") || n("movie_player")) && !n("embed-holder") && !n("watch-download")) {
                if (j) {
                    G = j
                }
                if (n("video-player") || n("movie_player")) {
                    var J = document.createElement("style");
                    J.type = "text/css";
                    J.innerHTML = "div#watch-download-links{display:none; width:85px; box-shadow:#999 0px 0px 3px 0px; border-bottom-left-radius:2px; border-bottom-right-radius:2px; float:left; background:#EBEBEB;}#watch-download-links div{height:25px; background:#FFF!important; line-height:25px; font-size:12px; cursor:pointer; padding:0 8px!important; margin: 1px 0px 0px 0px!important;text-align:left !important; }#watch-download-links div:hover{background:#EBEBEB!important;}#dl{float:left; padding:4px}#watch-download-links div a{color:#000!important; text-decoration:none!important; height:100%; width:100%;}#dl{float:left}#wdl{border-radius:5px; border:1px solid #EAEAEA; cursor:pointer; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:14px;margin:0px auto 10px auto; overflow:hidden; display:none; height:auto}#wdl div{padding:5px;}#wdl div a{color:#000; text-decoration:none}#wdl div:hover{background:#D1E1FA;}#watch-actions{height:auto!important}";
                    document.getElementsByTagName("head").item(0).appendChild(J)
                }
                var z;
                var C = "";
                if (n("vt")) {
                    z = n("vt").innerHTML
                } else {
                    z = document.getElementsByName("title").item(0).content.replace("/", "").replace(":", "")
                }
                m = "";
                if (z) {
                    C = encodeURIComponent(l(z));
                    m = encodeURIComponent(z)
                }
                var A;
                var E = new RegExp('"url_encoded_fmt_stream_map": ".+?",');
                var D = document.getElementsByTagName("script");
                for (H = 0; H < D.length; H++) {
                    if (E.test(D[H].innerHTML)) {
                        A = D[H].innerHTML
                    }
                }
                if (A) {
                    var K = new String(E.exec(A));
                    K = K.match(/"url_encoded_fmt_stream_map": "(.*?)"/);
                    K = K[1].replace(/\\u([0-9]+)/g, function (s, r) {
                        return decodeURIComponent("%" + parseFloat(r))
                    });
                    swfs = K.split(",");
                    var y = [];
                    var F;
                    for (H = 1; H < swfs.length - 1; H++) {
                        var u = parseInt((swfs[H].match(/itag=([0-9]*)&/) || swfs[H].match(/itag=([0-9]*)$/))[1]);
                        var x = (swfs[H].match(/sig=(.*?)&/) || swfs[H].match(/sig=(.*?)$/));
                        var t;
                        if (x) {
                            t = x[1]
                        } else {
                            x = (swfs[H].match(/&s=(.*?)&/) || swfs[H].match(/&s=(.*?)$/));
                            if (!x) {
                                continue
                            }
                            t = k(x[1])
                        }
                        swfs[H] = unescape((swfs[H].match(/url=(.*?)&/) || swfs[H].match(/url=(.*?)$/))[1]) + "&signature=" + t;
                        y[0] = u;
                        F = swfs[H];
                        if (F.substr(F.length - 1, 1) == "\\") {
                            F = F.substr(0, F.length - 1)
                        }
                        if (y[0] == "37") {
                            p += '<div><a href="' + F + "&title=" + C + '">1080p (MP4)</a></div>'
                        } else {
                            if (y[0] == "45") {
                                p += '<div><a href="' + F + "&title=" + C + '">720p (WebM)</a></div>'
                            } else {
                                if (y[0] == "22") {
                                    p += '<div><a href="' + F + "&title=" + C + '">720p (MP4)</a></div>'
                                } else {
                                    if (y[0] == "44") {
                                        p += '<div><a href="' + F + "&title=" + C + '">480p (WebM)</a></div>'
                                    } else {
                                        if (y[0] == "35") {
                                            p += '<div><a href="' + F + "&title=" + C + '">480p (FLV)</a></div>'
                                        } else {
                                            if (y[0] == "43") {
                                                p += '<div><a href="' + F + "&title=" + C + '">360p (WebM)</a></div>'
                                            } else {
                                                if (y[0] == "34") {
                                                    p += '<div><a href="' + F + "&title=" + C + '">360p (FLV)</a></div>'
                                                } else {
                                                    if (y[0] == "18") {
                                                        p += '<div><a href="' + F + "&title=" + C + '">360p (MP4)</a></div>'
                                                    } else {
                                                        if (y[0] == "5") {
                                                            p += '<div><a href="' + F + "&title=" + C + '">240p (FLV)</a></div>'
                                                        } else {
                                                            if (y[0] == "36") {
                                                                p += '<div><a href="' + F + "&title=" + C + '">240p (3GP)</a></div>'
                                                            } else {
                                                                if (y[0] == "17") {
                                                                    p += '<div><a href="' + F + "&title=" + C + '">144p (3GP)</a></div>'
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                } else {
                    p = ""
                } if (n("watch-like-dislike-buttons") && !n("watch-download")) {
                    var O = document.createElement("button");
                    O.setAttribute("id", "watch-download");
                    O.setAttribute("class", "yt-uix-button yt-uix-button-text yt-uix-tooltip");
                    O.setAttribute("data-tooltip", G[0]);
                    O.setAttribute("data-tooltip-title", G[0]);
                    O.setAttribute("title", G[0]);
                    O.innerHTML = '<span class="yt-uix-button-content">' + G[1] + '</span>&nbsp;<img class="yt-uix-button-arrow" src="http://s.ytimg.com/yt/img/pixel-vfl73.gif" alt=""><ul class="yt-uix-button-menu" style="display: none"><li id="watch-download-links">' + q + "</li></ul>";
                    n("watch-like-dislike-buttons").parentNode.insertBefore(O, n("watch-like-dislike-buttons").nextSibling)
                }
                if (n("watch-download-links") || n("wdl")) {
                    var q = "";
                    q += '<div id="uyd_repeat"></div>';
                    if (n("wdl")) {
                        watchdownloadlink = n("wdl")
                    } else {
                        watchdownloadlink = n("watch-download-links")
                    }
                    q += p;
                    if (h) {
                        try {
                            var L = JSON.parse(h);
                            for (var H = 0; H < L.length; H++) {
                                var B = L[H].link;
                                B = B.replace(/%s/gi, escape(document.location)) + "&title=" + m;
                                q += '<div id="__' + L[H].title + '__"><a href="' + B + '" target="_blank" title="' + L[H].title + '">' + L[H].title + "</a></div>"
                            }
                        } catch (v) {}
                    } else {
                        if (w && e) {
                            q += '<div id="uyd_mp3"><a href="' + e + escape(document.location) + '" target="_blank" title="MP3 Convert">MP3 Convert</a></div>'
                        }
                    }
                    watchdownloadlink.innerHTML = q;
                    var A = n("uyd_skipad");
                    if (A) {
                        var N = document.createElement("a");
                        N.href = "javascript:void(0)";
                        N.onclick = d;
                        N.innerHTML = "Skip this video AD";
                        N.title = "Skip this video AD";
                        A.appendChild(N)
                    }
                    var A = n("uyd_repeat");
                    if (A) {
                        var N = document.createElement("a");
                        N.href = "javascript:void(0)";
                        N.onclick = b;
                        N.innerHTML = "Repeat play";
                        N.title = "Repeat play";
                        A.appendChild(N)
                    }
                }
            }
        } catch (I) {}
    }
    f()
};