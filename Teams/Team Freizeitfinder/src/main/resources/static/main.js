$(document).ready(function () {


    const form ={
        description : document.getElementById('Textarea1'),
        attendeesTotal: document.getElementById('inputState'),
        generalActivity: document.getElementById('activity'),
        endTime: document.getElementById('datetill'),
        startTime: document.getElementById('datefrom'),
        eMailAdress: document.getElementById('inputEmail4'),
        submit: document.getElementById('submitEntry')
    };
    form.submit.addEventListener('click', () => {
        const request = new XMLHttpRequest();

        request.onload = () => {
            console.log(request.responseText);
        };

        const requestData = `description=${form.description.value}&attendeesTotal=${form.attendeesTotal.value}&generalActivity=${form.generalActivity.value}&endTime=${form.endTime.value}&startTime=${form.startTime.value}&eMailAdress=${form.eMailAdress.value}`
        console.log(requestData);
        request.open('post', '/api/activities');
        request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        request.send(requestData);
    });
});