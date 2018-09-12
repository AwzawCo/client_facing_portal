  $(document).ready(function() {
    $('#bid_form_bridgestreet').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            address: {
                validators: {
                        stringLength: {
                        min: 10,
                    },
                        notEmpty: {
                        message: 'Please supply the address'
                    }
                }
            },
             city: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply the city'
                    }
                }
            },
            state: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply the state'
                    }
                }
            },
            zipcode: {
                validators: {
                     stringLength: {
                        min: 5,
                    },
                    notEmpty: {
                        message: 'Please supply the zipcode'
                    }
                }
            },
            distance: {
                validators: {
                    notEmpty: {
                        message: 'Please select the distance'
                    }
                }
            },
            unitSize: {
                validators: {
                    notEmpty: {
                        message: 'Please select the unitSize'
                    }
                }
            },
            sqft: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply the square footage'
                    }
                }
            },
            bath: {
                validators: {
                    notEmpty: {
                        message: 'Please select the number of bathrooms'
                    }
                }
            },
            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 250,
                        message:'Please enter at least 4 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description of your project'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#bid_form_bridgestreet').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});