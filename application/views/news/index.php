				<div id="content">
					<div class="box">
						<h2>Welcome to Olympic RTS</h2>
						<img class="alignleft" src="<?php echo base_url() . 'css/images/logo.jpg'; ?>" alt="" />
						<p>
							Welcome to Olympic RTS, a game made by a group from YRS2012, Olympic RTS is a stratedgy game. Using Olympic DataSets, allows you to buy, trade, train and sell athletes from your selected country. so you can pick GB, and you get all the athletes you can buy, and train or just trade with other players. you start off with some money to buy your first athletes, for now the game will only contain the running events, we might be adding a micro-transaction system in the future so you can complete the game quicker. but you will be able to play and not spend any money, please dont worry about balence as we have NOT given any country any advantidge, and all will be fair, there will be a selected amount of athletes around so you can only have ONE of each athlete, and you can not buy other countrys athletes.
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