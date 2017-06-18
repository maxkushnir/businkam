<?php
require_once ROOT."/views/layouts/header.php";
?>
<style type="text/css">
	#disqus_thread{
		align-self: center;
	}
</style>
<div class="content">
		<div class="container">
			
				<h1><?php echo $article['name'] ;?></h1>
				
				<div class="context"><?php
					echo $article['context'];
				?>
				</div>
				<!-- <span class="articleTime pull-right"><?php echo $article['time_create'] ;?></span> -->
				<div id="disqus_thread"></div>
		</div>
		<!-- <div class="fon">
			<div class="fon_content_down"></div>

		</div> -->

</div>

        <script>

        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://businkam-com-ua.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    
<?php require_once ROOT."/views/layouts/footer.php"; ?>