$(document).ready(() => {
    firebase.auth().onAuthStateChanged(firebaseUser => {
        if (firebaseUser) {
            console.log(firebaseUser)
        } else {
            console.log("No User Login")
        }
    })
})