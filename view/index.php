<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List of Categories</h1>

    <table id="table">
        <tr>
            <td>Id</td>
            <td>NomCat</td>
            <td>action</td>
            
        </tr>
    </table>
<H1>List 2</H1>

      <table id="table1">
        <tr>
            <td>Id</td>
            <td>NomCat</td>
            <td>action</td>
            
        </tr>
    </table>
<div></div>


    <script>
            const table = document.querySelector('#table');
            const json = JSON.parse('<?php echo $json; ?>');
            console.log(json);
            for(const j in json)
            {
                const tr = document.createElement('tr');
                const id = document.createElement('td');
                id.innerHTML=json[j].idCat;
                tr.append(id);
                const nom = document.createElement('td');
                nom.innerHTML = json[j].Nomcat;
                tr.append(nom);
                const edit = document.createElement('a');
                 edit.href = "http://localhost/apiTest/api/edit/"+json[j].idCat;
                 edit.innerHTML="Edit";
                 tr.append(edit)
                
                  const del = document.createElement('a');
                 del.href = "http://localhost/apiTest/api/deleteProduct/"+json[j].idCat;
                 del.innerHTML=" Delete";
                 tr.append(del)
                table.append(tr);

               table.style.border = 'solid 1px black';
               id.style.border = 'solid 1px black';
               nom.style.border = 'solid 1px black';
               edit.style.border = 'solid 1px black';
               del.style.border = 'solid 1px black';
            }
             const div = document.querySelector('div');
            const h = document.createElement('h1');
            var con=0;
            fetch("http://localhost/apiTest/api/getCat")
            .then(response => response.json())
            .then((data)=>{
                for(const d in data)
                {
                    const tables = document.querySelector('#table1');
                    const tr = document.createElement('tr');
                const id = document.createElement('td');
                id.innerHTML=data[d].idCat;
                tr.append(id);
                const nom = document.createElement('td');
                nom.innerHTML = data[d].Nomcat;
                tr.append(nom);
                const edit = document.createElement('a');
                 edit.href = "http://localhost/apiTest/api/edit/"+data[d].idCat;
                 edit.innerHTML="Edit";
                 tr.append(edit)
                
                  const del = document.createElement('a');
                 del.href = "http://localhost/apiTest/api/deleteProduct/"+data[d].idCat;
                 del.innerHTML=" Delete";
                 tr.append(del)
                tables.append(tr);

               tables.style.border = 'solid 1px black';
               id.style.border = 'solid 1px black';
               nom.style.border = 'solid 1px black';
               edit.style.border = 'solid 1px black';
               del.style.border = 'solid 1px black';
                    console.log(data[d].idCat);
                }
                
            })
    </script>
        
    
</body>
</html>