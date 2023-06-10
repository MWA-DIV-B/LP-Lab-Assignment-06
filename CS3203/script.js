angular.module('myApp', [])
  .controller('ContactController', function($scope, $http) {
    $scope.submitForm = function() {
      var data = {
        name: $scope.name,
        email: $scope.email,
        message: $scope.message
      };

      // Send form data to the server
      $http.post('/contact', data)
        .then(function(response) {
          // Handle success
          console.log(response);
          // Optionally, you can show a success message to the user
          alert('Thank you, ' + $scope.name + '! Your message has been sent.');
          // Clear form inputs
          $scope.name = '';
          $scope.email = '';
          $scope.message = '';
        }, function(error) {
          // Handle error
          console.log(error);
          // Optionally, you can show an error message to the user
          alert('Oops! Something went wrong. Please try again later.');
        });
    };
  });
