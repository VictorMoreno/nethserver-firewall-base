<?php

if ($view->getModule()->getIdentifier() === 'create') {
    $headerTemplate = $T('provider_create_header');
} else {
    $headerTemplate = $T('provider_update_header');
}

echo $view->header('name')->setAttribute('template', $headerTemplate);

echo $view->panel()
    ->insert($view->textInput('name', ($view->getModule()->getIdentifier() == 'update' ? $view::STATE_READONLY : 0)))
    ->insert($view->selector('interface', $view::SELECTOR_DROPDOWN))
    ->insert($view->textInput('checkip'))
    ->insert($view->textInput('weight'))
    ->insert($view->textInput('Description'));

echo $view->buttonList($view::BUTTON_SUBMIT | $view::BUTTON_CANCEL);

