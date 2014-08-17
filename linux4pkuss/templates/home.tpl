<!DOCTYPE html>
<html>
  <head>
      <title>欢迎你Jimmy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset=utf-8>
    <!-- Bootstrap -->
    <link href="/bootstrap/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/bootstrap/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <script src="/bootstrap/bootstrap/js/bootstrap.min.js"></script>
    <script src="/bootstrap/bootstrap/js/jquery.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-transition.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-alert.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-modal.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-tab.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-popover.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-button.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-collapse.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-carousel.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-typeahead.js"></script>
 </head>
 <body>
 <header>
  {include file="header_menu.tpl"}
</header>
<div class="container-fluid" style="margin:60px 8% 0 8%">
  <div class="row-fluid"  >
  <div class="span2">
      <!--Sidebar content-->
  <ul class="thumbnails">
  <li class="span12">
    <div class="thumbnail">
      <img data-src="holder.js/300x200" class="img-polaroid" alt="" src="">
      <h3>Thumbnail label</h3>
      <p>Thumbnail caption...</p>
    </div>
  </li>
  </ul>
  </div>
    <div class="span10">
      <!--Body content-->
      <ul class="nav nav-tabs" style="margin-top:40px">
      <li class="active"><a href="#tab1" data-toggle="tab">tab1</a>
      <li><a href="#tab2" data-toggle="tab">tab2</a>
      <li><a href="#tab3" data-toggle="tab">tab3</a>
      <li><a href="#tab4" data-toggle="tab">tab4</a>
      </ul>
      <div class="tab-content">
      <div class="tab-pane active" id="tab1">tab1</div>
      <div class="tab-pane" id="tab2">tab2</div>
      <div class="tab-pane" id="tab3">tab3</div>
      <div class="tab-pane" id="tab4">tab4</div>
      </div>
    </div>
  </div>
</div>
<footer>
{include file="footer.tpl"}

</footer>
</body>
</html>
