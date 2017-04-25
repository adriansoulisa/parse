<?php
$json_file = file_get_contents('posts.json');
$jfo = json_decode($json_file);
$title = $jfo->result->title;
$posts = $jfo->result->posts;
?>

<!DOCTYPE html>
<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Parse</title>
		<link rel="stylesheet" href="css/style.css" />
</head>

<body>

		<div class="container">		
				<h1 class="main_title"><?php echo $title; ?></h1>
		
			<div class="content">
				<ul class="ul_json clearfix">
		<?php
			foreach ($posts as $post) {
		?>
				<li>
					<a href="<?php echo $post->link; ?>">
					<h2><?php echo $post->title; ?></h2>
					<img src="<?php echo $post->img; ?>">
					</a>
				</li>
		<?php
		} 
		?>
				</ul>
			</div>
		</div>
</body>
</html>