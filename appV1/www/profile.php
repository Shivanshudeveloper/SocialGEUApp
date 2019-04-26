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

<!-- Apps -->
<div class="marginCard card">
    <div class="card-header">
        Features
    </div>
    <div class="card-body">
        <ul class="list-group">
            <a href="./research.php?page=research">
                <li class="list-group-item">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="38" height="38" viewBox="0 0 48 48" style="enable-background:new 0 0 48 48;; fill:#000000;">
                        <g>
                            <polygon style="fill:#42A5F5;" points="42,38 17,38 17,5 34,5 42,13  "></polygon>
                            <polygon style="fill:#E1F5FE;" points="40.5,14 33,14 33,6.5  "></polygon>
                            <rect x="22" y="19" style="fill:#1565C0;" width="16" height="2"></rect>
                            <rect x="22" y="23" style="fill:#1565C0;" width="12" height="2"></rect>
                            <rect x="22" y="27" style="fill:#1565C0;" width="16" height="2"></rect>
                            <rect x="22" y="31" style="fill:#1565C0;" width="12" height="2"></rect>
                        </g>
                        <g>
                            <polygon style="fill:#90CAF9;" points="31,43 6,43 6,10 23,10 31,18  "></polygon>
                            <polygon style="fill:#E1F5FE;" points="29.5,19 22,19 22,11.5  "></polygon>
                            <rect x="11" y="24" style="fill:#1976D2;" width="15" height="2"></rect>
                            <rect x="11" y="28" style="fill:#1976D2;" width="11" height="2"></rect>
                            <rect x="11" y="32" style="fill:#1976D2;" width="15" height="2"></rect>
                            <rect x="11" y="36" style="fill:#1976D2;" width="11" height="2"></rect>
                        </g>
                    </svg>
                    Research Papers</li>
            </a>
            <a href="./blogs.php?page=blogs">
                <li class="list-group-item">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="38" height="38" viewBox="0 0 48 48" style=" fill:#000000;">
                        <g id="surface1">
                            <path style=" fill:#90CAF9;" d="M 40 45 L 8 45 L 8 3 L 30 3 L 40 13 Z "></path>
                            <path style=" fill:#E1F5FE;" d="M 38.5 14 L 29 14 L 29 4.5 Z "></path>
                            <path style=" fill:#F44336;" d="M 31.992188 31.648438 C 31.992188 31.597656 32 31.550781 32 31.5 C 32 31.378906 31.992188 31.257813 31.980469 31.136719 C 31.0625 21.5625 27 19 27 19 C 28 24 26 26 26 26 C 26 17 19 14 19 14 C 22 21 17 27 17 31 L 17.023438 31.003906 C 17.015625 31.167969 17 31.332031 17 31.5 C 17 35.644531 20.355469 39 24.5 39 C 28.476563 39 31.71875 35.90625 31.976563 31.996094 L 32 32 C 32 31.878906 31.992188 31.769531 31.992188 31.648438 Z "></path>
                            <path style=" fill:#FFE082;" d="M 24.964844 35.335938 C 20.324219 35.335938 20.382813 31.601563 20.382813 31.601563 C 20.382813 28.886719 22.476563 25.097656 22.246094 22.664063 C 22.246094 22.664063 24.511719 27.078125 24.058594 30.808594 C 24.058594 30.808594 26.585938 30.695313 28.394531 27.191406 C 29.070313 29.734375 29.601563 35.335938 24.964844 35.335938 Z "></path>
                        </g>
                    </svg>
                    Blogs & Articles</li>
            </a>
            <a href="#">
                <li class="list-group-item">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="38" height="38" viewBox="0 0 48 48" style=" fill:#000000;">
                        <g id="surface1">
                            <path style=" fill:#FF7043;" d="M 38 44 L 12 44 L 12 4 L 38 4 C 40.199219 4 42 5.800781 42 8 L 42 40 C 42 42.199219 40.199219 44 38 44 "></path>
                            <path style=" fill:#BF360C;" d="M 10 4 L 12 4 L 12 44 L 10 44 C 7.800781 44 6 42.199219 6 40 L 6 8 C 6 5.800781 7.800781 4 10 4 "></path>
                            <path style=" fill:#E64A19;" d="M 37 15 L 17 15 L 17 11 L 37 11 Z M 37 17 L 17 17 L 17 19 L 37 19 Z "></path>
                        </g>
                    </svg>
                    Magazine</li>
            </a>
            <a href="./donation.php?page=donation">
                <li class="list-group-item">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="38" height="38" viewBox="0 0 48 48" style="enable-background:new 0 0 48 48;; fill:#000000;">
                        <path style="fill:#E89531;" d="M38.818,31.692c-0.412-0.921-1.348-1.461-2.322-1.449c-0.325,0.004-0.653,0.069-0.968,0.202  l-1.14,0.483c-0.02-0.068-0.04-0.126-0.06-0.193c-0.412-0.921-1.342-1.466-2.318-1.461c-0.325,0.002-0.655,0.065-0.972,0.195  l-3.34,1.392l-7.93,3.306l-5.55-1.73c-0.18,0.074-3.243,1.199-5.246,1.962l16.792,6.828l12.514-5.184l-0.75-1.17  C38.799,34.341,39.369,32.91,38.818,31.692z"></path>
                        <path style="fill:#FFB74D;" d="M43.79,32.5c-0.41-0.95-1.35-1.51-2.32-1.5c-0.33,0-0.66,0.07-0.97,0.21l-8.51,3.72  c0.04,0.63-0.07,1.26-0.31,1.86c-0.17,0.43-0.4,0.82-0.68,1.17c-0.84,1.04-2.11,1.67-3.5,1.67c-0.09,0-0.19,0-0.28-0.01  c-0.47-0.03-0.94-0.13-1.38-0.31l-0.2-0.08c-0.291-0.116-5.427-2.143-9.022-3.562c-0.492-0.214-0.734-0.776-0.536-1.278  c0.203-0.514,0.784-0.767,1.297-0.564l1.784,0.702c0.016,0.005,0.029,0.003,0.045,0.009c2.746,1.076,6.089,2.403,7.074,2.794  l0.094,0.037l0.001,0.001c0.122,0.048,0.191,0.076,0.198,0.079c0.303,0.121,0.616,0.178,0.923,0.178  c0.994,0,1.934-0.597,2.324-1.577c0.511-1.283-0.116-2.736-1.399-3.247c-0.322-0.128-7.912-3.147-10.541-4.141  C17.076,28.356,15.705,28,14.5,28c-3.523,0-8.342,1.836-10.5,2.75L7.375,39l3.77-1.55l13.425,5.37c0.3,0.12,0.62,0.18,0.93,0.18  c0.34,0,0.68-0.07,1-0.21l16-7C43.77,35.24,44.34,33.76,43.79,32.5z"></path>
                        <path style="fill:#78909C;" d="M30.5,14c-2.484,0-4.5-2.014-4.5-4.5C26,7.016,28.016,5,30.5,5S35,7.016,35,9.5  C35,11.986,32.985,14,30.5,14"></path>
                        <path style="fill:#CFD8DC;" d="M31.251,11.746h-0.892V8.307l-1.064,0.328V7.916l1.859-0.666h0.097V11.746z"></path>
                        <path style="fill:#B0BEC5;" d="M24,10c-3.86,0-7,3.14-7,7s3.14,7,7,7s7-3.14,7-7S27.86,10,24,10z"></path>
                        <path style="fill:#546E7A;" d="M24.994,20.974h-1.553v-6.082l-1.853,0.581v-1.268l3.24-1.18h0.166V20.974z"></path>
                    </svg>
                    Donation</li>
            </a>
            <a href="#">
                <li class="list-group-item">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="38" height="38" viewBox="0 0 48 48" style=" fill:#000000;">
                        <g id="surface1">
                            <path style=" fill:#FF9800;" d="M 24 37 L 19 31 L 19 25 L 29 25 L 29 31 Z "></path>
                            <path style=" fill:#FFA726;" d="M 35 19 C 35 20.105469 34.105469 21 33 21 C 31.894531 21 31 20.105469 31 19 C 31 17.894531 31.894531 17 33 17 C 34.105469 17 35 17.894531 35 19 "></path>
                            <path style=" fill:#FFA726;" d="M 17 19 C 17 20.105469 16.105469 21 15 21 C 13.894531 21 13 20.105469 13 19 C 13 17.894531 13.894531 17 15 17 C 16.105469 17 17 17.894531 17 19 "></path>
                            <path style=" fill:#FFB74D;" d="M 33 13 C 33 5.363281 15 8.027344 15 13 L 15 20 C 15 24.972656 19.027344 29 24 29 C 28.972656 29 33 24.972656 33 20 Z "></path>
                            <path style=" fill:#424242;" d="M 24 4 C 17.925781 4 14 8.925781 14 15 L 14 17.285156 L 16 19 L 16 14 L 28 10 L 32 14 L 32 19 L 34 17.257813 L 34 15 C 34 10.976563 32.960938 6.984375 28 6 L 27 4 Z "></path>
                            <path style=" fill:#FFFFFF;" d="M 24 43 L 19 31 L 24 32 L 29 31 Z "></path>
                            <path style=" fill:#D32F2F;" d="M 23 35 L 22.332031 39.464844 L 24 43.464844 L 25.667969 39.464844 L 25 35 L 26 34 L 24 32 L 22 34 Z "></path>
                            <path style=" fill:#1976D2;" d="M 29 31 L 24 43 L 19 31 C 19 31 8 32.984375 8 44 L 40 44 C 40 33.023438 29 31 29 31 "></path>
                            <path style=" fill:#093D89;" d="M 30 36 L 33.335938 32.664063 C 31.21875 31.484375 29.351563 31.070313 29.046875 31.011719 L 29 31 L 24 43 L 24 44 L 27 44 L 33 38 Z "></path>
                            <path style=" fill:#093D89;" d="M 18 36 L 14.664063 32.664063 C 16.78125 31.484375 18.648438 31.070313 18.953125 31.011719 L 19 31 L 24 43 L 24 44 L 21 44 L 15 38 Z "></path>
                            <path style=" fill:#0D47A1;" d="M 21 17 L 27 17 L 27 18 L 21 18 Z "></path>
                            <path style=" fill:#FFFFFF;" d="M 16 17 L 16 17.5 C 16 19.433594 17.566406 21 19.5 21 C 21.433594 21 23 19.433594 23 17.5 L 23 17 Z "></path>
                            <path style=" fill:#FFFFFF;" d="M 25 17 L 25 17.5 C 25 19.433594 26.566406 21 28.5 21 C 30.433594 21 32 19.433594 32 17.5 L 32 17 Z "></path>
                        </g>
                    </svg>
                    Find Faculty</li>
            </a>
        </ul>
    </div>
</div>




<!-- For Setting -->
<div class="marginCard card">
    <div class="card-header">
        Setting
    </div>
    <div class="card-body">
        <ul class="list-group">
            <a href="#">
                <li class="list-group-item">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="38" height="38" viewBox="0 0 48 48" style="enable-background:new 0 0 48 48;; fill:#000000;">
                        <path style="fill:#90CAF9;" d="M6.001,6.002h31v31h-31V6.002z"></path>
                        <path style="fill:#2196F3;" d="M9.001,9.002h31v31h-31V9.002z"></path>
                        <path style="fill:#90CAF9;" d="M12.001,12.002h31v31h-31V12.002z"></path>
                        <path style="fill:#E57373;" d="M47.681,44.861c0.426-0.43,0.426-1.129,0-1.555l-1.328-1.328l-4.375,4.375l1.328,1.324  c0.43,0.43,1.125,0.43,1.555,0L47.681,44.861"></path>
                        <path style="fill:#FF9800;" d="M39.786,44.162L21.474,25.85l4.375-4.375l18.316,18.313L39.786,44.162z"></path>
                        <path style="fill:#B0BEC5;" d="M44.165,39.787l2.188,2.188l-4.379,4.375l-2.184-2.188L44.165,39.787z"></path>
                        <path style="fill:#FFC107;" d="M25.849,21.475l-5.848-1.473l1.473,5.848L25.849,21.475z"></path>
                        <path style="fill:#37474F;" d="M22.958,20.744l-2.957-0.742l0.742,2.957L22.958,20.744z"></path>
                    </svg>
                    Edit Your Profile</li>
            </a>
            <a href="posts.php?page=posts">
                <li class="list-group-item">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="38" height="38" viewBox="0 0 48 48" style=" fill:#000000;">
                        <g id="surface1">
                            <path style=" fill:#37474F;" d="M 21 29 L 27 29 L 27 42 L 21 42 Z "></path>
                            <path style=" fill:#4CAF50;" d="M 6 7 L 42 7 L 42 29 L 6 29 Z "></path>
                            <path style=" fill:#CFD8DC;" d="M 42 30 L 6 30 C 5.449219 30 5 29.554688 5 29 L 5 7 C 5 6.445313 5.449219 6 6 6 L 42 6 C 42.550781 6 43 6.445313 43 7 L 43 29 C 43 29.554688 42.550781 30 42 30 Z M 7 28 L 41 28 L 41 8 L 7 8 Z "></path>
                            <path style=" fill:#D4E157;" d="M 25 10 L 23 10 L 19.5 22.601563 L 21 28 L 27 28 L 28.5 22.601563 Z "></path>
                            <path style=" fill:#D4E157;" d="M 16 10 L 14 10 L 9 28 L 18 28 L 19.5 22.601563 Z "></path>
                            <path style=" fill:#D4E157;" d="M 34 10 L 32 10 L 28.5 22.601563 L 30 28 L 39 28 Z "></path>
                            <path style=" fill:#FFF9C4;" d="M 18 28 L 21 28 L 19.5 22.601563 Z "></path>
                            <path style=" fill:#FFF9C4;" d="M 27 28 L 30 28 L 28.5 22.601563 Z "></path>
                            <path style=" fill:#455A64;" d="M 14 5 L 16 5 L 16 9 L 14 9 Z "></path>
                            <path style=" fill:#455A64;" d="M 23 5 L 25 5 L 25 9 L 23 9 Z "></path>
                            <path style=" fill:#455A64;" d="M 32 5 L 34 5 L 34 9 L 32 9 Z "></path>
                            <path style=" fill:#455A64;" d="M 13 10 C 13 8.894531 13.894531 8 15 8 C 16.105469 8 17 8.894531 17 10 Z "></path>
                            <path style=" fill:#455A64;" d="M 22 10 C 22 8.894531 22.894531 8 24 8 C 25.105469 8 26 8.894531 26 10 Z "></path>
                            <path style=" fill:#455A64;" d="M 31 10 C 31 8.894531 31.894531 8 33 8 C 34.105469 8 35 8.894531 35 10 Z "></path>
                            <path style=" fill:#546E7A;" d="M 18 41 L 30 41 L 30 43 L 18 43 Z "></path>
                        </g>
                    </svg>
                    My Posts</li>
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
<br />

<!-- Body Comes Here -->
<script src="../src/js/config.js"></script>
<script src="../src/js/main.js"></script>
<?php
include_once '../includes/footer.inc.php';
?>