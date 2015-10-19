<?php
		$Post=new ThemePost();
		
		$query=$Post->getPostRecent($this->data['instance']);
		
		if($query)
		{
			$id='widget_theme_widget_post_most_recent_'.ThemeHelper::createId();
			
			echo $this->data['html']['start']; 
?>
			<div class="widget_theme_widget_post_most_recent theme-clear-fix" id="<?php echo esc_attr($id); ?>">
				
				<ul class="theme-reset-list">
<?php
			global $post;
			$bPost=$post;

			while($query->have_posts())
			{
				$query->the_post();
				
				$Post->formatPostDate($post->post_date,$day,$month,$year,2);
?>
					<li class="theme-clear-fix">
<?php
				if(has_post_thumbnail())
				{
?>
						<a href="<?php the_permalink(); ?>">
							<?php echo get_the_post_thumbnail(get_the_ID(),'thumbnail'); ?>
						</a>
<?php					
				}
?>
						<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
						<span><?php echo $month.' '.$day.', '.$year; ?></span>
					</li>			
<?php
			}
		
			$post=$bPost;
?>
				</ul>
				
			</div>
<?php
			echo $this->data['html']['stop']; 
		}