<?php
/**
 *
 * @package Recent Topics Extension
 * Arabic translation by Bassel Taha Alhitary (www.alhitary.net)
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
	'RECENT_TOPICS_LIST'            => 'تفعيل أحدث المواضيع ',
	'RECENT_TOPICS_LIST_EXPLAIN'    => 'السماح بعرض مواضيع هذا المنتدى في قائمة "أحدث المواضيع".',

	//acp title
	'RECENT_TOPICS'                 => 'أحدث المواضيع',
	'RT_CONFIG'                     => 'الإعدادات',
	'RECENT_TOPICS_EXPLAIN'         => 'من هنا تستطيع التحكم بالإعدادات الخاصة بالإضافة : أحدث المواضيع.<br /><br />تستطيع تحديد المنتديات التي تريد عرضها أو استثنائها من العرض في أحدث المواضيع بالذهاب إلى اعدادات المنتدى في لوحة التحكم الرئيسية.<br />أيضاً تأكد من صلاحيات الأعضاء , حيث تستطيع السماح لهم بالتعديل على بعض الخيارات من لوحة التحكم الخاصة بهم.',

	//User Overridable settings. these apply for anon users and can be overridden by UCP
	'RT_OVERRIDABLE'                => 'الإعدادات الرئيسية',
	'RT_DISPLAY_INDEX'              => 'العرض في الصفحة الرئيسية ',
	'RT_LOCATION'                   => 'مكان العرض ',
	'RT_LOCATION_EXP'               => 'حدد المكان لظهور أحدث المواضيع.',
	'RT_TOP'                        => 'الأعلى',
	'RT_BOTTOM'                     => 'الأسفل',
	'RT_SIDE'                       => 'الجانب',
	'RT_SORT_START_TIME'            => 'الترتيب حسب وقت إضافة الموضوع ',
	'RT_SORT_START_TIME_EXP'        => 'اختيارك "نعم" يعني ترتيب أحدث المواضيع بحسب وقت إضافة الموضوع , بدلاً من الترتيب بحسب وقت آخر مشاركة.',
	'RT_UNREAD_ONLY'                => 'عرض المواضيع الغير مقروءة فقط ',
	'RT_UNREAD_ONLY_EXP'            => 'تفعيل هذا الخيار يعني اظهار المواضيع الغير مقروءة فقط ( بغض النظر لو هذه المواضيع حديثة أو قديمة ). هذا الخيار يستخدم نفس اعدادات الطريقة العادية ( استبعاد المنتديات/المواضيع..الخ ).<br />ملاحظة : هذا الخيار يظهر فقط للأعضاء المسجلين دخولهم للمنتدى. الزائرين سيُشاهدون القائمة العادية.',

	//global settings
	'RT_GLOBAL_SETTINGS'            => 'الإعدادات العامة',
	'RT_NUMBER'                     => 'عدد المواضيع ',
	'RT_NUMBER_EXP'                 => 'عدد المواضيع التي تريد عرضها.',
	'RT_PAGE_NUMBER'                => 'عدد الصفحات ',
	'RT_PAGE_NUMBER_EXP'            => 'اكتب القيمة 1 لتعطيل هذا الخيار.',
	'RT_MIN_TOPIC_LEVEL'            => 'نوع المواضيع  ',
	'RT_MIN_TOPIC_LEVEL_EXP'        => 'تحديد نوع المواضيع التي تريد عرضها. سيتم العرض من الأقل إلى الأكثر.',
	'RT_ANTI_TOPICS'                => 'المواضيع المُستبعدة ',
	'RT_ANTI_TOPICS_EXP'            => 'اكتب علامة الفاصلة ", " بين أرقام المواضيع التي تريد عدم ظهورها في "أحدث المواضيع" ( مثال : 7,9 )',
	'RT_PARENTS'                    => 'إظهار المنتدى الأب ',
	'RT_PARENTS_EXP'                => 'إظهار إسم "المنتدى الأب" في التفاصيل المذكورة تحت أسم الموضوع.',

	//Enable for extensions
	'RT_VIEW_ON'                     => 'إظهار أحدث المواضيع في :',

	)
);
