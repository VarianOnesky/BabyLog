(function() {
    var app = angular.module('baby', []);

    app.controller('babyController', ['$http', function($http) {
        this.view = 'Home';
        this.logsView = '';

        var babyObj = this;
    }]);
})();