/**
 * Created by PhpStorm.
 * User: Raqibul Hasan
 * File: Scripts
 * Date: 25-April-19
 * Time: 07:05 PM
 */

function getAlerts() {
    console.log('ano: ', ano);
    console.log('webSocketUrl: ', webSocketUrl);
    console.log('callid: ', callid);
    console.log('backToHomeUrl: ', backToHomeUrl);
}

function doPlayAudioJp(media) {

    $player = $("#jquery_jplayer_1");
    console.log('doPlayAudioJp called ', $player);
    $player.jPlayer({
        ready: function () {
            $player.jPlayer("setMedia", {
                wav: media, // Defines the wav url
            });
        },
        swfPath: "http://jplayer.org/latest/dist/jplayer",
        supplied: "wav, mp3, oga",
        wmode: "window",
        //useStateClassSkin: true,
        //autoBlur: false,
        //smoothPlayBar: true,
        //keyEnabled: true,
        //remainingDuration: true,
        //toggleDuration: true
    });

}

function doPlayAudioAuto(media) {

    $player = $("#jpId");
    $player.jPlayer({
        ready: function () {
            $player.jPlayer("setMedia", {
                wav: media, // Defines the wav url
            }).jPlayer("play"); // Attempts to Auto-Play the media
        },
        solution: "flash, html", // Flash with an HTML5 fallback.
        supplied: "wav, m4v, ogv",
        swfPath: "http://jplayer.org/latest/dist/jplayer"
    });
}

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"), results = regex.exec(location.search);
    return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function doAJAXRequest(webSocketUrl, playFile, actionCommand) {

    if (actionCommand == '')
        actionCommand = 'playfile';

    var dataInfo = {};
    dataInfo['callid'] = callid;
    dataInfo['ano'] = ano;
    dataInfo['playfile'] = playFile; // integer response value 0/1/2/3
    dataInfo['action_command'] = actionCommand; // action command = playfile

    $.ajax({
        type: 'POST',
        data: dataInfo,
        cache: false,
        url: webSocketUrl,
        async: false,
        success: function (value) {
            // do something..
        },
        error: function (jqXHR, textStatus, errorThrown) {
            // do something..
        }
    });

}

var soundEmbed = null;

function doPlayAudioRnD1(which) {
    if (!soundEmbed) {
        soundEmbed = document.createElement("embed");
        soundEmbed.setAttribute("src", which);
        soundEmbed.setAttribute("hidden", true);
        soundEmbed.setAttribute("autostart", true);
    }
    else {
        document.body.removeChild(soundEmbed);
        soundEmbed.removed = true;
        soundEmbed = null;
        soundEmbed = document.createElement("embed");
        soundEmbed.setAttribute("src", which);
        soundEmbed.setAttribute("hidden", true);
        soundEmbed.setAttribute("autostart", true);
    }
    soundEmbed.removed = false;
    document.body.appendChild(soundEmbed);
}

function doPlayAudioRnD2(media) {

    console.log('doPlayAudio called ', media);
    var promise = audioElem.play();
    if (promise) {
        console.log('doPlayAudio promise ', promise);
        // Older browsers may not return a promise, according to the MDN website

        promise.catch(function (error) {
            console.log(error);
        });
    }

    console.log('doPlayAudio promiseElse ', promise);
    audioElem.style.display = "none"; //added to fix ios issue
    audioElem.setAttribute('src', media);
    audioElem.autoplay = true; //avoid the user has not interacted with your page issue
    audioElem.loop = false;
    // audioElem.pause(); // if there is a already an audio playing

    audioElem.load(); // please do not delete this line or change order
    audioElem.play();

}

function callToAction(type, playFile, actionCommand, backToHome, ano, callid, callToAgent) {

    var webSock = webSocketUrl;

    if (type == 'callPatch') {

        var callToAgentUri = callToAgent;
        var userId = getParameterByName('u_id');
        var s_sts = getParameterByName('s_sts');
        var c_sts = getParameterByName('c_sts');
        var a_sts = getParameterByName('a_sts');

        var callTo = callToAgentUri + "?ano=" + ano + "&callid=" + callid + "&u_id=" + userId + "&s_sts=" + s_sts + "&c_sts=" + c_sts + "&a_sts=" + a_sts;
        doAJAXRequest(webSocketUrl, playFile);
        window.location = callTo;
        return false;

        /*console.log(callTo);
        return false;*/
        // goTo(callToAgentUrl);
        // window.location.replace(callTo);

        /*console.log(callTo);
        return false;*/
    } else if (type == 'exitCall') {
        // console.log('exitCall', webSocketUrl);
        doAJAXRequest(webSocketUrl, playFile);
    } else {

        var dataInfo = {};
        dataInfo['callid'] = callid;
        dataInfo['ano'] = ano;
        dataInfo['playfile'] = playFile; // integer response value 0/1/2/3
        dataInfo['action_command'] = actionCommand; // action command = playfile

        var backToHomeUri = backToHome;
        var userId = getParameterByName('u_id');
        var s_sts = getParameterByName('s_sts');
        var c_sts = getParameterByName('c_sts');
        var a_sts = getParameterByName('a_sts');

        $.ajax({
            type: 'POST',
            data: dataInfo,
            cache: false,
            url: webSocketUrl,
            async: false,
            complete: function (data) {
                if (type == 'backToHome') {
                    var backToHomeUrl = backToHomeUri + "?ano=" + ano + "&callid=" + callid + "&u_id=" + userId + "&s_sts=" + s_sts + "&c_sts=" + c_sts + "&a_sts=" + a_sts;
                    window.location = backToHomeUrl;
                    return false;
                }
            },
            success: function (value) {
                // do something
            },
            error: function (jqXHR, textStatus, errorThrown) {
                // do something
            }
        });
    }

}

/*
    * Play the Audio
    * Please do not delete this function
    */
function doPlayAudioII(media) {

    audioElem.style.display = "none"; //added to fix ios issue
    audioElem.setAttribute('src', media);
    audioElem.autoplay = true; //avoid the user has not interacted with your page issue

    audioElem.pause(); // if there is a already an audio playing

    audioElem.load(); // please do not delete this line or change order
    audioElem.play();
}


/*
 * Pause the Audio
 * Please do not delete this function
 */
function doPauseAudio() {
    audioElem.pause();
}

function getResponse(fetchURL, dataInfo) {

    var returnValue;
    $.ajax({
        type: 'POST',
        url: fetchURL,
        async: false,
        cache: false,
        data: dataInfo,
        success: function (value) {
            returnValue = value;
        },
        error: function (jqXHR, textStatus, errorThrown) {
            // do something
        }
    });

    return returnValue;
}

function getXMLHttpRequestResp(url, dataForGetPost) {

    return $.ajax({
        type: "GET",
        url: url,
        data: dataForGetPost,
        cache: false,
        async: false
    }).responseText;
}

function detectBrowser() {

    // Opera 8.0+
    var isOpera = (!!window.opr && !!opr.addons) || !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;

    // Firefox 1.0+
    var isFirefox = typeof InstallTrigger !== 'undefined';

    // Safari 3.0+ "[object HTMLElementConstructor]"
    var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) {
        return p.toString() === "[object SafariRemoteNotification]";
    })(!window['safari'] || (typeof safari !== 'undefined' && safari.pushNotification));

    // Internet Explorer 6-11
    var isIE = /!*@cc_on!@*!/
    false || !!document.documentMode;

    // Edge 20+
    var isEdge = !isIE && !!window.StyleMedia;

    // Chrome 1 - 71
    var isChrome = !!window.chrome && (!!window.chrome.webstore || !!window.chrome.runtime);

    // Blink engine detection
    var isBlink = (isChrome || isOpera) && !!window.CSS;

    var browser = null;
    if (isOpera == true) {
        browser = 'opera';
    } else if (isFirefox == true) {
        browser = 'firefox';
    } else if (isSafari == true) {
        browser = 'safari';
    } else if (isIE == true) {
        browser = 'ie';
    } else if (isEdge == true) {
        browser = 'edge';
    } else if (isChrome == true) {
        browser = 'chrome';
    } else if (isBlink == true) {
        browser = 'blink';
    }

    return browser;
}

function saveUserActivities(callid, msisdn, pageName, visitedNode, activities, saveUserHistoryApiUrl) {

    var dataToPostObj = {
        method: 'POST',
        callid: callid,
        msisdn: msisdn,
        page: pageName.toUpperCase(),
        vnode: visitedNode.toUpperCase(),
        activities: activities.toUpperCase()
    };
    getResponse(saveUserHistoryApiUrl, dataToPostObj); // for the first time user attempt
}

function backToPrevious(media, url) {

    // doPlayAudio(media);
    goTo(url);
}

function __backToPrevious(playFileState, url) {

    doAJAXRequest(webSocketUrl, playFileState);
    goTo(url);
}

function alertMessage(selector, type, message) {

    $(selector).html(''); // blank previous message
    var getMsg = '<div class="alert alert-' + type + '">' + message + '</div>'; // html part
    $(selector).html(getMsg); // finally generate message
    $(selector).show(); // show message
}

function goTo(url) {
    // similar behavior as clicking on a link
    window.location = url;
    return false;
}

function sleepJS(milliseconds) {
    var start = new Date().getTime();
    for (var i = 0; i < 1e7; i++) {
        if ((new Date().getTime() - start) > milliseconds) {
            break;
        }
    }
}

function varDumpJS(obj) {

    var out = '';
    for (var i in obj) {
        out += i + ": " + obj[i] + "\n";
    }
    alert(out);
    // or, if you wanted to avoid alerts...
    var pre = document.createElement('pre');
    pre.innerHTML = out;
    document.body.appendChild(pre)
}

function sleep__(milliseconds) {
    var start = new Date().getTime();
    for (var i = 0; i < 1e7; i++) {
        if ((new Date().getTime() - start) > milliseconds) {
            break;
        }
    }
}

function sleep(timestamp) {
    // http://kevin.vanzonneveld.net
    // +   original by: Brett Zamir (http://brett-zamir.me)
    // %          note: For study purposes. Current implementation could lock up the user's browser.
    // %          note: Expects a timestamp in seconds, so DO NOT pass in a JavaScript timestamp which are in milliseconds (e.g., new Date()) or otherwise the function will lock up the browser 1000 times longer than probably intended.
    // %          note: Consider using setTimeout() instead.
    // *     example 1: time_sleep_until(1233146501) // delays until the time indicated by the given timestamp is reached
    // *     returns 1: true
    while (new Date() < timestamp * 1000) {
    }
    return true;
}