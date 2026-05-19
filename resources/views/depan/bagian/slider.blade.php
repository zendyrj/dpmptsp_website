  <section class="home-slide">
    <ul class="slides">
      @foreach($slides as $slide)
      <li style="background: url({{asset($slide->link)}}) center center no-repeat; background-size: cover;" data-stellar-background-ratio="0.6"></li>
      @endforeach
    </ul>
  </section>