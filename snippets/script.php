<?php if (c::get('google.analytics', null)) : ?>
<script>
  <?php if (c::get('google.analytics.opt-out-cookie', null)) : ?>
    var gaProperty = '<?= c::get("google.analytics", "") ?>';
    var disableStr = 'ga-disable-' + gaProperty;
    if (document.cookie.indexOf(disableStr + '=true') > -1) {
      window[disableStr] = true;
    }
    function gaOptout() {
      document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
      window[disableStr] = true;
      alert('<?php echo l::get('google.analytics.success-alert', 'Google Analytics tracking for this website and browser has been successfully disabled.', kirby()->site()->language()->code())?>');
    }
  <?php endif ?>

  (function(p,b,o,r,g,e,s){p['GoogleAnalyticsObject']=g;p[g]=p[g]||function(){
  (p[g].q=p[g].q||[]).push(arguments)},p[g].l=1*new Date();e=b.createElement(o),
  s=b.getElementsByTagName(o)[0];e.async=1;e.src=r;s.parentNode.insertBefore(e,s)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  
  ga('create', '<?= c::get("google.analytics", "") ?>', 'auto');
  <?php if (c::get('google.analytics.anonymize-ip', null)) : ?>
    ga('set', 'anonymizeIp', true);
  <?php endif ?>
  ga('send', 'pageview');
</script>
<?php endif ?>
