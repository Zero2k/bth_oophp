<?php
$urlHome  = $app->url->create("");
$urlAbout = $app->url->create("about");

?>
<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?= $urlHome ?>">Home</a></li>
            <li><a href="<?= $urlAbout ?>">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav>