$(document).ready(() => {
    // Fetching URL
    var pageUrl = window.location.href;
    var url = new URL(pageUrl);
    var page = url.searchParams.get("page");
    // Checking URL
    (() => {
        
        // Profile Pic Update
        firebase.auth().onAuthStateChanged(firebaseUser => {
            // Checking if the session for the user exist or not
            if (firebaseUser) {
                $("#avtarProfilePic").attr("src", firebaseUser.photoURL)
            } else {
                $("#avtarProfilePic").attr("src", "https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg")
            }
        })



        if (page === "home") {
            $("#root").load("./components/home.php")
            getPost()
        } else if(page === "blogs") {

        } else if (page === "notifications") {

        } else if (page === "signout") {
            firebase.auth().signOut().then(function () {
                window.location.href = "./index.php"
            }).catch(function (error) {
                console.error(error)
            });
        } else if (page === "profile") {
            userProfile()
        } else if (page === "posts") {
            getPostUser()
        } else if (page === "research") {
            $("#root").load("./components/research.php")
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

const getPost = () => {
    // Getting All Posts
    var user = firebase.auth().currentUser
    var database = firebase.database()
    var ref = database.ref('posts/')
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
}

const getPostUser = () => {
    // Getting User Posts
    firebase.auth().onAuthStateChanged(user => {
        // Checking if the session for the user exist or not
        if (user) {
            var database = firebase.database()
            var ref = database.ref('UserPosts/' + user.uid + "/")
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
        } else {
            console.log("No User Login")
        }
    })


    
}

const userProfile = () => {
    firebase.auth().onAuthStateChanged(firebaseUser => {
        // Checking if the session for the user exist or not
        if (firebaseUser) {
            $("#profilePhoto").attr("src", firebaseUser.photoURL)
            $("#displayName").html(firebaseUser.displayName)
            $("#userEmail").html(firebaseUser.email)
        } else {
            console.log("No User Login")
        }
    })
}





const submitPost = () => {
    var user = firebase.auth().currentUser
    var posts = $("#post-field").val()
    var database = firebase.database()
    var ref1 = database.ref('UserPosts/'+user.uid)
    var ref2 = database.ref('posts/')
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
                ref1.push(data)
                ref2.push(data)
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



