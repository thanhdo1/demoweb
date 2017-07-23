app.controller('SanPhamController' ,function ($scope,$http) {
	$http.get('http://localhost/demos/public/list').success(function (response) {
		$scope.sanphams = response;
	});
	$http.get('http://localhost/demos/public/loai').success(function (response) {
		$scope.loais = response;
	});


});