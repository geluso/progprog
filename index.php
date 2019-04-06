<?php
  if ($_GET["mailto"]) {
    $email = $_GET["mailto"];
    mail($email, "subscribed to learn programming programming games", "thank you! look forward to updates in the future.");
    echo "<p>subscribed $email!</p>";
  }
?>

<style>
  body, input, button {
    font-size: 40px; 
  }

  form {
    display: inline
  }

  #title {
    background-image: url('whitebook.jpg');
    background-repeat: no-repeat;
    padding-top: 160px;
    padding-left: 60px;
    height: 400px;
  }
</style>

<p>
  welcome to
  <a href="http://learnprogrammingprogrammingboardgames.com">
    learnprogrammingprogrammingboardgames.com
  </a>
</p>

<pre id="title">
  LEARN
  PROGRAMMING
  PROGRAMMING
  BOARD
  GAMES
</pre>

<div id="days-remaining">
  <span id="days"></span> days remaining.
  probably <span id="pages"></span> pages.
  <form>
    <input name="mailto" type="email" placeholder="email@email.com" />
    <button type="submit">subscribe</button>
  </form>
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
