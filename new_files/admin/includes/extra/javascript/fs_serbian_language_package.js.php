<?php
// Check if module is installed
if (!defined('MODULE_FS_SERBIAN_LANGUAGE_PACKAGE_STATUS') || MODULE_FS_SERBIAN_LANGUAGE_PACKAGE_STATUS != 'true') return;
// Check if user is on the page for managing modules
if (pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME) != 'module_export') return;
// Check if user is deleting the module
if (!isset($_GET['action']) || $_GET['action'] != 'remove') return;
// Check if user is deleting 'fs_serbian_language_package' module
if (!isset($_GET['module']) || $_GET['module'] != 'fs_serbian_language_package') return;
// Check if selected language is default language of the shop
use Gulliver72\ModifiedStdLanguageModule\Classes\StdLanguageModule;
require_once DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php';
// Check if selected language is default language of the shop
$stdLanguageModule = new StdLanguageModule();
$stdLanguageModule->setLanguageIdByCode('sr');
$isDefaultLanguage = $stdLanguageModule->getIsStandard();
?>

<script type="text/javascript">
$(document).ready(function(){
  var deleteMessage = $('.contentTable').find('td.infoBoxContent')[0];
  $(deleteMessage).empty().html('<?php echo $isDefaultLanguage ? TEXT_DELETE_LANGUAGE_DEFAULT_CONFIRM : TEXT_DELETE_LANGUAGE_CONFIRM; ?>');

});
</script>

<?php
if ($isDefaultLanguage) {
?>

<script type="text/javascript">
$(document).ready(function(){
  var deleteButton = $('.contentTable').find('input.button');
  $(deleteButton).addClass('disabled_button');
  $('.disabled_button').on('click', (e) => {e.preventDefault()});
});
</script>

<?php
}
?>