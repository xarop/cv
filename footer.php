<footer id="page-footer">
  <div class="container">
    <?php echo $profile['name']; ?> |
    <a href="mailto:<?php echo $profile['email']; ?>"><?php echo $profile['email']; ?></a> |
    <a href="tel:<?php echo $profile['phone_raw']; ?>"><?php echo $profile['phone']; ?></a> |
    <a href="<?php echo $profile['website_url']; ?>"><?php echo $profile['website']; ?></a>
    <span class="no-print"> | <a href="#">top</a></span>
  </div>
</footer>

<script>
  if (document.getElementById('printButton')) {
    document.getElementById('printButton').addEventListener('click', function() {
      window.print();
    });
  }
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-1298554-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());
  gtag('config', 'UA-1298554-2');
</script>
