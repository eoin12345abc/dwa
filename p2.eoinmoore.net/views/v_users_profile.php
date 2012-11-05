<h1>This is the profile of <?=$user->first_name?></h1>
<? foreach($own_posts as $own_post): ?>
<?$date = date("D, d M Y", $own_post['created']);?>
<?$time = date("H:i:s", $own_post['created']);?>
 On <?=$date.", ". $time. "  ".$user->first_name?> wrote:
	<?=$own_post['content']?>
	
	<br><br>
	
<? endforeach; ?>