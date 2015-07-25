$(document).ready(function () {

    // add comments link on main nav
    $('.jsComment').on('click', function (e) {
        e.preventDefault();
        $.ajax({
            url: "add-impression.php"
        }).done(function (res) {
            $('#content').html(res);
        });
    });

    $('.ajax-call').on('click', function (e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr('href'),
            type: 'get',
            success: function (data) {
                $('#content').parent().html(data);
            }
        })
    });

    // comments link on main nav
    $('#listComments').on('click', function (e) {
        e.preventDefault();
        $.ajax({
            url : 'impression-list.php'
        }).done(function (res) {
            $('#content').html(res);
        });
    });

    // admin log in link on main nav
    $('#admin-log').on('click', function (e) {
        e.preventDefault();
        $.ajax({
            url : 'admin-login.php'
        }).done(function (res) {
            $('#content').html(res);
        });
    });



    // add comment button
    $('#content').on('submit','#addForm', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var data = $(this).serialize();
        var action = $(this).attr('action');
        $.ajax({
            url : action,
            type: 'post',
            data: data,
        }).done(function (res) {
            $('#content').html(res);
        });
    });



    // login form submit
    $('#content').on('submit', '#loginForm', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var data2 = $(this).serialize();
        var action2 = $(this).attr('action');
        $.ajax({
            url : action2,
            type: 'post',
            data: data2
        }).done(function (res) {
            $('#content').html(res);
        });
    });


    // delete comment row
    $('.jsDelete').on('click', function (e) {
        var url = $(this).attr('href');
        var self = this;
        e.preventDefault();
        $.ajax({
            url : url,
        }).done(function (res) {
            $(self).parent().parent().fadeOut(function () {
                $(self).parent().parent().remove();
            })
        });
    });
});

