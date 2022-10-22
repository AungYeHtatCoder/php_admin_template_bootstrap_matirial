<?php include("includes/header.php") ?>

<body>
 <?php include("includes/navbar.php") ?>

 <section class="movieCarousel">
  <!-- CAROUSEL -->
  <div id="carouselMovie" class="carousel slide carousel-fade" data-ride="carousel">
   <ol class="container carousel-indicators">
    <li data-target="#carouselMovie" data-slide-to="0" class="active"></li>
    <li data-target="#carouselMovie" data-slide-to="1"></li>
    <li data-target="#carouselMovie" data-slide-to="2"></li>
   </ol>
   <div class="carousel-inner">
    <div class="carousel-item active">
     <div class="carousel-overlay"></div>
     <img src="./images/hero-1.jpg" class="d-block w-100" alt="...">
     <div class="container carousel-caption d-none d-md-block">
      <p class="type-movie">ACTION, ADVENTURE, FANTASY</p>
      <h2>End of the World: Part I</h2>
      <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
       est notare quam <br> littera gothica, quam nunc putamu.</p>
      <div class="play-button">
       <span>PG</span>
       <button><i class="fa fa-play"></i>PLAY TRAILER</button>
      </div>
     </div>
    </div>
    <div class="carousel-item">
     <div class="carousel-overlay"></div>
     <img src="./images/hero-2.jpg" class="d-block w-100" alt="...">
     <div class="container carousel-caption d-none d-md-block">
      <p class="type-movie">ACTION, ADVENTURE, FANTASY</p>
      <h2>End of the World: Part II</h2>
      <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
       est notare quam <br> littera gothica, quam nunc putamu.</p>
      <div class="play-button">
       <span>15</span>
       <button><i class="fa fa-play"></i>PLAY TRAILER</button>
      </div>
     </div>
    </div>
    <div class="carousel-item">
     <div class="carousel-overlay"></div>
     <img src="./images/hero-3.jpg" class="d-block w-100" alt="...">
     <div class="container carousel-caption d-none d-md-block">
      <p class="type-movie">ACTION, ADVENTURE, FANTASY</p>
      <h2>End of the World: Part III</h2>
      <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
       est notare quam <br> littera gothica, quam nunc putamu.</p>
      <div class="play-button">
       <span>PG</span>
       <button><i class="fa fa-play"></i>PLAY TRAILER</button>
      </div>
     </div>
    </div>
   </div>
  </div>
  <!-- END CAROUSEL -->
 </section>

 <section class="container newIn">
  <h2>NEW IN</h2>
  <div class="newIn__content">
   <div class="row">
    <div class="col-6 col-md-3 text-center">
     <div class="newIn__item">
      <img src="./images/movie-1.jpg" alt="">
      <div class="newIn__overlay"></div>
      <div class="newIn__details text-white">
       <i class="fa fa-play d-block"></i>
       <a class="d-block">READ MORE</a>
       <span>Released: 7 Mar, 2017</span>
      </div>
     </div>
     <div class="pt-3 newIn__rating">
      <p>Venture</p>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
     </div>
    </div>
    <div class="col-6 col-md-3 text-center">
     <div class="newIn__item">
      <img src="./images/movie-2.jpg" alt="">
      <div class="newIn__overlay"></div>
      <div class="newIn__details text-white">
       <i class="fa fa-play d-block"></i>
       <a class="d-block">READ MORE</a>
       <span>Released: 8 Mar, 2017</span>
      </div>
     </div>
     <div class="pt-3 newIn__rating">
      <p>Hush</p>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star grey"></i>
     </div>
    </div>
    <div class="col-6 col-md-3 text-center">
     <div class="newIn__item">
      <img src="./images/movie-3.jpg" alt="">
      <div class="newIn__overlay"></div>
      <div class="newIn__details text-white">
       <i class="fa fa-play d-block"></i>
       <a class="d-block">READ MORE</a>
       <span>Released: 9 Mar, 2017</span>
      </div>
     </div>
     <div class="pt-3 newIn__rating">
      <p>Dark and lonely</p>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star grey"></i>
      <i class="fa fa-star grey"></i>
     </div>
    </div>
    <div class="col-6 col-md-3 text-center">
     <div class="newIn__item">
      <img src="./images/movie-4.jpg" alt="">
      <div class="newIn__overlay"></div>
      <div class="newIn__details text-white">
       <i class="fa fa-play d-block"></i>
       <a class="d-block">READ MORE</a>
       <span>Released: 10 Mar, 2017</span>
      </div>
     </div>
     <div class="pt-3 newIn__rating">
      <p>The latest post</p>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
     </div>
    </div>
   </div>
  </div>
 </section>

 <section class="showTime py-5">
  <div class="container showTime__content">
   <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
     <a class="nav-link active" id="mon-tab" data-toggle="tab" href="#mon" role="tab" aria-controls="mon"
      aria-selected="true">MON</a>
    </li>
    <li class="nav-item">
     <a class="nav-link" id="tue-tab" data-toggle="tab" href="#tue" role="tab" aria-controls="tue"
      aria-selected="false">TUE</a>
    </li>
    <li class="nav-item">
     <a class="nav-link" id="today-tab" data-toggle="tab" href="#today" role="tab" aria-controls="today"
      aria-selected="false">TODAY</a>
    </li>
    <li class="nav-item">
     <a class="nav-link" id="thu-tab" data-toggle="tab" href="#thu" role="tab" aria-controls="thu"
      aria-selected="false">THU</a>
    </li>
    <li class="nav-item">
     <a class="nav-link" id="fri-tab" data-toggle="tab" href="#fri" role="tab" aria-controls="fri"
      aria-selected="false">FRI</a>
    </li>
    <li class="nav-item">
     <a class="nav-link" id="sat-tab" data-toggle="tab" href="#sat" role="tab" aria-controls="sat"
      aria-selected="false">SAT</a>
    </li>
    <li class="nav-item">
     <a class="nav-link" id="sun-tab" data-toggle="tab" href="#sun" role="tab" aria-controls="sun"
      aria-selected="false">SUN</a>
    </li>
   </ul>
   <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="mon" role="tabpanel" aria-labelledby="mon-tab">
     <div class="row showTime__items py-4">
      <div class="col-12 col-md-3 col-lg-2 showTime__img">
       <img src="./images/movie-6.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-12 col-md-9 col-lg-10">
       <span class="title">ACTION, ADVENTURE, FANTASY</span>
       <h3 class="name">It's over</h3>
       <p class="desc">European mercenaries searching for black powder become embroiled in the
        defense of It's
        over of China against a horde of monstrous creatures.</p>
       <h4><a class="details" href="">FULL SYNOPSIS</a><i class="fa fa-angle-right details__icon"></i></h4>

       <div class="row">
        <div class="col-md-8 col-12">
         <span class="viewing-times"><i class="fa fa-clock"></i> VIEWING TIMES</span>
         <button type="button" class="btn btn-secondary past">14:45</button>
         <button type="button" class="btn btn-secondary">18:30</button>
         <button type="button" class="btn btn-secondary">20:30</button>
         <button type="button" class="btn btn-secondary">24:45</button>
        </div>
        <div class="col-md-4 text-md-right">
         <span class="time">105 MINS</span>
         <span class="number">15</span>
        </div>
       </div>
      </div>
     </div>
     <div class="row showTime__items py-4">
      <div class="col-12 col-md-3 col-lg-2 showTime__img">
       <img src="./images/movie-7.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-12 col-md-9 col-lg-10">
       <span class="title">ACTION, ADVENTURE, FANTASY</span>
       <h3 class="name">It's over</h3>
       <p class="desc">European mercenaries searching for black powder become embroiled in the
        defense of It's
        over of China against a horde of monstrous creatures.</p>
       <h4><a class="details" href="">FULL SYNOPSIS</a><i class="fa fa-angle-right details__icon"></i></h4>

       <div class="row">
        <div class="col-md-8 col-12">
         <span class="viewing-times"><i class="fa fa-clock"></i> VIEWING TIMES</span>
         <button type="button" class="btn btn-secondary past">14:45</button>
         <button type="button" class="btn btn-secondary">18:30</button>
         <button type="button" class="btn btn-secondary">20:30</button>
         <button type="button" class="btn btn-secondary">24:45</button>
        </div>
        <div class="col-md-4 text-md-right">
         <span class="time">110 MINS</span>
         <span class="number">PG</span>
        </div>
       </div>
      </div>
     </div>
     <div class="row showTime__items py-4">
      <div class="col-12 col-md-3 col-lg-2 showTime__img">
       <img src="./images/movie-8.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-12 col-md-9 col-lg-10">
       <span class="title">ACTION, ADVENTURE, FANTASY</span>
       <h3 class="name">It's over</h3>
       <p class="desc">European mercenaries searching for black powder become embroiled in the
        defense of It's
        over of China against a horde of monstrous creatures.</p>
       <h4><a class="details" href="">FULL SYNOPSIS</a><i class="fa fa-angle-right details__icon"></i></h4>

       <div class="row">
        <div class="col-md-8 col-12">
         <span class="viewing-times"><i class="fa fa-clock"></i> VIEWING TIMES</span>
         <button type="button" class="btn btn-secondary past">14:45</button>
         <button type="button" class="btn btn-secondary">18:30</button>
         <button type="button" class="btn btn-secondary past">20:30</button>
         <button type="button" class="btn btn-secondary">24:45</button>
        </div>
        <div class="col-md-4 text-md-right">
         <span class="time">105 MINS</span>
         <span class="number">18</span>
        </div>
       </div>
      </div>
     </div>
     <div class="row showTime__items border-0 py-4">
      <div class="col-12 col-md-3 col-lg-2 showTime__img">
       <img src="./images/movie-9.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-12 col-md-9 col-lg-10">
       <span class="title">ACTION, ADVENTURE, FANTASY</span>
       <h3 class="name">It's over</h3>
       <p class="desc">European mercenaries searching for black powder become embroiled in the
        defense of It's
        over of China against a horde of monstrous creatures.</p>
       <h4><a class="details" href="">FULL SYNOPSIS</a><i class="fa fa-angle-right details__icon"></i></h4>

       <div class="row">
        <div class="col-md-8 col-12">
         <span class="viewing-times"><i class="fa fa-clock"></i> VIEWING TIMES</span>
         <button type="button" class="btn btn-secondary past">14:45</button>
         <button type="button" class="btn btn-secondary past">18:30</button>
         <button type="button" class="btn btn-secondary">20:30</button>
         <button type="button" class="btn btn-secondary">24:45</button>
        </div>
        <div class="col-md-4 text-md-right">
         <span class="time">105 MINS</span>
         <span class="number">U</span>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="tab-pane fade" id="tue" role="tabpanel" aria-labelledby="tue-tab">
     <div class="row showTime__items py-4">
      <div class="col-12 col-md-3 col-lg-2 showTime__img">
       <img src="./images/movie-7.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-12 col-md-9 col-lg-10">
       <span class="title">ACTION, ADVENTURE, FANTASY</span>
       <h3 class="name">It's over</h3>
       <p class="desc">European mercenaries searching for black powder become embroiled in the
        defense of It's
        over of China against a horde of monstrous creatures.</p>
       <h4><a class="details" href="">FULL SYNOPSIS</a><i class="fa fa-angle-right details__icon"></i></h4>

       <div class="row">
        <div class="col-md-8 col-12">
         <span class="viewing-times"><i class="fa fa-clock"></i> VIEWING TIMES</span>
         <button type="button" class="btn btn-secondary past">14:45</button>
         <button type="button" class="btn btn-secondary">18:30</button>
         <button type="button" class="btn btn-secondary">20:30</button>
         <button type="button" class="btn btn-secondary">24:45</button>
        </div>
        <div class="col-md-4 text-md-right">
         <span class="time">105 MINS</span>
         <span class="number">15</span>
        </div>
       </div>
      </div>
     </div>
     <div class="row showTime__items py-4">
      <div class="col-12 col-md-3 col-lg-2 showTime__img">
       <img src="./images/movie-5.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-12 col-md-9 col-lg-10">
       <span class="title">ACTION, ADVENTURE, FANTASY</span>
       <h3 class="name">It's over</h3>
       <p class="desc">European mercenaries searching for black powder become embroiled in the
        defense of It's
        over of China against a horde of monstrous creatures.</p>
       <h4><a class="details" href="">FULL SYNOPSIS</a><i class="fa fa-angle-right details__icon"></i></h4>

       <div class="row">
        <div class="col-md-8 col-12">
         <span class="viewing-times"><i class="fa fa-clock"></i> VIEWING TIMES</span>
         <button type="button" class="btn btn-secondary past">14:45</button>
         <button type="button" class="btn btn-secondary">18:30</button>
         <button type="button" class="btn btn-secondary">20:30</button>
         <button type="button" class="btn btn-secondary">24:45</button>
        </div>
        <div class="col-md-4 text-md-right">
         <span class="time">105 MINS</span>
         <span class="number">15</span>
        </div>
       </div>
      </div>
     </div>
     <div class="row showTime__items py-4">
      <div class="col-12 col-md-3 col-lg-2 showTime__img">
       <img src="./images/movie-4.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-12 col-md-9 col-lg-10">
       <span class="title">ACTION, ADVENTURE, FANTASY</span>
       <h3 class="name">It's over</h3>
       <p class="desc">European mercenaries searching for black powder become embroiled in the
        defense of It's
        over of China against a horde of monstrous creatures.</p>
       <h4><a class="details" href="">FULL SYNOPSIS</a><i class="fa fa-angle-right details__icon"></i></h4>

       <div class="row">
        <div class="col-md-8 col-12">
         <span class="viewing-times"><i class="fa fa-clock"></i> VIEWING TIMES</span>
         <button type="button" class="btn btn-secondary past">14:45</button>
         <button type="button" class="btn btn-secondary">18:30</button>
         <button type="button" class="btn btn-secondary">20:30</button>
         <button type="button" class="btn btn-secondary">24:45</button>
        </div>
        <div class="col-md-4 text-md-right">
         <span class="time">105 MINS</span>
         <span class="number">15</span>
        </div>
       </div>
      </div>
     </div>
     <div class="row showTime__items py-4">
      <div class="col-12 col-md-3 col-lg-2 showTime__img">
       <img src="./images/movie-3.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-12 col-md-9 col-lg-10">
       <span class="title">ACTION, ADVENTURE, FANTASY</span>
       <h3 class="name">It's over</h3>
       <p class="desc">European mercenaries searching for black powder become embroiled in the
        defense of It's
        over of China against a horde of monstrous creatures.</p>
       <h4><a class="details" href="">FULL SYNOPSIS</a><i class="fa fa-angle-right details__icon"></i></h4>

       <div class="row">
        <div class="col-md-8 col-12">
         <span class="viewing-times"><i class="fa fa-clock"></i> VIEWING TIMES</span>
         <button type="button" class="btn btn-secondary past">14:45</button>
         <button type="button" class="btn btn-secondary">18:30</button>
         <button type="button" class="btn btn-secondary">20:30</button>
         <button type="button" class="btn btn-secondary">24:45</button>
        </div>
        <div class="col-md-4 text-md-right">
         <span class="time">105 MINS</span>
         <span class="number">15</span>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="tab-pane fade" id="today" role="tabpanel" aria-labelledby="today-tab">
     <div class="row showTime__items py-4">
      <div class="col-12 col-md-3 col-lg-2 showTime__img">
       <img src="./images/movie-5.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-12 col-md-9 col-lg-10">
       <span class="title">ACTION, ADVENTURE, FANTASY</span>
       <h3 class="name">It's over</h3>
       <p class="desc">European mercenaries searching for black powder become embroiled in the
        defense of It's
        over of China against a horde of monstrous creatures.</p>
       <h4><a class="details" href="">FULL SYNOPSIS</a><i class="fa fa-angle-right details__icon"></i></h4>

       <div class="row">
        <div class="col-md-8 col-12">
         <span class="viewing-times"><i class="fa fa-clock"></i> VIEWING TIMES</span>
         <button type="button" class="btn btn-secondary past">14:45</button>
         <button type="button" class="btn btn-secondary">18:30</button>
         <button type="button" class="btn btn-secondary">20:30</button>
         <button type="button" class="btn btn-secondary">24:45</button>
        </div>
        <div class="col-md-4 text-md-right">
         <span class="time">105 MINS</span>
         <span class="number">15</span>
        </div>
       </div>
      </div>
     </div>
     <div class="row showTime__items py-4">
      <div class="col-12 col-md-3 col-lg-2 showTime__img">
       <img src="./images/movie-9.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-12 col-md-9 col-lg-10">
       <span class="title">ACTION, ADVENTURE, FANTASY</span>
       <h3 class="name">It's over</h3>
       <p class="desc">European mercenaries searching for black powder become embroiled in the
        defense of It's
        over of China against a horde of monstrous creatures.</p>
       <h4><a class="details" href="">FULL SYNOPSIS</a><i class="fa fa-angle-right details__icon"></i></h4>

       <div class="row">
        <div class="col-md-8 col-12">
         <span class="viewing-times"><i class="fa fa-clock"></i> VIEWING TIMES</span>
         <button type="button" class="btn btn-secondary past">14:45</button>
         <button type="button" class="btn btn-secondary">18:30</button>
         <button type="button" class="btn btn-secondary">20:30</button>
         <button type="button" class="btn btn-secondary">24:45</button>
        </div>
        <div class="col-md-4 text-md-right">
         <span class="time">105 MINS</span>
         <span class="number">15</span>
        </div>
       </div>
      </div>
     </div>
     <div class="row showTime__items py-4">
      <div class="col-12 col-md-3 col-lg-2 showTime__img">
       <img src="./images/movie-8.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-12 col-md-9 col-lg-10">
       <span class="title">ACTION, ADVENTURE, FANTASY</span>
       <h3 class="name">It's over</h3>
       <p class="desc">European mercenaries searching for black powder become embroiled in the
        defense of It's
        over of China against a horde of monstrous creatures.</p>
       <h4><a class="details" href="">FULL SYNOPSIS</a><i class="fa fa-angle-right details__icon"></i></h4>

       <div class="row">
        <div class="col-md-8 col-12">
         <span class="viewing-times"><i class="fa fa-clock"></i> VIEWING TIMES</span>
         <button type="button" class="btn btn-secondary past">14:45</button>
         <button type="button" class="btn btn-secondary">18:30</button>
         <button type="button" class="btn btn-secondary">20:30</button>
         <button type="button" class="btn btn-secondary">24:45</button>
        </div>
        <div class="col-md-4 text-md-right">
         <span class="time">105 MINS</span>
         <span class="number">15</span>
        </div>
       </div>
      </div>
     </div>
     <div class="row showTime__items py-4">
      <div class="col-12 col-md-3 col-lg-2 showTime__img">
       <img src="./images/movie-7.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-12 col-md-9 col-lg-10">
       <span class="title">ACTION, ADVENTURE, FANTASY</span>
       <h3 class="name">It's over</h3>
       <p class="desc">European mercenaries searching for black powder become embroiled in the
        defense of It's
        over of China against a horde of monstrous creatures.</p>
       <h4><a class="details" href="">FULL SYNOPSIS</a><i class="fa fa-angle-right details__icon"></i></h4>

       <div class="row">
        <div class="col-md-8 col-12">
         <span class="viewing-times"><i class="fa fa-clock"></i> VIEWING TIMES</span>
         <button type="button" class="btn btn-secondary past">14:45</button>
         <button type="button" class="btn btn-secondary">18:30</button>
         <button type="button" class="btn btn-secondary">20:30</button>
         <button type="button" class="btn btn-secondary">24:45</button>
        </div>
        <div class="col-md-4 text-md-right">
         <span class="time">105 MINS</span>
         <span class="number">15</span>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="tab-pane fade" id="thu" role="tabpanel" aria-labelledby="thu-tab">
     <p class="text-center pt-5">This content has not been updated yet!</p>
    </div>
    <div class="tab-pane fade" id="fri" role="tabpanel" aria-labelledby="fri-tab">
     <p class="text-center pt-5">This content has not been updated yet!</p>
    </div>
    <div class="tab-pane fade" id="sat" role="tabpanel" aria-labelledby="sat-tab">
     <p class="text-center pt-5">This content has not been updated yet!</p>
    </div>
    <div class="tab-pane fade" id="sun" role="tabpanel" aria-labelledby="sun-tab">
     <p class="text-center pt-5">This content has not been updated yet!</p>
    </div>
   </div>
  </div>
 </section>

 <section class="comingSoon">
  <div class="comingSoon__content container">
   <h2>COMING SOON</h2>
   <div class="row">
    <div class="col-sm-6">
     <span class="categories">DRAMA, THRILLER</span>
     <h3 class="name">The Hangover Part III</h3>
     <span>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <span class="date">30 September, 2017</span>
     </span>
     <p class="desc">A dramatization of the April 2010 disaster, when the offshore drilling rig Deepwater
      Horizon
      exploded and created the worst oil spill in U.S. history.</p>
     <a href="">MORE INFO<i class="fa fa-angle-right"></i></a>
    </div>
    <div class="col-sm-6 comingSoon__video">
     <img class="video" src="./images/slide-3-video.png" alt="">
     <i class="fa fa-play play-button"></i>
    </div>
   </div>
  </div>
 </section>

 <section class="movieList">
  <div class="movieList__content container">
   <div class="row">
    <div class="col-sm-2 movieList__item">
     <img src="./images/movie-14.jpg" class="img-fluid default-opacity" alt="">
    </div>
    <div class="col-sm-2 movieList__item">
     <img src="./images/movie-13.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-sm-2 movieList__item">
     <img src="./images/movie-12.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-sm-2 movieList__item">
     <img src="./images/movie-11.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-sm-2 movieList__item">
     <img src="./images/movie-9.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-sm-2 movieList__item">
     <img src="./images/movie-8.jpg" class="img-fluid" alt="">
    </div>
   </div>
  </div>
 </section>

 <section class="contact">
  <p>Need help? Contact our support team on</p>
  <h3>0330 123 4567</h3>
 </section>

 <footer>
  <div class="container">
   <div class="row">
    <div class="col-3">
     <h6>GET IN TOUCH</h6>
     <p>FAQs</p>
     <p>Give us feedback</p>
     <p>Contact us</p>
    </div>
    <div class="col-3">
     <h6>ABOUT MOVIE STAR</h6>
     <p>About us</p>
     <p>Find us</p>
     <p>Schedule</p>
     <p>News</p>
    </div>
    <div class="col-3">
     <h6>LEGAL STUFF</h6>
     <p>Terms & Conditions</p>
     <p>Privacy policy</p>
     <p>Cookie policy</p>
    </div>
    <div class="col-3">
     <h6>CONNECT WITH US</h6>
     <p> <i class="fab fa-facebook-f"></i>Facebook</p>
     <p><i class="fab fa-twitter"></i>Twitter</p>
     <p><i class="fab fa-google-plus-g"></i>Google +</p>
    </div>
   </div>
  </div>
 </footer>

 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
   <div class="modal-content">
    <div class="modal-header">
     <h5 class="modal-title" id="exampleModalLabel">LOGIN</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
     </button>
    </div>
    <div class="modal-body">
     <form>
      <div class="form-group">
       <label for="exampleInputEmail1">Email address</label>
       <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
        placeholder="Enter email">
       <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
        else.</small>
      </div>
      <div class="form-group">
       <label for="exampleInputPassword1">Password</label>
       <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group form-check">
       <input type="checkbox" class="form-check-input" id="exampleCheck1">
       <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
     </form>
    </div>
   </div>
  </div>
 </div>

 <?php include("includes/footer.php"); ?>