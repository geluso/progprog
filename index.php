<?php
  if ($_POST["mailto"]) {
    $email = $_POST["mailto"];
    $headers = "CC: stevegeluso@gmail.com";
    mail($email, "subscribed to learn programming programming games", "thank you! look forward to updates in the future.", $headers);
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

  #main {
    position: relative;
  }

  #left {
    position: absolute;
    left: 0;
  }
  
  #right {
    position: absolute;
    left: 50%;
  }

  #days-remaining {
    position: absolute;
    bottom: 0;
  }
</style>

<p>
  welcome to
  <a href="http://learnprogrammingprogrammingboardgames.com">learnprogrammingprogrammingboardgames.com</a>.
</p>

<div id="main">
  <div id="left">
    <pre id="title">
  LEARN
  PROGRAMMING
  PROGRAMMING
  BOARD
  GAMES
    </pre>
  </div>
  <div id="right">
    <ol>
      <li><a href="http://learnprogrammingprogrammingboardgames.com/book/00-intro.pdf">intro</a></li>
      <li><a href="http://learnprogrammingprogrammingboardgames.com/book/tic-tac-toe.pdf">Tic Tac Toe</a></li>
      <li><a href="http://learnprogrammingprogrammingboardgames.com/book/connect-four.pdf">Connect Four</a></li>
      <li><a href="http://learnprogrammingprogrammingboardgames.com/book/poker-draft.pdf">Poker (draft)</a></li>
      <li><a href="http://learnprogrammingprogrammingboardgames.com/book/philosophies.pdf">Personal Programming Philosophies</a></li>
    </ol>
  </div>
</div>

<div id="days-remaining">
  <span id="days"></span> days remaining.
  probably <span id="pages"></span> pages.
  <form method="POST">
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
