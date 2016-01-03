(function(){

var requestAjax = function(endpoint, callback) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if (this.readyState==4 && this.status==200) {
            callback(this.response);
        }
    };
    xhr.responseType = 'jsonp';
    xhr.open('GET',endpoint,true);
    xhr.send();
};

// variables
var accessToken;
var baseEndpoint = 'https://api.instagram.com/v1';

requestAjax('/token.php',function(r){
    accessToken = r.token;
    console.log(accessToken);
});




})();
