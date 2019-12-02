$(function () {

    let $email = $('#inputEmail4');
    let $text = $('#Textarea1');
    let $activity = $('#activity');
    let $many = $('#inputState');
    let $timevon = $('#datetimepicker3');
    let $timebis = $('#datetimepicker4');

    $('#submitEntry').on('click', function () {

        let activity = {
            activity_id: $activity.val(),
            e_mail: $email.val(),
            description: $text.val(),
            end_time: $timebis.val(),
            start_time: $timevon.val()
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