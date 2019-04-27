<div class="card marginCard">
    <div class="text-center card-body">
        <h3 class="card-title">Donation</h3>
    </div>
</div>

<div class="container">
    <a href="./donation.php?page=donationForm" class="btn btn-block btn-success">Create Donation Camp</a>
</div>

<div id="allDonations"></div>

<script>
    (() => {
        firebase.auth().onAuthStateChanged(user => {
            // Checking if the session for the user exist or not
            if (user) {
                var database = firebase.database()
                var ref = database.ref('UserPosts/Donation/' + user.uid + "/")
                ref.on('value', gotData, errData)

                function gotData(data) {
                    var posts = data.val()
                    var keys = Object.keys(posts)
                    for (let i = 0; i < keys.length; i++) {
                        var k = keys[i]
                        var donationOption = posts[k].DonationOption
                        var detailsDonation = posts[k].Details
                        var userName = posts[k].FullName
                        var paymentOption = posts[k].PaymentOption
                        var phoneNo = posts[k].PhoneNo
                        var email = posts[k].email
                        var description = posts[k].Description
                        var title = posts[k].Title
                        var element = `
                            <div class="card marginCard">
                                <div class="card-body">
                                    <h5 class="font-weight-bold mb-3">${title}</h5>
                                    <p class="mb-0">${description}</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Donation: ${donationOption}</li>
                                    <li class="list-group-item">Contact: ${phoneNo}</li>
                                    <li class="list-group-item">Details: ${detailsDonation}</li>
                                </ul>
                                <div class="card-body">
                                    <a href="#!" class="card-link">Card link</a>
                                    <a href="#!" class="card-link">Another link</a>
                                </div>
                            </div>
                        `;
                        document.getElementById("allDonations").innerHTML += element;
                        console.log("Donation Added")
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
</script>