app.controller('SearchController', function ($scope, $http) {
    // get master data
    
    $scope.init = function (page) {
        page = page || null;
        path = base_path + '/getselect';
        // debugger;
        $http.get(path).then(function (response) {
            // debugger;
            $scope.location = response.data[0];
            $scope.cost = response.data[1];
            $scope.service = response.data[2];
            $scope.typeproject = response.data[3];
        }, function (response) {
            // debugger;
            alert('fail');
        });
    }




});
