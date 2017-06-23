<?php include ROOT . '/views/layouts/header.php'; ?>
<script src="/template/js/instafeed.js"></script>

<div class="row">
  <script type="text/javascript">
      var userFeed = new Instafeed({
  		  get: 'user',
  		  userId: '881184779',
  		  accessToken: '881184779.1677ed0.4b2862eefef541a2b5e65129b5440274',
  		  limit:20,
  		  template: '<a href="{{link}}" class="insta-link" target="_blank"><img src="{{image}}" {{orientation}} class="insta-img"/><div class="likes">&hearts; {{likes}}</div><div class="insta insta-logo fa fa-instagram"></div></a>'
  		});
  		userFeed.run();
  </script>

	<div id="instafeed" class="likes col-xs-12"></div>

</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>