app.controller('LoaiController' ,function ($scope,$http,API) {
	$http.get(API + 'loai').success(function (response) {
		$scope.loais = response;
	});

	
	
});