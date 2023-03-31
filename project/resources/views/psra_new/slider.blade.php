<style>
  .carousel-item {
    height: min-content !important;
  }

  .carousel-item>img {
    position: inherit;
    top: 0;
    left: 0;
    min-width: 100%;
    height: min-content !important;
  }
</style>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    <li data-target="#myCarousel" data-slide-to="3" class=""></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active"><img style="width:100%;" src="{{url('/assets/slider_images/png_3.png')}}" /></div>
    <div class="carousel-item"><img width="100%" data-u="image" src="{{url('/assets/slider_images/png_1.png')}}" /></div>
    <div class="carousel-item"><img width="100%" data-u="image" src="{{url('/assets/slider_images/png_2.png')}}" /></div>
  </div>
</div>