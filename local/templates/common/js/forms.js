$(document).ready(function() {
    //reg form
    $('#author-signup-form').on('submit', function (e) {
        e.preventDefault();

        if ($(this).find('[name="password"]').val() !== $(this).find('[name="confirm-password"]').val()) {
            alert('Пароли не совпадают');

            return;
        }

        $('#signup-form .signup-form').addClass('loading');
        $.ajax({
            url: 'http://api.titulados.local/api/v1/register',
            data: $(this).serialize(),
            method: 'post',
            success: function (response) {
                $('#signup-form .signup-form').removeClass('loading');
                document.cookie = 'api_token=' + response.api_token + ';domain=titulados.local;path=/';
                location.href = 'http://lk.titulados.local';
            },
            error: function (response) {
                $('#signup-form .signup-form').removeClass('loading');

                if (!!response.responseJSON) {
                    for (var key in response.responseJSON) {
                        alert(response.responseJSON[key]);
                    }
                }
            }
        })
    });
    $('#client-signup-form').on('submit', function (e) {
        e.preventDefault();

        if ($(this).find('[name="password"]').val() !== $(this).find('[name="confirm-password"]').val()) {
            alert('Пароли не совпадают');

            return;
        }

        $('#signup-form .signup-form').addClass('loading');
        $.ajax({
            url: 'http://api.titulados.local/api/v1/register',
            data: $(this).serialize(),
            method: 'post',
            success: function (response) {
                $('#signup-form .signup-form').removeClass('loading');
                document.cookie = 'api_token=' + response.api_token + ';domain=titulados.local;path=/';
                location.href = 'http://lk.titulados.local';
            },
            error: function (response) {
                $('#signup-form .signup-form').removeClass('loading');

                if (!!response.responseJSON) {
                    for (var key in response.responseJSON) {
                        alert(response.responseJSON[key]);
                    }
                }
            }
        })
    });
    //end

    //auth form
    $('#signin-form-form').on('submit', function (e) {
        e.preventDefault();

        $('#signin-form .signin-form').addClass('loading');
        $.ajax({
            url: 'http://api.titulados.local/api/v1/login',
            data: $(this).serialize(),
            method: 'post',
            success: function (response) {
                $('#signup-form .signup-form').removeClass('loading');
                document.cookie = 'api_token=' + response.api_token + ';domain=titulados.local;path=/';
                location.href = 'http://lk.titulados.local';
            },
            error: function (response) {
                $('#signin-form .signin-form').removeClass('loading');

                if (!!response.responseJSON) {
                    for (var key in response.responseJSON) {
                        alert(response.responseJSON[key]);
                    }
                }
            }
        })
    });
    //end
});
