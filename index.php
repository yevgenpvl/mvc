<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>HTML5</title>
	<style type="text/css" media="screen">
		header, nav, article, section, footer {
			display: block;
		}
		
		section header {
			color: green;
		}

		article header {
			color: red;
		}

	</style>
	<script type="text/javascript">
		document.createElement('header');
		document.createElement('nav');
		document.createElement('article');
		document.createElement('section');
		document.createElement('footer');
	</script>
	<!--[if lt IE 9]>
	<script type="text/javascript" src="html5shiv.js"></script>
	<![endif]-->
</head>
<body>
	<header>
		<hgroup> <!-- чтобы было понятно что оба заголовка являются одной группой элементов-->
			<h1>Новая компания</h1>
			<h2>Слоган</h2>
		</hgroup>
	</header>

	<nav>
		<ul>
			<li></li>
		</ul>
	</nav>
	
	<div id="sidebar">
		<!-- Этот тег aside находится снаружи article, поэтому относится не к контенту страницы, а к сайту в целом. -->
		<aside>
			В этом асайде будет контент который относится не к статье, а к сайту в целом, так как он лежит не внтури статьи а снаружи.
		</aside>
	</div>

	<section>
		<header>
			<h2>Название какой-то секции</h2>
		</header>

		<article>
			<header>
				<h3>Заголовок статьи</h3>
				<p>Текст под загловком</p>
				<time datetime="2016-02-27" pubdate>27 февраля</time>
				<!-- атрибут pubdate говорит о том что это дата публикации-->
			</header>
			<p>
				Это событие произошло <time datetime="2016-01-04T20:00:00.001+4:00">4 января, в 8 вечера.</time>
				<!-- Как бы мы теперь не написали дату - с точки зрения пользователя 
				это будет удобно, а машина будет индексировать то что в теге time
				T20:00:00 это время и часовой пояс-->
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>	
			<aside>
				Дополнительная информация внутри статьи. Это некий контент который можно вытащить из статьи
				и при этом она не потеряет своего смысла.
				Парсер будет относить эту информацию к конкретной статье.
			</aside>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<section>
				<header>
					<h1>Комментарий</h1>
					<article>
						<header>
							Комментарий от Иван Иваныча
							Отправлен 12 августа
						</header>
						Текст комментария
					</article>
					<article>
						<header>
							Комментарий от Петра Петровича
							Отправлен 13 августа
						</header>
						Текст комментария
					</article>
				</header>
			</section>	
		</article>

		<article>
			<header>
				<h3>Заголовок статьи 2</h3>
				<p>Текст под загловком 2</p>
			</header>			
			
			<!-- Здесь мы связываем изображение с описанием-->
			<figure>
				<img src="" alt="">				
				<figcaption>Описание к изображению</figcaption>
			</figure>

			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>	
			<footer>				
				Автор: Петр Петров,
				дополнительная информация
				источники информации - ссылки	
				Может использоваться не однокртано на странице и в статье.			
			</footer>	
		</article>
	</section>

	<details>
		<summary>Подробнее о каком-либо предмете/факте/другое из статьи</summary>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</details>

	<footer>
		Copyright
		<address>Контактая информация: г.Павлодар, т. 8273774</address>
	</footer>
	Контент от обратного.
	Те части которые не являются футерами асайдами или нав являются контентом.
</body>
</html>