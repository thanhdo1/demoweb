var app = angular.module('my-app',[]).constant('API', 'http://localhost:8080/demos/public/')
.config(function($routeProvider) {
	$routeProvider
	.when('/gioithieu', {
		templateUrl: 'page/gioithieu.php',
		
	})
	.when('/lienhe', {
		templateUrl: 'page/lienhe.php',
		
	})
	
	.otherwise({
		templateUrl: 'page/404.html'
	})
})