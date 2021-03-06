<?php
	$name= 'Сагайдачний Богдан Ярославович';
	$age="32 ";
	$phone_cell= ' 044-777-7777';
	$phone_home= ' 067-333-3333';
	$city= 'г.Киев';
	$email= 'lucky@7sky.com'

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>

	<div id="wrapper">
		<div id="header"></div>
	</div>

	<div id="content">
		<table>
			<tr >
				<td class="table-left"> 
					<img src="img/who.jpg" class="port-img" alt="portrait photo" >
				</td>
				<td class="table-right"><h1> Резюме </h1> </td>
			</tr>
			<tr>
				<td class="table-left" >Контактные данные</td>
				<td class="table-right">
					<ul>
						<li><!--ФИО:--> 		<?=$name ?>  </li>
						<li><!--Возвраст--> 	<?=$age ?>года</li>
						<li><!--Тел-->  моб<?=$phone_cell ?> дом <?=$phone_home ?>  </li>
						<li><!--Город прож.-->  <?=$city ?></li>
						<li><!--Email--> 		<?=$email ?></li>
						
					</ul>
				</td>
			</tr>

			<tr>
				<td class="table-left" >Обобщение</td>
				<td class="table-right">Сразу после вашего имени пропишите две-три коротких фразы, в которых покажите все свои преимущества как кандидата. Не пишите общих слов. Определите свои самые сильные профессиональные качества, которые непосредственно связаны с будущей работой, например, большой опыт в этой сфере или знание нескольких языков, и лаконично изложите их. Этот пункт очень важен, поскольку работодатель тратит на каждое резюме не более 20 секунд, соответственно, захватить его внимание нужно в первый момент.</td>
			</tr>

			<tr>
				<td class="table-left" >Компетенции </td>
				<td class="table-right">Если вы хотите правильно написать резюме, тогда в этом разделе приведите небольшой перечень ваших профессиональных знаний и навыков. Проще говоря, напишите, что именно вы умеете делать. При этом отталкивайтесь от списка требований и функциональных обязанностей, прописанных в вакансии. Например, если, согласно вакансии, вы должны будете создавать рекламные кампании, пропишите конкретные умения: «Медиапланирование», «Бюджетирование рекламных кампаний», «Умение работать с подрядчиками» и т.д. Если вы сомневаетесь, какие лучше умения указать в резюме, посмотрите готовые резюме кандидатов из вашей сферы на различных job-порталах – не исключено, что вы найдете немало подсказок.</td>
			</tr>

			<tr>
				<td class="table-left" >Образование</td>
				<td class="table-right">Сюда можно включить как ваше учебное заведение, где вы получили высшее образование, так и все крупные тренинги, семинары, программы, которые вы дополнительно проходили. Если вы посетили огромное количество таких мероприятий, эксперты советуют отбирать только по-настоящему стоящие и близкие к вашей профессии. Работодатель не будет тратить время и вчитываться в длинный список ваших кулинарных курсов, и может не заметить важный семинар, который добавит вам веса как специалисту.</td>
			</tr>

			<tr>
				<td class="table-left" > Опыт работы</td>
				<td class="table-right">Ваш карьерный путь лучше описать в обратном хронологическом порядке – от последнего места работы к первому. Затем все следует оформить так: после названия места работы лучше сразу прописать свои ключевые достижения в компании. Это должны быть конкретные примеры, чего вы добились на предыдущем месте работы. Увеличили продуктивность на 30%? Сократили расходы компании? Наладили систему сотрудничества между отделами? Успешно управляли командой в 50 человек?</td>
			</tr>
		</table>
	</div>

	<div class="clear">
		<div id="footer">
			<div class="social">
			<a href="#" class="tw">Twitter</a>
			<a href="#" class="fb" >Facebook</a>
			<a href="#" class="rs">RSS</a>
			<a href="#" class="em">Mail</a>
		</div>
	</div>
	
</body>
</html>

