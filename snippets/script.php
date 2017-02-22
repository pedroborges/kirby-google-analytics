<?php if (c::get('google.analytics', null)) : ?>

<script>
  (function(p,b,o,r,g,e,s){p['GoogleAnalyticsObject']=g;p[g]=p[g]||function(){
  (p[g].q=p[g].q||[]).push(arguments)},p[g].l=1*new Date();e=b.createElement(o),
  s=b.getElementsByTagName(o)[0];e.async=1;e.src=r;s.parentNode.insertBefore(e,s)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', '<?= c::get("google.analytics", "") ?>', 'auto');
  ga('send', 'pageview');
</script>
<?php endif ?>
