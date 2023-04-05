<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="/public/assets/css/home.css">
  <link rel="icon" href="/public/assets/image/titleIcon.png" type="image/x-icon">
</head>

<body>
<div id="loading">
  <img id="loading-image" src = "/public/assets/image/1475.gif" alt="Loading..." />
</div>
  <div class="wrapper">
    <div class="navbar">
      <div class="navbar_left">
        <div class="logo">
          <a href="/home" class="logoText">Social</a>
        </div>
      </div>

      <div class="navbar_right">
        <div class="profile">
          <div class="icon_wrap">
            <img class = "circleProfile" src="<?php
            if (isset($_SESSION['user']['profilePhoto'])) {
              echo $_SESSION['user']['profilePhoto'];
            }
            ?>" alt="profile_pic">
            <span class="name">
              <?php
              if (isset ($_SESSION['user']['firstName']) && isset($_SESSION['user']['lastName'])) {
                echo $_SESSION['user']['firstName'] . " " . $_SESSION['user']['lastName'];
              }
              ?>
            </span>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="profile_dd">
            <ul class="profile_ul">
              <li class="profile_li"><a class="profile" href="/profile"><span class="picon"><i class="fas fa-user-alt"></i>
                  </span>Profile</a>
              </li>
              <li id="theme"><a  class="address"><span class="picon"><i class="fa-solid fa-circle-half-stroke" style="color: rgb(127, 141, 176);"></i></span><span id="themeText">Dark Theme</span></a>
              </li>
              <li><a class="settings" href="/chatroom" target="_blank"><span class="picon"><i class="fa-solid fa-comments"></i></span>Chat Room</a></li>
              <li><a class="logout" href="/logout"><span class="picon"><i class="fas fa-sign-out-alt"></i></span>Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="create-post">
    <img class="create-post__avatar" src="<?php echo $_SESSION['user']['profilePhoto']; ?>" alt="profileImage" />
    <form  action="/home" enctype="multipart/form-data" method = "POST" id="create-post-form" class="create-post__form">
      <div class="titleSec">Hello <?php echo $_SESSION['user']['firstName'] . " " . $_SESSION['user']['lastName']; ?></div>
      <div class="create-post__text-wrap">
        <textarea aria-label="Write something about you..." class = "outOfFocus" name="postContent" id="create-post-txt" oninput="this.parentNode.dataset.replicatedValue = this.value" placeholder="Write something about you..."></textarea>
      </div>
      <div class="create-post__media-wrap" id="create-post-media-wrap">
        <img src="" id = "imagePreview" />
      </div>
      <div class="create-post__buttons">
        <div class="create-post__assets-buttons">
          <button type="button" aria-label="Add an image to the post" class="create-post__asset-btn" for="create-post-media" 
          onclick="this.querySelector('input').click()">
            <img class="icon" src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/camera-tumblr.svg" alt="" />
            Photo
            <input type="file" name="postImage" id="create-post-media" accept=".png, .jpg, .jpeg, .gif" />
          </button>
          <button type="button" aria-label="Add a video to the post" class="create-post__asset-btn" for="create-post-media"  
          onclick="this.querySelector('input').click()" >
            <img class="icon" src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/audio-tumblr.svg" alt="" />
            Audio
            <input type="file" name="postAudio" id="create-post-media" accept=".mp3" />
          </button>
          <button type="button" aria-label="Add a video to the post" class="create-post__asset-btn" for="create-post-media" 
          onclick="this.querySelector('input').click()">
            <img class="icon" src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/video-tumblr.svg" alt="" />
            Video
            <input type="file" name="postVideo" id="create-post-media" accept=".mp4" />
          </button>
        </div>
        <button type="submit" name = "doPost" class = "postBtn"><i class="fa-regular fa-paper-plane"></i></button>
      </div>
    </form>
  </section>
  <a href="#" id="scroll"><span></span></a>
  <div class="container-post-frame">
  <?php for($i = count($posts) - 1; $i >= 0; $i--) { ?>
  <section id="posts-container">
    <article class="post">
      <img class="post__avatar" src="<?php echo $posts[$i]['profile_photo']; ?>" alt="/profile image" />
      <div class="post__content">
        <header class="post__header">
          <p class="post__user"><?php  echo $posts[$i]['first_name'] . " " . $posts[$i]['last_name']; ?></p>  
          <div class="post__meta">
            <p class="post__reblogs"><?php 
            $time = round(abs(time() - strtotime($posts[$i]['post_time'])) / 3600); 
                if ($time > 24) {
                  echo floor($time/24) . "day ago";
                }
                else {
                  echo floor($time) . " hours ago";
                }
                ?></p>  
          </div>
        </header>
        <div class="post-item">
          <?php if (strlen($posts[$i]['post_video']) > 28) { ?>
            <video class="post__image" controls src="<?php echo $posts[$i]['post_video']; ?>"></video>
          <?php } ?> 
          <?php if (strlen($posts[$i]['post_audio']) > 28) { ?>
            <audio class="post__image" controls src="<?php echo $posts[$i]['post_audio']; ?>"></audio>
          <?php } ?> 
        </div>
        <div class="post__body">
          <img class="post__img" src="<?php echo $posts[$i]['post_image']; ?>" alt="" />
          <a href="https://es.wikipedia.org/wiki/My_Life_as_Liz" class="post__text"><?php $posts[$i]['post_content']; ?></a>
        <?php echo $posts[$i]['post_content']; ?>
        </div>
        <div class="reaction">
        <i class="fa-regular fa-heart"></i>
        </div>
      </div>
    </article>
  </section>
  <?php } ?>
</div>
<div class="show-more-btn">
  <button>Show More</button>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6422baf859f5c322"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" 
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
  <script src="./public/assets/js/home.js"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
  integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
  crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
</html>
