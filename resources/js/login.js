let app = angular.module('loginApp',[]);

app.controller("LoginController",function ($scope){
    const self = this;

    self.login = function (){
        console.log("Sending Login Request");
    }

    self.username = "";
    self.password = "";
});

