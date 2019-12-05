$(document).ready(function () {
    const getRequest = new XMLHttpRequest();
    getRequest.open('GET', 'api/generalActivities');
    getRequest.onload = function () {
        const answer = getRequest.response;
        const jsonObj = $.parseJSON(answer);
        const reversedArray = jsonObj.reverse();
        console.log(reversedArray);
        document.getElementById("content").innerHTML = `${reversedArray.map(function (elem) {
            return `
                    <div class="card bg-light mt-3" style="width: 35rem;">
                      <div class="card-header">
                      <div class="float-left pt-2">
                       <h2> ${elem.name}</h2>
                      </div>
                     <div class="float-right">
                        <h3>ID: ${elem.id}</h3>
                      </div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">${elem.description}</p>
                        <hr>
                        <p>Ort: ${elem.cityName}</p>
                        <p><a>Öffnungszeiten: ${elem.openingHoursStart.split(/ (.+)/)[1]} - ${elem.openingHoursEnd} </a></p>
                      </div>
                    </div>
                  
                        `
        }).join('')}
            `;

    };
    getRequest.send();
});
