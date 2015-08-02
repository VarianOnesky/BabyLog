(function() {
    var app = angular.module('baby', []);

    app.controller('babyController', ['$http', function($http) {
        this.view = 'Home';
        this.logsView = '';
        this.breastFeedingOption = [
            { 'name': '5 min', 'duration': 5},
            { 'name': '10 min', 'duration': 10},
            { 'name': '15 min', 'duration': 15},
            { 'name': '20 min', 'duration': 20},
            { 'name': '25 min', 'duration': 25},
            { 'name': '30 min', 'duration': 30}
        ]
        this.breastFeedingSelected = this.breastFeedingOption[0];

        var babyObj = this;

        this.submitBreastFeeding = function() {

            $http.post('/BabyLog/web/app_dev.php/api/breast-feeding', babyObj.breastFeedingSelected).success(function (data){
                alert('Update Success');

                babyObj.logsView = '';
            });
        };
    }]);
})();