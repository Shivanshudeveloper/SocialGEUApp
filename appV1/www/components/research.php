<div class="card marginCard">
    <div class="text-center card-body">
        <h3 class="card-title">Papers</h3>
    </div>
</div>

<h2 class="text-center" style="font-size: 20px">Upload File</h2>

<div class="card marginCard">
    <div class="text-center card-body">
        <input type="text" id="title" placeholder="Title" class="form-control">

        <input style="margin-top: 10px" type="file" id="fileButton" />
        <br />
        <br />
        <label>Progress</label>
        <br />
        <progress value="0" max="100" id="uploader">0%</progress>
        <br />
        <button type="button" id="articleSubmit-btn" onclick="submitArticle();" disabled class="btn btn-block btn-primary">Upload</button>
    </div>
</div>

<div id="papers"></div>
<script>
    (() => {
        firebase.auth().onAuthStateChanged(user => {
            // Checking if the session for the user exist or not
            if (user) {
                var database = firebase.database()
                var ref = database.ref('articles/' + user.uid + "/")
                ref.on('value', gotData, errData)

                function gotData(data) {
                    var posts = data.val()
                    var keys = Object.keys(posts)
                    for (let i = 0; i < keys.length; i++) {
                        var k = keys[i]
                        var fileURL = posts[k].downloadURL
                        var fileTitle = posts[k].title
                        console.log(fileURL)
                        var element = `
                            <div class="marginCard card">
                            <div class="card-body d-flex flex-row">
                                <div>
                                    <h4 class="card-title font-weight-bold mb-2">${fileTitle}</h4>
                                </div>
                            </div>
                                <div class="card-body">
                                    <a href=${fileURL} target="_blank" class="btn btn-primary btn-block">Download</a>
                                </div>
                            </div>
                        `;
                        document.getElementById("papers").innerHTML += element;
                        console.log("Papers Added")
                    }
                }

                function errData(error) {
                    console.error(error);
                }
            } else {
                console.log("No User Login")
            }
        })
    })()
    var uploader = document.getElementById('uploader');
    var fileButton = document.getElementById('fileButton');
    var imageDownloadUrl = "";
    // Listen for file Selection
    fileButton.addEventListener('change', function(e) {
        // Get File
        var file = e.target.files[0];

        // Create a storage ref
        var storageRef = firebase.storage().ref('files/' + file.name);

        // Upload File
        var task = storageRef.put(file);

        // Get the download URL
        storageRef.getDownloadURL().then(function(url) {
            imageDownloadUrl = url
        }).catch(function(error) {
            console.error(error)
        });
        // Update progress bar
        task.on('state_changed',

            function progress(snapshot) {
                var percentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                uploader.value = percentage;
            },
            function error(err) {
                console.error(err);
            },

            function complete() {
                console.log("Completed")
                $("#articleSubmit-btn").prop('disabled', false)
            }

        );
    });


    const submitArticle = () => {
        console.log(imageDownloadUrl)
        firebase.auth().onAuthStateChanged(firebaseUser => {
            if (firebaseUser) {
                var title = $("#title").val()
                if (title == "") {
                    swal({
                        title: "Title",
                        text: "Title can't be blank",
                        icon: "warning",
                    });
                } else {
                    var database = firebase.database()
                    var ref = database.ref("articles/" + firebaseUser.uid)
                    var data = {
                        title: title,
                        downloadURL: imageDownloadUrl
                    }
                    ref.push(data)
                }
            } else {
                console.log("No User Login")
            }
        })
    }
</script>