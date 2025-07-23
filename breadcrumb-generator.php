<script type="application/ld+json">
{
	"@context": "https://schema.org/",
	"@type": "BreadcrumbList",
	"itemListElement": [<?php
						$home = 'Home';
						$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
						$path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
						$base = $protocol . '://' . $_SERVER['HTTP_HOST'] . '/';

						$breadcrumbs = Array($home.'::'.$base);

						$array_keys = array_keys($path);
						$last = end($array_keys);

						foreach ($path AS $x => $crumb) {
							$title = ucwords(str_replace(Array('.php', '-'), Array('', ' '), $crumb));

							if($x != $last){
								$breadcrumbs[] = $title.'::'.$base.$crumb.'/';
								$base = $base.$crumb.'/';
							}else{
								$breadcrumbs[] = $title.'::'.$base.$crumb;
								$base = $base.$crumb;
							}
						}

						foreach ($breadcrumbs as $key => $val) {
							list($name, $item) = explode("::", $val);
							echo '{"@type": "ListItem",';
							echo '"position": '.($key+1).',';
							echo '"name": "'.$name.'",';
							echo '"item": "'.$item.'"}';
							if($key<count($breadcrumbs)-1){echo ',';}
						}
					?>]
}
</script>
