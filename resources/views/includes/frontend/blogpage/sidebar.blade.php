<!-- Widget [Categories Widget]-->
<div class="widget categories">
  <header>
    <h3 class="h6">Categories</h3>
  </header>
  @foreach($posts as $category)
  <div class="item d-flex justify-content-between"><a href="#">{{ $category->category }}</a></div>
  @endforeach
</div>
