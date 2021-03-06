<?php
// <meta>
ob_start();

?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
$shared_html_head['meta'] = ob_get_clean();

// <link>
ob_start();

?>
    <link rel="alternate" type="application/rss+xml" title="Mozilla Japanese Community ブログ (RSS)" href="https://medium.com/feed/mozilla-japan">
<?php
$shared_html_head['link'] = ob_get_clean();

// スタイルシート
$css = (empty($css)) ? array() : $css;
array_unshift($css, 'portala/base');

require_once dirname(__FILE__) . '/shared-header.inc.php';

?>
  <body id="<?= $body_id ?>" class="<?= $body_class ?>" role="document" itemscope itemtype="http://schema.org/<?= $page_type ?>" itemref="copyright">
    <div id="wrapper">
      <div id="doc-outer">
        <div id="doc">
