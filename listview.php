<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
            table{
                border: 1px solid gainsboro;
                border-radius: 5px;
                width: 500px
            }
            td,th{
                border-right: 1px solid gainsboro;
                padding:5px;
                margin:0px;
            }
            th{
                border-bottom: 1px solid gainsboro;
            }
            td:last-child, th:last-child{
                border-right: 0px;
            }
            tr:nth-child(even){
                background-color:skyblue; 
            }
            
            
        </style>
    </head>
    <body>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Password</th>
                <th>No_Telp</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Febrian</td>
                <td>febrian</td>
                <td>082331012599</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Arfian</td>
                <td>arfian</td>
                <td>082331012599</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Nanda</td>
                <td>nanda</td>
                <td>082331012599</td>
            </tr>
        </table>
    </body>
</html>