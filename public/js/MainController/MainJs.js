var app = angular.module('myApp', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('MainController', function ($scope, $http) {

    $scope.signIn = function (e) {
        console.log(e);
        if (e.length != 0) {
            if (e.email != '' && e.password != null) {
               var req ={
                   params : e,
                   url:base_path+''
               }
               $http.post(req).then(function(response){

               },function(response){
                    alert('can not sign in !!');
               });
            } else {
                alert('please insert data');
            }
        } else {
            alert('please insert data');
        }
    }
});

$(function () {
    // alert('hi');
});