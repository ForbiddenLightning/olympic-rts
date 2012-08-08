				<div id="content">
					<div class="box">
						<h2>Welcome to Olympic RTS</h2>
						<img class="alignleft" src="images/logo lr.jpg" alt="" />
						<p>
							You can edit this in <strong>application/views/news/index.php</strong>
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