<?php
  include("core/wallet.php");
  include("templates/header.php");
?>
<div class='row push'>
  <div class='span10'>
    <h2>What is this?</h2>
    <p><strong><?php echo $sitename; ?></strong> is an <em>instant wallet service</em> designed to help new users get into <a href="http://templecoin.com" target="_blank" style="text-decoration:underline;">Templecoin</a> without having to download a hefty blockchain with long wait times.</p>
    <p>Getting into Templecoin is just a click away with <?php echo $sitename; ?>; no sign-ups, no emails, just instant Templecoin access.</p>
  </div>
</div>
<?php
  include("templates/sidebar.php");
  include("templates/footer.php");
?>
