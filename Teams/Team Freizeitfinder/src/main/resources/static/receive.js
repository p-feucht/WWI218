$(document).ready(function () {
    const getRequest = new XMLHttpRequest();
    getRequest.open('GET', 'api/activities');
    getRequest.onload = function () {
        const answer = getRequest.response;
        const jsonObj = $.parseJSON(answer);
        const reversedArray = jsonObj.reverse();
        console.log(reversedArray);
        document.getElementById("content").innerHTML = `${reversedArray.map(function (elem) {
            return `
                    <div class="card bg-light mt-3" style="width: 30rem;">
                      <div class="card-header">
                      <div class="float-left pt-2">
                        Teilnehmer: ${elem.attendeesRightNow}/${elem.attendeesTotal}
                      </div>
                      <div class="float-right">
                        <button class="btn btn-secondary attend" id="${elem.id}" onclick="myfunction(this)">Teilnehmen</button>
                      </div>
                      </div>
                      <div class="card-body">
         
                        <h5 class="card-title">Titel</h5>
                        <p class="card-text">${elem.description}</p>
                        <hr>
                        <p><a>Datum: ${elem.startTime.split(/ (.+)/)[0]}</a>
                        <p><a>Von ${elem.startTime.split(/ (.+)/)[1]} bis ${elem.endTime} </a></p>
                      </div>
                    </div>
                  
                        `
        }).join('')}
            `;

    };
    getRequest.send();

    const attendButtons = document.getElementsByClassName("btn btn-secondary attend");
    console.log(attendButtons);

    for (let i = 0; i<attendButtons.length; i++){
        console.log(attendButtons[i]);
    }
});
