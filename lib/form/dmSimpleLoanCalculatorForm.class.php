<?php

class dmSimpleLoanCalculatorForm extends dmForm {

    public function configure() {

        $this->widgetSchema['principal_sum'] = new sfWidgetFormInputText();
        $this->validatorSchema['principal_sum'] = new sfValidatorPass();
        
        $this->widgetSchema['tenure'] = new sfWidgetFormInputText();
        $this->validatorSchema['tenure'] = new sfValidatorPass();
        
        $this->widgetSchema['ir'] = new sfWidgetFormInputText();
        $this->validatorSchema['ir'] = new sfValidatorPass();
        
        $this->setName('dm_simple_loan_calculator_form');
        
        parent::configure();
    }

}


