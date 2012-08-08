<?php
echo '<h2>'.$news_item['title'].'</h2>';
echo $news_item['text'];
?>
<div id="box">
					<div class="box">
						<h2><?php
                                                echo $news_item['title'];
                                            
                                                ?></h2>
						<img class="alignleft" src="images/pic01.jpg" alt="" />
						<p>
							<?php
                                                echo $news_item['text'];
                                            
                                                ?>
						</p>
					</div>
					<?php foreach ($news as $news_item): ?>
						<div class="box">
						<h3><?php echo $news_item['title'] ?></h3>
						<p>
        					<?php echo $news_item['text'] ?>
    					</p>
    					<ul class="list">
							<li class="last"><a href="news/<?php echo $news_item['slug'] ?>">View article</a></li>
						</ul>
						<?php endforeach ?>
					<br class="clearfix" />
				       </div>