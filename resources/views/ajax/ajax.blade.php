<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ajax_fetch</title>
</head>
<body>
    <button id="getAll">TODOS LOS REGISTROS</button>
    <button id="getOne">UN REGISTRO EN ESPECIFICO</button>
    <button id="post">FORM</button>
    <button id="update">UPDATE</button>
    <button id="delete">DELETE</button>
    <script>
        const btnAll = document.getElementById("getAll").addEventListener("click", () => {
            const firstElement = document.body.children[5];
            document.body.removeChild(firstElement);
            var request = new XMLHttpRequest();
            request.open('GET', 'http://127.0.0.1:8000/api/product', true);
            request.onload = function() {

                if (request.status >= 200 && request.status < 300) {
                    const datos = request.responseText;
                    const data = JSON.parse(datos);
                    console.log(datos);
                    const table = document.createElement('table');
                    table.style.border = "2px solid blue";
                    const tableHead = document.createElement('thead');

                    const tableBody = document.createElement('tbody');


                    // Crea los encabezados de la tabla
                    const headers = Object.keys(data.data[0]);
                    console.log(headers);
                    const headerRow = document.createElement('tr');
                    for (const header of headers) {
                        const headerCell = document.createElement('th');
                        headerCell.style.border = "2px solid black";
                        headerCell.textContent = header;
                        headerRow.appendChild(headerCell);
                    }
                    tableHead.appendChild(headerRow);

                    // Crea las filas de la tabla
                    for (const product of data.data) {
                        const row = document.createElement('tr');
               
                    for (const key in product) {
                        const cell = document.createElement('td');
                        cell.style.border = "2px solid black";
                        cell.textContent = product[key];
                        row.appendChild(cell);
                    }
 
                    tableBody.appendChild(row);

                    }

                    table.appendChild(tableHead);
                    table.appendChild(tableBody);
                    document.body.appendChild(table);
                } else {
                    alert('error');
                }
            };
            //request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            request.onerror = function(){
                    console.log("ERRORR");
            };
            request.send();
        });

        const BtnOneByOne = document.getElementById('getOne').addEventListener('click', () => {
            const firstElement = document.body.children[5];
            document.body.removeChild(firstElement);
            var request = new XMLHttpRequest();
            request.open('GET','http://127.0.0.1:8000/api/product/1', true);     
            request.onload = function(){
                    document.body.innerHtml = "";
                    if(request.status >= 200 && request.status < 300){
                        const response = request.responseText;
                        const data = JSON.parse(response);
                        console.log(data.data);
                        const headerAll = Object.keys(data.data);
                        console.log(headerAll);
                        const table = document.createElement('table');
                        const header = document.createElement('tr');
                        const bodyProduct = document.createElement('tr');
                       
                        for (const head of headerAll) {
                            const contentHeader = document.createElement('th'); 
                            contentHeader.textContent = head;
                            contentHeader.style.border = "2px solid blue";
                            header.appendChild(contentHeader);
                        }
                        for (const key in data.data) {
                            const cell = document.createElement('td');
                            cell.textContent = data.data[key];
                            cell.style.border = "2px solid black";
                            bodyProduct.appendChild(cell);
                            //console.log(data.data[key]);
                        }
                        table.style.border = "2px solid black"
                        table.appendChild(header);
                        table.appendChild(bodyProduct);
                        document.body.appendChild(table);
                    }else{
                        console.log("ERROR");
                    }
            };
            request.onerror = function(){
                console.log("HAY UN ERROR");
            }
            request.send();
        });

        const send = document.getElementById('post').addEventListener('click', () => {
            let price = 150;
            let name = "Licuadora";
            let description = "sus";
            const request = new XMLHttpRequest();
            request.open('POST', 'http://127.0.0.1:8000/api/product', true);
            request.setRequestHeader('Content-Type', 'application/json');
            request.onload = function (){
                if(request.status >= 200 && request.status < 300){
                    console.log(request.responseText);
                    const response = JSON.parse(request.responseText);
                    console.log(response);
                }else{
                    console.log("Error de peticion");
                }
            };
            request.send(JSON.stringify({
                "name": name,
                "description": description,
                "price": price
            }));
        });

        const destroy = document.getElementById('delete').addEventListener('click', () => {
            const request = new XMLHttpRequest();
            request.open('DELETE', 'http://127.0.0.1:8000/api/product/5', true);
            request.onload = ()=>{
                if(request.status >= 200 && request.status < 300){
                    console.log(request.responseText);
                }else{
                    console.log("ERROR AL COMPROBAR EL STATUS");
                }
            };
            request.send();
        });

        const update = document.getElementById('update').addEventListener('click', () =>{
            let newPrice = 190;
            let newName = "New Name";
            let newDescription = "New Example";
            const request = new XMLHttpRequest();
            request.open('PUT', 'http://127.0.0.1:8000/api/product/3', true);
            request.onload = ()=>{
                if(request.status >= 200 && request.status < 300){
                    console.log(request.responseText);
                }else{
                    console.log("ERROR EN EL STATUS");
                }
            };
            request.setRequestHeader("Content-Type", "application/json");
            request.send(JSON.stringify({
                "name": newName,
                "description": newDescription,
                "price": newPrice
            }));
        });

    </script>
</body>
</html>