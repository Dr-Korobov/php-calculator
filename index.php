<html>
<head></head>
<body>
    <h1>
        Calculator
    </h1>
    <p>
    <?php
       
        $operation = isset($_POST['o'])? $_POST['o']: 'undefined';
        $a = (int)$_POST['a'];
        $b = (int)$_POST['b'];
        $result = null;

        if (!is_numeric($a) || !is_numeric($b)) {
           echo 'Invalid arguments';
           exit;
        }
    ?>
    <form method= "POST">
        <div>
             <input type="text" name= "a" placeholder= "Enter the first number"
        </div>
        <div>
             <input type="text" name= "b" placeholder= "Enter the second number"
        </div>
        <div>
        <label>Operation</label>
        <select name="operation">
            <option value="sum">Sum</option>
            <option value="sub">Subtraction</option>
            <option value="mul">Multiply</option>
            <option value="div">Divide</option>
        </select>
    </div>
    <br>
    <div>
        <button type="submit">Calculate</button>
    </div>
  </form>

     <?php
        if ($operation === 'sum') {
            $result = $a + $b;
        }

        if ($operation === 'sub') {
            $result = $a - $b;
        }

        if ($operation === 'div') {
            $result = $a / $b;
        }

        if ($operation === 'mul') {
            $result = $a * $b;
        }

        /*if ($result === null) {
            echo 'Unexpected operation';
            exit;
        }
       */
        echo $operation, ' is ', $result;
    ?>
    </p>
</body>
</html>
