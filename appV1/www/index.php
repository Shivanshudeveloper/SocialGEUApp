<?php
include_once '../includes/header.inc.php';
?>
<!-- Body Comes Here -->
<div id="mainSection">
    <img src="https://www.geu.ac.in/content/dam/geu/geu-logo.svg" class="img-fluid" alt="GEU LOGO" />
    <div class="text-center">
        <div id="signInProviders">
            <p style="margin-top: 35%;" class="h1">Welcome</p>
            <div class="container text-center">
                <button type="button" id="googleSignIn-btn" class="btn btn-block btn-danger"><i class="fab fa-google"></i> Google </button>
                <button type="button" id="facebookSignIn-btn" style="margin-top: 5px;" class="btn btn-block btn-primary"><i class="fab fa-facebook-f pr-1"></i> Facebook</button>
                <button type="button" id="emailSignIn-btn" style="margin-top: 5px;" class="btn btn-block btn-success"><i class="fas fa-envelope"></i> Email</button>
            </div>
        </div>
    </div>
</div>
<!-- Body Comes Here -->
<script src="../src/js/config.js"></script>
<script src="../src/js/main.js"></script>
<script>
    firebase.auth().onAuthStateChanged(firebaseUser => {
        // Checking if the session for the user exist or not
        if (firebaseUser) {
            window.location.href = "./home.php?page=home"
        } else {
            console.log("No User Login")
        }
    })

    // For Sign Up
    const signUpPage = () => {
        $("#signInProviders").html(`
            <p style="margin-top: 35%;" class="h1">Sign Up</p>
            <div class="container text-center">
                <input type="text" id="signUpfullname" placeholder="Full Name" class="form-control">
                <input type="text" style="margin-top: 8px;" id="signUpEmail" placeholder="Email" class="form-control">
                <input type="text" style="margin-top: 8px;" id="signUpPassword" placeholder="Password" class="form-control">
                <button type="button" style="margin-top: 8px;" onclick="signUp()" id="signUpEmail-btn" class="btn btn-block btn-success">Sign Up</button>
            </div>
        `)
    }

   

    // For SignUp
    const signUp = () => {
        var fullName = $("#signUpfullname").val()
        var email = $("#signUpEmail").val()
        var pwd = $("#signUpPassword").val()

        const promise = firebase.auth().createUserWithEmailAndPassword(email, pwd);
        promise
            .then(user => window.location.href = "./index.php?user=created"
            )
            .catch(e => swal({
                title: "Opps!",
                text: e.message,
                icon: "error",
                button: "Okay!",
            }));

    }
</script>