(function(){

var requestAjax = function(endpoint, callback) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if (this.readyState==4 && this.status==200) {
            callback(this.response);
        }
    };
    xhr.responseType = 'json';
    xhr.open('GET',endpoint,true);
    xhr.send();
};

// variables
var accessToken;
var baseEndpoint = 'https://api.instagram.com/v1';

requestAjax('/token.php',function(r){

    accessToken = r.token;

    // favorites feed
    var script = document.createElement('script');
    script.src = baseEndpoint+'/users/5001435/media/recent/?access_token='+accessToken+'&callback=instaCallbackFavorites';
    window.instaCallbackFavorites = function(data) {
        console.log(data);
        data = data.data;
        data.forEach(function(eachData){
            var dummy = document.createElement('div');
dummy.innerHTML = '<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="6" style=""><a href="'+eachData.link+'" target="_blank"></a> </blockquote>';
            var myFeed = document.getElementById('favorites-feed');
            myFeed.appendChild(dummy);
        },data);
    };
    document.body.appendChild(script);

    // my feed
    var myScript = document.createElement('script');
    myScript.src = baseEndpoint+'/users/self/media/recent/?access_token='+accessToken+'&callback=instaCallback';
    window.instaCallback = function(data) {
        data = data.data;
        data.forEach(function(eachData){
            var dummy = document.createElement('div');
dummy.innerHTML = '<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="6" style=""><a href="'+eachData.link+'" target="_blank"></a> </blockquote>';
            var myFeed = document.getElementById('my-feed');
            myFeed.appendChild(dummy);
        },data);
    };
    document.body.appendChild(myScript);
});

})();


