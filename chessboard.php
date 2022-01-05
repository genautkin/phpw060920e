<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            .chess-board { border-spacing: 0; border-collapse: collapse; }
            .chess-board th { padding: .5em; }
            .chess-board td { border: 1px solid; width: 2em; height: 2em; }
            .chess-board .light { background: #eee; }
            .chess-board .dark { background: #000; }
        </style>
</head>
<body>
    <?php $size = 4  ?>
    <table class="chess-board">
            <tbody>
                <tr>
                    <?php $output = '<th></th>';
                     $firstChar = ord('a');
                     for ($i = 0; $i < $size; $i++) {
                        $output .= '<th>' .chr($firstChar+$i) .'</th>';         
                      }
                      echo $output;
                      ?>
                </tr> 
                <?php 
                    $output ='';
                    for ($i = $size; $i > 0; $i--) {
                        $output .= '<tr><th>'.$i.'</th>';
                        $isWhite = ($i % 2 === 0); 
                        for ($j = $size; $j > 0; $j--) {
                            $output .=  $isWhite ? '<td class="light"></td>' : '<td class="dark"></td>';
                            $isWhite = !$isWhite;
                        }
                        $output .='</tr>';
                     
                      }
                      echo $output;
                      ?>
                
                </tbody>
        </table>
</body>
</html>