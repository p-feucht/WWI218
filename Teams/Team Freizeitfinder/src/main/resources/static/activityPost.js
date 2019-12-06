$(document).ready(function () {
    let outside=0;
    let inside=0;
    let alcohol=0;
    let societal=0;
    let sport =0;
    let game=0;
    const formdat = document.getElementById('formsubmit');
    const form ={
        description : document.getElementById('description'),
        cityName: document.getElementById('inputCity'),
        openingHoursEnd: document.getElementById('datetill'),
        openingHoursStart: document.getElementById('datefrom'),
        name: document.getElementById('inputName'),
        submit: document.getElementById('submitEntry')
    };

    form.submit.addEventListener('click', () => {
        const request = new XMLHttpRequest();

        const categories = {
            a : document.getElementById('draussen'),
            b : document.getElementById('überdacht'),
            c : document.getElementById('alkohol'),
            d : document.getElementById('gesellschaft'),
            e : document.getElementById('sport'),
            f : document.getElementById('spiele')
        };
        if (categories.a.checked){
            outside=1;
        }if (categories.b.checked){
            inside=1;
        }if (categories.c.checked){
            alcohol=1;
        } if (categories.d.checked){
            societal=1;
        } if (categories.e.checked){
            sport=1;
        } if (categories.f.checked){
            game=1;
        }
        request.onload = () => {
            console.log(request.responseText);
        };

        const requestData = `game=${game}&sport=${sport}&societal=${societal}&alcohol=${alcohol}&inside=${inside}&outside=${outside}&street=${form.cityName.value}&activityEnd=${form.openingHoursEnd.value}&activityStart=${form.openingHoursEnd.value}&cityName=${form.cityName.value}&description=${form.description.value}&openingHoursEnd=${form.openingHoursEnd.value}&openingHoursStart=${form.openingHoursStart.value}&name=${form.name.value}`;
        console.log(requestData);
        request.open('post', '/api/generalActivities');
        request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        if(formdat.checkValidity() === true) {
            request.send(requestData);
            location.reload();
        }
    });
});