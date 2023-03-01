@extends('layouts.main')

 @section('content')

     <div class="jumbotron">
         <h1 class="display-4">Hello, world!</h1>
         <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
         <hr class="my-4">
         <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
         <p class="lead">
             <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
         </p>
     </div>

     <div>
        <h3>This is main page</h3>

         <?php

        /* function sum($numbers)
         {
             $result = 0;
             for ($i = 0; $i < strlen($numbers); $i += 1) {

                  $result += (int)$numbers[$i];

             }

             return $result;

         }

         $sum =  sum("12345"); // 15
         echo $sum;*/


       /*  function summ1($a, $b) // принимает два числа и считает сумму целых чисел в диапозоне этих чисел
         {
             $result = 0;
             for ($i = $a; $i <= $b; $i += 1) {

                 $result +=$i;

             }
             return $result;
         }
         $test = summ1(4, 7);
         echo $test;*/



        /* function invertCase($text) // получает строку и инвертирует в ней символы
         {
             // BEGIN
             $len = mb_strlen($text);
             $result = '';
             for ($i = 0; $i < $len; $i++) {
                 $symbol = mb_substr($text, $i, 1);

                 $lowerSymbol = mb_strtolower($symbol);

                 if ($symbol === $lowerSymbol) {
                     $result .= mb_strtoupper($symbol);
                 } else {
                     $result .= $lowerSymbol;
                 }
             }

             return $result;
             // END
         }

        $test = invertCase('AkfdkSDFDfsd');
         echo $test;

        ?> */?>

    </div>
 @endsection
