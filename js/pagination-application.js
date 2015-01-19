
		angular.module('master-app', ['ui.bootstrap']);
		angular.module('master-app').controller('master-control', function ($scope, $log, $http) {
		  
		  //$scope.bigTotalItems = totalitemscount;
		  $scope.bigCurrentPage = 1;
		   $scope.dataLoaded = false;
		  $scope.setPage = function (pageNo) { 
			$scope.dataLoaded = false;
			$scope.bigCurrentPage = pageNo;
			$scope.itemsperpage=12;
			var itemsperpage=$scope.itemsperpage;
			
			$http.get(myserverlink + productname + "&limit=" + itemsperpage + "&page=" + pageNo) 
			.success(function(response)  {$scope.returnedlist = response;$scope.dataLoaded = true;$scope.bigTotalItems =response.pagination.total;});
			
		  };

		  $scope.pageChanged = function() { 
		  $log.log('Page changed to: ' + $scope.bigCurrentPage);
		  };

		  $scope.maxSize = 10;
		  //$scope.bigTotalItems = totalitemscount;
		  
		  $scope.bigCurrentPage = 1;
		  $scope.dataLoaded = false;
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
		

		
		
		
		
		
	angular.module('master-app').controller('balajisrirangam-star-rating', function($scope, $window) {
    $scope.rating = 5;
    $scope.saveRatingToServer = function(rating) {
      $window.alert('Rating selected - ' + rating);
    };
  })
  .directive('fundooRating', function () {
    return {
      restrict: 'A',
      template: '<ul class="rating">' +
                  '<li ng-repeat="star in stars" ng-class="star" ng-click="toggle($index)">' +
                    '\u2605' +
                  '</li>' +
                '</ul>',
      scope: {
        ratingValue: '=',
        max: '=',
        readonly: '@',
        onRatingSelected: '&'
      },
      link: function (scope, elem, attrs) {

        var updateStars = function() {
          scope.stars = [];
          for (var  i = 0; i < scope.max; i++) {
            scope.stars.push({filled: i < scope.ratingValue});
          }
        };

        scope.toggle = function(index) {
          if (scope.readonly && scope.readonly === 'true') {
            return;
          }
          scope.ratingValue = index + 1;
          scope.onRatingSelected({rating: index + 1});
        };

        scope.$watch('ratingValue', function(oldVal, newVal) {
          if (newVal) {
            updateStars();
          }
        });
      }
    }
  });