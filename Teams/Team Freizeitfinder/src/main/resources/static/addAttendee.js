function myfunction(p1) {

        const id = p1.id;
        console.log(id);
        const request = new XMLHttpRequest();
        let path = 'api/activities/addAttendee/';
        path = path + id;
        console.log(path);


        request.onload = () => {
            console.log(request.responseText);
        };

        request.open('get', path);
        request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        console.log(request);
        request.send();
        location.reload();

}


