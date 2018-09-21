var app = angular.module('myApp', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('MainController', function ($scope, $http) {

   
});

$(function () {
    // alert('hi');
});