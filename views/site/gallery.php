<?php include ROOT . '/views/layouts/header.php'; ?>


<style type="text/css">

#instafeed{
  display:inline-flex;
	flex-wrap:wrap;
	justify-content:center;
	align-content:center;
	align-items:center;
}
#instafeed a{
  position: relative;
}
#instafeed img {
  border-radius: 5px;
  margin:10px;
  border:1px solid #e1e1e1;
}
#instafeed .insta{
  font-size:1em;
  color:#ffffff;
  opacity:0;
  bottom:10px;
  left:15px;
  position: absolute;
  line-height:20px;
  text-shadow:0 1px rgba(0,0,0,0.5);
  -webkit-font-smoothing:antialiased;
  -webkit-transition: opacity 100ms ease;
	-moz-transition: opacity 100ms ease;
	-o-transition: opacity 100ms ease;
	-ms-transition: opacity 100ms ease;
	transition: opacity 100ms ease;
}
#instafeed .likes {
  background:rgba(222,89,135,0.8);
  font-family:sans-serif;
  font-size:1em;
  color:#ffffff;
  width:94%;
  opacity:0;
  border-radius: 5px;
  bottom:10px;
  left:10px;
  position: absolute;
  text-align:center;
  line-height:20px;
  text-shadow:0 1px rgba(0,0,0,0.5);
  -webkit-font-smoothing:antialiased;
  -webkit-transition: opacity 100ms ease;
	-moz-transition: opacity 100ms ease;
	-o-transition: opacity 100ms ease;
	-ms-transition: opacity 100ms ease;
	transition: opacity 100ms ease;
}

#instafeed a:hover .likes{
  opacity:1;
}
#instafeed a:hover .insta{
  opacity:1;
}

</style>
<div class="row">
  <script type="text/javascript">
      var userFeed = new Instafeed({
  		  get: 'user',
  		  userId: '881184779',
  		  accessToken: '881184779.1677ed0.4b2862eefef541a2b5e65129b5440274',
  		  limit:20,
  		  template: '<a href="{{link}}" target="_blank"><img src="{{image}}" {{orientation}} /><div class="likes">&hearts; {{likes}}</div><div class="insta fa fa-instagram"></div></a>'
  		});
  		userFeed.run();
  </script>

	<div id="instafeed" class="likes col-xs-12"></div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>