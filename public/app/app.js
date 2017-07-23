
/*var app = angular.module('myApp',[]).constant('API','http://localhost/demos/public/');*/
var app = angular.module('myApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
