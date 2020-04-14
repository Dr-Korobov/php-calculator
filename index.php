  
<html>
<head></head>
<body>
    <h1>
        Calculator
    </h1>
    <p>
    <?php
       
        $operation = $_GET['o'];
        $a = $_GET['a'];
        $b = $_GET['b'];

        if ($operation != 'sum' && $operation != 'sub' && $operaion != 'div' && $operation != 'mul') {
            echo 'Unexpected operation';
            exit;
        }

        if (!is_numeric($a) || !is_numeric($b)) {
           echo 'Invalid arguments';
           exit;
        }

        if ($operation == 'sum') {
            $result = $a + $b;
        }

        if ($operation == 'sub') {
            $result = $a - $b;
        }

        if ($operation == 'div') {
            $result = $a / $b;
        }

        if ($operation == 'mul') {
            $result = $a * $b;
        }

       
        echo $operation, ' is ', $result;
    ?>
    </p>
</body>
</html>

