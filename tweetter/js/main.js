$(function() {


    //.replies expander
    $(document).on('click','form.compose', function() {
        $(this).addClass('expand');
        

        var text_max = 125;

        $('.count').html(text_max);

        $('textarea').keyup(function() {
            var text_length = $(this).val().length;
            var text_remaining = text_max - text_length;

            $('.count').html(text_remaining);

            if($(this).val().length >= 100) {
                $(this).addClass('red');
                $('.count').addClass('red');
            }
            else 
            {
                $(this).removeClass('red');
                $('.count').removeClass('red');
            }
        });

    });

    //.thread expander
    $('.tweets').on('click', 'div.tweet', function() {
        $(this).parent().toggleClass('expand');
    });


    var User = { 
        handle: '@ldcudden',
        img: 'flower.png'
    };

    var renderTweet = function(User, msg) {

        var template = Handlebars.compile($('#template-tweet').html());

        return template({
            title: User.handle,
            img: User.img, 
            message: msg
        });   
    };

    var renderCompose = function() {
        var template = Handlebars.compile($('#template-compose').html());

        return template();
    };

    var renderThread = function(User, msg) {

        var template = Handlebars.compile($('#template-thread').html());

        return template({
            tweet: renderTweet(User, msg),
            compose: renderCompose()
        }); 

    };


    $('main').on('submit','form', function(e) {
        e.preventDefault();

        var msg = $(this).find('textarea').val();

        if ($(this).parents('.tweets').length) {
            
            var my_message = renderTweet(User, msg);
            $(this).parents('.replies').append(my_message);

        } else {
            
            var reply_message = renderThread(User, msg);
            $('.tweets').append(reply_message);
        };


        $('.compose textarea').val('');
        $('.compose').removeClass('expand');

        
    });

    

});


