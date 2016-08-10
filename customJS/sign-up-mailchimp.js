featuresmCtrl.sendEmail = function(email) {
    var endpoint = 'https://calm-meadow-55556.herokuapp.com/lists/subscribe';
    // var url = '//shapeheart.us13.list-manage.com/subscribe/post-json?u=ade4f4ed326e2e1cf354fb21d&amp;id=ac5b82a0e3';
    // var params = {};
    // params.c = 'JSON_CALLBACK';
    // params.EMAIL = email;
    // var actions = {
    //     'save': {
    //         method: 'jsonp'
    //     }
    // };
    var actions = {
        'save': {
            method: 'POST'
        }
    };
    var params = {
        id: '16a24afed6',
        email: email
    };
    var MailChimpSubscription = $resource(endpoint, params, actions);
    MailChimpSubscription.save(
        function(response) {
            if (response.result === 'error') {
                vm.error = true;
                $timeout(function() {
                    vm.error = false;
                }, 2000);
            } else {
                vm.sent = true;
                $timeout(function() {
                    vm.signup = false;
                }, 2000);
            }
        },
        function(error) {
            vm.error = true;
        }
    );
};
controller.$inject = controllerDeps;