<?php
/**
 *
 * @package phpBB Sitemaker [English]
 * @copyright (c) 2013 Daniel A. (blitze)
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$strings = array(
	'ACP_SITEMAKER'				=> 'SiteMaker',
	'ACP_SM_SETTINGS'			=> 'Настройки',

	'FILEMANAGER_SETTINGS'						=> 'Настройки файлового менеджера',
	'FILEMANAGER_STATUS'						=> 'Статус',
	'FILEMANAGER_NO_EXIST'						=> 'Прежде чем Вы сможете продолжить, необходимо установить Диспетчер файлов. Инструкции по установке находится <a href="https://github.com/blitze/phpBB-ext-sitemaker/blob/develop/docs/en/filemanager.md" target="_blank"  rel="noopener noreferrer"><strong>здесь</strong></a>',
	'FILEMANAGER_IMAGE_AUTO_RESIZE'				=> 'Автоматически изменять размер загруженных изображений?',
	'FILEMANAGER_IMAGE_AUTO_RESIZE_DIMENSIONS'	=> 'Изменить размер до указанных размеров',
	'FILEMANAGER_IMAGE_AUTO_RESIZING_MODE'		=> 'Режим автоматического изменения размера',
	'FILEMANAGER_IMAGE_MAX_DIMENSIONS'			=> 'Макс. размер изображения',
	'FILEMANAGER_IMAGE_MAX_MODE'				=> 'Режим макс. размера изображения',
	'FILEMANAGER_IMAGE_MODE_EXPLAIN'			=> 'Используется для расчета высоты / ширины, если вы задаете только высоту или ширину, но не оба значения',
	'FILEMANAGER_IMAGE_MODE_AUTO'				=> 'Авто',
	'FILEMANAGER_IMAGE_MODE_CROP'				=> 'Обрезка',
	'FILEMANAGER_IMAGE_MODE_EXACT'				=> 'Как есть',
	'FILEMANAGER_IMAGE_MODE_LANDSCAPE'			=> 'Пейзаж',
	'FILEMANAGER_IMAGE_MODE_PORTRAIT'			=> 'Портрет',
	'FILEMANAGER_WATERMARK'						=> 'Водяной знак',
	'FILEMANAGER_WATERMARK_EXPLAIN'				=> 'Ссылка URL изображения для использования в качестве водяного знака на всех загружаемых изображениях',
	'FILEMANAGER_WATERMARK_POSITION'			=> 'Расположение водяного знака',
	'FILEMANAGER_WATERMARK_POSITION_EXPLAIN'	=> 'Выберите заранее определенную позицию, где должен появиться водяной знак, или введите координаты, например 50x100',
	'FILEMANAGER_WATERMARK_POSITION_TL'			=> 'Вверху слева',
	'FILEMANAGER_WATERMARK_POSITION_T'			=> 'Вверху',
	'FILEMANAGER_WATERMARK_POSITION_TR'			=> 'Вверху справа',
	'FILEMANAGER_WATERMARK_POSITION_L'			=> 'Слева',
	'FILEMANAGER_WATERMARK_POSITION_M'			=> 'По середине',
	'FILEMANAGER_WATERMARK_POSITION_R'			=> 'Справа',
	'FILEMANAGER_WATERMARK_POSITION_BL'			=> 'Снизу слева',
	'FILEMANAGER_WATERMARK_POSITION_B'			=> 'Снизу',
	'FILEMANAGER_WATERMARK_POSITION_BR'			=> 'Снизу справа',
	'FILEMANAGER_WATERMARK_POSITION_SUFFIX'	=> 'или',
	'FILEMANAGER_WATERMARK_PADDING'				=> 'Водяной знак размещен',
	'FILEMANAGER_WATERMARK_PADDING_EXPLAIN'		=> 'Если вы используете заранее определенную позицию, вы можете задать отступы по краям. Если используются координаты, это значение игнорируется',
	'FILEMANAGER_AVIARY_API_KEY'				=> 'API-интерфейс редактора изображений Aviary',
	'FILEMANAGER_AVIARY_API_KEY_EXPLAIN'		=> 'Подпишитесь на creativesdk.adobe.com, чтобы получить бесплатный ключ API на <a href="https://creativesdk.adobe.com/myapps.html" target="_blank"><strong>My Apps</strong></a>.<br />Без действительного ключа API вы не сможете сохранить отредактированные изображения',

	'FORUM_INDEX_SETTINGS'			=> 'Настройки первой страницы форума',
	'FORUM_INDEX_SETTINGS_EXPLAIN'	=> 'Эти настройки применяются только тогда, когда начальная страница не определена',

	'HIDE'						=> 'Скрыть',
	'HIDE_BIRTHDAY'				=> 'Скрыть раздел «Дни рождения»',
	'HIDE_LOGIN'				=> 'Скрыть окно авторизации',
	'HIDE_ONLINE'				=> 'Скрыть раздел Кто в сети',

	'LAYOUT_BLOG'				=> 'Блог',
	'LAYOUT_CUSTOM'				=> 'Пользовательский',
	'LAYOUT_HOLYGRAIL'			=> 'Святой Грааль',
	'LAYOUT_PORTAL'				=> 'Портал',
	'LAYOUT_PORTAL_ALT'			=> 'Портал (альтернатива)',
	'LAYOUT_SETTINGS'			=> 'Настройки макета',

	'NAVIGATION_SETTINGS'		=> 'Настройки навигации',
	'NO_NAVBAR'					=> 'Ничего',

	'SELECT_NAVBAR_MENU'		=> 'Выберите главное меню навигации для шапки',
	'SETTINGS_SAVED'			=> 'Ваши настройки были сохранены',
	'SHOW'						=> 'Демонстрация',
	'SHOW_FORUM_NAV'			=> 'Показать ссылку ’Форум’ на панели навигации?',
	'SHOW_FORUM_NAV_EXPLAIN'	=> 'Если страница задана в качестве Стартовой, отображать ссылку «Форум» на панели навигации',
	'SHOW_FORUM_NAV_WITH_ICON'	=> 'Да - со значком:',
);

$lang = array_merge($lang, $strings);
