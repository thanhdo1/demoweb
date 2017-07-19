app.controller('SanPhamController' ,function ($scope,$http,API) {
	$http.get(API + 'list').success(function (response) {
		$scope.sanphams = response;
	});
	$http.get(API + 'loai').success(function (response) {
		$scope.loais = response;
	});
	
	
});