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

  <div class="wrapper">
    <div class="navbar">
      <div class="navbar_left">
        <div class="logo">
          <a href="#">Social</a>
        </div>
      </div>

      <div class="navbar_right">
        <div class="notifications">
          <div class="icon_wrap"><i class="far fa-bell"></i></div>

          <div class="notification_dd">
            <ul class="notification_ul">
              <li class="starbucks success">
                <div class="notify_icon">
                  <span class="icon"></span>
                </div>
                <div class="notify_data">
                  <div class="title">
                    Lorem, ipsum dolor.
                  </div>
                  <div class="sub_title">
                    Lorem ipsum dolor sit amet consectetur.
                  </div>
                </div>
                <div class="notify_status">
                  <p>Success</p>
                </div>
              </li>
              <li class="baskin_robbins failed">
                <div class="notify_icon">
                  <span class="icon"></span>
                </div>
                <div class="notify_data">
                  <div class="title">
                    Lorem, ipsum dolor.
                  </div>
                  <div class="sub_title">
                    Lorem ipsum dolor sit amet consectetur.
                  </div>
                </div>
                <div class="notify_status">
                  <p>Failed</p>
                </div>
              </li>
              <li class="mcd success">
                <div class="notify_icon">
                  <span class="icon"></span>
                </div>
                <div class="notify_data">
                  <div class="title">
                    Lorem, ipsum dolor.
                  </div>
                  <div class="sub_title">
                    Lorem ipsum dolor sit amet consectetur.
                  </div>
                </div>
                <div class="notify_status">
                  <p>Success</p>
                </div>
              </li>
              <li class="pizzahut failed">
                <div class="notify_icon">
                  <span class="icon"></span>
                </div>
                <div class="notify_data">
                  <div class="title">
                    Lorem, ipsum dolor.
                  </div>
                  <div class="sub_title">
                    Lorem ipsum dolor sit amet consectetur.
                  </div>
                </div>
                <div class="notify_status">
                  <p>Failed</p>
                </div>
              </li>
              <li class="kfc success">
                <div class="notify_icon">
                  <span class="icon"></span>
                </div>
                <div class="notify_data">
                  <div class="title">
                    Lorem, ipsum dolor.
                  </div>
                  <div class="sub_title">
                    Lorem ipsum dolor sit amet consectetur.
                  </div>
                </div>
                <div class="notify_status">
                  <p>Success</p>
                </div>
              </li>
              <li class="show_all">
                <p class="link">Show All Activities</p>
              </li>
            </ul>
          </div>

        </div>
        <div class="profile">
          <div class="icon_wrap">
            <img src="<?php
            session_start();
             echo $_SESSION['user']['profilePhoto']; ?>" alt="profile_pic">
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
              <li><a class="address" href="#"><span class="picon"><i class="fas fa-map-marker"></i></span>Address</a>
              </li>
              <li><a class="settings" href="#"><span class="picon"><i class="fas fa-cog"></i></span>Settings</a></li>
              <li><a class="logout" href="/logout"><span class="picon"><i class="fas fa-sign-out-alt"></i></span>Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="popup">
      <div class="shadow"></div>
      <div class="inner_popup">
        <div class="notification_dd">
          <ul class="notification_ul">
            <li class="title">
              <p>All Notifications</p>
              <p class="close"><i class="fas fa-times" aria-hidden="true"></i></p>
            </li>
            <li class="starbucks success">
              <div class="notify_icon">
                <span class="icon"></span>
              </div>
              <div class="notify_data">
                <div class="title">
                  Lorem, ipsum dolor.
                </div>
                <div class="sub_title">
                  Lorem ipsum dolor sit amet consectetur.
                </div>
              </div>
              <div class="notify_status">
                <p>Success</p>
              </div>
            </li>
            <li class="baskin_robbins failed">
              <div class="notify_icon">
                <span class="icon"></span>
              </div>
              <div class="notify_data">
                <div class="title">
                  Lorem, ipsum dolor.
                </div>
                <div class="sub_title">
                  Lorem ipsum dolor sit amet consectetur.
                </div>
              </div>
              <div class="notify_status">
                <p>Failed</p>
              </div>
            </li>
            <li class="mcd success">
              <div class="notify_icon">
                <span class="icon"></span>
              </div>
              <div class="notify_data">
                <div class="title">
                  Lorem, ipsum dolor.
                </div>
                <div class="sub_title">
                  Lorem ipsum dolor sit amet consectetur.
                </div>
              </div>
              <div class="notify_status">
                <p>Success</p>
              </div>
            </li>
            <li class="pizzahut failed">
              <div class="notify_icon">
                <span class="icon"></span>
              </div>
              <div class="notify_data">
                <div class="title">
                  Lorem, ipsum dolor.
                </div>
                <div class="sub_title">
                  Lorem ipsum dolor sit amet consectetur.
                </div>
              </div>
              <div class="notify_status">
                <p>Failed</p>
              </div>
            </li>
            <li class="kfc success">
              <div class="notify_icon">
                <span class="icon"></span>
              </div>
              <div class="notify_data">
                <div class="title">
                  Lorem, ipsum dolor.
                </div>
                <div class="sub_title">
                  Lorem ipsum dolor sit amet consectetur.
                </div>
              </div>
              <div class="notify_status">
                <p>Success</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>
  <section class="create-post">
    <img class="create-post__avatar" src="<?php echo $_SESSION['user']['profilePhoto']; ?>" alt="" />
    <form id="create-post-form" class="create-post__form" action="">
      <div class="create-post__text-wrap">
        <textarea aria-label="Write something about you..." name="post-text" id="create-post-txt" oninput="this.parentNode.dataset.replicatedValue = this.value" placeholder="Write something about you..."></textarea>
      </div>
  
      <div class="create-post__media-wrap" id="create-post-media-wrap"></div>
  
      <div class="create-post__buttons">
        <div class="create-post__assets-buttons">
          <button type="button" aria-label="Add an image to the post" class="create-post__asset-btn" for="create-post-media" onclick="this.querySelector('input').click()">
            <img class="icon" src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/camera-tumblr.svg" alt="" />
            Photo
            <input type="file" name="post-img" id="create-post-media" accept=".png, .jpg, .jpeg, .gif" />
          </button>
          <!-- <button type="button" aria-label="Add a video to the post" class="create-post__asset-btn" for="create-post-media" disabled>
            <img class="icon" src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/quote-tumblr.svg" alt="" />
            Quote
          </button>
          <button type="button" aria-label="Add a video to the post" class="create-post__asset-btn" for="create-post-media" disabled>
            <img class="icon" src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/link-tumblr.svg" alt="" />
            Link
          </button>
          <button type="button" aria-label="Add a video to the post" class="create-post__asset-btn" for="create-post-media" disabled>
            <img class="icon" src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/chat-tumblr.svg" alt="" />
            Chat
          </button>
          <button type="button" aria-label="Add a video to the post" class="create-post__asset-btn" for="create-post-media" disabled>
            <img class="icon" src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/audio-tumblr.svg" alt="" />
            Audio
          </button>
          <button type="button" aria-label="Add a video to the post" class="create-post__asset-btn" for="create-post-media" disabled>
            <img class="icon" src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/video-tumblr.svg" alt="" />
            Video
          </button> -->
        </div>
        <button class="create-post__submit" type="submit" disabled id="create-post-submit-btn">Post</button>
      </div>
    </form>
  </section>
  
  <section id="posts-container">
    <article class="post">
      <img class="post__avatar" src="https://raw.githubusercontent.com/Javieer57/create-post-component/design/2010/img/avatar-tumblr.png" alt="" />
  
      <div class="post__content">
        <header class="post__header">
          <p class="post__user">galactiqangel</p>
  
          <div class="post__meta">
            <p class="post__reblogs">3,908</p>
  
            <button class="post__header-btn">
              <img src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/reblog-tumblr.svg" alt="" />
            </button>
            <button class="post__header-btn">
              <img src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/heart-tumblr.svg" alt="" />
            </button>
          </div>
        </header>
  
        <div class="post__body">
          <img class="post__img" src="https://raw.githubusercontent.com/Javieer57/create-post-component/design/2010/img/liz-lee.jpg" alt="" />
          <a href="https://es.wikipedia.org/wiki/My_Life_as_Liz" class="post__text">My Life As Liz</a>
        </div>
  
        <div class="post__footer">
          <span>#2010s</span>
          <span>#tumblr</span>
          <span>#codepen</span>
        </div>
      </div>
    </article>
  
    <article class="post">
      <img class="post__avatar" src="https://raw.githubusercontent.com/Javieer57/create-post-component/design/2010/img/avatar-tumblr.png" alt="" />
  
      <div class="post__content">
        <header class="post__header">
          <p class="post__user">galactiqangel</p>
  
          <div class="post__meta">
            <p class="post__reblogs">3,908</p>
  
            <button class="post__header-btn">
              <img src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/reblog-tumblr.svg" alt="" />
            </button>
            <button class="post__header-btn">
              <img src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/heart-tumblr.svg" alt="" />
            </button>
          </div>
        </header>
  
        <div class="post__body">
          <img class="post__img" src="https://raw.githubusercontent.com/Javieer57/create-post-component/design/2010/img/steven-universe.webp" alt="" />
          <a href="https://es.wikipedia.org/wiki/Steven_Universe" class="post__text">Steven Universe</a>
        </div>
  
        <div class="post__footer">
          <span>#2010s</span>
          <span>#tumblr</span>
          <span>#codepen</span>
        </div>
      </div>
    </article>
  
    <article class="post">
      <img class="post__avatar" src="https://raw.githubusercontent.com/Javieer57/create-post-component/design/2010/img/avatar-tumblr.png" alt="" />
  
      <div class="post__content">
        <header class="post__header">
          <p class="post__user">galactiqangel</p>
  
          <div class="post__meta">
            <p class="post__reblogs">3,908</p>
  
            <button class="post__header-btn">
              <img src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/reblog-tumblr.svg" alt="" />
            </button>
            <button class="post__header-btn">
              <img src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/heart-tumblr.svg" alt="" />
            </button>
          </div>
        </header>
  
        <div class="post__body">
          <img class="post__img" src="https://raw.githubusercontent.com/Javieer57/create-post-component/design/2010/img/catching-fire.webp" alt="" />
          <a href="https://en.wikipedia.org/wiki/The_Hunger_Games:_Catching_Fire" class="post__text">The Hunger Games...?</a>
        </div>
  
        <div class="post__footer">
          <span>#2010s</span>
          <span>#tumblr</span>
          <span>#codepen</span>
        </div>
      </div>
    </article>
  
    <article class="post">
      <img class="post__avatar" src="https://raw.githubusercontent.com/Javieer57/create-post-component/design/2010/img/avatar-tumblr.png" alt="" />
  
      <div class="post__content">
        <header class="post__header">
          <p class="post__user">galactiqangel</p>
  
          <div class="post__meta">
            <p class="post__reblogs">3,908</p>
  
            <button class="post__header-btn">
              <img src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/reblog-tumblr.svg" alt="" />
            </button>
            <button class="post__header-btn">
              <img src="https://raw.githubusercontent.com/Javieer57/create-post-component/43c8008a45b699957d2070cc23362f1953c65d78/icons/heart-tumblr.svg" alt="" />
            </button>
          </div>
        </header>
  
        <div class="post__body">
          <img class="post__img" src="https://raw.githubusercontent.com/Javieer57/create-post-component/design/2010/img/icecream-twerk.webp" alt="" />
        </div>
  
        <div class="post__footer">
          <span>#2010s</span>
          <span>#tumblr</span>
          <span>#codepen</span>
        </div>
      </div>
    </article>
  </section>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
  <script src="./public/assets/js/home.js"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</body>

</html>