<!DOCTYPE html>
<html>
<head>
    <title>PHP Page with Angular Function</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
</head>
<body ng-app="myApp">
    <h1>Single PHP Page with Angular Function</h1>

    <div ng-controller="MyController">
        <button ng-click="displayMessage()">Click me</button>
        <p>{{ message }}</p>
    </div>

    <script>
        var app = angular.module("myApp", []);
        app.controller("MyController", function($scope) {
            $scope.message = ""; // Initialize message

            $scope.displayMessage = function() {
                $scope.message = "Hello, World!";
            };
        });
    </script>
</body>
</html>
