$(function() {

    function callback() {
        setTimeout(function() {
            $('#inscription-form-container').addClass("hide");
            $('#btnShowInscriptionForm').removeClass("hide");

            $("#btnSubmitInscriptionForm").removeClass("validate");
            $("#btnSubmitInscriptionForm").attr("disabled", false);

            $('#successInscription').html("<div class='alert alert-success'>");
            $('#successInscription > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>");
            $('#successInscription > .alert-success').append("<strong>Votre demande a bien été envoyée. </strong>");
            $('#successInscription > .alert-success').append('</div>');

            $('#successInscription').removeClass("hide");
            //clear all fields
            $('#inscription-title').trigger("click");
            $('#inscriptionForm').trigger("reset");
        }, 1250 );

        setTimeout(function() {
            $('#successInscription').addClass("hide");
        }, 5000 );
    }

    $("#inscriptionForm input,#inscriptionForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
            setTimeout(function() {
                $("#btnSubmitInscriptionForm").removeClass( "onclic" );
                $("#btnSubmitInscriptionForm").removeClass( "validate" );
                $("#btnSubmitInscriptionForm").attr("disabled", false);
            }, 2250 );
        },
        submitSuccess: function($form, event) {
            // Prevent spam click and default submit behaviour
            $("#btnSubmitInscriptionForm").attr("disabled", true);
            event.preventDefault();
            
            // get values from FORM
            var nom = $("input#nom").val();
            var prenom = $("input#prenom").val();
            var dateLieux = $("input#birthData").val();
            var perePrenom = $("input#perePrenom").val();
            var pereProfession = $("input#pereProfession").val();
            var mereNom = $("input#mereNom").val();
            var merePrenom = $("input#merePrenom").val();
            var mereProfession = $("input#mereProfession").val();
            var parentsAddress = $("textarea#parentsAddress").val();
            var parentEmail = $("input#parentEmail").val();
            var phoneHome = $("input#phoneHome").val();
            var phoneWork = $("input#phoneWork").val();
            var phoneOther = $("input#phoneOther").val();
            var personnes = "";
            $('#personnesAllowed :input').each(function(i){
                personnes = personnes + "Personne " + (i+1) + " : " +$(this).val() + "      /      ";
            });
            console.log(personnes);
            var otherInformations = $("textarea#otherInformations").val();


            $.ajax({
                url: "././inscription/inscription.php",
                type: "POST",
                data: {
                    nom: nom,
                    prenom: prenom,
                    dateLieux: dateLieux,
                    perePrenom: perePrenom,
                    pereProfession: pereProfession,
                    mereNom: mereNom,
                    merePrenom: merePrenom,
                    mereProfession: mereProfession,
                    parentsAddress: parentsAddress,
                    parentEmail: parentEmail,
                    phoneHome: phoneHome,
                    phoneWork: phoneWork,
                    phoneOther: phoneOther,
                    personnes: personnes,
                    otherInformations: otherInformations
                },
                cache: false,
                success: function() {
                    $("#btnSubmitInscriptionForm").removeClass( "onclic" );
                    $("#btnSubmitInscriptionForm").addClass( "validate", 450, callback() );
                    $("#btnSubmitInscriptionForm").attr("disabled", true);
                },
                error: function() {
                    setTimeout(function() {

                        $("#btnSubmitInscriptionForm").removeClass( "onclic" );
                        $("#btnSubmitInscriptionForm").attr("disabled", false);

                        // Fail message
                        $('#successInscription').html("<div class='alert alert-danger'>");
                        $('#successInscription > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        $('#successInscription > .alert-danger').append("<strong>Désolé " + firstName + ", il semblerait que le serveur mail ne répond pas. Veuillez réessayer plus tard!");
                        $('#successInscription > .alert-danger').append('</div>');
                        //clear all fields

                        //$('#inscriptionForm').trigger("reset");
                    }, 1250 );
                },
            });
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});

// When clicking on Full hide fail/success boxes
$('#name').focus(function() {
    $('#success').html('');
});
