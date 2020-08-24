function init() {
  document.querySelector("#Submit").addEventListener("click", sendAjax);
  console.log("function init is running");
};

function sendAjax() {

  var region = document.querySelector("#region").value;
  
  var ajaxConnection = new XMLHttpRequest();
  console.log("ajaxConnection is: " + ajaxConnection);

  ajaxConnection.addEventListener("load", e=>{
      console.log("AJAX connected.");
   
      var output = "";
      var poiResults = JSON.parse(e.target.responseText);

      poiResults.forEach (poiResponse=>{
      
          output +=  `<br>
                             Name: ${poiResponse.name} <br>
                             Type: ${poiResponse.type} <br>
                             Country: ${poiResponse.country} <br>
                             Region: ${poiResponse.region} 
                             Lon: ${poiResponse.Lon}
                             Lat: ${poiResponse.Lat}
                             Description: ${poiResponse.description}<br><br>`;
      });

      var response = document.querySelector("#response");
      response.innerHTML = output;
  });

  ajaxConnection.open("GET", `https://edward2.solent.ac.uk/~wad1926/wad/webservice.php?region=${region}`);

  ajaxConnection.send()
  }




