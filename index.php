<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<!-- Place this in the body of the page content -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>QiAssignature</title>
        
    </head>
    <body> 
        <form action="Layout.php" method="post">
            <SELECT NAME="fonte" id="fonte">
                <OPTION value="Verdana">Verda</OPTION>
            </select>    
            <SELECT NAME="tamanho" id="tamanho">               
                <OPTION value="h1">Normal</OPTION>
            </SELECT>
            <input type="submit" name="imagem" value="imagem">
            <br>
            <textarea placeholder="edite sua assinatura" name="assinatura" rows="20" cols="50" style="background-image:">
            </textarea>
            <br>
            <br>
            <input type="file" name="file">
            <br>
            <br>
            <input type="text" name="nome" size="42" >
            <br>
            <br>
            <input type="Submit" value="Avançar">                   
        </form>  
    </body>
</html>

