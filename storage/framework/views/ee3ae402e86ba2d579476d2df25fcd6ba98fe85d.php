<div class="container-fluid" style="min-height: 500px;" width="100%">
    <div id="myCarousel" class="carousel slide">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li class="item1 active"></li>
        <li class="item2"></li>
        <li class="item3"></li>
        <li class="item4"></li>
        <li class="item5"></li>
        <li class="item6"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner ">
        <div class="carousel-item active">
            <img src="icons\header\slide1.jpeg" alt="alt" width="100%" height="auto">
        </div>
        <div class="carousel-item">
            <img src="icons\header\slide2.jpeg" alt="alt" width="100%" height="auto">
        </div>
        <div class="carousel-item">
            <img src="icons\header\slide3.jpeg" alt="alt" width="100%" height="auto">
        </div>
        <div class="carousel-item">
            <img src="icons\header\slide4.jpeg" alt="alt" width="100%" height="auto">
        </div>
        <div class="carousel-item">
            <img src="icons\header\slide5.jpeg" alt="alt" width="100%" height="auto">
        </div>
        <div class="carousel-item">
            <img src="icons\header\slide6.jpeg" alt="alt" width="100%" height="auto">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#myCarousel">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
</div>
<script>
    $(document).ready(function(){
        // Activate Carousel
        $("#myCarousel").carousel();

        // Enable Carousel Indicators
        $(".item1").click(function(){
            $("#myCarousel").carousel(0);
        });
        $(".item2").click(function(){
            $("#myCarousel").carousel(1);
        });
        $(".item3").click(function(){
            $("#myCarousel").carousel(1);
        });
        $(".item4").click(function(){
            $("#myCarousel").carousel(1);
        });
        $(".item5").click(function(){
            $("#myCarousel").carousel(1);
        });
        $(".item6").click(function(){
            $("#myCarousel").carousel(2);
        });

        // Enable Carousel Controls
        $(".carousel-control-prev").click(function(){
            $("#myCarousel").carousel("prev");
        });
        $(".carousel-control-next").click(function(){
            $("#myCarousel").carousel("next");
        });
    });
</script>
<?php /**PATH C:\Users\MOHAMMAD YAHIA\Desktop\wb\resources\views/layouts/partial/slider.blade.php ENDPATH**/ ?>