
$( "#inscription" ).validate( {
    rules: {
        nom:{
            required: true,
            minlength: 2,
            number: false
            },
        prenom:{
            required: true,
            minlength: 2,
            number: false
            },
        email: {
            required: true,
            email: true
        },
        motdepasse:{
            required: true,
            minlength: 8
            },
        confpasse:{
            required: true,
            minlength: 8,
            equalTo: "#motdepasse"
            },
            adresse:{
                required: true
            },
            ville:{
                required: true,
                number: false
            },
            pays:{
                required: true,
                number: false
            },
            codepostal:{
                required: true,
                number: true,
                minlength: 3,
                maxlength: 5
            },
        agree: "required"
    },
    messages: {
            nom: {
            required: "Le nom est obligatoire",
            minlength: "Le nom doit contenir au moins 2 caractères",
            number: "le nom ne peut pas contenir de nombres"
        },
        prenom: {
            required: "Le prénom est obligatoire",
            minlength: "Le prénom doit contenir au moins 2 caractères",
            number: "le prénom ne peut pas contenir de nombres"
        },
        email: {
            required: "L'adresse email est obligatoire",
            email: "L'adresse email n'est pas valide"
        },
        motdepasse: {
            required: "Le mot de passe est obligatoire",
            minlength: "Le mot de passe doit contenir au moins 8 caractères"
        },
        confpasse: {
            required: "Le mot de passe est obligatoire",
            minlength: "Le mot de passe doit contenir au moins 8 caractères",
            equalTo: "Les mots de passe ne correspondent pas"
        },
        adresse: {
            required: "L'adresse est obligatoire"
        },
        ville: {
            required: "La ville est obligatoire",
            number: "La ville n'est pas valide"
        },
        pays: {
            required: "Le pays est obligatoire",
            number: "Le pays n'est pas valide"
        },
        codepostal: {
            required: "Le code postal est obligatoire",
            number: "Le code postal n'est pas valide",
            maxlength: "Le code postal doit contenir au moins 5 caractères"
        },
        },
        
        highlight: function ( element, _errorClass, _validClass ) {
            $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
        },
        unhighlight: function (element, _errorClass, _validClass) {
            $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
        }

});
