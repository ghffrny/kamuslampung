<?php 
include "header.html";
include "./connect/controller.php";
?>
<div class="container col-12" style="margin-top: 50px; padding: 30px;">
    <div class="row">
        <div class="col-md-12 square" style="display:inline-block;">
            <!-- Head profile -->
            <div class="row">
                <div class="container col-md-2">
                    <img class="img-responsive img-circle" src="./img/profile.jpg" style="width:120px; padding:10px;">
                </div>
            </div>
            <div class="container">
                <h5 class="text-center">Ghuffrony Rezaldhy Ms</h5>
                <p class="text-muted text-center">UI Designer</p>
            </div>
            <!-- Body profile -->
            <div class="container">
                <h5>About Me</h5>
            </div>
            <div class="container">
                <h7><strong><i class="fas fa-graduation-cap"></i> Education</strong></h7>
                <h7 class="text-muted">
                    Informatics Engineering in Lampung University
                </h7>
                <hr>
                <h7><strong><i class="fas fa-map-marker-alt"></i> Location</strong></h7>
                <h7 class="text-muted">Bandar Lampung, Lampung - Indonesia</h7>
                <hr>
                <h7><strong><i class="fas fa-book-reader"></i> Skills</strong></h7>
                <h7 class="text-muted">Corel Draw | Adobe Photoshop | Adobe Premiere | Adobe Experience
                </h7>
                <hr>
                <h7><strong><i class="fas fa-phone"></i> Phone Number</strong></h7>
                    <h7 class="text-muted">+62 895 6096 25416
                </h7>
            </div>
            <br>
            <button onclick="window.location.href='https://api.whatsapp.com/send?phone=62895609625416&text=Website%20Anda%20Sangat%20Bermanfaat%20,%20Terimakasih'" class="btn btn-whatsapp btn-block"><b>Contact via Whatsapp</b></button>
            <br>
        </div>
    </div>
</div>
<?php include "footer.html"; ?>