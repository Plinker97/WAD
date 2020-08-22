function init() {
    document.getElementById("btn1").addEventListener("click", sendAjax);
    document.querySelector('#btn1').addEventListener('keypress', function (e) 
    {    
        e.preventDefault();
        if (e.key === 'Enter') 
    {   sendAjax()     } });

}

function sendAjax() {
    var a = document.getElementById('region').value;
    var ajaxConnection = new XMLHttpRequest();
    ajaxConnection.addEventListener ("load",e =>
        {
          var allPOIs = JSON.parse(e.target.responseText);
          let resultsContainer = document.getElementById('responseDiv'); 

             allPOIs.forEach( curPOI =>
                    {                        
                    let resultsBox = document.createElement("div"); 

                    resultsBox.className = 'result';

                    let nameLine = document.createElement('h3');
                    nameLine.innerHTML = curPOI.name;

                    let typeLine = document.createElement('h4');
                    typeLine.innerHTML = curPOI.type

                    let regionLine = document.createElement('p');
                    regionLine.innerHTML = curPOI.region

                    let countryLine = document.createElement('p');
                    countryLine.innerHTML = curPOI.country

                    let lonLine = document.createElement('p');
                   lonLine.innerHTML = 'Lon:'+ curPOI.lon;

                   let latLine = document.createElement('p');
                   latLine.innerHTML = 'Lat:'+ curPOI.lat;

                        resultsBox.append(nameLine);
                        resultsBox.append(typeLine);
                        resultsBox.append(regionLine);
                        resultsBox.append(countryLine);
                        resultsBox.append(lonLine);
                        resultsBox.append(latLine);

                        resultsContainer.append(resultsBox);
   } );
         
        
        console.log(output);
        })
  ajaxConnection.open("GET" , `https://edward2.solent.ac.uk/~wad1926/poisearchservice.php?region=${a}`);
    ajaxConnection.send();
}