
        //廣告屬性
        var adH01Var = 	{
            "title":"超級大橫幅(圖片+MP4影音)",
            "packId":"adH01-76575",
            "bid":"pc_970x250_c",
            "bannerid":76575,
            "file":"",
            "content":"",
            "type": "pic",
            "text_1": "",
            "text_2": "",
            "width2": 0,
            "height2": 0,
            "imgSrc2":"",
            "width3": 0,
            "height3": 0,
            "imgSrc3":"",
            "cookieHour": 0,
            "videoMp4":"https://adv.ettoday.net/banners/76/76575-c.mp4",
            "imgSrc":"https://cdn1.ettoday.net/banners/76/76575-1.jpg",
            "width":970,
            "height":250
        }

        //寫入動作==========
        document.write ('<scr' +'ipt src="https://cdn2.ettoday.net/ad/adH01/adH01_action.js"></scr'+'ipt>');
    document.write('<script>(function(aid, source, medium, campaign, content, api, parent) {    var img = document.createElement(\"img\");    var random = Date.now() + \"-\" + Math.floor((Math.random()*10000));    var href = window.location.href;    img.src = api + \"/\" + aid + \"?source=\" + source + \"&medium=\" + medium + \"&campaign=\" + campaign + \"&content=\" + content + \"&originalUrl=\"+ href + \"&\" + random;    img.width=0;    img.height=0;    img.style.display = \"none\";    var p = document.getElementsByTagName(parent)[0];    p.appendChild(img);})(\"ziwaupog2a\", \"ettoday\", \"76575\", \"202107120004\", \"\", \"https://apts.ettoday.net/impression\", \"body\");</script><noscript>    <img src=\"https://apts.ettoday.net/impression/ziwaupog2a?source=ettoday&medium=76575&campaign=202107120004&content=&noscript=1\" /></noscript>');    
    
      (function (w, d, j, n) {
        w[n] = w[n] || function () { (w[n].q = w[n].q || []).push(arguments) };
        a = d.getElementsByTagName('head')[0]; r = d.createElement('script'); r.async = 1; r.src = j;
        a.appendChild(r);
      })(window, document, 'https://ad.aics-asus.com/api/analytics.js', 'aics');


      // Send data
      aics('send', {
        type: 'request',
        tid: 'f4ad2c',
        apid: 'pc_970x250_c',
        aid: '76575',
        nu: encodeURI(btoa(location.protocol + "//" + location.host + location.pathname)).split('=').join(''),
        lcid: 'f7f08f779513cdf1302102e232ee2486',
        ru: 'aHR0cHM6Ly93d3cuZXR0b2RheS5uZXQv',
        nu2: encodeURI(btoa(document.querySelector("link[rel='canonical']").getAttribute("href"))).split('=').join(''),
      })
    
