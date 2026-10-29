<?php

use Drupal\Component\Utility\Html;
use XssFilterComparator\AntiXssFilter;
use XssFilterComparator\DrupalFilter;
use XssFilterComparator\EzyangFilter;
use XssFilterComparator\HtmlawedFilter;
use XssFilterComparator\RhuksterFilter;
use XssFilterComparator\SymfonyFilter;
use XssFilterComparator\Typo3Filter;

require_once __DIR__ . '/vendor/autoload.php';

$payload = $_POST['payload'] ?? '';
?>
<!DOCTYPE HTML>
<html lang="en">
<head><title>XSS filter comparator</title></head>
<body>
<h1>XSS filter comparator</h1>
<form method="post">
    <label>
        <textarea rows="5" cols="60" name="payload"><?php echo Html::escape($payload); ?></textarea>
    </label>
    <input type="submit">
</form>

<?php
$filters = [
        new DrupalFilter(),
        new SymfonyFilter(),
        new HtmlawedFilter(),
        new Typo3Filter(),
        new AntiXssFilter(),
        new RhuksterFilter(),
        new EzyangFilter(),
];

if (!empty($payload)) {
    foreach ($filters as $filter) {
        echo '<h2>' . Html::escape($filter->getLabel()) . '</h2>';
        echo $filter->filter($payload);
    }
}
?>
</body>
</html>
