<?php

echo _open('div.dm_simple_loan_calculator_container');
echo _open('ul');

echo _tag('li', $form['principal_sum']->renderLabel('Principal sum (€)').$form['principal_sum']->render());
echo _tag('li', $form['tenure']->renderLabel('Tenure (year)').$form['tenure']->render());
echo _tag('li', $form['ir']->renderLabel('Interest rate (%)').$form['ir']->render());

echo _tag('div', 'Monthly installment: '._tag('span.installemnt',  'N/A'));

echo _tag('button.calculate', __('Calculate'));
echo _tag('button.reset', __('Reset'));



echo _close('ul');
echo _close('div');


