<?php
/**
 *
 * @package Recent Topics Extension
 * English translation by PayBas
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
 */

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge(
	$lang, array(
	//forum acp
	'RECENT_TOPICS_LIST'            => 'Відображати в "Останні теми"',
	'RECENT_TOPICS_LIST_EXPLAIN'    => 'Якщо увімкнено, то теми цього форуму будуть відображатися в списку останніх тем.',

	//acp title
	'RECENT_TOPICS'                 => 'Останні теми',
	'RT_CONFIG'                     => 'Налаштування',
	'RECENT_TOPICS_EXPLAIN'         => 'На цій сторінці Ви можете змінити налаштування, специфічні для розширення "Останні Теми". <br /> <br /> Форуми можуть бути включені або виключені шляхом редагування відповідних форумів в АП. <br /> Крім того, обов’язково перевірте права користувачів, які дають можливість користувачам змінювати наступні налаштування персонально.',

	//global settings
	'RT_GLOBAL_SETTINGS'            => 'Загальні налаштування',
	'RT_DISPLAY_INDEX'              => 'Відображати на головній сторінці',
	'RT_NUMBER'                     => 'Кількість тем в списку',
	'RT_NUMBER_EXP'                 => 'Кількість тем на головній сторінці.',
	'RT_PAGE_NUMBER'                => 'Кількість сторінок в списку тем',
	'RT_PAGE_NUMBER_EXP'            => 'Ця функція перезаписує встановлену максимальну кількість сторінок і показує всі сторінки незалежно від того, скільки сторінок встановлено опцією.',
	'RT_PAGE_NUMBERMAX'             => 'Максимальна кількість сторінок',
	'RT_PAGE_NUMBERMAX_EXP'         => 'Вкажіть максимальну кількість сторінок для відображення в списку тем.',
	'RT_MIN_TOPIC_LEVEL'            => 'Мінімальний тип теми',
	'RT_MIN_TOPIC_LEVEL_EXP'        => 'Цей параметер визначає мінімальний рівень типу тем. Буде відображено теми тільки вказаного рівня і вище.',
	'RT_ANTI_TOPICS'                => 'Не відображати теми з вказаними ID',
	'RT_ANTI_TOPICS_EXP'            => 'Теми з вказаними ID будуть виключені зі списку відображення. Кожен ID теми має бути розділений комою “,” (Наприклад: 7,9)<br />Значення "0" деактивує цей список виключення.',
	'RT_PARENTS'                    => 'Відображати батьківські форуми',
	'RT_PARENTS_EXP'                => 'Відображати батьківські форуми в рядку теми.',

	//User Overridable settings. these apply for anon users and can be overridden by UCP
	'RT_OVERRIDABLE'                => 'Користувацькі налаштування (може бути змінено користувачем)',
	'RT_LOCATION'                   => 'Місце відображення',
	'RT_LOCATION_EXP'               => 'Вкажіть місце відображення списку останніх тем.',
	'RT_TOP'                        => 'Відображати зверху',
	'RT_BOTTOM'                     => 'Відображати внизу',
	'RT_SIDE'                       => 'Відображати на стороні',
	'RT_SORT_START_TIME'            => 'Сортувати за датою створення теми',
	'RT_SORT_START_TIME_EXP'        => 'Сортувати теми в списку нових тем за датою створення, замість дати написання останнього повідомлення в темі.',
	'RT_UNREAD_ONLY'                => 'Відображати тільки непрочитані теми',
	'RT_UNREAD_ONLY_EXP'            => 'Включає відображення тільки непрочитаних тем (незалежно чи вони "нові" чи ні). Ця функція не працює для гостей, тільки для зареєстрованих користувачів.',
	'RT_RESET_DEFAULT'              => 'Скидання налаштування користувачів',
	'RT_RESET_DEFAULT_EXP'          => 'Скидання персональних налаштувань користувачів до стандартних налаштувань.',

	//Enable for extensions
	'RT_NICKVERGESSEN_NEWSPAGE'     => 'Сумісність з розширенням NewsPage (сторінка новин)',
	'RT_VIEW_ON'                    => 'Відображати останні повідомлення на:',

	//Donation
	'RT_DONATE_URL'             => 'http://www.avathar.be/bbdkp/app.php/page/donate',
	'PAYPAL_IMAGE_URL'          => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                => 'Підтримайте проект через PayPal',
	'RT_DONATE'					=> 'Підтримайте проект "RecentTopics" ("Останні Теми")',
	'RT_DONATE_SHORT'			=> 'Підтримайте проект фінансово',
	'RT_DONATE_EXPLAIN'			=> 'Розширення "Останні Теми" 100% безплатне. Це хобі, на яке я витрачаю свій час. Якщо Вам подобається цей додаток, можете зробити пожертву для його розвитку. Я був би щиро вдячний.',
	)
);
