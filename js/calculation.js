(function(){
	var app = angular.module('CalculatorApp',[]);
	app.controller('CalculatorController', function($scope){
		$scope.principal = 0;
		$scope.mindp = 30;
		$scope.dp = 0;
		$scope.adddp = 0;
		$scope.pinjaman = 0;
		$scope.bunga = 5;
		$scope.time = 1;
		var grandTotal = 0;
		var grandPinjaman = 0;
		$scope.total = function(){
			grandTotal = $scope.principal * $scope.mindp / 100;
			return grandTotal;
		}
		$scope.outpinjaman = function(){
			grandPinjaman = ($scope.principal - $scope.adddp);
			return grandPinjaman;
		}
		$scope.outAngsuran = function(){
			var resangsuran = grandPinjaman / ($scope.time * 12) + (grandPinjaman * $scope.bunga / 100 / ($scope.time * 12)); 
			return resangsuran;
		};
	});

})();





