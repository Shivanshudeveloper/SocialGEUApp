<div class="card marginCard">
    <div class="text-center card-body">
        <h3 class="card-title">Start Campain</h3>
    </div>
</div>

<div id="donationForm">
    <form class="text-center p-3" method="GET">
        <p class="h4 mb-4">Form</p>

        <input type="text" id="donationFullName-txt" class="form-control mb-2" placeholder="Full Name">
        <input type="email" id="donationPhoneNo-txt" class="form-control mb-2" placeholder="Email">
        <input type="text" id="donationEmail-txt" class="form-control mb-2" placeholder="Phone Number">
        <label>What You Like For Donation</label>
        <select id="donationOption" class="browser-default custom-select mb-4">
            <option value="" selected disabled>Choose option</option>
            <option value="Food" selected>Food</option>
            <option value="Cloathing">Cloathing</option>
            <option value="Money">Money</option>
            <option value="Anything">Anything</option>
        </select>
        <div id="forMoney"></div>

        <button class="btn btn-success btn-block my-4" id="createDonation" onclick="createDonationCamp();" type="submit">Create</button>
        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
            Please make sure you enter the right information, as this will be shared in public
        </small>
    </form>
</div>

<script>
    $("#donationOption").on("change", function() {
        console.log(this.value)
        if (this.value === "Money") {
            $("#forMoney").html(`
                <label>Accept Payment Via</label>
                <select id="paymentOption" onchange="PaymentInfoSelect();" class="browser-default custom-select mb-4">
                    <option value="" selected disabled>Choose option</option>
                    <option value="Bank" selected>Bank</option>
                    <option value="Paytm">Paytm</option>
                    <option value="PhonePe">PhonePe</option>
                    <option value="UPI BHIM">UPI BHIM</option>
                </select>
                <div id="paymentInfo"></div>
            `)
        } else {
            $("#forMoney").html(``)
        }
    })

    const PaymentInfoSelect = () => {
        var method = $("#paymentOption").val()
        var element = ``
        if (method === "Bank") {
            element = `
                <label>Details</label>
                <input type="text" id="bankName" class="form-control mb-2" placeholder="Bank Name">
                <input type="text" id="ifscCode" class="form-control mb-2" placeholder="IFSC Code">
                <input type="text" id="branch" class="form-control mb-2" placeholder="Branch">
            `
        } else if (method === "Paytm") {
            element = `
                <label>Details</label>
                <input type="text" id="phoneNoWalletPaytm" class="form-control mb-2" placeholder="Phone No">
            `
        } else if (method === "PhonePe") {
            element = `
                <label>Details</label>
                <input type="text" id="phoneNoWalletPhonepe" class="form-control mb-2" placeholder="Phone No">
            `
        } else if (method === "UPI BHIM") {
            element = `
                <label>Details</label>
                <input type="text" id="upiId" class="form-control mb-2" placeholder="UPI ID">
            `
        }
        $("#paymentInfo").html(element)
    }
</script>