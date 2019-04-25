<?php
include_once '../includes/header.inc.php';
include_once '../includes/navbar.inc.php';
?>
<!-- Body Comes Here -->

<!-- Card -->
<div class="card text-center marginCard testimonial-card">

    <!-- Background color -->
    <div class="card-up indigo lighten-1"></div>

    <!-- Avatar -->
    <div class="avatar  mx-auto white">
        <img id="profilePhoto" width="50%" src="" class="rounded-circle" alt="avatar">
    </div>

    <!-- Content -->
    <div class="card-body">
        <!-- Name -->
        <h4 id="displayName" class="card-title"></h4>
        <hr>
        <!-- Email -->
        <p id="userEmail"></p>
    </div>

</div>
<!-- Card -->

<div class="marginCard card">
  <div class="card-body">
    <ul class="list-group">
        <a href="#">
            <li class="list-group-item">Edit Your Profile</li>
        </a>
        <a href="#">
            <li class="list-group-item">My Posts</li>
        </a>
        <a href="#">
            <li style="color: red;" class="list-group-item">Sign Out</li>
        </a>
    </ul>
  </div>
</div>
<br />
<br />
<br />

<!-- Body Comes Here -->
<script src="../src/js/config.js"></script>
<script src="../src/js/main.js"></script>
<?php
include_once '../includes/footer.inc.php';
?>