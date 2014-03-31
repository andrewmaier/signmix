<html>
  <? include('_html_head.php'); ?>
  <body>
    <main>
      <nav>
        <a href="new.php">Create one</a>
      </nav>
      <? for ($i=0; $i < 10; $i++) : ?> 
        <article>
          <a href="#" role="header">
            <span class="username">Username</span>
            <span class="date">03/31/2014</span>
          </a>
          <a href="#"><img src="images/stop.png" alt="" /></a>
        </article>
      <? endfor; ?>
    </main>
  </body>
</html>