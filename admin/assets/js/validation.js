function validate(formId){
	let err = false;
    $('#' + formId).find(':input[type="text"]').each(function () {
        if ($(this).val().trim() === '') {
            $(this).addClass('error');
            err = true;
        } else {
            $(this).removeClass('error');
        }
    });
	$('#' + formId).find('select').each(function () {
        if ($(this).val().trim() === '-1') {
            $(this).addClass('error');
            err = true;
        } else {
            $(this).removeClass('error');
        }
    });
	
	return err;
}