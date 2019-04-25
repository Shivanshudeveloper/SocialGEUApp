$(document).ready(() => {
    // Fetching URL
    var pageUrl = window.location.href;
    var url = new URL(pageUrl);
    var page = url.searchParams.get("page");
    // Checking URL
    (() => {
        if (page === "home") {
            $("#root").load("./components/home.php")
        } else if(page === "blogs") {

        } else if (page === "notifications") {

        } else if (page === "signout") {
            firebase.auth().signOut().then(function () {
                window.location.href = "./index.php"
            }).catch(function (error) {
                console.error(error)
            });
        }
    })()

    $("#signInEmail-btn").click(() => {
        console.log("S")
    })

    // For Email
    $("#emailSignIn-btn").click(() => {
        $("#signInProviders").html(`
            <p style="margin-top: 35%;" class="h1">Sign In</p>
            <div class="container text-center">
                <input type="text" id="email" placeholder="Email" class="form-control">
                <input type="password" style="margin-top: 8px;" id="password" placeholder="Password" class="form-control">
                <button type="button" style="margin-top: 8px;" id="signInEmail-btn" class="btn btn-block btn-success">Sign In</button>
                <script>
                $("#signInEmail-btn").click(() => {
                    var email = $("#email").val()
                    var password = $("#password").val()
                    firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
                    var errorCode = error.code;
                    var errorMessage = error.message;
                    window.location.href = "./home.php?page=home"
                    });
                })
                
                </script>
                <p style="margin-top: 8px;" class="h6">Not a member?
                    <a href="#" onclick="signUpPage()" id="signUp-btn">Register</a>
                </p>
            </div>
        `)
    })

    
    // For Sign In
    
    

    



    // For Google
    $("#googleSignIn-btn").click(() => {
        var provider = new firebase.auth.GoogleAuthProvider();
        firebase.auth().signInWithPopup(provider).then(function (result) {
            var token = result.credential.accessToken;
            var user = result.user;
        }).catch(function (error) {
            var errorCode = error.code;
            var errorMessage = error.message;
            var email = error.email;
            var credential = error.credential;
        });
    })
    // For Facebook
    $("#facebookSignIn-btn").click(() => {
        var provider = new firebase.auth.FacebookAuthProvider();
        firebase.auth().signInWithPopup(provider).then(function (result) {
            window.location.href = "./home.php?page=home"
            var token = result.credential.accessToken;
            var user = result.user;
            console.log(user)
        }).catch(function (error) {
            var errorCode = error.code;
            var errorMessage = error.message;
            var email = error.email;
            var credential = error.credential;
        });
    })

    

    
})
// Getting Posts
var database = firebase.database()
var ref = database.ref('posts')
ref.on('value', gotData, errData)
function gotData(data) {
    var posts = data.val()    
    var keys = Object.keys(posts)
    for (let i = 0; i < keys.length; i++) {
        var k = keys[i]
        var post = posts[k].post
        var name = posts[k].name
        var photo = posts[k].photoUrl
        var element = `
            <div class="marginCard card">
            
            <div class="card-body d-flex flex-row">
                <img src="${photo}" class="rounded-circle mr-3" height="50px" width="50px" alt="avatar" />
                <div>
                    <h4 class="card-title font-weight-bold mb-2">${name}</h4>
                </div>
            </div>

                <div class="card-body">
                    ${post}
                </div>
            </div>
        `;
        document.getElementById("allPosts").innerHTML += element;
        console.log("Post Added")     
    }
}

function errData(error) {
    console.error(error);
}

const submitPost = () => {
    var user = firebase.auth().currentUser
    var posts = $("#post-field").val()
    var database = firebase.database()
    var ref = database.ref('posts')
    var data = {
        post: posts,
        name: user.displayName,
        email: user.email,
        photoUrl: user.photoURL
    }

    swal({
        title: "Are you sure?",
        text: "You want to upload the post",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                ref.push(data)
                swal({
                    title: "Good job!",
                    text: "You is shared",
                    icon: "success",
                    button: "Aww yiss!",
                });
                console.log("Post Submitted")
                $("#post-field").val("")
                location.reload(true)                
            } else {

            }
        });


    
}
