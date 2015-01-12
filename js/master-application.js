
		angular.module('master-app', ['ui.bootstrap']);
		angular.module('master-app').controller('master-control',function category($scope,$http) {
		$scope.dataLoaded = false;
		
		$http.get(myserverlink)
		.success(function(response) {$scope.itemlist = response;$scope.dataLoaded = true;});
		});
		
			
		var app1 = angular.module('master-app');
		app1.filter('encodeURIComponent', function() {
			return window.encodeURIComponent;
		});
		
		var app2 = angular.module("master-app");
    	app2.directive('errSrc', function() {
		return {
			link: function(scope, element, attrs) {
			  element.bind('error', function() {
				if (attrs.src != attrs.errSrc) {
				  attrs.$set('src', attrs.errSrc);
				}
			  });
			}
		  }
		});
		
		angular.module('master-app').controller('angular-bala-pops', function ($scope) {
		 
		});
			
		
	