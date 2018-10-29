<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        label   {
            margin: 15px;
            text-align: center;
        }
        form    {
            display: flex;
            justify-content: center;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<div class="container" style="margin-top: 50px">

    <?php

    // если кнопку нажали
    if(isset($_POST['submit']))
    {
        // проверка значений
        if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
        {
            // расчет
            if($_POST['operation'] == 'plus')
            {
                $total = $_POST['number1'] + $_POST['number2'];
                echo "<h1 style='margin: 15px'>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";;
            }
            if($_POST['operation'] == 'minus')
            {
                $total = $_POST['number1'] - $_POST['number2'];
                echo "<h1 style='margin: 15px'>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";;
            }
            if($_POST['operation'] == 'multiply')
            {
                $total = $_POST['number1'] * $_POST['number2'];
                echo "<h1 style='margin: 15px'>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";;
            }
            if($_POST['operation'] == 'divided by')
            {
                if ($_POST['number2'] != 0) {
                    $total = $_POST['number1'] / $_POST['number2'];
                    echo "<h1 style='margin: 15px'>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";;
                }else   {
                    echo "<h1 style='margin: 15px'>ОШИБКА!!! Деление на 0 недоступно</h1>";
                }
            }
        } else {

            // вывод ошибки
            echo "<h1 style='margin: 15px'>ОШИБКА!!! Доступен ввод только чисел!!!</h1>";

        }
    }

    ?>

    <form method="post" action="calculator.php">
        <label>Первое число<br><input name="number1" type="text" class="form-control" style="width: 150px;" /></label>
        <label>Математические операции<br>
            <select name="operation">
                <option value="plus">Plus</option>
                <option value="minus">Minus</option>
                <option value="multiply">Multiply</option>
                <option value="divided by">Divided By</option>
            </select>
        </label>
        <label>Второе число<br><input name="number2" type="text" class="form-control" style="width: 150px;" /></label>
        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
    </form>

</div>

</body>
</html>

