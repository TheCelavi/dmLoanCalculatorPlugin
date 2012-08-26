(function($){
    
    function isNumber(n) {
        return !isNaN(parseFloat(n)) && isFinite(n);
    }
    
    function calculateInstallment(principal_sum, tenure, IR) {
        IR = IR/1200;
        tenure = tenure * 12;
        return principal_sum * IR / (1 - (Math.pow(1/(1 + IR), tenure)));
    };
    
    $('#dm_page div.dm_widget').bind('dmWidgetLaunch', function() {
        
        if ($(this).find('button.calculate').length) { 
     
            var $widget = $(this);
     
            $widget.find('button.calculate').click(function(){
                var pSum = parseInt($widget.find('#dm_simple_loan_calculator_form_principal_sum').val());
                var tenure = parseInt($widget.find('#dm_simple_loan_calculator_form_tenure').val());
                var IR = parseFloat($widget.find('#dm_simple_loan_calculator_form_ir').val());
                var installment = calculateInstallment(pSum, tenure, IR);
                if (isNumber(installment)) {
                    $widget.find('span.installemnt').text(Math.round(installment*100)/100);
                } else {
                    $widget.find('span.installemnt').text('');
                };
            });
            
            $widget.find('button.reset').click(function(){
                $widget.find('#dm_simple_loan_calculator_form_principal_sum').val('');
                $widget.find('#dm_simple_loan_calculator_form_tenure').val('');
                $widget.find('#dm_simple_loan_calculator_form_ir').val('');
                $widget.find('span.installemnt').text('');
            });
        };
        
    });    
})(jQuery);