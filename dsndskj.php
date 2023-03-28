var marcadorAbierto = L.marker([jsonPHP2[1]['Latitud1'], jsonPHP2[1]['Longitud1']], {icon: firefoxIcon}).addTo(map).bindPopup(

"<table>" +

"<caption>Departamentos en esta área: </caption>"+

     "<tr>" +
         "<th> </th>"+
         "<th>" +  jsonPHP2[1]['Punto1'] + "</th>" + 
         "<th>" +  jsonPHP2[1]['Punto2'] + "</th>" + 
         "<th>" +  jsonPHP2[1]['Punto3'] + "</th>" + 
         "<th>" +  jsonPHP2[1]['Punto4'] + "</th>" + 
         "<th>" +  jsonPHP2[1]['Punto5'] + "</th>" + 

     "</tr>" +

    // if((jsonPHP21]['Punto1'] )!= ""){
             "<tr>" +
                 "<td> Contacto: </td>"+
                 "<td>" + jsonPHP2[1]['Contacto1'] +"</td>" + 
                 "<td>" + jsonPHP2[1]['Contacto2'] +"</td>" + 
                 "<td>" + jsonPHP2[1]['Contacto3'] +"</td>" + 
                 "<td>" + jsonPHP2[1]['Contacto4'] +"</td>" + 
                 "<td>" + jsonPHP2[1]['Contacto5'] +"</td>" + 
             "</tr>" +
    // }

             "<tr>" +
                 "<td> Responsable: </td>"+
                 "<td>"+ jsonPHP2[1]['Responsable1']+  "</td>" + 
                 "<td>"+ jsonPHP2[1]['Responsable2']+  "</td>" + 
                 "<td>"+ jsonPHP2[1]['Responsable3']+  "</td>" + 
                 "<td>"+ jsonPHP2[1]['Responsable4']+  "</td>" + 
                 "<td>"+ jsonPHP2[1]['Responsable5']+  "</td>" + 
             "</tr>" +  

 "</table>" +

 "<center><img src = " + jsonPHP2[1]['Ampliacion1'] + "></center>"
 ,customOptions).openOn(map);
