<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Dynamic Dropdown list using AngularJS in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      </head> 
      <body>  
           <br /><br />  
           <div class="container" style="width:600px;">  
           <form action="insert.php" method="POST">
                <h3 align="center">  Registration Form </h3>  
                <br />  
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="org" placeholder="Enter Organization Name ">
                </div>

                    <!-- <input type="text" placeholder="Enter Name" name="name" required>
                    <input type="text" placeholder="Enter Email" name="email" required>
                    <input type="password" placeholder="Enter Password" name="password" required>
                    <input type="text" placeholder="organization name" name="org" required> -->
                <div ng-app="myapp" ng-controller="usercontroller" ng-init="loadCountry()">  
                     <select name="country" ng-model="country" class="form-control" ng-change="loadState()">  
                          <option value="">Select Country</option>  
                          <option ng-repeat="country in countries" value="{{country.country_id}}">{{country.country_name}}</option>  
                     </select>  
                     <br />  
                     <select name="state" ng-model="state" class="form-control">  
                          <option value="">Select State</option>  
                          <option ng-repeat="state in states" value="{{state.state_id}}">  
                               {{state.state_name}}  
                          </option>  
                     </select>  
                </div>  
                <br><br>
                <center>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </center>
                </div>
           </form>
           </div>  
      </body>  
 </html>  
 <script>  
 var app = angular.module("myapp",[]);  
 app.controller("usercontroller", function($scope, $http){  
      $scope.loadCountry = function(){  
           $http.get("load_country.php")  
           .success(function(data){  
                $scope.countries = data;  
           })  
      }  
      $scope.loadState = function(){  
           $http.post("load_state.php", {'country_id':$scope.country})  
           .success(function(data){  
                $scope.states = data;  
           });  
      }  
 });  
 </script>  
