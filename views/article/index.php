<?php
require_once ROOT."/views/layouts/header.php";
?>  
    <body>
        <div id="wrapper">
            
            <div id="page">
                <div id="page-bgtop">
                    <div id="content">
                        
                        <?php foreach ($articles as $article):?>
                            <div class="post">
                                <h2 class="title"><a href="/blog/article-<?php echo $article['id'];?>"><?php echo $article['name'];?></a></h2>
                                <p class="byline"><?php echo $article['time_create'];?></p>
                                <div class="entry">
                                    <p><?php echo $article['description'];?></p>
                                </div>
                                <div class="meta">
                                    <p class="links"><a href="/blog/article-<?php echo $article['id'];?>" class="comments">Read more</a></p>
                                </div>
                            </div>
                        <?php endforeach;?>

                        <?php 
                        // echo $pagination->get(); 
                        ?>
                        <?php
				if($countPage > 1){
					echo "<ul class='pagination'>";
					for ($i = 1; $i <= $countPage; $i++) {
						if($page==$i){
							echo "<li class='active'><a href='/blog/page-$i' >$i</a></li>";
						}else{
							echo "<li><a href='/blog/page-$i'>$i</a></li>";
						}

					}
					echo "</ul>";
				}
				?>
                    </div>
          </div>
        <!-- end div#wrapper -->
    </body>

<?php
require_once ROOT."/views/layouts/footer.php";
?>