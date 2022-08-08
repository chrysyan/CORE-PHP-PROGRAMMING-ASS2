<?php include_once("connect.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main</title>

    <style type="text/css">
        body{
            width: 960px; 
            margin: 20px auto;
            text-align: center;
        }

        header{
            width: 960px; 
            margin: 20px auto;
            border-bottom: 1px solid grey;
            padding: 0 0 0 0;
            text-align: center;
        }

        nav{
            width: 960px;
            margin: 20px auto;
            padding: 0 0 0 0;
            box-sizing: border-box;
            border-bottom: 1px solid grey;
            text-align: center;
        }    

        section{
            width: 960px; 
            margin: 20px auto;
            padding: 0 0 0 0;
            box-sizing: border-box;
            text-align: center;
        }

        footer{
            width: 960px; 
            margin: 20px auto;
            border-top: 1px solid grey;
            padding: 0 0 0 0;
            text-align: center;
        }        
        
        h1{
            font-family:Verdana, Geneva, Tahoma, sans-serif
            font-size: 32px;
        }

        h2{
            font-family:Verdana, Geneva, Tahoma, sans-serif
            font-size: 26px;
        }

        p{
            font-family:Verdana, Geneva, Tahoma, sans-serif
            font-size: 14px;
            text-align: justify;
        }

        button{
            width: 100%;
            padding: 14px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            vertical-align: center;
         }

        input[type=text], select {
            width: 50%;
            padding: 8px 16px;
            margin: 4px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 50%;
            padding: 14px 20px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        table{
            width: 960px; 
            margin: 20px auto;
            font-family: Arial, Helvetica, sans-serif
            border-collapse: collapse;
            border-style: solid;
            border-width: 3px;
            border-color: white;
        }

        th{
            height: 25px;
            padding: 8px;
            font-size: 14px;
            text-align: center;
            vertical-align: center;
        }

        td{
            padding: 4px;
            text-align: left;
            font-size: 14px;
            vertical-align: center;
        }

        #heading{
            background-color: rgb(91, 91, 91);
            color: white;
        }

        .message {
            color:red; 
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <h1>Employee Database</h1>
    </header>

    <nav>
    <table>
        <tr>
            <td><a href="index.php"><button>Insert</button></a></td>
            <td><a href="select.php"><button>Select</button></a></td>
            <td><a href="delete.php"><button>Delete</button></a></td>
        </tr>
    </table>
    </nav>  
