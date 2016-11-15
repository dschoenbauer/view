<?php

use DSchoenbauer\View\TemplatedView;

try {
    include './vendor/autoload.php';
    $view = new TemplatedView('template/layout.html');
    $data = ['header' => [], 'content' => [], 'footer' => []];
    $template = new TemplatedView();
    echo $view->render([
        'header' => $template->setTemplate('template/header.html')->render($data['header']),
        'content' => $template->setTemplate('template/content.html')->render($data['content']),
        'footer' => $template->setTemplate('template/footer.html')->render($data['footer']),
    ]);
} catch (Exception $exc) {
    echo "Site Is Not Setup";
}
