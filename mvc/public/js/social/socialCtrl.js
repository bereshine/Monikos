var app = angular.module('socialApp', []);

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
var id_cookie = getCookie("user_id");
var un_cookie = getCookie("username");

var config = {
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
    }
};

app.controller('socialCtrl', function ($scope, $http, $log) {

    var data = $.param({
        id: id_cookie
    });


    $http.post('/db/get_friends.php', data, config).then(function (response) {
        $log.info(response.data.records);
        $scope.friends = response.data.records;
    });


    $scope.addFriend = function () {
        var fr_un = document.getElementById('fr_un').value;
        var fr_data = $.param({
            fr_un: fr_un,
            un: un_cookie
        });
        $http.post('/db/add_friend.php', fr_data, config).then(function (response) {
            $log.info(response.data);
        });
    }

    $scope.showPopup = function () {
        document.getElementById('modal-wrapper').style.visibility = "visible";


        var css = document.createElement("style");
        css.type = "text/css"
        css.innerHTML =
            ".add-friend {webkit-transform: scale(1); -moz-transform: scale(1); -ms-transform: scale(1); transform: scale(1); opacity: 1; }";
        document.body.appendChild(css);

    }

    $scope.hidePopup = function () {
        document.getElementById('modal-wrapper').style.visibility = "hidden";

        var css = document.createElement("style");
        css.type = "text/css"
        css.innerHTML =
            ".add-friend { -webkit-transform: scale(0.7); -moz-transform: scale(0.7);-ms-transform: scale(0.7);transform: scale(0.7);opacity: 0;-webkit-transition: all 0.3s;-moz-transition: all 0.3s;transition: all 0.3s;}";
        document.body.appendChild(css);
    }

    $http.post("/db/get_user_profile.php", data, config).then(function (response) {
        console.log(response);
        $scope.capsules = response.data.records;
    });

    $scope.home = function () {
        window.location = window.location.origin + "/mvc/public/home/";
    }
    $scope.listManager = function () {
        window.location = window.location.origin +
            "/mvc/public/home/listManager/";
    }

})
