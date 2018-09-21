app.controller('SearchController', function ($scope, $http) {

    // get master data 
    $scope.init = function (page) {
        page = page || null;
        path = base_path + '/getselect';
        // debugger;
        $http.get(path).then(function (response) {
            // debugger;
            try {
               
            }
            catch(err) {
                console.log(err.message); 
            }
        }, function (response) {
            // debugger;
            console.log('fail');
        });
    }

    // search by use keyword 
    $scope.searching = function(request){
        var req = {
            params:request,
            url:base_path+'getbysearch'
        }
        $http.post(req).then(function(response){
            try {
                $scope.photographerList = response.data;
            }
            catch(err) {
                console.log(err.message); 
            }
        },function(response){
            console.log('error');
        });
    }



});
