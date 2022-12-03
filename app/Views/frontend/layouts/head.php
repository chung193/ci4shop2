<head>
   <?php 
    $router = service('router'); 
    $controller  = $router->controllerName(); 
    $seo = $base['seo']; 
    if($controller == '\App\Controllers\frontend\Home' || $controller == '\App\Controllers\frontend\Customer' ){
      ?>
        <!-- Title and description -->
        <title><?= $seo['site_title']['value']?></title>
        <!-- Basic and Helper page needs -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#d3122a">
        <meta name="format-detection" content="telephone=no">
        <link rel="canonical" href="<?= $seo['site_title']['value']?>">
        <!-- Helpers --><!-- /snippets/social-meta-tags.liquid -->
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?= $seo['site_title']['value']?>">
        <meta property="og:description" content="<?= $seo['site_description']['value']?>">
        <meta property="og:url" content="<?= current_url();?>">
        <meta property="og:site_name" content="<?= $seo['site_metatitle']['value']?>">
        <meta name="twitter:card" content="<?= $seo['site_description']['value']?>">
        <meta name="twitter:title" content="<?= $seo['site_title']['value']?>">
        <meta name="twitter:description" content="<?= $seo['site_description']['value']?>">
    <?php }else{
   ?>
        <!-- Title and description -->
        <title><?= $seo->meta_title?></title>
        <!-- Basic and Helper page needs -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#d3122a">
        <meta name="format-detection" content="telephone=no">
        <link rel="canonical" href="<?= $seo->meta_title?>">
        <!-- Helpers --><!-- /snippets/social-meta-tags.liquid -->
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?= $seo->meta_title?>">
        <meta property="og:description" content="<?= $seo->meta_description?>">
        <meta property="og:url" content="<?= current_url();?>">
        <meta property="og:site_name" content="<?= $seo->meta_title?>">
        <meta name="twitter:card" content="<?= $seo->meta_description?>">
        <meta name="twitter:title" content="<?= $seo->meta_title?>">
        <meta name="twitter:description" content="<?= $seo->meta_description?>">
 <?php } ?>
   <link href="<?= base_url().'/public/frontend/style.css'?>" rel="stylesheet" type="text/css" media="all">
   <?php $info = $base['info'];?>
   <link rel="icon" type="image/x-icon" href="<?= base_url().'/public/uploads/favicon/'.$info->favicon?>">

   <!-- Link all your CSS files below -->
   <link href="//cdn.shopify.com/s/files/1/0023/4104/4283/t/6/assets/plugins.css?v=125125202649890534761645332648" rel="stylesheet" type="text/css" media="all">
   <link href="//cdn.shopify.com/s/files/1/0023/4104/4283/t/6/assets/slick.min.css?v=172243757244787934991645332530" rel="stylesheet" type="text/css" media="all">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="<?= base_url('/public/frontend/assets/js/toastr.min.css')?>" />

   <style>
    *,
    :after,
    :before,
    input {
      box-sizing: border-box;
    }
    body,
    html {
      padding: 0;
      margin: 0;
    }
    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    main,
    nav,
    section,
    summary {
      display: block;
    }
    audio,
    canvas,
    progress,
    video {
      display: inline-block;
      vertical-align: baseline;
    }
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
      height: auto;
    }
    input[type="search"]::-webkit-search-cancel-button,
    input[type="search"]::-webkit-search-decoration {
      -webkit-appearance: none;
    }
    [tabindex="-1"]:focus {
      outline: 0;
    }
    .display-table {
      display: table;
      table-layout: fixed;
      width: 100%;
    }
    .display-table-cell {
      display: table-cell;
      vertical-align: middle;
      float: none;
    }
    .visually-hidden {
      position: absolute;
      overflow: hidden;
      clip: rect(0 0 0 0);
      height: 1px;
      width: 1px;
      margin: -1px;
      padding: 0;
      border: 0;
    }
    p {
      margin: 0 0 15px 0;
    }
    p img {
      margin: 0;
    }
    em {
      font-style: italic;
    }
    b,
    strong {
      font-weight: 700;
    }
    small {
      font-size: 0.9em;
    }
    sub,
    sup {
      position: relative;
      font-size: 60%;
      vertical-align: baseline;
    }
    sup {
      top: -0.5em;
    }
    sub {
      bottom: -0.5em;
    }
    blockquote {
      font-size: 1.125em;
      line-height: 1.45;
      font-style: italic;
      margin: 0 0 30px;
      padding: 15px 30px;
      border-left: 1px solid #e5e5e5;
    }
    blockquote p {
      margin-bottom: 0;
    }
    blockquote p + cite {
      margin-top: 15px;
    }
    blockquote cite {
      display: block;
      font-size: 0.75em;
    }
    blockquote cite:before {
      content: "\2014 \0020";
    }
    code,
    pre {
      background-color: #faf7f5;
      font-family: Consolas, monospace;
      font-size: 1em;
      border: 0 none;
      padding: 0 2px;
      color: #51ab62;
    }
    pre {
      overflow: auto;
      padding: 15px;
      margin: 0 0 30px;
    }
    hr {
      clear: both;
      border-top: solid #e5e5e5;
      border-width: 1px 0 0;
      margin: 30px 0;
      height: 0;
    }
    hr.hr--small {
      margin: 15px 0;
    }
    hr.hr--clear {
      border-top-color: transparent;
    }
    .rte {
      margin-bottom: 15px;
    }
    .rte a {
      text-decoration: underline;
    }
    .rte h1,
    .rte h2,
    .rte h3,
    .rte h4,
    .rte h5,
    .rte h6 {
      margin-top: 2em;
    }
    .rte h1:first-child,
    .rte h2:first-child,
    .rte h3:first-child,
    .rte h4:first-child,
    .rte h5:first-child,
    .rte h6:first-child {
      margin-top: 0;
    }
    .rte h1 a,
    .rte h2 a,
    .rte h3 a,
    .rte h4 a,
    .rte h5 a,
    .rte h6 a {
      text-decoration: none;
    }
    .rte > div {
      margin-bottom: 15px;
    }
    .rte li {
      margin-bottom: 0.4em;
    }
    .rte--header {
      margin-bottom: 0;
    }
    button {
      overflow: visible;
    }
    button[disabled],
    html input[disabled] {
      cursor: default;
    }
    .btn,
    .rte .btn {
      display: inline-block;
      padding: 8px 10px;
      width: auto;
      margin: 0;
      line-height: 1.42;
      font-weight: 700;
      text-decoration: none;
      text-align: center;
      vertical-align: middle;
      white-space: nowrap;
      cursor: pointer;
      border: 1px solid transparent;
      -webkit-appearance: none;
      -moz-appearance: none;
      border-radius: 3px;
      background-color: #d3122a; /*!setting.color_primary{*/
      color: #fff;
    }
    .btn:hover,
    .rte .btn:hover {
      background-color: #a40e21;
      color: #fff;
    }
    .btn:active,
    .btn:focus,
    .rte .btn:active,
    .rte .btn:focus {
      background-color: #750a18;
      color: #fff;
    }
    .btn.disabled,
    .btn[disabled],
    .rte .btn.disabled,
    .rte .btn[disabled] {
      cursor: default;
      color: #b6b6b6;
      background-color: #f6f6f6;
    }
    ol,
    ul {
      margin: 0;
      padding: 0;
    }
    ol {
      list-style: decimal;
    }
    ol ol,
    ol ul,
    ul ol,
    ul ul {
      margin: 0;
    }
    li {
      margin-bottom: 0.25em;
    }
    ul.square {
      list-style: square outside;
    }
    ul.disc {
      list-style: disc outside;
    }
    ol.alpha {
      list-style: lower-alpha outside;
    }
    .no-bullets {
      list-style: none outside;
      margin-left: 0;
    }
    .inline-list {
      margin-left: 0;
    }
    .inline-list li {
      display: inline-block;
      margin-bottom: 0;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      border-spacing: 0;
    }
    table.full {
      width: 100%;
      margin-bottom: 1em;
    }
    .table-wrap {
      max-width: 100%;
      overflow: auto;
      -webkit-overflow-scrolling: touch;
    }
    th {
      font-weight: 700;
    }
    td,
    th {
      text-align: left;
      padding: 15px;
      border: 1px solid #e5e5e5;
    }
    img {
      border: 0 none;
    }
    svg:not(:root) {
      overflow: hidden;
    }
    iframe,
    img {
      max-width: 100%;
    }
    form {
      margin-bottom: 0;
    }
    .form-vertical {
      margin-bottom: 15px;
    }
    button,
    input,
    select,
    textarea {
      padding: 0;
      margin: 0;
    }
    button {
      background: 0 0;
      border: none;
      cursor: pointer;
    }
    button,
    input,
    textarea {
      -webkit-appearance: none;
      -moz-appearance: none;
    }
    button {
      background: 0 0;
      border: none;
      display: inline-block;
      cursor: pointer;
    }
    input[type="image"] {
      padding-left: 0;
      padding-right: 0;
    }
    fieldset {
      border: 1px solid #e5e5e5;
      padding: 15px;
    }
    legend {
      border: 0;
      padding: 0;
    }
    button,
    input[type="submit"] {
      cursor: pointer;
    }
    input,
    select,
    textarea {
      border: 1px solid #e5e5e5;
      max-width: 100%;
      padding: 8px 10px;
      border-radius: 3px;
    }
    input:focus,
    select:focus,
    textarea:focus {
      border: 1px solid #ccc;
    }
    input.input-full,
    select.input-full,
    textarea.input-full {
      width: 100%;
    }
    textarea {
      min-height: 100px;
    }
    input[type="checkbox"],
    input[type="radio"] {
      display: inline;
      margin: 0 8px 0 0;
      padding: 0;
      width: auto;
    }
    input[type="checkbox"] {
      -webkit-appearance: checkbox;
      -moz-appearance: checkbox;
    }
    input[type="radio"] {
      -webkit-appearance: radio;
      -moz-appearance: radio;
    }
    input[type="image"] {
      padding-left: 0;
      padding-right: 0;
    }
    select {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      background-position: right center;
      background-image: url(//astor-health-care.myshopify.com/services/assets/120441733225/editor_asset/ico-select.svg);
      background-repeat: no-repeat;
      background-position: right 10px center;
      background-color: transparent;
      padding-right: 28px;
      text-indent: 0.01px;
      text-overflow: "";
      cursor: pointer;
    }
    .ie9 select,
    .lt-ie9 select {
      padding-right: 10px;
      background-image: none;
    }
    optgroup {
      font-weight: 700;
    }
    option {
      color: #000;
      background-color: #fff;
    }
    select::-ms-expand {
      display: none;
    }
    input.error,
    select.error,
    textarea.error {
      border-color: #d02e2e;
      background-color: #fff6f6;
      color: #d02e2e;
    }
    label.error {
      color: #d02e2e;
    }
    .pagination {
      margin-bottom: 1em;
      text-align: center;
    }
    .pagination > span {
      display: inline-block;
      line-height: 1;
    }
    .pagination a {
      display: block;
    }
    .pagination .page.current,
    .pagination a {
      padding: 8px;
    }
    #PageContainer {
      overflow: hidden;
    }
    .errors,
    .note {
      border-radius: 3px;
      padding: 6px 12px;
      margin-bottom: 15px;
      border: 1px solid transparent;
      font-size: 0.9em;
      text-align: left;
    }
    .errors ol,
    .errors ul,
    .note ol,
    .note ul {
      margin-top: 0;
      margin-bottom: 0;
    }
    .errors li:last-child,
    .note li:last-child {
      margin-bottom: 0;
    }
    .errors p,
    .note p {
      margin-bottom: 0;
    }
    .note {
      border-color: #e5e5e5;
    }
    .errors ul {
      list-style: disc outside;
      margin-left: 20px;
    }
    .form-success {
      color: #56ad6a;
      background-color: #ecfef0;
      border-color: #56ad6a;
    }
    .form-success a {
      color: #56ad6a;
      text-decoration: underline;
    }
    .form-success a:hover {
      text-decoration: none;
    }
    .errors,
    .form-error {
      color: #d02e2e;
      background-color: #fff6f6;
      border-color: #d02e2e;
    }
    .errors a,
    .form-error a {
      color: #d02e2e;
      text-decoration: underline;
    }
    .errors a:hover,
    .form-error a:hover {
      text-decoration: none;
    }
    .no-gutters {
      margin-left: 0;
      margin-right: 0;
    }
    .no-gutters > .col,
    .no-gutters > [class*="col-"] {
      padding-right: 0;
      padding-left: 0;
      margin: 0;
    }
    .lazyload,
    .lazyloading {
      opacity: 0;
    }
    .lazyloaded {
      opacity: 1;
      transition: opacity 0.3s;
    }
    .mt-25 {
      margin-top: 25px !important;
    }
    .mb-0 {
      margin-bottom: 0 !important;
    }
    .mb-25 {
      margin-bottom: 25px !important;
    }
    .mb-30 {
      margin-bottom: 30px !important;
    }
    .mb-35 {
      margin-bottom: 35px !important;
    }
    .mb-40 {
      margin-bottom: 40px !important;
    }
    .mb-45 {
      margin-bottom: 45px !important;
    }
    .mb-50 {
      margin-bottom: 50px !important;
    }
    .mb-70 {
      margin-bottom: 70px !important;
    }
    .mb-65 {
      margin-bottom: 65px !important;
    }
    .mb-100 {
      margin-bottom: 100px !important;
    }
    .mb-80 {
      margin-bottom: 80px !important;
    }
    .pt-10 {
      padding-top: 10px !important;
    }
    .pt-100 {
      padding-top: 100px !important;
    }
    .pt-135 {
      padding-top: 135px !important;
    }
    .pb-10 {
      padding-bottom: 10px !important;
    }
    .pb-15 {
      padding-bottom: 15px !important;
    }
    .pb-30 {
      padding-bottom: 30px !important;
    }
    .pb-70 {
      padding-bottom: 50px !important;
    }
    .pb-80 {
      padding-bottom: 80px !important;
    }
    .pb-90 {
      padding-bottom: 90px !important;
    }
    .pb-100 {
      padding-bottom: 100px !important;
    }
    .pb-50 {
      padding-bottom: 50px !important;
    }
    .pb-135 {
      padding-bottom: 135px !important;
    }
    *,
    ::after,
    ::before {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }
    body,
    html {
      height: 100%;
    }
    body {
      line-height: 24px;
      font-size: 15px;
      font-style: normal;
      font-weight: 400;
      visibility: visible;
      font-family: "Work Sans", sans-serif;
      color: #777;
      position: relative;
    }
    .newsletter-overlay-active {
      position: relative;
    }
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      color: #333;
      font-family: "Work Sans", sans-serif;
      font-weight: 400;
      margin-top: 0;
    }
    h1 {
      font-size: 36px;
      line-height: 42px;
    }
    h2 {
      font-size: 30px;
      line-height: 36px;
    }
    h3 {
      font-size: 24px;
      line-height: 30px;
    }
    h5 {
      font-size: 14px;
      line-height: 18px;
    }
    p:last-child {
      margin-bottom: 0;
    }
    a,
    button {
      color: inherit;
      display: inline-block;
      line-height: inherit;
      text-decoration: none;
      cursor: pointer;
    }
    a,
    button,
    img,
    input,
    span {
      -webkit-transition: all 0.3s ease 0s;
      -o-transition: all 0.3s ease 0s;
      transition: all 0.3s ease 0s;
    }
    a:hover {
      text-decoration: none;
    }
    button,
    input[type="submit"] {
      cursor: pointer;
    }
    ul {
      list-style: outside none none;
      margin: 0;
      padding: 0;
    }
    input::-webkit-input-placeholder,
    textarea::-webkit-input-placeholder {
      opacity: 1;
    }
    .active {
      visibility: visible;
      opacity: 1;
    }
    .inactive {
      visibility: hidden;
      opacity: 0;
    }
    a.scroll-top {
      background: #333;
      width: 50px;
      height: 50px;
      line-height: 50px;
      display: none;
      text-align: center;
      color: #fff;
      font-family: Ionicons;
      position: fixed;
      right: 25px;
      bottom: 100px;
      z-index: 99;
      border-radius: 50%;
    }
    @media (min-width: 1200px) {
      .container {
        max-width: 1200px;
      }
      .container.wide {
        max-width: 95%;
      }
      .container.full {
        max-width: 100%;
        padding: 0;
      }
    }
    .site-mobile-navigation {
      width: 100%;
      position: relative;
      z-index: 99;
    }
    .cart-overlay {
      position: fixed;
      top: 0;
      right: 0;
      width: 100%;
      height: 100%;
      z-index: 9998;
      visibility: hidden;
      opacity: 0;
      -webkit-transition: 0.3s;
      -o-transition: 0.3s;
      transition: 0.3s;
    }
    .cart-overlay.active-cart-overlay {
      visibility: visible;
      opacity: 1;
      -webkit-transition: 0.3s;
      -o-transition: 0.3s;
      transition: 0.3s;
    }
    .cart-overlay.active-cart-overlay .cart-overlay-content {
      -webkit-transform: translateX(0);
      -ms-transform: translateX(0);
      transform: translateX(0);
      -webkit-transition: 0.6s;
      -o-transition: 0.6s;
      transition: 0.6s;
    }
    .cart-overlay .cart-overlay-content .close-icon {
      position: absolute;
      top: 20px;
      right: 20px;
    }
    .cart-overlay .cart-overlay-content .close-icon a {
      -webkit-transition: 0.6s;
      -o-transition: 0.6s;
      transition: 0.6s;
    }
    .cart-overlay .cart-overlay-content .close-icon a i {
      font-size: 25px;
      color: #333;
    }
    .offcanvas-cart-content-container .cart-title {
      font-size: 18px;
      line-height: 28px;
      font-weight: 500;
      border-bottom: 1px solid #eee;
      padding-bottom: 5px;
      margin-bottom: 20px;
    }
    .search-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      background-color: #fff;
      -webkit-transform: translate3d(100%, 0, 0);
      transform: translate3d(100%, 0, 0);
      -webkit-transition: 0.6s;
      -o-transition: 0.6s;
      transition: 0.6s;
      z-index: 999999;
    }
    .search-overlay .search-close-icon {
      position: absolute;
      top: 30px;
      right: 30px;
    }
    .search-overlay .search-close-icon a {
      -webkit-transition: 0.6s;
      -o-transition: 0.6s;
      transition: 0.6s;
    }
    .search-overlay .search-close-icon a i {
      font-size: 40px;
      color: #333;
    }
    .search-overlay .search-overlay-content {
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }
    .search-overlay .search-overlay-content .input-box {
      margin-bottom: 15px;
    }
    .search-overlay .search-overlay-content .input-box form input {
      background: 0 0;
      border: none;
      border-bottom: 2px solid #222;
      font-size: 67px;
    }
    .header-bottom-container {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
    }
    .header-bottom-container .logo-with-offcanvas {
      -ms-flex-preferred-size: 20%;
      flex-basis: 20%;
    }
    .header-bottom-container .header-bottom-navigation {
      -ms-flex-preferred-size: 60%;
      flex-basis: 60%;
    }
    .header-bottom-container .header-right-container {
      -ms-flex-preferred-size: 20%;
      flex-basis: 20%;
    }
    nav.center-menu > ul {
      text-align: center;
    }
    nav.site-nav > ul > li {
      display: inline-block;
      position: static;
      margin: 0 25px;
      text-align: left;
      line-height: 80px;
    }
    nav.site-nav > ul > li a {
      position: relative;
    }
    nav.site-nav > ul > li.menu-item-has-children > a {
      position: relative;
    }
    nav.site-nav > ul > li.menu-item-has-children > a:before {
      position: absolute;
      top: 50%;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      right: -15px;
      content: "\f107";
      font-family: fontAwesome;
      color: #d0d0d0;
    }
    nav.site-nav > ul > li > a {
      color: #7e7e7e;
      font-weight: 500;
    }
    nav.site-nav > ul > li > a:after {
      position: absolute;
      bottom: 30px;
      left: auto;
      right: 0;
      width: 0;
      height: 1px;
      content: "";
      background-color: #333;
      -webkit-transition: 0.3s;
      -o-transition: 0.3s;
      transition: 0.3s;
    }
    nav.site-nav > ul > li ul.sub-menu {
      position: absolute;
      -webkit-box-shadow: -2px 2px 81px -27px rgba(0, 0, 0, 0.3);
      box-shadow: -2px 2px 81px -27px rgba(0, 0, 0, 0.3);
      visibility: hidden;
      opacity: 0;
      -webkit-transition: 0.6s;
      -o-transition: 0.6s;
      transition: 0.6s;
      margin-top: 45px;
      background-color: #fff;
      z-index: 9999;
    }
    .header-right-icons .single-icon {
      margin-left: 30px;
    }
    .header-right-icons .single-icon a {
      position: relative;
    }
    .header-right-icons .single-icon a i {
      font-size: 20px;
      color: #333;
    }
    .header-right-icons .single-icon a span.count {
      position: absolute;
      top: -10px;
      right: -12px;
      width: 20px;
      height: 20px;
      line-height: 20px;
      background-color: #d3122a;
      color: #fff;
      text-align: center;
      font-size: 13px;
      border-radius: 50%;
      font-weight: 500;
    }
    .cart-overlay-close,
    .overlay-close,
    .wishlist-overlay-close {
      position: absolute;
      width: 100%;
      height: 100%;
      z-index: 2;
    }
    .header-top {
      border-bottom: 1px solid #dedede;
    }
    .header-top .header-separator {
      margin: 0 10px;
      color: #d8d8d8;
    }
    .order-online-text {
      font-size: 14px;
    }
    .order-online-text a {
      font-size: 14px;
      line-height: 14px;
      color: #333;
      border-bottom: 1px solid #333;
    }
    .header-top-container {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
    }
    .header-top-container .header-top-left {
      -ms-flex-preferred-size: 50%;
      flex-basis: 50%;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
    }
    .header-top-container .header-top-right {
      -ms-flex-preferred-size: 50%;
      flex-basis: 50%;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: end;
      -ms-flex-pack: end;
      justify-content: flex-end;
    }
    .header-top-container .header-top-right .top-social-icons ul li {
      display: inline-block;
    }
    .header-top-container .header-top-right .top-social-icons ul li a {
      color: #333;
      margin-right: 20px;
    }
    .header-top-container .header-top-right .top-social-icons ul li:last-child a {
      margin-right: 0;
    }
    .change-dropdown {
      position: relative;
      margin-right: 15px;
    }
    .change-dropdown > a {
      font-size: 14px;
      color: #7e7e7e;
      position: relative;
    }
    .change-dropdown > a:before {
      position: absolute;
      top: 0;
      right: -15px;
      content: "\f107";
      font-family: fontAwesome;
    }
    .change-dropdown ul {
      position: absolute;
      top: 120%;
      background-color: #fff;
      -webkit-box-shadow: -1px 10px 80px -15px rgba(0, 0, 0, 0.3);
      box-shadow: -1px 10px 80px -15px rgba(0, 0, 0, 0.3);
      min-width: 150px;
      visibility: hidden;
      opacity: -1;
      -webkit-transition: 0.3s;
      -o-transition: 0.3s;
      transition: 0.3s;
      margin-top: 10px;
      z-index: 99;
      padding: 8px 0;
    }
    .change-dropdown ul li a {
      font-size: 14px;
      display: block;
      padding: 8px 15px;
      color: #7e7e7e;
      -webkit-transition: 0.3s;
      -o-transition: 0.3s;
      transition: 0.3s;
    }
    .section-title {
      margin-bottom: -5px;
    }
    .section-title h1 {
      font-size: 48px;
      line-height: 64px;
      margin-top: -13px;
      margin-bottom: 15px;
    }
    .section-title p {
      line-height: 26px;
    }
    .section-title p.subtitle--deep {
      font-size: 14px;
      font-weight: 500;
      margin-bottom: 35px;
      line-height: 24px;
      letter-spacing: 1px;
      margin-top: -5px;
    }
    .section-title p.subtitle--trending-home {
      font-size: 18px;
      line-height: 28px;
      font-weight: 400;
      margin-bottom: 0;
    }
    .single-category {
      position: relative;
      overflow: hidden;
    }
    .single-category--three {
      position: relative;
    }
    .single-category__image {
      overflow: hidden;
      position: relative;
    }
    .single-category__image img {
      width: 100%;
      -webkit-transition: 0.8s;
      -o-transition: 0.8s;
      transition: 0.8s;
    }
    .single-category__image:after {
      display: block;
      position: absolute;
      content: "";
      top: 20px;
      left: 20px;
      width: calc(100% - 40px);
      height: calc(100% - 40px);
      background-color: transparent;
      border: 1px solid #fff;
      opacity: 0;
      visibility: hidden;
      -webkit-transition: 0.6s;
      -o-transition: 0.6s;
      transition: 0.6s;
    }
    .single-category__image--three--creativehome:after {
      display: none;
    }
    .single-category__content {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between;
      z-index: 5;
      position: relative;
    }
    .single-category__content .title {
      width: 70%;
      position: relative;
    }
    .single-category__content .title p {
      font-size: 18px;
      line-height: 36px;
      font-weight: 400;
      margin: 0;
      opacity: 1;
      visibility: visible;
      -webkit-transform: translateY(0);
      -ms-transform: translateY(0);
      transform: translateY(0);
      margin-bottom: 0;
      color: #333;
      -webkit-transition-duration: 0.6s;
      -o-transition-duration: 0.6s;
      transition-duration: 0.6s;
    }
    .single-category__content .title a {
      display: inline-block;
      font-size: 24px;
      line-height: 36px;
      color: #d3122a;
      -webkit-transform: translateY(60%);
      -ms-transform: translateY(60%);
      transform: translateY(60%);
      visibility: hidden;
      opacity: 0;
      -webkit-transition-duration: 0.6s;
      -o-transition-duration: 0.6s;
      transition-duration: 0.6s;
      position: absolute;
      top: 0;
      left: 0;
    }
    .single-category__content--three {
      position: absolute;
      bottom: 50px;
      left: 50px;
      width: calc(100% - 100px);
    }
    .single-category__content--three .title {
      width: 100%;
    }
    .single-category__content--three .title p {
      color: #333;
      font-size: 34px;
    }
    .single-category__content--three--creativehome {
      bottom: 30px;
      left: 40px;
      width: 100%;
    }
    .single-category__content--three--creativehome .title p > a {
      -webkit-transform: translateY(0);
      -ms-transform: translateY(0);
      transform: translateY(0);
      font-weight: 500;
      font-style: normal;
      font-size: 34px;
      line-height: 48px;
      color: #333;
      text-transform: capitalize;
    }
    .single-category__content--three--creativehome .title a {
      -webkit-transform: translateY(0);
      -ms-transform: translateY(0);
      transform: translateY(0);
      position: static;
      visibility: visible;
      opacity: 1;
      font-size: 14px;
      color: #333;
      text-transform: uppercase;
      font-weight: 500;
    }
    .single-category__content--three--banner {
      width: 50%;
    }
    .single-category__content--three--banner .title p {
      margin-bottom: 15px;
    }
    .single-category__content--three--banner .title p a {
      font-weight: 400;
    }
    .single-category__content--three--banner .title > a {
      border-bottom: 1px solid #333;
      line-height: 22px;
    }
    .single-category:hover .single-category__image img {
      -webkit-transform: scale(1.1);
      -ms-transform: scale(1.1);
      transform: scale(1.1);
    }
    .single-category:hover .single-category__image:after {
      visibility: visible;
      opacity: 1;
    }
    .single-category:hover .single-category__content .title p {
      visibility: hidden;
      opacity: 0;
      -webkit-transform: translateY(-60%);
      -ms-transform: translateY(-60%);
      transform: translateY(-60%);
    }
    .single-category:hover .single-category__content .title a {
      visibility: visible;
      opacity: 1;
      -webkit-transform: translateY(0);
      -ms-transform: translateY(0);
      transform: translateY(0);
    }
    .single-category:hover
      .single-category__content.single-category__content--three--creativehome
      .title
      p {
      visibility: visible;
      opacity: 1;
      -webkit-transform: translateY(0);
      -ms-transform: translateY(0);
      transform: translateY(0);
    }
    .single-category:hover
      .single-category__content.single-category__content--three--creativehome
      .title
      a {
      visibility: visible;
      opacity: 1;
      -webkit-transform: translateY(0);
      -ms-transform: translateY(0);
      transform: translateY(0);
    }
    .slick-slide > div > div {
      vertical-align: middle;
    }
    .product-carousel .slick-list {
      margin-left: -15px;
      margin-right: -15px;
    }
    .multi-testimonial-slider-container .slick-list {
      margin-left: -15px;
      margin-right: -15px;
    }
    .multi-testimonial-slider-container .slick-arrow {
      background: 0 0;
      border: none;
      font-size: 72px;
      color: #e7e7e7;
      position: absolute;
      top: 50%;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      z-index: 3;
      visibility: hidden;
      opacity: 0;
      -webkit-transition: 0.3s;
      -o-transition: 0.3s;
      transition: 0.3s;
    }
    .multi-testimonial-slider-container .slick-arrow.slick-next {
      right: -100px;
    }
    .multi-testimonial-slider-container .slick-arrow.slick-prev {
      left: -100px;
    }
    .single-product__image {
      position: relative;
    }
    .single-product__image > a {
      display: block;
    }
    .single-product__image > a img {
      width: 100%;
      -webkit-transition: 0.9s;
      -o-transition: 0.9s;
      transition: 0.9s;
    }
    .single-product__image > a img.secondary__img {
      position: absolute;
      top: 0;
      left: 0;
      visibility: hidden;
      opacity: 0;
      z-index: 1;
    }
    .single-product__floating-badges {
      position: absolute;
      top: 20px;
      left: 20px;
      z-index: 8;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
    }
    .single-product__floating-badges span {
      text-transform: lowercase;
      display: inline-block;
      height: 48px;
      width: 48px;
      line-height: 48px;
      font-weight: 500;
      border-radius: 100%;
      z-index: 3;
      text-align: center;
      color: #fff;
      font-size: 14px;
      margin-bottom: 10px;
    }
    .single-product__floating-badges span:last-child {
      margin-bottom: 0;
    }
    .single-product__floating-badges span.onsale {
      background-color: #98d8ca;
    }
    .single-product__floating-icons {
      position: absolute;
      top: 20px;
      right: 20px;
      z-index: 9;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
    }
    .single-product__floating-icons span {
      display: inline-block;
      visibility: hidden;
      opacity: 0;
    }
    .single-product__floating-icons span:nth-child(1) {
      -webkit-transition: 0.3s;
      -o-transition: 0.3s;
      transition: 0.3s;
      margin-top: 5px;
    }
    .single-product__floating-icons span:nth-child(2) {
      -webkit-transition: 0.6s;
      -o-transition: 0.6s;
      transition: 0.6s;
      margin-top: 5px;
    }
    .single-product__floating-icons span:nth-child(3) {
      -webkit-transition: 0.9s;
      -o-transition: 0.9s;
      transition: 0.9s;
      margin-top: 5px;
    }
    .single-product__floating-icons span a {
      width: 40px;
      height: 40px;
      line-height: 40px;
      background-color: #fff;
      text-align: center;
      margin-bottom: 5px;
      color: #7e7e7e;
    }
    .single-product__floating-icons span a i {
      font-size: 20px;
    }
    .single-product__variations {
      position: absolute;
      bottom: -10px;
      right: 20px;
      width: calc(100% - 40px);
      z-index: 9;
      padding: 10px;
      visibility: hidden;
      opacity: 0;
      -webkit-transition: 0.9s;
      -o-transition: 0.9s;
      transition: 0.9s;
    }
    .single-product__variations .size-container {
      text-align: center;
    }
    .single-product__variations .size-container span {
      display: inline-block;
      margin-right: 8px;
      font-weight: 600;
      color: #999;
      font-size: 14px;
      text-transform: uppercase;
    }
    .single-product__variations .color-container {
      text-align: center;
    }
    .single-product__content {
      position: relative;
      padding-top: 25px;
    }
    .single-product__content .title {
      position: relative;
    }
    .single-product__content .title h3 {
      margin-bottom: 0;
    }
    .single-product__content .title h3 a {
      display: block;
      font-size: 17px;
      line-height: 1.6;
      margin-bottom: 10px;
      font-weight: 400;
      opacity: 1;
      visibility: visible;
      -webkit-transform: translateY(0);
      -ms-transform: translateY(0);
      transform: translateY(0);
      -webkit-transition-duration: 0.6s;
      -o-transition-duration: 0.6s;
      transition-duration: 0.6s;
    }
    .single-product__content .title .product-cart-action {
      display: inline-block;
      -webkit-transform: translateY(60%);
      -ms-transform: translateY(60%);
      transform: translateY(60%);
      visibility: hidden;
      opacity: 0;
      -webkit-transition-duration: 0.6s;
      -o-transition-duration: 0.6s;
      transition-duration: 0.6s;
      position: absolute;
      top: 0;
      left: 0;
    }
    .single-product__content .title .product-cart-action a {
      font-size: 18px;
      line-height: 28px;
      color: #d3122a;
      font-weight: 500;
    }
    .single-product__content .title .product-cart-action a:before {
      content: "+";
      display: inline-block;
      margin-right: 5px;
    }
    .single-product__content .price .discounted-price {
      font-size: 14px;
      line-height: 1;
      font-weight: 600;
      color: #333;
    }
    .single-product__content .price .main-price {
      font-size: 14px;
      line-height: 1;
      font-weight: 600;
      color: #333;
      margin-right: 5px;
    }
    .single-product__content .price .main-price.discounted {
      color: #aaa;
      font-weight: 600;
      font-size: 12;
      line-height: 1;
      text-decoration: line-through;
    }
    .single-product--smarthome {
      position: relative;
    }
    .single-product--smarthome .single-product__content {
      position: absolute;
      bottom: 30px;
      left: 15px;
      z-index: 3;
    }
    body::after {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(35, 35, 44, 0.5);
      visibility: hidden;
      opacity: 0;
      -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
      -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
      -o-transition: opacity 0.3s 0s, visibility 0s 0.3s;
      transition: opacity 0.3s 0s, visibility 0s 0.3s;
      content: "";
      z-index: 9999;
    }
    .astor-button {
      background-color: #333;
      color: #fff !important;
      text-transform: uppercase;
      display: inline-block;
      border-radius: 0;
      border: 1px solid #333;
      font-weight: 500;
      letter-spacing: 1px;
    }
    .astor-button:hover {
      background-color: transparent;
      color: #333 !important;
    }
    .astor-button--medium {
      font-size: 14px;
      padding: 10px 45px;
    }
    .astor-loadmore-button {
      color: #333;
      letter-spacing: 1px;
      font-weight: 500;
    }
    .astor-loadmore-button i {
      display: inline-block;
      font-size: 16px;
      padding-right: 8px;
      font-weight: 600;
      color: #333;
    }
    .single-testimonial-single-item {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
    }
    .single-testimonial-single-item__content {
      -ms-flex-preferred-size: calc(100% - 300px);
      flex-basis: calc(100% - 300px);
      padding: 0 30px;
      padding-left: 50px;
    }
    .single-testimonial-single-item__content .text {
      font-size: 24px;
      line-height: 40px;
      color: #333;
      font-weight: 300;
    }
    .single-testimonial-single-item__content .client-info .name {
      font-size: 18px;
      line-height: 25px;
      font-weight: 600;
      color: #333;
    }
    .single-testimonial-single-item__content .client-info .designation {
      font-size: 16px;
      line-height: 22px;
      color: #7e7e7e;
    }
    .single-banner--hoverborder {
      position: relative;
      overflow: hidden;
    }
    .single-banner--hoverborder img {
      width: 100%;
      -webkit-transform: scale(1);
      -ms-transform: scale(1);
      transform: scale(1);
      -webkit-transition: 0.6s;
      -o-transition: 0.6s;
      transition: 0.6s;
    }
    .single-banner--hoverborder .banner-link {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 2;
    }
    .single-banner--hoverborder .banner-content {
      position: absolute;
      width: 100%;
      top: 50%;
      bottom: auto;
    }
    .single-banner--hoverborder .banner-content--middle-white {
      left: 50%;
      text-align: center;
      font-size: 37px;
      line-height: 48px;
      text-transform: uppercase;
      color: #fff;
      font-weight: 300;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }
    .single-banner--hoverborder:after {
      display: block;
      position: absolute;
      content: "";
      top: 20px;
      left: 20px;
      width: calc(100% - 40px);
      height: calc(100% - 40px);
      background-color: transparent;
      border: 1px solid #fff;
      opacity: 0;
      visibility: hidden;
      -webkit-transition: 0.6s;
      -o-transition: 0.6s;
      transition: 0.6s;
      z-index: 9;
    }
    .single-icon {
      margin-left: 30px;
    }
    .footer-container.footer-one {
      background-color: #f8f8f8;
    }
    .footer-container.footer-one .col {
      -ms-flex-preferred-size: 17.5%;
      flex-basis: 17.5%;
      margin-bottom: 50px;
    }
    .footer-container.footer-one .col:last-child {
      max-width: 30%;
      -ms-flex-preferred-size: 100%;
      flex-basis: 100%;
    }
    .footer-single-widget h5.widget-title {
      font-size: 14px;
      font-weight: 600;
      margin-bottom: 30px;
    }
    .footer-single-widget .logo {
      margin-bottom: 35px;
    }
    .footer-single-widget .copyright-text p {
      font-size: 15px;
      line-height: 30px;
    }
    .footer-nav-container nav ul li {
      padding: 10px 0;
    }
    .footer-nav-container nav ul li a {
      font-size: 15px;
      line-height: 20px;
      color: #999;
      position: relative;
    }
    .footer-nav-container nav ul li a:hover:after {
      visibility: visible;
      opacity: 1;
    }
    .footer-nav-container nav ul li a:after {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 1px;
      background-color: #d1d1d1;
      visibility: hidden;
      opacity: 0;
      content: "";
    }
    .footer-nav-container nav ul li:first-child {
      padding-top: 0;
    }
    .footer-nav-container nav ul li:last-child {
      padding-bottom: 0;
    }
    .footer-social-links ul li {
      position: relative;
    }
    .footer-social-links ul li a {
      padding-left: 30px;
      display: inline-block;
    }
    .footer-social-links ul li a i {
      position: absolute;
      left: 0;
      color: #333;
    }
    .footer-subscription-widget .footer-subscription-title {
      font-size: 34px;
      line-height: 34px;
      margin-bottom: 30px;
    }
    .footer-subscription-widget .subscription-subtitle {
      margin-bottom: 35px;
    }
    .footer-subscription-widget .subscription-form {
      position: relative;
    }
    .footer-subscription-widget .subscription-form input {
      background: 0 0;
      border: none;
      border-bottom: 2px solid #ccc;
      padding: 10px 0;
      width: 100%;
      padding-right: 40px;
    }
    .footer-subscription-widget .subscription-form button {
      position: absolute;
      right: 0;
      top: 50%;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      background: 0 0;
      border: none;
      color: #ccc;
      font-size: 35px;
      padding: 0;
    }
    .footer-subscription-widget .mailchimp-alerts {
      position: absolute;
      bottom: -60px;
    }
    input,
    select,
    textarea {
      border-radius: 0;
    }
    li {
      margin-bottom: 0;
    }
    #quickViewModal .modal-content {
      border-radius: 0;
    }
    #quickViewModal .modal-dialog {
      margin: 150px auto;
      max-width: 1000px;
    }
    #quickViewModal .modal-body {
      padding: 30px;
    }
    .price {
      margin: 9px 0 8px;
    }
    .single-product .single-countdown {
      background: #98d8ca;
      color: #fff;
      display: inline-block;
      font-size: 14px;
      height: 55px;
      padding-top: 5px;
      text-align: center;
      width: 53px;
      text-transform: capitalize;
    }
    b,
    strong {
      font-weight: 700;
    }
    ol ol,
    ol ul,
    ul ol,
    ul ul {
      margin: 0;
    }
    .search-overlay-content button {
      position: absolute;
      right: 25px;
      bottom: 25px;
      font-size: 35px;
      color: #dcdcdc;
      cursor: pointer;
      transition: 0.3s;
    }

    @media only screen and (max-width: 768px) {
      .search-overlay-content button {
        right: 5px;
        bottom: 5px;
      }
    }

    

    .search-overlay
      .search-overlay-content
      .input-box
      form
      input::-webkit-input-placeholder {
      color: #dcdcdc;
    }
    .search-overlay .search-overlay-content .input-box form input::placeholder {
      color: #dcdcdc;
    }
    .change-dropdown ul {
      min-width: 210px;
    }
    .change-dropdown .currency-trigger {
      cursor: pointer;
    }
    .switcher-currency-trigger.currency {
      position: relative;
    }
    .change-dropdown ul li a {
      padding: 4px 15px;
    }
    .change-dropdown .switcher-currency-trigger ul {
      padding: 12px 0;
    }
    .footer-single-widget .copyright-text p {
      margin-bottom: 0;
    }
    .footer-subscription-widget .mailchimp-alerts {
      position: inherit;
    }
    .color-container ul li {
      border-radius: 50px;
      cursor: pointer;
      display: block;
      float: left;
      height: 18px;
      margin-left: 10px;
      text-indent: -9999px;
      transition: all 0.4s ease 0s;
      width: 18px;
    }
    .color-container li label {
      border-radius: 50px;
      cursor: pointer;
      display: block;
      float: left;
      height: 18px;
      text-indent: -9999px;
      transition: all 0.4s ease 0s;
      border: 1px solid #ddd;
      width: 18px;
    }
    .color-container ul li.img_variant {
      text-indent: unset;
      width: 25px;
      height: 25px;
      border-radius: 50%;
    }
    .color-container ul li.img_variant img {
      border-radius: 50%;
    }
    .grid-color-swatch {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
    }
    .color-container ul li:first-child {
      margin-left: 0;
    }
    .loading-modal {
      background: #000;
      border: 1px solid rgba(0, 0, 0, 0.15);
      position: fixed;
      top: 50% !important;
      bottom: auto;
      left: 50% !important;
      right: auto;
      width: 56px;
      height: 56px;
      margin-left: -28px;
      margin-top: -28px;
      overflow: hidden;
      padding: 0;
      text-align: center;
      text-indent: -999em;
      -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3);
      -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3);
      box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3);
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      border-radius: 3px;
      display: block;
    }
    .modal {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 10000;
      display: none;
      overflow: auto;
      -webkit-overflow-scrolling: touch;
      outline: 0;
    }
    .compare_modal {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 10000;
      display: none;
      overflow: auto;
      -webkit-overflow-scrolling: touch;
      outline: 0;
    }
    .product_timer {
      position: absolute;
      bottom: 20px;
      z-index: 9;
      left: 0;
      right: 0;
    }
    .single-product__floating-badges span.soldout-title {
      color: red;
    }
    .product-description {
      display: none;
    }
    .single-product .single-countdown {
      background: #98d8ca;
      font-size: 13px;
      height: 45px;
      width: 45px;
      margin-right: 2px;
    }
    .countdown-area {
      text-align: center;
    }
    .single-product .single-countdown > div {
      line-height: 16px;
    }
    .single-product__variations {
      padding: 10px;
    }
    .single-product__variations div + div {
      margin-top: 3px;
    }
    .single-product--smarthome .single-product__content {
      left: 15px;
      right: 15px;
    }
    .single-product--smarthome .single-product__variations {
      left: 0;
      right: auto;
    }
    .single-product.single-product--smarthome .single-product__variations {
      bottom: 130px;
      left: 15px;
      right: 15px;
    }
    .single-product.single-product--smarthome:hover .single-product__variations {
      bottom: 145px;
    }
    .single-cart-product.empty {
      display: none;
    }
    .single-cart-product.empty > h3 {
      font-size: 20px;
    }
    .single-category__image a {
      display: block;
    }
    .overlay-navigation-active
      .overlay-navigation-menu-container
      nav
      > ul
      > li
      > a
      span,
    .site-mobile-nav .dl-menu li span,
    .vertical-menu-container-dark nav > ul > li > a span,
    nav.site-nav > ul > li a span {
      position: absolute;
      background: #d3122a;
      display: inline-block;
      width: 35px;
      height: 20px;
      line-height: 20px;
      text-align: center;
      color: #fff;
      font-size: 11px;
      left: 50%;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
      top: 8px;
    }
    .overlay-navigation-active
      .overlay-navigation-menu-container
      nav
      > ul
      > li
      > a
      span::before,
    .site-mobile-nav .dl-menu li span::before,
    .vertical-menu-container-dark nav > ul > li > a span::before,
    nav.site-nav > ul > li a span:before {
      position: absolute;
      content: "";
      width: 5px;
      height: 5px;
      background: #d3122a;
      bottom: -2px;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      left: 6px;
    }
    .overlay-navigation-active
      .overlay-navigation-menu-container
      nav
      > ul
      > li
      > a
      span.sale,
    .site-mobile-nav .dl-menu li span.sale,
    .vertical-menu-container-dark nav > ul > li > a span.sale,
    nav.site-nav > ul > li a span.sale {
      background: #98d8ca;
    }
    .overlay-navigation-active
      .overlay-navigation-menu-container
      nav
      > ul
      > li
      > a
      span.sale::before,
    .site-mobile-nav .dl-menu li span.sale::before,
    .vertical-menu-container-dark nav > ul > li > a span.sale::before,
    nav.site-nav > ul > li a span.sale:before {
      background: #98d8ca;
    }
    .currency-trigger span::before {
      position: absolute;
      top: 0;
      right: -15px;
      content: "\f107";
      font-family: fontAwesome;
    }
    .change-dropdown .switcher-currency-trigger ul li.active {
      visibility: unset;
      opacity: unset;
    }
    .footer-subscription-widget .mailchimp-alerts,
    .footer-subscription-widget .mailchimp-error,
    .newsletter-content .mailchimp-error {
      color: #ff9494;
    }
    .footer-subscription-widget .mailchimp-success,
    .newsletter-content .mailchimp-success {
      color: green;
    }
    .single-category__image::after {
      pointer-events: none;
    }
    .single-product.single-product--smarthome.countdownprod
      .single-product__variations {
      bottom: 105px;
    }
    .search-overlay .search-overlay-content .input-box form input {
      padding-right: 80px;
    }
    .cart-overlay-close,
    .overlay-close,
    .wishlist-overlay-close {
      cursor: crosshair;
    }
    .hero-single-slider .row {
      -webkit-box-align: center;
      -ms-flex-align: center;
      -ms-grid-row-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
    }
    .hero-single-slider::before {
      position: absolute;
      content: "";
      background: #fff;
      width: 100%;
      height: 100%;
      opacity: 0.2;
    }
    .hero-single-slider {
      position: relative;
    }
    .hero-slider-content > h5 {
      color: #333;
      font-size: 16px;
      font-weight: 600;
      text-transform: uppercase;
      margin-bottom: 33px;
    }
    .main-title h2 {
      color: #333;
      font-size: 56px;
      line-height: 71px;
      margin-bottom: 35px;
    }
    .hero-slider-content {
      position: relative;
      z-index: 9;
    }
    .hero-slider-wrapper.owl-carousel .owl-nav > div {
      position: absolute;
      top: 50%;
      background: #fff;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      width: 50px;
      height: 50px;
      text-align: center;
      line-height: 51px;
      color: #999;
      left: 15px;
      box-shadow: 0 0 7px rgba(0, 0, 0, 0.15);
      -webkit-transition: 0.3s;
      transition: 0.3s;
      opacity: 0;
      font-size: 18px;
    }
    .hero-slider-wrapper.owl-carousel .owl-nav > div.owl-next {
      left: auto;
      right: 15px;
    }
    .hero-slider-wrapper.owl-carousel:hover .owl-nav > div {
      opacity: 1;
    }
    .hero-slider-wrapper.owl-carousel:hover .owl-nav > div.owl-next {
      right: 30px;
    }
    .hero-slider-wrapper.owl-carousel:hover .owl-nav > div.owl-prev {
      left: 30px;
    }
    .hero-slider-wrapper.owl-carousel .owl-dots {
      position: absolute;
      left: 50%;
      bottom: 30px;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
    }
    .active .hero-slider-content * {
      -webkit-animation-name: fadeInUp;
      animation-name: fadeInUp;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
    }
    .active .hero-slider-content h5 {
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-delay: 0.2s;
      animation-delay: 0.2s;
    }
    .active .hero-slider-content .main-title {
      -webkit-animation-duration: 1.5s;
      animation-duration: 1.5s;
      -webkit-animation-delay: 0.2s;
      animation-delay: 0.2s;
    }
    .active .hero-slider-content a {
      -webkit-animation-duration: 2.5s;
      animation-duration: 2.5s;
      -webkit-animation-delay: 0.3s;
      animation-delay: 0.3s;
    }
    .without_thumb .single-testimonial-single-item__content {
      -ms-flex-preferred-size: 100%;
      flex-basis: 100%;
      padding: 0 110px;
    }
    .single-product.single-product--smarthome.countdownprod .product_timer {
      transition: 0.9s;
    }
    .footer_overlay,
    .section_overlay {
      position: relative;
    }
    .footer_overlay::before,
    .section_overlay::before {
      position: absolute;
      content: "";
      width: 100%;
      height: 100%;
      background: #000;
      top: 0;
      left: 0;
      opacity: 0.5;
    }
    .single-product--smarthome .single-countdown {
      padding-top: 10px;
    }
    .multi-testimonial-slider-container .slick-list {
      margin-left: 0;
      margin-right: 0;
    }
    .banner-box .banner-info,
    .banner-box.banner-hover-1 .banner-image:after,
    a,
    button,
    img,
    input,
    span {
      -webkit-transition: all 250ms ease-out;
      -moz-transition: all 250ms ease-out;
      -ms-transition: all 250ms ease-out;
      -o-transition: all 250ms ease-out;
      transition: all 250ms ease-out;
    }
    .hero-slider-content {
      padding: 0 30px;
    }
    .header-bottom-container {
      min-height: 70px;
    }
    .hero-single-slider::before {
      pointer-events: none;
    }
    .offcanvas-mobile-menu {
      position: fixed;
      left: 0;
      top: 0;
      width: 450px;
      max-width: 100%;
      height: 100vh;
      z-index: 9999;
      -webkit-transform: translateX(-100%);
      transform: translateX(-100%);
      padding-right: 60px;
      -webkit-transition: 0.6s;
      transition: 0.6s;
    }
    .offcanvas-wrapper {
      overflow: auto;
      height: 100%;
      -webkit-box-shadow: 0 0 87px 0 rgba(0, 0, 0, 0.09);
      box-shadow: 0 0 87px 0 rgba(0, 0, 0, 0.09);
      background-color: #fff;
    }
    .offcanvas-inner-content {
      padding: 20px 25px 0;
      height: 100%;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
    }
    #admin-bar-iframe,
    #preview-bar-iframe {
      display: none !important;
    }
    .product_timer {
      transition: 0.9s;
    }
    .single-product__variations {
      z-index: 98;
    }
    .single-product__floating-badges {
      pointer-events: none;
    }
    .single-product__image > a {
      text-align: center;
    }
    .single-product__image > a img {
      display: unset;
    }
    .mb-60 {
      margin-bottom: 50px !important;
    }
    .newsletter-overlay-active:after {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      content: "";
      background-color: #333;
      opacity: 0.8;
      z-index: 999;
      visibility: visible;
    }
    .cart-overlay:after {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #000;
      opacity: 0;
      visibility: hidden;
      z-index: -1;
      content: "";
      -webkit-transition: 0.3s;
      -o-transition: 0.3s;
      transition: 0.3s;
    }
    .mb-90 {
      margin-bottom: 90px !important;
    }
    .cart-overlay .cart-overlay-content {
      background-color: #fff;
      width: 380px;
      height: 100%;
      z-index: 9999;
      padding: 20px;
      position: fixed;
      -webkit-transform: translateX(100%);
      -ms-transform: translateX(100%);
      transform: translateX(100%);
      -webkit-transition: 0.6s;
      -o-transition: 0.6s;
      transition: 0.6s;
      top: 0;
      right: 0;
      overflow: auto;
    }
    .offcanvas-cart-content-container
      .cart-product-wrapper
      .cart-product-container {
      position: relative;
      max-height: 330px;
      overflow: auto;
    }
    .offcanvas-cart-content-container
      .cart-product-wrapper
      .cart-product-container
      .single-cart-product {
      position: relative;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      border-bottom: 1px solid #eee;
      padding-bottom: 25px;
      margin-bottom: 25px;
    }
    .offcanvas-cart-content-container
      .cart-product-wrapper
      .cart-product-container
      .single-cart-product
      .cart-close-icon {
      position: absolute;
      top: 0;
      right: 15px;
      line-height: 8px;
    }
    .offcanvas-cart-content-container
      .cart-product-wrapper
      .cart-product-container
      .single-cart-product
      .cart-close-icon
      a {
      color: #333;
    }
    .offcanvas-cart-content-container
      .cart-product-wrapper
      .cart-product-container
      .single-cart-product
      .cart-close-icon
      a
      i {
      font-size: 8px;
    }
    .offcanvas-cart-content-container
      .cart-product-wrapper
      .cart-product-container
      .single-cart-product:last-child {
      margin-bottom: 0;
    }
    .offcanvas-cart-content-container
      .cart-product-wrapper
      .cart-product-container
      .single-cart-product
      .image {
      width: 80px;
      margin-right: 15px;
    }
    .offcanvas-cart-content-container
      .cart-product-wrapper
      .cart-product-container
      .single-cart-product
      .content {
      width: calc(100% - 80px);
    }
    .offcanvas-cart-content-container
      .cart-product-wrapper
      .cart-product-container
      .single-cart-product
      .content
      h5 {
      font-size: 15px;
      line-height: 17px;
    }
    .offcanvas-cart-content-container
      .cart-product-wrapper
      .cart-product-container
      .single-cart-product
      .content
      h5
      a {
      color: #333;
    }
    .offcanvas-cart-content-container
      .cart-product-wrapper
      .cart-product-container
      .single-cart-product
      .content
      p
      .cart-count {
      font-size: 12px;
      line-height: 22px;
      color: #7e7e7e;
    }
    .offcanvas-cart-content-container
      .cart-product-wrapper
      .cart-product-container
      .single-cart-product
      .content
      p
      .discounted-price {
      font-size: 14px;
      line-height: 22px;
      font-weight: 600;
      color: #333;
    }
    .offcanvas-cart-content-container .cart-product-wrapper .cart-subtotal {
      border-top: 1px solid #eee;
      border-bottom: 1px solid #eee;
      padding-top: 10px;
      padding-bottom: 10px;
      margin-top: 25px;
      font-size: 16px;
      font-weight: 600;
      line-height: 25px;
      color: #333;
    }
    .offcanvas-cart-content-container
      .cart-product-wrapper
      .cart-subtotal
      .subtotal-amount {
      float: right;
      overflow: hidden;
    }
    .offcanvas-cart-content-container .cart-product-wrapper .cart-buttons {
      margin-top: 30px;
    }
    .offcanvas-cart-content-container .cart-product-wrapper .cart-buttons a {
      text-transform: uppercase;
      font-size: 14px;
      font-weight: 500;
      letter-spacing: 1px;
      color: #fff;
      border-radius: 0;
      border: 1px solid #333;
      background-color: #333;
      display: block;
      text-align: center;
      padding: 5px 10px;
      margin-bottom: 15px;
    }
    .offcanvas-cart-content-container
      .cart-product-wrapper
      .cart-buttons
      a:last-child {
      margin-bottom: 0;
    }
    .newsletter-content {
      background-size: cover;
      background-repeat: no-repeat;
    }
    .mc-newsletter-form input {
      background: 0 0;
      border: none;
      border-bottom: 2px solid #fff;
      padding: 10px 0;
      width: 100%;
      padding-right: 40px;
      color: #fff;
    }
    .mc-newsletter-form button {
      position: absolute;
      right: 0;
      top: 50%;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      background: 0 0;
      border: none;
      color: #fff;
      font-size: 14px;
      line-height: 22px;
      font-weight: 500;
      letter-spacing: 1px;
      padding: 0;
    }
    .mc-newsletter-form--popup {
      margin: 0;
    }
    .mc-newsletter-form--popup input {
      border-bottom: 2px solid #ccc;
      color: #333;
    }
    .mc-newsletter-form--popup button {
      color: #333;
    }
    .newsletter-content {
      max-width: 870px;
      width: 100%;
      position: fixed;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-150%, -50%);
      -ms-transform: translate(-150%, -50%);
      transform: translate(-150%, -50%);
      z-index: 9999;
      padding: 50px 60px 70px 400px;
      visibility: hidden;
      opacity: 0;
      -webkit-transition: 0.6s;
      -o-transition: 0.6s;
      transition: 0.6s;
    }
    .newsletter-content.show-popup {
      visibility: visible;
      opacity: 1;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      -webkit-transition: 0.6s;
      -o-transition: 0.6s;
      transition: 0.6s;
    }
    .newsletter-content h2 {
      font-size: 34px;
      line-height: 48px;
      font-weight: 300;
      color: #333;
    }
    .newsletter-content p {
      font-size: 15px;
      line-height: 26px;
      letter-spacing: 1px;
    }
    .newsletter-content .close-icon {
      position: absolute;
      top: 20px;
      right: 20px;
    }
    .newsletter-content .close-icon a {
      -webkit-transition: 0.6s;
      -o-transition: 0.6s;
      transition: 0.6s;
    }
    .newsletter-content .close-icon a i {
      font-size: 25px;
      color: #333;
    }
    .cart-buttons {
      overflow: hidden;
    }
    .cart-buttons {
      margin-top: 20px;
    }
    .quickview-plus-minus {
      display: flex;
      justify-content: flex-start;
      padding-top: 5px;
    }
    .cart-plus-minus {
      border: 1px solid #ddd;
      overflow: hidden;
      padding: 7px 0 7px 5px;
      width: 80px;
    }
    input.cart-plus-minus-box {
      background: transparent none repeat scroll 0 0;
      border: medium none;
      float: left;
      font-size: 16px;
      height: 25px;
      margin: 0;
      padding: 0;
      text-align: center;
      width: 25px;
    }
    .quickview-btn-cart {
      margin: 0 0 0 20px;
    }
    .single-product__floating-badges span {
      text-transform: uppercase;
    }
    .single-product--smarthome .product_timer {
      top: 50%;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      bottom: inherit;
    }
    .single-product--smarthome .single-countdown {
      font-size: 16px;
      height: 55px;
      width: 55px;
      margin-right: 4px;
    }
    .single-countdown > div {
      line-height: 20px;
    }
    .offcanvas-cart-content-container
      .cart-product-wrapper
      .cart-product-container
      .single-cart-product
      .content
      h5 {
      padding-right: 30px;
      line-height: 1.3;
    }
    .cart-product-container.ps-scroll.single-cart-item-loop.ps {
      padding-bottom: 20px;
    }
    .newsletter-content {
      background-color: #fff;
    }
    .mc-newsletter-form input {
      padding-right: 90px;
    }
    .form__inner {
      position: relative;
    }
    .offcanvas-mobile-search-area input {
      width: 100%;
      font-size: 16px;
      display: block;
      padding: 9px 25px;
      color: #555;
      background: #f2f2f2;
      border: none;
    }
    .offcanvas-navigation {
      padding: 25px 0;
    }
    .offcanvas-navigation ul.sub-cat-menu,
    .offcanvas-navigation ul.sub-menu {
      margin-left: 15px;
    }
    .offcanvas-navigation ul li.cat-item-has-children,
    .offcanvas-navigation ul li.menu-item-has-children {
      position: relative;
      display: block;
    }
    .cart-buttons.disabled .checkout_btn,
    .modal-button.disabled .astor-button.astor-button--medium.popup-checkout--btn {
      cursor: not-allowed;
      pointer-events: none;
      opacity: 0.6;
    }
    .offcanvas-cart-content-container
      .cart-product-wrapper
      .cart-buttons
      a.checkout_btn {
      background-color: #d3122a;
      border-color: #d3122a;
    }
    .cart-buttons label {
      color: #333;
      margin-bottom: 10px;
    }
    .single-product:hover .single-product__image > a img.secondary__img {
      opacity: 1;
      visibility: visible;
    }

   </style>
   <link href="//cdn.shopify.com/s/files/1/0023/4104/4283/t/6/assets/style.min.css?v=125022362800571592201645332648" rel="stylesheet" type="text/css" media="all">
   <style rel="stylesheet">
    .subscribe_area > h2,
    .subscribe-content > h2,
    .newsletter-content h2 {
      color: #000000;
    }
    .subscribe_area > p,
    .subscribe-content > p,
    .newsletter-content p {
      color: #666666;
    }
    .grid__item h1 {
      color: ;
    }
    .subscribe-form-input,
    .mc-newsletter-form--popup input {
      border-color: #cccccc;
      color: #333333;
    }
    .subscribe-form-input::-webkit-input-placeholder,
    .subscribe-form-input,
    .mc-newsletter-form--popup input::-webkit-input-placeholder {
      /* Chrome/Opera/Safari */
      color: #333333 !important;
    }
    .subscribe-form-input::-moz-placeholder,
    .subscribe-form-input,
    .mc-newsletter-form--popup input::-moz-placeholder {
      /* Firefox 19+ */
      color: #333333 !important;
    }
    .subscribe-form-input:-ms-input-placeholder,
    .subscribe-form-input,
    .mc-newsletter-form--popup input:-ms-input-placeholder {
      /* IE 10+ */
      color: #333333 !important;
    }
    .subscribe-form-input:placeholder,
    .subscribe-form-input,
    .mc-newsletter-form--popup input:placeholder {
      /* Firefox 18- */
      color: #333333 !important;
    }
    .newsletter-btn {
      background: #000000 none repeat scroll 0 0;
      color: #333333;
    }
    .mc-newsletter-form--popup button {
      color: #333333;
    }
    .mc-newsletter-form--popup button:hover {
      color: #333333;
    }
    .newsletter-btn:hover {
      background: #666666 none repeat scroll 0 0;
      color: #333333;
    }
    .popup_off,
    .newsletter-content .close-icon a i {
      color: #999999;
    }
    .newsletter_popup_inner:before {
      background: rgba(0, 0, 0, 0);
      opacity: 0.8;
    }
    .form-group.subscribe-form-group p,
    p.dont_show_again {
      color: #000000;
    }
    .newsletter-content,
    .newsletter_popup_inner {
      background-color: #ffffff;
    }
    .breadcrumb-area {
      padding-top: 30px;
      padding-bottom: 30px;
    }
    .breadcrumb-area.bg-img {
      background: #f6f6f6;
    }
    .overlay-bg::before {
      background: #000000 none repeat scroll 0 0;
      opacity: 0;
    }
    h1.breadcrumb-title {
      color: #666666;
    }
    .breadcrumb-list > li > a {
      color: #666666;
    }
    .breadcrumb-list li::after {
      color: #666666;
    }
    .breadcrumb-list > li {
      color: #999999;
    }
    @media (max-width: 767px) {
      .breadcrumb-area.pt-50.pb-70 {
        padding-top: 30px;
        padding-bottom: 30px;
      }
    }
    .top-notification-bar {
      background: #f4bbfa;
      background: -moz-linear-gradient(left, #f4bbfa 0%, #f4bbfa 100%);
      background: -webkit-gradient(
        left top,
        right top,
        color-stop(0%, #f4bbfa),
        color-stop(100%, #f4bbfa)
      );
      background: -webkit-linear-gradient(left, #f4bbfa 0%, #f4bbfa 100%);
      background: -o-linear-gradient(left, #f4bbfa 0%, #f4bbfa 100%);
      background: -ms-linear-gradient(left, #f4bbfa 0%, #f4bbfa 100%);
      background: linear-gradient(to right, #f4bbfa 0%, #f4bbfa 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f4bbfa', endColorstr='#f4bbfa', GradientType=1 );
    }
    .notification-entry p a {
      background-color: #f29afa;
      border: 1px solid #000000;
      color: #000000;
    }
    .notification-entry p a:hover {
      background-color: #f29afa;
      border: 1px solid #000000;
      color: #000000;
    }
    .notification-close-btn {
      background-color: ;
      border: 1px solid rgba(0, 0, 0, 0);
      color: #000000;
    }
    .notification-close-btn:hover {
      background-color: rgba(0, 0, 0, 0);
      border: 1px solid rgba(0, 0, 0, 0);
      color: #000000;
    }
    .notification-entry p {
      color: #000000;
    }
  
    
    html,
    body,
    input,
    textarea,
    button,
    select {
      font-family: "Work Sans", sans-serif;
      font-weight: 400;
      font-style: normal;
    }
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Work Sans", sans-serif;
      font-weight: 400;
      font-style: normal;
    }
    p {
      font-family: "Work Sans", sans-serif;
      font-weight: 400;
      font-style: normal;
    }
    .theme-default-margin,
    .shopify-challenge__container {
      padding-top: 100px;
      padding-bottom: 100px;
    }
    @media (max-width: 767px) {
      .theme-default-margin,
      .shopify-challenge__container {
        padding-top: 80px;
        padding-bottom: 80px;
      }
    }
    .create-custom-page {
      padding-top: 100px;
      padding-bottom: 80px;
    }
    @media (max-width: 767px) {
      .create-custom-page {
        padding-top: 80px;
        padding-bottom: 60px;
      }
    }
    .box-layout {
      max-width: calc(100% -300px);
      margin: auto;
      box-shadow: -3px 0 50px -2px rgba(0, 0, 0, 0.15);
      height: auto;
      position: relative;
    }
    .box-layout {
      background: #fff;
    }
    .box-layout .header-sticky.is-sticky {
      max-width: calc(100% - 300px);
      left: 0;
      right: 0;
      margin: 0 auto;
    }
    @media screen and (min-width: 1200px) and (max-width: 1600px) {
      .box-layout {
        max-width: calc(100% - 170px);
      }
      .box-layout .header-sticky.is-sticky {
        max-width: calc(100% - 170px);
      }
    }
    @media screen and (min-width: 992px) and (max-width: 1199px) {
      .box-layout {
        max-width: calc(100% - 150px);
      }
      .box-layout .header-sticky.is-sticky {
        max-width: calc(100% - 150px);
      }
    }
    @media screen and (min-width: 768px) and (max-width: 991px) {
      .box-layout {
        max-width: calc(100% - 120px);
      }
      .box-layout .header-sticky.is-sticky {
        max-width: calc(100% - 120px);
      }
    }
    @media screen and (min-width: 576px) and (max-width: 767px) {
      .box-layout {
        max-width: calc(100% - 80px);
      }
      .box-layout .header-sticky.is-sticky {
        max-width: calc(100% - 80px);
      }
    }
    @media screen and (min-width: 480px) and (max-width: 575px) {
      .box-layout {
        max-width: calc(100% - 50px);
      }
      .box-layout .header-sticky.is-sticky {
        max-width: calc(100% - 50px);
      }
    }
    @media (max-width: 479px) {
      .box-layout {
        max-width: 100%;
      }
      .box-layout .header-sticky.is-sticky {
        max-width: 100%;
      }
    }
    .box_bg {
      background: #ffffff;
    }
    @keyframes astorsnow {
      0% {
        background-position: 0 0, 0 0, 0 0;
      }
      100% {
        background-position: 500px 1000px, 400px 400px, 300px 300px;
      }
    }
    .snow--effect,
    .snow--section-effect::before {
      background-image: url(//cdn.shopify.com/s/files/1/0259/8194/3911/files/snow1.png?207),
        url(//cdn.shopify.com/s/files/1/0259/8194/3911/files/snow2.png?207);
      animation: astorsnow 18s linear infinite;
    }
    .snow--effect {
      position: fixed;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      z-index: 0;
      pointer-events: none;
      background-color: rgba(0, 0, 0, 0);
    }
    .snow--section-effect {
      position: relative;
    }
    .snow--section-effect::before {
      position: absolute;
      width: 100%;
      content: "";
      height: 100%;
      top: 0;
      left: 0;
      z-index: 1;
      pointer-events: none;
      background-color: rgba(0, 0, 0, 0);
    }
    .hero-slider-wrapper.nav--two.owl-carousel .owl-nav > div {
      border-radius: 50%;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.4);
    }
    body {
      color: #777777;
      background-color: #ffffff;
    }
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .multi-testimonial-single-item__author-info .content .name,
    .instagram-section-intro p a,
    .about-single-block p.subtitle,
    .single-faq .card-header h5 button {
      color: #333;
    }
    .single-product__content .price .discounted-price,
    .shop-product__price .discounted-price {
      color: #333;
    }
    .single-product__content .price .main-price.discounted,
    .shop-product__price .main-price.discounted {
      color: #aaa;
    }
    .single-product__content .title .product-cart-action a {
      color: #d3122a;
    }
    .single-product__content .title h3 {
      color: #333;
    }
    .single-product__floating-badges span.soldout-title {
      background: #d3122a;
      color: #fff;
    }
    .single-product__floating-badges span.onsale {
      background-color: #98d8ca;
      color: #fff;
    }
    .product_countdown .single-countdown {
      background: ;
    }
    .single-product__floating-icons span a {
      background-color: #fff;
      color: #7e7e7e;
    }
    .single-product__floating-icons span a:hover {
      background-color: #fff;
      color: #333;
    }
    .single-product__variations.size_variant_conatiner,
    .single-product__variations.color_variant_conatiner {
      background-color: #fff;
    }
    .single-product__variations .size-container span {
      color: #999;
    }
    .single-product .single-countdown {
      background: #98d8ca;
      color: #fff;
    }
    .astor-button,
    .shop-product__buttons .product-cart-action button,
    .affiliate_btn > a,
    #shopify-product-reviews .spr-summary-actions-newreview,
    #shopify-product-reviews
      .spr-button.spr-button-primary.button.button-primary.btn.btn-primary,
    .recent_view_product__content
      input[disabled].astor-button.astor-button--medium {
      background-color: #333333;
      color: #fff !important;
      border-color: #333;
    }
    #modalAddToCart .modal-button .theme-default-button {
      color: #fff !important;
      background-color: #333333;
    }
    #modalAddToCart .modal-button .theme-default-button:hover {
      background: rgba(0, 0, 0, 0);
    }
    .astor-button:hover,
    .astor-button.astor-button--medium:hover,
    .shop-product__buttons .product-cart-action button:hover,
    .affiliate_btn > a:hover,
    #shopify-product-reviews .spr-summary-actions-newreview:hover,
    #shopify-product-reviews
      .spr-button.spr-button-primary.button.button-primary.btn.btn-primary:hover {
      background-color: rgba(0, 0, 0, 0);
      color: #333 !important;
      border-color: #333;
    }
    .modal-button .astor-button.astor-button--medium.popup-checkout--btn {
      background: #d3122a;
      color: #fff !important;
    }
    .modal-button .astor-button.astor-button--medium.popup-checkout--btn:hover {
      background: #d3122a;
      color: #fff !important;
    }
    a.scroll-top {
      background: #333;
      color: #fff;
    }
    a.scroll-top:hover {
      background-color: #abb8c0;
      color: #fff;
    }
    .offcanvas-cart-content-container .cart-product-wrapper .cart-buttons a:hover {
      background-color: #d3122a;
      border-color: #d3122a;
    }
    .collection_content h2 a:hover {
      color: #d3122a;
    }
    .header-right-icons .single-icon a span.count {
      background-color: #d3122a;
    }
    .single-category__content--three--creativehome .title a:hover {
      color: #d3122a;
    }
    .single-category__content--three--banner .title > a:hover {
      border-color: #d3122a;
    }
    .single-product--wearablehome .single-product__floating-cart span.title a {
      color: #d3122a;
    }
    .single-widget-product__content__bottom a.cart-btn {
      color: #d3122a;
    }
    .single-product:hover .single-product__content .title h3 a:hover {
      color: #d3122a;
    }
    .astor-button-2:hover {
      color: #d3122a;
    }
    .single-slider-post__content a.blog-readmore-btn:hover {
      color: #d3122a;
    }
    .list-product-collection .section-title a:hover {
      color: #d3122a;
    }
    .single-shoppable .cloth-tag__icon:hover {
      background-color: #d3122a;
    }
    .single-shoppable .cloth-tag__icon.active {
      background-color: #d3122a;
    }
    .single-banner--hoverzoom
      > a
      .banner-content--banner-type
      .astor-button-link:hover {
      color: #d3122a;
    }
    .single-banner--hoverzoom
      > a
      .banner-content--banner-type
      .astor-button-link:hover:after {
      background-color: #d3122a;
    }
    .nothing-found-content p a:hover {
      color: #d3122a;
    }
    .single-product__floating-badges span.hot {
      background-color: #d3122a;
    }
    .product-cart-action button {
      color: #d3122a;
    }
    .shopify-payment-button .shopify-payment-button__more-options {
      color: #d3122a;
    }
    nav.site-nav > ul > li a span,
    .site-mobile-nav .dl-menu li span,
    .vertical-menu-container-dark nav > ul > li > a span,
    .overlay-navigation-active
      .overlay-navigation-menu-container
      nav
      > ul
      > li
      > a
      span {
      background: #d3122a;
    }
    nav.site-nav > ul > li a span:before,
    .site-mobile-nav .dl-menu li span::before,
    .vertical-menu-container-dark nav > ul > li > a span::before,
    .overlay-navigation-active
      .overlay-navigation-menu-container
      nav
      > ul
      > li
      > a
      span::before {
      background: #d3122a;
    }
    #modalAddToCart .modal-button .theme-default-button:hover {
      background: #d3122a;
    }
    nav.site-nav > ul > li a span.sale,
    .site-mobile-nav .dl-menu li span.sale,
    .vertical-menu-container-dark nav > ul > li > a span.sale,
    .overlay-navigation-active
      .overlay-navigation-menu-container
      nav
      > ul
      > li
      > a
      span.sale {
      background: #98d8ca;
    }
    nav.site-nav > ul > li a span.sale:before,
    .site-mobile-nav .dl-menu li span.sale::before,
    .vertical-menu-container-dark nav > ul > li > a span.sale::before,
    .overlay-navigation-active
      .overlay-navigation-menu-container
      nav
      > ul
      > li
      > a
      span.sale::before {
      background: #98d8ca;
    }
    #quickViewModal .close:hover {
      color: #98d8ca;
      border-color: #98d8ca;
    }
    .copyright-text a:hover {
      color: #98d8ca;
    }
    .product_additional_information button:hover {
      color: #d3122a;
    }
    .responsive-image__image {
      position: absolute;
      left: 0;
      right: 0;
      top: 0;
      margin: 0 auto;
    }
    .img_rel {
      position: relative;
      overflow: hidden;
      min-height: 1px;
      clear: both;
      display: block;
    }
    .content.img_rel {
      max-width: 200px;
      margin: 0 auto;
    }
    .single-banner--hoverborder .img_rel {
      z-index: 9;
    }
    .single-banner--hoverborder .banner-content {
      z-index: 9;
      pointer-events: none;
    }
    .slide_content__position {
      position: absolute;
      top: 0;
      width: 100%;
      height: 100%;
    }
    .hero-single-slider .row {
      max-width: calc(100% - 300px);
      margin: 0 auto;
      height: 100%;
    }
    @media only screen and (min-width: 480px) and (max-width: 767px) {
      .hero-single-slider .row {
        max-width: calc(100% - 50px);
      }
    }
    @media only screen and (max-width: 479px) {
      .hero-single-slider .row {
        max-width: calc(100% - 30px);
        margin: 0;
      }
    }
    .hero-single-slider::before {
      z-index: 9;
    }
    .header-right-icons .single-icon:first-child {
      margin-left: 0;
    }
    @media only screen and (max-width: 479px) {
      .header_2 .header-bottom-container {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
      }
      .header_2 .header-bottom-container .logo-with-offcanvas {
        -ms-flex-preferred-size: 40%;
        flex-basis: 40%;
        max-width: 40%;
        align-items: center;
      }
      .theme-logo img {
        max-width: 100% !important;
      }
      .header-bottom-container .header-right-container {
        -ms-flex-preferred-size: 60%;
        flex-basis: 60%;
        padding-left: 20px;
      }
      .site-mobile-nav .dl-trigger,
      .site-mobile-navigation #mobile-menu-trigger {
        top: -50px;
      }
    }
    @media only screen and (max-width: 767px) {
      .pb-sm-10 {
        padding-bottom: 10px !important;
      }
      .pt-sm-10 {
        padding-top: 10px !important;
      }

      .item{
        width:100% !important;
        height: auto !important;
      }
    }
    .unit_price_box.caption.hidden {
      display: none;
    }
    span.main-price.discounted {
      margin-left: 5px;
    }

    #livesearch{
      width: 100%;
      border-radius: 5px;
      position: absolute; 
      left: 0px; 
      top: 50px;
      background-color: white;
      z-index: 1000
    }

    #livesearch a:hover{
      background-color: #f7f8fa;
      color: black
    }

    #livesearch a{
      display: block;
      padding:  10px 10px;
    }

    .thongso {
      margin-left: 0 !important;
      color: #323232;
      font-size: 12px;
      line-height: 24px;
      max-height: 160px;
      overflow: auto;
      padding-bottom: 10px;
  }

  .full {
      float: left;
      width: 100%;
      position: relative;
  }

  .item_related_product {
      position: relative;
      background: #fff;
      border: 1px solid #ddd;
      -moz-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
      -webkit-box-shadow: 0 2px 3px 0 rgb(0 0 0 / 15%);
      box-shadow: 0 2px 3px 0 rgb(0 0 0 / 15%);
      -moz-border-radius: 3px;
      -webkit-border-radius: 3px;
      border-radius: 3px;
      width: 48%;
      float: left;
      text-align: center;
      padding: 10px 5px;
      margin-right: 2%;
      margin-bottom: 1%;
      margin-top: 1%;
      cursor: pointer;
      transition: all 0.3s;
  }

  .item_related_product.active strong {
      font-weight: bold;
  }

  .item_related_product strong {
      color: #333;
      font-weight: normal;
      display: block;
      font-size: 11px;
  }

  .short_desc .fa-check-circle {
      color: #66b926;
      margin-right: 3px;
      font-size: 14px;
  }

  .item_related_product strong i {
      font-size: 16px;
      display: inline-block;
      margin-right: 5px;
      position: relative;
      top: 1px;
  }

  .item_related_product .related_price {
      font-weight: bold;
      color: #f83015;
  }

  .motangan {
    border-radius: 5px;
    border: 1px solid #e5e5e5;
    margin-bottom: 15px;
  }

  .full {
      float: left;
      width: 100%;
      position: relative;
  }

  .motangan_title {
      display: block;
      overflow: hidden;
      font-size: 14px;
      color: #1d1d1f;
      padding: 10px 15px 10px 15px;
      margin-bottom: 0;
      font-weight: bold;
  }


  .motangan_content {
      font-size: 13px;
      padding: 0 15px 15px 15px;
      overflow-y: auto;
  }

  .motangan_content ul li {
      list-style: none;
      position: relative;
      padding: 0 0 0 20px;
  }
  .short_desc ul li {
      margin: 0;
      padding-right: 5px;
      color: #323232;
      font-size: 12px;
      line-height: 19px;
      list-style-position: outside;
      margin-bottom: 10px;
  }

  .motangan_content ul li::before {
      left: 0;
      position: absolute;
      content: "\f058";
      font-family: 'Fontawesome';
      font-size: 14px;
      color: #db0000;
      display: inline-block;
  }

  ol, ul {
      list-style-type: none;
  }

  .box-product-promotion {
      border-radius: 10px;
      overflow: hidden;
      border: 1px solid #fee2e2;
  }

  .box-product-promotion-header {
      grid-gap: 10px;
      gap: 10px;
      height: 42px;
      background-color: #fee2e2;
      color: #d70018;
  }

  .is-flex {
      display: flex!important;
  }
  .has-text-weight-semibold {
      font-weight: 600!important;
  }

  .icon {
      align-items: center;
      display: inline-flex;
      justify-content: center;
      height: 1.5rem;
      width: 1.5rem;
  }

  .box-product-promotion-header .icon svg {
      height: 30px;
  }

  .has-text-weight-semibold {
      font-weight: 600!important;
  }
  .box-product-promotion .show-all {
      min-height: -webkit-fit-content;
      min-height: -moz-fit-content;
      min-height: fit-content;
      transition: min-height 1s ease;
      padding-bottom: 8px;
  }
  .box-product-promotion-content .box-product-promotion-number {
      width: 15px;
      height: 15px;
      text-align: center;
      font-size: 10px;
      border-radius: 50%;
      font-weight: 600;
  }

  .box-product-promotion-content .box-product-promotion-detail {
      width: calc(100% - 25px);
      font-size: 14px;
  }

  .box-product-promotion-header .icon {
      width: 20px;
      fill: #d70018;
  }

  .zalo-chat{
    position: fixed;
    right: 25px;
    bottom: 160px;
    z-index: 99;
    border-radius: 50%;
  }
  .zalo-chat img{
    width: 50px;
    height: 50px;
  }

  .call{
    position: fixed;
    right: 25px;
    bottom: 220px;
    z-index: 99;
    border-radius: 50%;
  }
  .call img{
    width: 50px;
    height: 50px;
  }
  
  .item{
    height: 300px;
    width: 225px;
    display:block;
    float:left
  }

  .grid-list{
    width: 100% !important;
  }

  .three-column{
    width: 50% !important;
  }

  .four-column{
    width: 290px !important;
  }
  .five-column{
    width: 225px !important;
  }
  .five-column .img_variant ,.grid-list .img_variant,.three-column .img_variant,.four-column .img_variant,{
    width: 30px;
    height: 30px;
  }
  .img_variant{
    width: 40px;
    height: 40px;
  }

   </style>

   <link href="//cdn.shopify.com/s/files/1/0023/4104/4283/t/6/assets/theme-settings.css?v=48883255238501902091645332648" rel="stylesheet" type="text/css" media="all">
   <!-- Header hook for plugins -->

   <script id="__st">var __st={"a":2341044283,"offset":-14400,"reqid":"63ee651d-f0f0-4a08-945d-056cb2fa6880","pageurl":"bigon-6.myshopify.com\/","u":"14eac3224b1f","p":"home"};</script>
   <script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
   <script>
   !function(o){o.addEventListener("DOMContentLoaded",function(){window.Shopify=window.Shopify||{},window.Shopify.recaptchaV3=window.Shopify.recaptchaV3||{siteKey:"6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"};var t=['form[action*="/contact"] input[name="form_type"][value="contact"]','form[action*="/comments"] input[name="form_type"][value="new_comment"]','form[action*="/account"] input[name="form_type"][value="customer_login"]','form[action*="/account"] input[name="form_type"][value="recover_customer_password"]','form[action*="/account"] input[name="form_type"][value="create_customer"]','form[action*="/contact"] input[name="form_type"][value="customer"]'].join(",");function n(e){e=e.target;null==e||null!=(e=function e(t,n){if(null==t.parentElement)return null;if("FORM"!=t.parentElement.tagName)return e(t.parentElement,n);for(var o=t.parentElement.action,r=0;r<n.length;r++)if(-1!==o.indexOf(n[r]))return t.parentElement;return null}(e,["/contact","/comments","/account"]))&&null!=e.querySelector(t)&&((e=o.createElement("script")).setAttribute("src","https://cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.6/index.js"),o.body.appendChild(e),o.removeEventListener("focus",n,!0),o.removeEventListener("change",n,!0),o.removeEventListener("click",n,!0))}o.addEventListener("click",n,!0),o.addEventListener("change",n,!0),o.addEventListener("focus",n,!0)})}(document);</script>
   <script integrity="sha256-qzgBevPPdZ2wrwu9HnUin2oYn1vx8ttCFpYwmYuWkCE=" data-source-attribution="shopify.loadfeatures" defer="defer" src="//cdn.shopify.com/shopifycloud/shopify/assets/storefront/load_feature-ab38017af3cf759db0af0bbd1e75229f6a189f5bf1f2db42169630998b969021.js" crossorigin="anonymous"></script>
   <script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4=" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="//cdn.shopify.com/shopifycloud/shopify/assets/storefront/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js" crossorigin="anonymous"></script>
   <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>
   <!-- /snippets/oldIE-js.liquid --><!--[if lt IE 9]>
   <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js" type="text/javascript"></script>
   <script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/6/assets/respond.min.js?v=52248677837542619231645332518" type="text/javascript"></script>
   <link href="//cdn.shopify.com/s/files/1/0023/4104/4283/t/6/assets/respond-proxy.html" id="respond-proxy" rel="respond-proxy" />
   <link href="//bigon-6.myshopify.com/search?q=56c2027ba707c680e5b3d9c78ff304c0" id="respond-redirect" rel="respond-redirect" />
   <script src="//bigon-6.myshopify.com/search?q=56c2027ba707c680e5b3d9c78ff304c0" type="text/javascript"></script>
   <![endif]-->
   <!-- JS -->
   <!-- <script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/6/assets/plugins.js?v=139296894682182894691645332529"></script>
   <script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/6/assets/theme.plugins.js?v=177399257430505027491645332556" defer="defer"></script>
   <script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/6/assets/slick.min.js?v=129419428051093955041645332579" defer="defer"></script>
   <script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/6/assets/Wishlist.js?v=58623191659563579861645332514" defer="defer"></script> -->
   
   <!-- <link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch"> -->
   <script>
  //  (function(){if ("sendBeacon" in navigator && "performance" in window) {var session_token = document.cookie.match(/_shopify_s=([^;]*)/);function handle_abandonment_event(e) {var entries = performance.getEntries().filter(function(entry) {return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;var payload = {shop_id: 2341044283,url: window.location.href,navigation_start,duration: currentMs - navigation_start,session_token: session_token && session_token.length === 2 ? session_token[1] : "",page_type: "index"};window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1",payload: payload,metadata: {event_created_at_ms: currentMs,event_sent_at_ms: currentMs}}));}}window.addEventListener('pagehide', handle_abandonment_event);}}());</script>
  <script>
  //window.ShopifyAnalytics = window.ShopifyAnalytics || {};
  //     window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
  //     window.ShopifyAnalytics.meta.currency = 'USD';
  //     var meta = {"page":{"pageType":"home"}};
  //     for (var attr in meta) {
  //       window.ShopifyAnalytics.meta[attr] = meta[attr];
  //     }
   </script>
   <script>
  //  window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
  //     };
   </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <script class="analytics">
       (function () {
      var customDocumentWrite = function(content) {
        var jquery = null;
      
        if (window.jQuery) {
          jquery = window.jQuery;
        } else if (window.Checkout && window.Checkout.$) {
          jquery = window.Checkout.$;
        }
      
        if (jquery) {
          jquery('body').append(content);
        }
      };
    }
  //  (function () {
  //     var customDocumentWrite = function(content) {
  //       var jquery = null;
      
  //       if (window.jQuery) {
  //         jquery = window.jQuery;
  //       } else if (window.Checkout && window.Checkout.$) {
  //         jquery = window.Checkout.$;
  //       }
      
  //       if (jquery) {
  //         jquery('body').append(content);
  //       }
  //     };
      
  //     var hasLoggedConversion = function(token) {
  //       if (token) {
  //         return document.cookie.indexOf('loggedConversion=' + token) !== -1;
  //       }
  //       return false;
  //     }
      
  //     var setCookieIfConversion = function(token) {
  //       if (token) {
  //         var twoMonthsFromNow = new Date(Date.now());
  //         twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);
      
  //         document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
  //       }
  //     }
      
  //     var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
  //     if (trekkie.integrations) {
  //       return;
  //     }
  //     trekkie.methods = [
  //       'identify',
  //       'page',
  //       'ready',
  //       'track',
  //       'trackForm',
  //       'trackLink'
  //     ];
  //     trekkie.factory = function(method) {
  //       return function() {
  //         var args = Array.prototype.slice.call(arguments);
  //         args.unshift(method);
  //         trekkie.push(args);
  //         return trekkie;
  //       };
  //     };
  //     for (var i = 0; i < trekkie.methods.length; i++) {
  //       var key = trekkie.methods[i];
  //       trekkie[key] = trekkie.factory(key);
  //     }
  //     trekkie.load = function(config) {
  //       trekkie.config = config || {};
  //       trekkie.config.initialDocumentCookie = document.cookie;
  //       var first = document.getElementsByTagName('script')[0];
  //       var script = document.createElement('script');
  //       script.type = 'text/javascript';
  //       script.onerror = function(e) {
  //         var scriptFallback = document.createElement('script');
  //         scriptFallback.type = 'text/javascript';
  //         scriptFallback.onerror = function(error) {
  //                 var Monorail = {
  //         produce: function produce(monorailDomain, schemaId, payload) {
  //           var currentMs = new Date().getTime();
  //           var event = {
  //             schema_id: schemaId,
  //             payload: payload,
  //             metadata: {
  //               event_created_at_ms: currentMs,
  //               event_sent_at_ms: currentMs
  //             }
  //           };
  //           return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
  //         },
  //         sendRequest: function sendRequest(endpointUrl, payload) {
  //           // Try the sendBeacon API
  //           if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
  //             var blobData = new window.Blob([payload], {
  //               type: 'text/plain'
  //             });
        
  //             if (window.navigator.sendBeacon(endpointUrl, blobData)) {
  //               return true;
  //             } // sendBeacon was not successful
        
  //           } // XHR beacon   
        
  //           var xhr = new XMLHttpRequest();
        
  //           try {
  //             xhr.open('POST', endpointUrl);
  //             xhr.setRequestHeader('Content-Type', 'text/plain');
  //             xhr.send(payload);
  //           } catch (e) {
  //             console.log(e);
  //           }
        
  //           return false;
  //         },
  //         isIos12: function isIos12() {
  //           return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
  //         }
  //       };
  //       Monorail.produce('monorail-edge.shopifysvc.com',
  //         'trekkie_storefront_load_errors/1.1',
  //         {shop_id: 2341044283,
  //         theme_id: 122704625723,
  //         app_name: "storefront",
  //         context_url: window.location.href,
  //         source_url: "https://cdn.shopify.com/s/trekkie.storefront.4e66b7932daba00cfd93bde327ce9e8f09bc9ffe.min.js"});
      
  //         };
  //         scriptFallback.async = true;
  //         scriptFallback.src = 'https://cdn.shopify.com/s/trekkie.storefront.4e66b7932daba00cfd93bde327ce9e8f09bc9ffe.min.js';
  //         first.parentNode.insertBefore(scriptFallback, first);
  //       };
  //       script.async = true;
  //       script.src = 'https://cdn.shopify.com/s/trekkie.storefront.4e66b7932daba00cfd93bde327ce9e8f09bc9ffe.min.js';
  //       first.parentNode.insertBefore(script, first);
  //     };
  //     trekkie.load(
  //       {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":2341044283,"isMerchantRequest":null,"themeId":122704625723,"themeCityHash":"6942124855711102416","contentLanguage":"en","currency":"USD"},"isServerSideCookieWritingEnabled":true},"Session Attribution":{},"S2S":{"facebookCapiEnabled":false,"source":"trekkie-storefront-renderer"}}
  //     );
      
  //     var loaded = false;
  //     trekkie.ready(function() {
  //       if (loaded) return;
  //       loaded = true;
      
  //       window.ShopifyAnalytics.lib = window.trekkie;
        
      
  //       var originalDocumentWrite = document.write;
  //       document.write = customDocumentWrite;
  //       try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
  //       document.write = originalDocumentWrite;
      
  //       window.ShopifyAnalytics.lib.page(null,{"pageType":"home"});
      
  //       var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
  //       var token = match? match[1]: undefined;
  //       if (!hasLoggedConversion(token)) {
  //         setCookieIfConversion(token);
          
  //       }
  //     });
      
      
  //         var eventsListenerScript = document.createElement('script');
  //         eventsListenerScript.async = true;
  //         eventsListenerScript.src = "//cdn.shopify.com/shopifycloud/shopify/assets/shop_events_listener-65cd0ba3fcd81a1df33f2510ec5bcf8c0e0958653b50e3965ec972dd638ee13f.js";
  //         document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
        
  //     })();
   </script>
  <!-- <script async="" src="//cdn.shopify.com/shopifycloud/shopify/assets/shop_events_listener-65cd0ba3fcd81a1df33f2510ec5bcf8c0e0958653b50e3965ec972dd638ee13f.js"></script> -->
   <script class="boomerang">
      // (function () {
      //   if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
      //     return;
      //   }
      //   window.BOOMR = window.BOOMR || {};
      //   window.BOOMR.snippetStart = new Date().getTime();
      //   window.BOOMR.snippetExecuted = true;
      //   window.BOOMR.snippetVersion = 12;
      //   window.BOOMR.application = "storefront-renderer";
      //   window.BOOMR.themeName = "Astor OS 2.0";
      //   window.BOOMR.themeVersion = "3.0.3";
      //   window.BOOMR.shopId = 2341044283;
      //   window.BOOMR.themeId = 122704625723;
      //   window.BOOMR.url =
      //     "https://cdn.shopify.com/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
      //   var where = document.currentScript || document.getElementsByTagName("script")[0];
      //   var parentNode = where.parentNode;
      //   var promoted = false;
      //   var LOADER_TIMEOUT = 3000;
      //   function promote() {
      //     if (promoted) {
      //       return;
      //     }
      //     var script = document.createElement("script");
      //     script.id = "boomr-scr-as";
      //     script.src = window.BOOMR.url;
      //     script.async = true;
      //     parentNode.appendChild(script);
      //     promoted = true;
      //   }
      //   function iframeLoader(wasFallback) {
      //     promoted = true;
      //     var dom, bootstrap, iframe, iframeStyle;
      //     var doc = document;
      //     var win = window;
      //     window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
      //     bootstrap = function(parent, scriptId) {
      //       var script = doc.createElement("script");
      //       script.id = scriptId || "boomr-if-as";
      //       script.src = window.BOOMR.url;
      //       BOOMR_lstart = new Date().getTime();
      //       parent = parent || doc.body;
      //       parent.appendChild(script);
      //     };
      //     if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
      //       window.BOOMR.snippetMethod = "s";
      //       bootstrap(parentNode, "boomr-async");
      //       return;
      //     }
      //     iframe = document.createElement("IFRAME");
      //     iframe.src = "about:blank";
      //     iframe.title = "";
      //     iframe.role = "presentation";
      //     iframe.loading = "eager";
      //     iframeStyle = (iframe.frameElement || iframe).style;
      //     iframeStyle.width = 0;
      //     iframeStyle.height = 0;
      //     iframeStyle.border = 0;
      //     iframeStyle.display = "none";
      //     parentNode.appendChild(iframe);
      //     try {
      //       win = iframe.contentWindow;
      //       doc = win.document.open();
      //     } catch (e) {
      //       dom = document.domain;
      //       iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
      //       win = iframe.contentWindow;
      //       doc = win.document.open();
      //     }
      //     if (dom) {
      //       doc._boomrl = function() {
      //         this.domain = dom;
      //         bootstrap();
      //       };
      //       doc.write("<body onload='document._boomrl();'>");
      //     } else {
      //       win._boomrl = function() {
      //         bootstrap();
      //       };
      //       if (win.addEventListener) {
      //         win.addEventListener("load", win._boomrl, false);
      //       } else if (win.attachEvent) {
      //         win.attachEvent("onload", win._boomrl);
      //       }
      //     }
      //     doc.close();
      //   }
      //   var link = document.createElement("link");
      //   if (link.relList &&
      //     typeof link.relList.supports === "function" &&
      //     link.relList.supports("preload") &&
      //     ("as" in link)) {
      //     window.BOOMR.snippetMethod = "p";
      //     link.href = window.BOOMR.url;
      //     link.rel = "preload";
      //     link.as = "script";
      //     link.addEventListener("load", promote);
      //     link.addEventListener("error", function() {
      //       iframeLoader(true);
      //     });
      //     setTimeout(function() {
      //       if (!promoted) {
      //         iframeLoader(true);
      //       }
      //     }, LOADER_TIMEOUT);
      //     BOOMR_lstart = new Date().getTime();
      //     parentNode.appendChild(link);
      //   } else {
      //     iframeLoader(false);
      //   }
      //   function boomerangSaveLoadTime(e) {
      //     window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
      //   }
      //   if (window.addEventListener) {
      //     window.addEventListener("load", boomerangSaveLoadTime, false);
      //   } else if (window.attachEvent) {
      //     window.attachEvent("onload", boomerangSaveLoadTime);
      //   }
      //   if (document.addEventListener) {
      //     document.addEventListener("onBoomerangLoaded", function(e) {
      //       e.detail.BOOMR.init({
      //         producer_url: "https://monorail-edge.shopifysvc.com/v1/produce",
      //         ResourceTiming: {
      //           enabled: true,
      //           trackedResourceTypes: ["script", "img", "css"]
      //         },
      //       });
      //       e.detail.BOOMR.t_end = new Date().getTime();
      //     });
      //   } else if (document.attachEvent) {
      //     document.attachEvent("onpropertychange", function(e) {
      //       if (!e) e=event;
      //       if (e.propertyName === "onBoomerangLoaded") {
      //         e.detail.BOOMR.init({
      //           producer_url: "https://monorail-edge.shopifysvc.com/v1/produce",
      //           ResourceTiming: {
      //             enabled: true,
      //             trackedResourceTypes: ["script", "img", "css"]
      //           },
      //         });
      //         e.detail.BOOMR.t_end = new Date().getTime();
      //       }
      //     });
      //   }
      // })();
   </script>
  
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-LXCQRMBP1M"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-LXCQRMBP1M');
  </script>
</head>