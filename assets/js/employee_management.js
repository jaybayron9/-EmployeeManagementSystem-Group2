var employeeApp = angular.module('employeeApp', []);

employeeApp.controller('employeeAppCtrl', ['$scope', '$http', function ($scope, $http) {


var employee_status = {};

var department_form = {};

var employee_form = {};


$scope.addEmployee = function(employee_form){
var add_employee_warning = confirm("Are you sure you want to add employee?");


if(add_employee_warning){

$http({
method: 'post',
url: 'php_sccript/addEmployee.php',
data: employee_form
}).then(function(){
location.reload();
});


}

}

$scope.deleteDepartment = function(department){
	var delete_warning = confirm("Are you sure you want to delete this department?");

	if(delete_warning) {
		$http({
			method: 'post',
			url: 'php_sccript/deleteDepartment.php',
			data: department
		}).then(function(){
			location.reload();
		});
	}

}

$scope.deleteEmployee = function(employee){
	var delete_warning = confirm("Are you sure you want to delete this employee?");

	if(delete_warning){
	$http({

		method: 'post',
		url: 'php_sccript/deleteEmployee.php',
		data: employee

	}).then(function(){
	location.reload();
	});

	}

}



$scope.getEmployee = function(){
$http({
method: 'get',
url: 'php_sccript/getEmployee.php'
}).then(function(data){
	$scope.employee_data = data.data;

});

}





$scope.addDepartment = function(department_form){

	var continueAddDep = confirm("Are you sure to continue adding the department details?");

	if(continueAddDep){
		$http({
		method: "post",
		url: 'php_sccript/add_department.php',
		data: department_form
		}).then(function(){
			
			department_form.department_name = "";
			department_form.department_description = "";
			$scope.getDepartment();	
				
		});

	}else{
			
			department_form.department_name = "";
			department_form.department_description = "";

	}

}










$scope.getDepartment = function(){
	$scope.department_title = "Active Department";
	$scope.archive_link = "block";
	$scope.active_link = "none";

$http({
	method: 'get',
	url: 'php_sccript/getDepartment.php'

}).then(function(data){

	$scope.department_data = data.data;

});

}


$scope.editEmployee = function(employee){
	
	$("#editEmployee").modal("show");

		var temp_emp = {};
  angular.copy(employee, temp_emp);
	$scope.employee_fetch = temp_emp;


}
$scope.leaveEmployee = function(employee){
	$("#retractEmployee").modal("show");
		var temp_emp = {};
  angular.copy(employee, temp_emp);
	$scope.employee_fe = temp_emp;
}

$scope.closeEditEmp = function(){
	$("#editEmployee").modal("hide");
}







$scope.endEmployee = function(employee_fe){
	var end_warning = confirm("Are you sure you want to Retract this Employee");

	if(end_warning){

	$http({
		method: 'post',
		url: 'php_sccript/retractEmployee.php',
		data: employee_fe

	}).then(function(){
	location.reload();

		});


	}
}

$scope.closeRetract = function(){
	$("#retractEmployee").modal("hide");	
}




$scope.seeEmployeeViaStatus = function(employee_form){



$http({

	method: 'post',
	url: 'php_sccript/searchFilter.php',
	data: employee_form

}).then(function(data){
		$scope.employee_data = data.data;

});



}


$scope.liveSearch = function(employee_form){
	$http({
		method: 'post',
		url: 'php_sccript/liveSearch.php',
		data: employee_form
	}).then(function(data){
	$scope.employee_data = data.data;
	});
}








$scope.updateDepartment = function(department_fetch){
	var update_warning = confirm("Are you sure you want to Update this Department's details?");

	if(update_warning){
		$http({
			method: 'post',
			url: 'php_sccript/updateDepartment.php',
			data: department_fetch
		}).then(function(){
			$("#editDepartment").modal("hide");
			location.reload();

		});


	}
}




$scope.editDepartment = function(department_inf){
	$("#editDepartment").modal("show");
		var temp_dep = {};
  angular.copy(department_inf, temp_dep);
	$scope.department_fetch = temp_dep;
}


$scope.closeEditDep = function(){
	$("#editDepartment").modal("hide");
}




}]);