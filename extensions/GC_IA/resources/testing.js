$(document).ready(function(){
    var com_selectized = $('.audience-select').selectize({
        plugins:['remove_button','clear_button'],
        theme: 'bootstrap',
        
        onBlur: function(){
            var audienceVals = com_selectized[0].selectize.getValue();
            var textArea = $('textarea');
            
            for(var i=0; i<audienceVals.length; i++){
                console.log('[[:Category:'+audienceVals[i]+']]');
            }
            textArea.val(textArea.val() + audienceVals);
            console.log(audienceVals);
        }
        
    });
});