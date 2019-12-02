$(function () {

    let $email = $('#inputEmail4');
    let $text = $('#Textarea1');
    let $city = $('#inputCity');
    let $many = $('#inputState');
    let $timevon = $('#datetimepicker3');
    let $timebis = $('#datetimepicker4');

    $('#submitEntry').on('click', function () {

        let activity = {
            e_mail: $email.val(),
            description: $text.val(),
            end_time: $timebis.val()
        };
        console.log(activity);
        $.ajax({
            type: 'POST',
            url: '/api/activities',
            data: JSON.stringify(activity),
            success: function(){
                write('succes');
            }
        });
    });
});