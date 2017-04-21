<div class="well">
    <p>  
<h2><?php echo __('Category'); ?></h2>
</p>
	<dl>
            <p>
		<dt><?php echo __('Category Name'); ?></dt>
                </p>
             
		<dd>
                    <p>
			<?php echo h($category['Category']['category_name']); ?>
			&nbsp;
                        
               </p>         
		</dd>
                <p>
		<dt><?php echo __('Enable Category'); ?></dt>
                </p>
		<dd>
			<?php echo h($category['Category']['enable_category']); ?>
			&nbsp;
		</dd>
	</dl>
</div>


