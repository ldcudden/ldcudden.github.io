$(function() {


   if ($('textarea').length > 140) {
        $('textarea').css("color","red");
   }

   var msg_max = 140;

   $('textarea').keyup(function() {
        var text_length = $('textarea').val().length;
        var text_remaining = msg_max - text_length;

        $('.count').html(text_remaining);
    });
   
   }

    // header compose textarea expander
    $('header > form.compose').on('click', function() {
        $(this).addClass('expand');
    });

    //.thread expander
    $('.tweets').on('click', 'div.tweet', function() {
        $(this).parent().toggleClass('expand');
    });

    //.replies expander
    $('.tweets').on('click','div.replies form.compose', function() {
        $(this).addClass('expand');
    });


$('header div > button').on('click', function(e) {
        e.preventDefault();
});

var renderTweet = Handlebars.compile($('#template-tweet').html());

var User = { 
    handle: '@bradwestfall',
    img: 'images/brad.png'

  //   toString: function() {
  //   return this.handle + this.img
  // }

};

var msg = $('header form.compose textarea').val();


var tweet_out = renderTweet({
    title: User, 
    message: msg
 
});

console.log(tweet_out + 'hello');

$('header form.compose button').on('click', function() {
    $('.tweets').prepend($('<div class="thread">').html(tweet_out));

});

});