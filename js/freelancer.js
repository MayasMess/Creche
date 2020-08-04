// Freelancer Theme JavaScript

(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function(){ 
            $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })

    $('#btnShowInscriptionForm').bind('click', function(event) {
        $('#inscription-form-container').removeClass("hide");
        $('#btnShowInscriptionForm').addClass("hide");
        event.preventDefault();
    });

    // Adding allowed personnes input
    $('#addPersonne').bind('click', function(event) {
        var personnesAllowedContainer = document.getElementById('personnesAllowed');
        var index = personnesAllowedContainer.childElementCount;
        var count = index + 1;
        var html = "";

        html += '<div class="row control-group">';
        html += '<div class="form-group col-xs-12 floating-label-form-group controls dark-input no-border-top">';
        html += '<label>Personne ' + count + '</label>';
        html += '<input type="text" class="form-control" placeholder="Personne ' + count + '" id="personne' + count + '">';
        html += '<p class="help-block text-danger"></p>';
        html += '</div>';
        html += '</div>';

        $('#personnesAllowed').append(html);

        if(count === 5){
            $('#addPersonne').addClass("hide");
        }
        event.preventDefault();
    });

    // Submit inscription form
    $('#btnSubmitInscriptionForm').bind('click', function(event) {
        $('#inscriptionForm').submit();
        $( "#btnSubmitInscriptionForm" ).addClass( "onclic", 250);
    });


    // Floating label headings for the forms imputs
    $(function() {
        $("body").on("input propertychange", ".floating-label-form-group", function(e) {
            $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
        }).on("focus", ".floating-label-form-group", function() {
            $(this).addClass("floating-label-form-group-with-focus");
        }).on("blur", ".floating-label-form-group", function() {
            $(this).removeClass("floating-label-form-group-with-focus");
        });
    });

})(jQuery); // End of use strict
