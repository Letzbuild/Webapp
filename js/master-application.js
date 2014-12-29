
		angular.module('master-app', ['ui.bootstrap']);
		angular.module('master-app').controller('master-control', function ($scope, $log, $http) {
		  
		  $scope.bigTotalItems = totalitemscount;
		  $scope.bigCurrentPage = 1;
		  ;
		  $scope.setPage = function (pageNo) {
			
			$scope.bigCurrentPage = pageNo;
			$scope.itemsperpage=12;
			var itemsperpage=$scope.itemsperpage;
			$http.get("http://" + serverlink + "/products/retrieve?cat=" + productname + "&limit=" + itemsperpage + "&page=" + pageNo) 
			.success(function(response) {$scope.returnedlist = response;});
			
		  };

		  $scope.pageChanged = function() {
		  $log.log('Page changed to: ' + $scope.bigCurrentPage);
		  };

		  $scope.maxSize = 10;
		  $scope.bigTotalItems = totalitemscount;
		  $scope.bigCurrentPage = 1;
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
			