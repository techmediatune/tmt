javascript:document.body.contentEditable='true'; document.designMode='on'; void 0



var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
//var embedded = "embedplayer";
var embedded = "membedplayer";
if (!isMobile.any()){
        embedded = "embedplayer";
}
if (typeof(width) == 'undefined') width = 360;
if (typeof(height) == 'undefined') height = 270;
if (width < 360) width = 360;
if (height < 270) height = 270;
if (width < height) height = width;
document.write('<iframe width='+width+' height='+height+' scrolling=no frameborder=0 scrolling=no allowtransparency=true marginwidth="0" marginheight="0" src=http//p3g.tv/'+embedded+'/'+channel+'/'+g+'/'+width+'/'+height+' ></iframe>')
