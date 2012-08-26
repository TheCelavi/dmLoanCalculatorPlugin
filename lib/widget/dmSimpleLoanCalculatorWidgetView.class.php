<?php

class dmSimpleLoanCalculatorWidgetView extends dmWidgetPluginView {

    protected function filterViewVars(array $vars = array()) {
        $vars['form'] = new dmSimpleLoanCalculatorForm();
        return parent::filterViewVars($vars);
    }


    public function getJavascripts() {
        return array(
            'dmLoanCalculatorPlugin.launch'
        );
    }
    
    public function getStylesheets() {
        return array(
            'dmLoanCalculatorPlugin.theme',
        );
    }

}

?>
