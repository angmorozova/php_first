<?php
  include ('main.html');

  if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['send'])) {
    $num = $_POST['num'];

    if(preg_match("/[0-9]/",$num)){
        echo '<table class="table table-striped app">';
        echo '<tr><td>#</td><td>сумма</td><td>произ-ние</td><td>частное</td></tr>';

        for($i=1;$i<=10;$i++){
            $division = ($num==0)? 'На ноль делить нельзя!' : $i/$num;
            echo '<tr>';
            echo "<td>$i</td><td>".($i+$num)."</td><td>".($i*$num)."</td><td>".$division."</td>";
            echo '</tr>';
        }

        echo '</table>';
    }else{
        echo "<font color='RED'>Err: Вы ввели <b>$num</b>,
        а нужно было число. Пожалуйста повторите ввод!</font>";
    }
  }
  include ('footer.html');


