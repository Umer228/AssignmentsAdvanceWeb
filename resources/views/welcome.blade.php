<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Assignment</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Java Script -->
        <SCRIPT>
            function validation(id){
                var x = document.getElementById(id).value;
                var num = Number(x);
                if(isNaN(num)){
                    alert("Please Enter Numeric Value");
                }
                else{}
            }
            function sum(x,y) {
                var a = document.getElementById(x).value;
                var numa = Number(a);
                var b = document.getElementById(y).value;
                var numb = Number(b);
                var z = numa+numb;
                alert(z);
            }
            function subtract(x,y) {
                var a = document.getElementById(x).value;
                var numa = Number(a);
                var b = document.getElementById(y).value;
                var numb = Number(b);
                var z = numa-numb;
                alert(z);
            }
        </SCRIPT>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .container{
                height: 100%;
                width: 100%;
                background: #1b4b72;
                text-align: right;
                alignment: right;
            }

            .flex-center{
                display: flex;
                height: 100%;
                background: #1b4b72;
                justify-content: center;
                align-items: center;
                font-size: 24px;
                font-style:italic;
                text-emphasis: #f4b0af;
                text-decoration-color: #000000;
            }
            .btn{
                height: 20px;
                width: 100px;
                border: solid;
                border: #c51f1a;
                background: #9561e2;
                border-radius: 12px 12px;
            }
            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

<body>
<div class="container">
<div class="flex-center">

    <table>
        <tr>
            <td>
                Input a
            </td>
            <td>
                <input type="text" id="first_no" onkeyup=" validation('first_no')"/>
            </td>
        </tr>
        <tr>

        </tr>
        <tr>
            <td>
                Input b
            </td>
            <td>
                <input type="text" id="sec_no" onkeyup=" validation('sec_no')"/>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button class="btn" type="button" onclick="sum('first_no','sec_no');">Add</button>
                <button class="btn" type="button" onclick="subtract('first_no','sec_no');">Subtract</button>
            </td>
        </tr>
    </table>

</div>
</div>

</body>
</html>
