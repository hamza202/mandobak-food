//== Class definition

var FormControls = function () {
    //== Private functions
    var demo1 = function () {
        $( '#m_form_1').validate({
            // define validation rules
            rules: {
                cCpass: {
                    equalTo: '#cNPass'
                },
            },
            
            //display error alert on form submit  
            invalidHandler: function(event, validator) {     
                var alert = $('#m_form_1_msg');
                alert.removeClass('m--hide').show();
                mUtil.scrollTop();
            },


        });       
    };


    return {
        // public functions
        init: function() {
            demo1();
        }
    };
}();

jQuery(document).ready(function() {    
    FormControls.init();
});