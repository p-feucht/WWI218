function searchGeneralActivity() {
    let outside=0;
    let inside=0;
    let alcohol=0;
    let societal=0;
    let sport =0;
    let game=0;

    const form = {
        searchString: document.getElementById('searchString'),
        place: document.getElementById('ortsearch'),
        submit: document.getElementById('searchButton')
    };
    form.submit.addEventListener('click', ()=>{
        const request = new XMLHttpRequest();
        const categories = {
            a : document.getElementById('outside'),
            b : document.getElementById('inside'),
            c : document.getElementById('alcohol'),
            d : document.getElementById('societal'),
            e : document.getElementById('sport'),
            f : document.getElementById('games')
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
        request.onload = () =>{
          console.log(request.responseText);
        };
        const requestData = `searchString=${form.searchString.value}&outside=${outside}&inside=${inside}&societal=${societal}&sport=${sport}&alcohol=${alcohol}&games=${game}&place=${form.place.value}`;
        console.log(requestData);
        request.open('post', '/api/search/generalActivity');
        request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        request.onload = function () {
            const answer = request.response;
            const jsonObj = $.parseJSON(answer);
            console.log(jsonObj);
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
        request.send(requestData);
    })

    
}