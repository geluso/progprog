<?php
  if ($_POST["mailto"]) {
    $email = $_POST["mailto"];
    $headers = "CC: stevegeluso@gmail.com";
    mail($email, "subscribed to learn programming programming games", "thank you! look forward to updates in the future.", $headers);
    echo "<p>subscribed $email!</p>";
  }
?>

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-5525850-4"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-5525850-4');
  </script>
</head>

<style>
  body, button {
    font-size: 40px; 
  }

  #title {
    background-image: url('whitebook.jpg');
    background-repeat: no-repeat;
    padding-top: 160px;
    padding-left: 60px;
    height: 450px;
    width: 500px;
  }

  #main {
    position: relative;
  }

  #left {
    position: absolute;
    left: 0;
    width: 50%;
  }
  
  #right {
    position: absolute;
    left: 50%;
    width: 50%;
  }

  img {
    max-width: 100%;
    max-height: 800px;
  }

  form {
    display: inline
  }
</style>

<p>
  welcome to
  <a href="http://learnprogrammingprogrammingboardgames.com">learnprogrammingprogrammingboardgames.com</a>, by <a href="http://5tephen.com">5tephen.com</a> Geluso.
</p>

<div id="main">
  <div id="left">
    <img src="./repo/book-covers/cover_goldenrod.png" />
  </div>
  <div id="right">
    <ol>
      <li><a href="http://learnprogrammingprogrammingboardgames.com/book/00-intro.pdf">intro</a></li>
      <li><a href="http://learnprogrammingprogrammingboardgames.com/book/tic-tac-toe.pdf">Tic Tac Toe</a></li>
      <li><a href="http://learnprogrammingprogrammingboardgames.com/book/connect-four.pdf">Connect Four</a></li>
      <li><a href="http://learnprogrammingprogrammingboardgames.com/book/poker-draft.pdf">Poker (draft)</a></li>
      <li><a href="http://learnprogrammingprogrammingboardgames.com/book/philosophies.pdf">Personal Programming Philosophies</a></li>
      <li>---</li>
      <li><a href="http://learnprogrammingprogrammingboardgames.com/vision-board-learnprogrammingprogramminggames.pdf">The Vision Board</a></li>
    </ol>

    <div id="mc_embed_signup">
      <form action="https://seamusbeacon.us21.list-manage.com/subscribe/post?u=b9cfd357cd96a3c3ceb777863&amp;id=a38e0ca988&amp;f_id=0079c2e1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_self">
        <div id="mc_embed_signup_scroll">
          <div class="mc-field-group">
            <input type="email" placeholder="your@email.com" value="" name="EMAIL" class="required email" id="mce-EMAIL" required>
            <span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
            <a href="http://eepurl.com/ieOr39" title="Mailchimp - email marketing made easy and fun"><img src="https://eep.io/mc-cdn-images/template_images/branding_logo_text_dark_dtp.svg"></a>
          </div>
          <div id="mce-responses" class="clear foot">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b9cfd357cd96a3c3ceb777863_a38e0ca988" tabindex="-1" value=""></div>
          <div class="optionalParent">
            <div class="clear foot">
            </div>
          </div>
        </div>
      </form>
    </div>

    <p></p>

    <div id="days-remaining">
      <span id="days"></span> days remaining.
      probably <span id="pages"></span> pages.

      <!--
      <form method="POST">
        <input name="mailto" type="email" placeholder="email@email.com" />
        <button type="submit">subscribe</button>
      </form>
      -->
    </div>

<script>
  days.textContent = 100 + Math.floor(366 * Math.random()) // leap year haha
  setInterval(_=>{
    days.textContent-- // abuse decrement on textContent haha

    if (days.textContent < 0) {
      days.textContent = 100 + Math.floor(366 * Math.random()) // leap year haha
    }
  }, 999) // not quite one second haha

  function randomPageCount() {
    pages.textContent=200 + Math.floor(334 * Math.random())
    delay = 5+14*Math.random()
    setTimeout(randomPageCount, delay)
  }
  randomPageCount()
</script>
