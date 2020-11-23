<?php


$array = $_GET;

$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];




$q = ($array['q']);
$sex = substr($q,0,2);
$age = substr($q,2,2);
$a = substr($q,4,2);
$b = substr($q,6,2);
$c = substr($q,8,2);
$e = substr($q,10,2);
$f = substr($q,12,2);
$g = substr($q,14,2);
$h = substr($q,16,2);
$i = substr($q,18,2);
$l = substr($q,20,2);
$m = substr($q,22,2);
$n = substr($q,24,2);
$o = substr($q,26,2);
$q1 = substr($q,28,2);
$q2 = substr($q,30,2);
$q3 = substr($q,32,2);
$q4 = substr($q,34,2);
$md = substr($q,36,2);
$fb = substr($q,38,2);


//women 19-28 e.o.
if ($sex == 'A2') {
    if ($age >= 19 and $age <= 28) {
        //A
        if ($a >= 0 and $a <= 4) {
            $stA = 1;
        }
        if ($a >= 5 and $a <= 6) {
            $stA = 2;
        }
        if ($a >= 7 and $a <= 7) {
            $stA = 3;
        }
        if ($a >= 8 and $a <= 9) {
            $stA = 4;
        }
        if ($a >= 10 and $a <= 12) {
            $stA = 5;
        }
        if ($a >= 13 and $a <= 13) {
            $stA = 6;
        }
        if ($a >= 14 and $a <= 15) {
            $stA = 7;
        }
        if ($a >= 16 and $a <= 16) {
            $stA = 8;
        }
        if ($a >= 17 and $a <= 18) {
            $stA = 9;
        }
        if ($a >= 19 and $a <= 20) {
            $stA = 10;
        }
        //B
        if ($b >= 0 and $b <= 4) {
            $stB = 1;
        }
        if ($b >= 5 and $b <= 5) {
            $stB = 2;
        }
        // if ($b >= 3 and $b <= 3) {
        //     $stB = 3;
        // }
        if ($b >= 6 and $b <= 6) {
            $stB = 4;
        }
        if ($b >= 7 and $b <= 7) {
            $stB = 5;
        }
        if ($b >= 8 and $b <= 8) {
            $stB = 6;
        }
        if ($b >= 8 and $b <= 8) {
            $stB = 7;
        }
        if ($b >= 10 and $b <= 10) {
            $stB = 8;
        }
        if ($b >= 11 and $b <= 11) {
            $stB= 9;
        }
        if ($b >= 12 and $b <= 13) {
            $stb = 10;
        }
        //C
        if ($c >= 0 and $c <= 3) {
            $stC = 1;
        }
        if ($c >= 7 and $c <= 8) {
            $stC = 2;
        }
        if ($c >= 9 and $c <= 10) {
            $stC = 3;
        }
        if ($c >= 11 and $c <= 12) {
            $stC = 4;
        }
        if ($c >= 13 and $c <= 14) {
            $stC = 5;
        }
        if ($c >= 15 and $c <= 16) {
            $stC = 6;
        }
        if ($c >= 17 and $c <= 18) {
            $stC = 7;
        }
        if ($c >= 19 and $c <= 20) {
            $stC = 8;
        }
        if ($c >= 21 and $c <= 21) {
            $stC= 9;
        }
        if ($c >= 23 and $c <= 26) {
            $stC = 10;
        }
        //E
        if ($e >= 0 and $e <= 3) {
            $stE = 1;
        }
        if ($e >= 4 and $e <= 4) {
            $stE = 2;
        }
        if ($e >= 5 and $e <= 6) {
            $stE = 3;
        }
        if ($e >= 7 and $e <= 8) {
            $stE = 4;
        }
        if ($e >= 9 and $e <= 10) {
            $stE = 5;
        }
        if ($e >= 11 and $e <= 12) {
            $stE = 6;
        }
        if ($e >= 13 and $e <= 14) {
            $stE = 7;
        }
        if ($e >= 15 and $e <= 16) {
            $stE = 8;
        }
        if ($e >= 17 and $e <= 18) {
            $stE= 9;
        }
        if ($e >= 19 and $e <= 26) {
            $stE = 10;
        }
        //F
        if ($f >= 0 and $f <= 5) {
            $stF = 1;
        }
        if ($f >= 6 and $f <= 7) {
            $stF = 2;
        }
        if ($f >= 8 and $f <= 10) {
            $stF = 3;
        }
        if ($f >= 11 and $f <= 12) {
            $stF = 4;
        }
        if ($f >= 13 and $f <= 15) {
            $stF = 5;
        }
        if ($f >= 16 and $f <= 17) {
            $stF = 6;
        }
        if ($f >= 18 and $f <= 19) {
            $stF = 7;
        }
        if ($f >= 20 and $f <= 21) {
            $stF = 8;
        }
        if ($f >= 22 and $f <= 22) {
            $stF= 9;
        }
        if ($f >= 23 and $f <= 26) {
            $stF = 10;
        }
        //G
        if ($g >= 0 and $g <= 4) {
            $stG = 1;
        }
        if ($g >= 5 and $g <= 6) {
            $stG = 2;
        }
        if ($g >= 7 and $g <= 8) {
            $stG = 3;
        }
        if ($g >= 9 and $g <= 10) {
            $stG = 4;
        }
        if ($g >= 11 and $g <= 12) {
            $stG = 5;
        }
        if ($g >= 13 and $g <= 13) {
            $stG = 6;
        }
        if ($g >= 14 and $g <= 15) {
            $stG = 7;
        }
        if ($g >= 16 and $g <= 17) {
            $stG = 8;
        }
        if ($g >= 18 and $g <= 18) {
            $stG= 9;
        }
        if ($g >= 19 and $g <= 20) {
            $stG = 10;
        }
        //H
        if ($h >= 0 and $h <= 2) {
            $stH = 1;
        }
        if ($h >= 3 and $h <= 4) {
            $stH = 2;
        }
        if ($h >= 5 and $h <= 7) {
            $stH = 3;
        }
        if ($h >= 8 and $h <= 9) {
            $stH = 4;
        }
        if ($h >= 10 and $h <= 12) {
            $stH = 5;
        }
        if ($h >= 13 and $h <= 15) {
            $stH = 6;
        }
        if ($h >= 16 and $h <= 17) {
            $stH = 7;
        }
        if ($h >= 18 and $h <= 20) {
            $stH = 8;
        }
        if ($h >= 21 and $h <= 22) {
            $stH= 9;
        }
        if ($h >= 23 and $h <= 26) {
            $stH = 10;
        }
        //I
        if ($i >= 0 and $i <= 5) {
            $stI = 1;
        }
        if ($i >= 6 and $i <= 6) {
            $stI = 2;
        }
        if ($i >= 7 and $i <= 8) {
            $stI = 3;
        }
        if ($i >= 9 and $i <= 10) {
            $stI = 4;
        }
        if ($i >= 11 and $i <= 12) {
            $stI = 5;
        }
        if ($i >= 13 and $i <= 13) {
            $stI = 6;
        }
        if ($i >= 14 and $i <= 14) {
            $stI = 7;
        }
        if ($i >= 15 and $i <= 15) {
            $stI = 8;
        }
        if ($i >= 16 and $i <= 17) {
            $stI= 9;
        }
        if ($i >= 18 and $i <= 20) {
            $stI = 10;
        }
        //L
        if ($l >= 0 and $l <= 1) {
            $stL = 1;
        }
        if ($l >= 2 and $l <= 3) {
            $stL = 2;
        }
        if ($l >= 4 and $l <= 4) {
            $stL = 3;
        }
        if ($l >= 5 and $l <= 5) {
            $stL = 4;
        }
        if ($l >= 6 and $l <= 7) {
            $stL = 5;
        }
        if ($l >= 8 and $l <= 9) {
            $stL = 6;
        }
        if ($l >= 10 and $l <= 10) {
            $stL = 7;
        }
        if ($l >= 11 and $l <= 12) {
            $stL = 8;
        }
        if ($l >= 13 and $l <= 14) {
            $stL= 9;
        }
        if ($l >= 15 and $l <= 20) {
            $stL = 10;
        }
        //M
        if ($m >= 0 and $m <= 5) {
            $stM = 1;
        }
        if ($m >= 6 and $m <= 7) {
            $stM = 2;
        }
        if ($m >= 8 and $m <= 8) {
            $stM = 3;
        }
        if ($m >= 9 and $m <= 10) {
            $stM = 4;
        }
        if ($m >= 11 and $m <= 12) {
            $stM = 5;
        }
        if ($m >= 13 and $m <= 14) {
            $stM = 6;
        }
        if ($m >= 15 and $m <= 16) {
            $stM = 7;
        }
        if ($m >= 17 and $m <= 17) {
            $stM = 8;
        }
        if ($m >= 18 and $m <= 18) {
            $stM= 9;
        }
        if ($m >= 20 and $m <= 26) {
            $stM = 10;
        }
        //N
        if ($n >= 0 and $n <= 5) {
            $stN = 1;
        }
        if ($n >= 6 and $n <= 6) {
            $stN = 2;
        }
        if ($n >= 7 and $n <= 7) {
            $stN = 3;
        }
        if ($n >= 8 and $n <= 8) {
            $stN = 4;
        }
        if ($n >= 9 and $n <= 10) {
            $stN = 5;
        }
        if ($n >= 11 and $n <= 11) {
            $stN = 6;
        }
        if ($n >= 12 and $n <= 13) {
            $stN = 7;
        }
        if ($n >= 14 and $n <= 14) {
            $stN = 8;
        }
        if ($n >= 15 and $n <= 16) {
            $stN= 9;
        }
        if ($n >= 17 and $n <= 18) {
            $stN = 10;
        }
        //O
        if ($o >= 0 and $o <= 3) {
            $stO = 1;
        }
        if ($o >= 4 and $o <= 4) {
            $stO = 2;
        }
        if ($o >= 5 and $o <= 6) {
            $stO = 3;
        }
        if ($o >= 7 and $o <= 7) {
            $stO = 4;
        }
        if ($o >= 8 and $o <= 9) {
            $stO = 5;
        }
        if ($o >= 10 and $o <= 12) {
            $stO = 6;
        }
        if ($o >= 13 and $o <= 14) {
            $stO = 7;
        }
        if ($o >= 15 and $o <= 16) {
            $stO = 8;
        }
        if ($o >= 17 and $o <= 18) {
            $stO= 9;
        }
        if ($o >= 18 and $o <= 26) {
            $stO = 10;
        }
        //Q1
        if ($q1 >= 0 and $q1 <= 3) {
            $stQ1 = 1;
        }
        if ($q1 >= 4 and $q1 <= 4) {
            $stQ1 = 2;
        }
        if ($q1 >= 5 and $q1 <= 5) {
            $stQ1 = 3;
        }
        if ($q1 >= 6 and $q1 <= 7) {
            $stQ1 = 4;
        }
        if ($q1 >= 8 and $q1 <= 8) {
            $stQ1 = 5;
        }
        if ($q1 >= 9 and $q1 <= 9) {
            $stQ1 = 6;
        }
        if ($q1 >= 10 and $q1 <= 11) {
            $stQ1 = 7;
        }
        if ($q1 >= 12 and $q1 <= 13) {
            $stQ1 = 8;
        }
        if ($q1 >= 14 and $q1 <= 14) {
            $stQ1= 9;
        }
        if ($q1 >= 18 and $q1 <= 26) {
            $stQ1 = 10;
        }
        //Q2
        if ($q2 >= 0 and $q2 <= 3) {
            $stQ2 = 1;
        }
        if ($q2 >= 4 and $q2 <= 4) {
            $stQ2 = 2;
        }
        if ($q2 >= 5 and $q2 <= 6) {
            $stQ2 = 3;
        }
        if ($q2 >= 7 and $q2 <= 7) {
            $stQ2 = 4;
        }
        if ($q2 >= 8 and $q2 <= 9) {
            $stQ2 = 5;
        }
        if ($q2 >= 10 and $q2 <= 11) {
            $stQ2 = 6;
        }
        if ($q2 >= 12 and $q2 <= 13) {
            $stQ2 = 7;
        }
        if ($q2 >= 14 and $q2 <= 15) {
            $stQ2 = 8;
        }
        if ($q2 >= 16 and $q2 <= 17) {
            $stQ2= 9;
        }
        if ($q2 >= 18 and $q2 <= 20) {
            $stQ2 = 10;
        }
        //Q3
        if ($q3 >= 0 and $q3 <= 4) {
            $stQ3 = 1;
        }
        if ($q3 >= 5 and $q3 <= 5) {
            $stQ3 = 2;
        }
        if ($q3 >= 6 and $q3 <= 7) {
            $stQ3 = 3;
        }
        if ($q3 >= 8 and $q3 <= 9) {
            $stQ3 = 4;
        }
        if ($q3 >= 10 and $q3 <= 10) {
            $stQ3 = 5;
        }
        if ($q3 >= 11 and $q3 <= 12) {
            $stQ3 = 6;
        }
        if ($q3 >= 13 and $q3 <= 13) {
            $stQ3 = 7;
        }
        if ($q3 >= 14 and $q3 <= 14) {
            $stQ3 = 8;
        }
        if ($q3 >= 15 and $q3 <= 16) {
            $stQ3= 9;
        }
        if ($q3 >= 17 and $q3 <= 20) {
            $stQ3 = 10;
        }
        //Q4
        if ($q4 >= 0 and $q4 <= 3) {
            $stQ4 = 1;
        }
        if ($q4 >= 4 and $q4 <= 5) {
            $stQ4 = 2;
        }
        if ($q4 >= 6 and $q4 <= 7) {
            $stQ4 = 3;
        }
        if ($q4 >= 8 and $q4 <= 10) {
            $stQ4 = 4;
        }
        if ($q4 >= 11 and $q4 <= 12) {
            $stQ4 = 5;
        }
        if ($q4 >= 13 and $q4 <= 15) {
            $stQ4 = 6;
        }
        if ($q4 >= 16 and $q4 <= 18) {
            $stQ4 = 7;
        }
        if ($q4 >= 19 and $q4 <= 20) {
            $stQ4 = 8;
        }
        if ($q4 >= 21 and $q4 <= 22) {
            $stQ4= 9;
        }
        if ($q4 >= 23 and $q4 <= 26) {
            $stQ4 = 10;
        }
    }
    $F1= ((38+2*$stL+30+4*$stQ4) - 2*($stC+$stH+$stQ2))/10;

    $F2=$stE*((2*$stA+$stE+4*$stF*5*$stH) - (2*$stQ2+11))/10;

    $F3=-((77+2*$stC+$stE+2*$stF+2*$stN) - (4*$stA+6*$stI*2*$stM))/10;

    $F4=-((4*$stE+3*$stM+4*$stQ1+4*$stQ2) - (3*$stA+2*$stC))/10;
    
    $sredA = $a/10;
    $sredB = $b/13;
    $sredC = $c/13;
    $sredE = $e/13;
    $sredF = $f/13;
    $sredG = $g/10;
    $sredH = $h/13;
    $sredI = $i/10;
    $sredL = $l/10;
    $sredM = $m/13;
    $sredN = $n/10;
    $sredO = $o/13;
    $sredQ1 = $q1/10;
    $sredQ2 = $q2/10;
    $sredQ3 = $q3/10;
    $sredQ4 = $q4/13;
}
//men 19-28 e.o.
if ($sex == 'A1') {
    if ($age >= 19 and $age <=28){
    	if ($a >= 0 and $a <= 3) {
    	  $stA = 1;
    	}
    	if ($a = 4) {
    	  $stA = 2;
    	}
    	if ($a >= 5 and $a <= 6) {
    	  $stA = 3;
    	}
    	if ($a = 7) {
    	  $stA = 4;
    	}
    	if ($a >= 8 and $a <= 9) {
    	  $stA = 5;
    	}
    	if ($a >= 10 and $a <= 11) {
    	  $stA = 6;
    	}
    	if ($a >= 12 and $a <= 13) {
    	  $stA = 7;
    	}
    	if ($a = 14) {
    	  $stA = 8;
    	}
    	if ($a >= 15 and $a <= 16) {
    	  $stA = 9;
    	}
    	if ($a >= 17 and $a <= 20) {
    	  $stA = 10;
    	}
    	if ($b >= 0 and $b <= 4) {
    	  $stB = 1;
    	}
    
    	if ($b = 5) {
    	  $stB = 2;
    	}
    	if ($b = 6) {
    	  $stB = 4;
    	}
    	if ($b = 7) {
    	  $stB = 5;
    	}
    	if ($b = 8) {
    	  $stB = 6;
    	}
    	if ($b = 9) {
    	  $stB = 7;
    	}
    	if ($b = 10) {
    	  $stB = 8;
    	}
    	if ($b = 11) {
    	  $stB = 9;
    	}
    	if ($b >= 12 and $b <= 12) {
    	  $stB = 10;
    	}
    
    	if ($c >= 0 and $c <= 7) {
    	  $stC = 1;
    	}
    
    	if ($c >= 8 and $c <= 9) {
    	  $stC = 2;
    	}
    
    	if ($c >= 10 and $c <= 11) {
    	  $stC = 3;
    	}
    
    	if ($c >= 12 and $c <= 13) {
    	  $stC = 4;
    	}
    
    	if ($c >= 14 and $c <= 15) {
    	  $stC = 5;
    	}
    
    	if ($c >= 16 and $c <= 17) {
    	  $stC = 6;
    	}
    
    	if ($c >= 18 and $c <= 19) {
    	  $stC = 7;
    	}
    
    	if ($c >= 20 and $c <= 21) {
    	  $stC = 8;
    	}
    
    	if ($c = 22) {
    	  $stC = 9;
    	}
    
    	if ($c >= 23 and $c <= 26) {
    	  $stC = 10;
    	}
    	
    	if ($e >= 0 and $e <= 5) {
    	  $stE = 1;
    	}
    	
    	if ($e >= 7 and $e <= 8) {
    	  $stE = 2;
    	}
    	
    	if ($e = 8) {
    	  $stE = 3;
    	}
    	
    	if ($e >= 10 and $e <= 11) {
    	  $stE = 4;
    	}
    	
    	if ($e >= 12 and $e <= 13) {
    	  $stE = 5;
    	}
    	
    	if ($e >= 14 and $e <= 16) {
    	  $stE = 6;
    	}
    	
    	if ($e >= 17 and $e <= 18) {
    	  $stE = 7;
    	}
    	
    	if ($e = 19) {
    	  $stE = 8;
    	}
    	
    	if ($e >= 20 and $e <= 21) {
    	  $stE = 9;
    	}
    	
    	if ($e >= 22 and $e <= 26) {
    	  $stE = 10;
    	}
    
    	if ($f >= 0 and $f <= 5) {
    	  $stF = 1;
    	}
    
    	if ($f >= 76and $f <= 8) {
    	  $stF = 2;
    	}
    
    	if ($f >= 9 and $f <= 10) {
    	  $stF = 3;
    	}
    
    
    	if ($f >= 11 and $f <= 13) {
    	  $stF = 4;
    	}
    
    
    	if ($f >= 14 and $f <= 15) {
    	  $stF = 5;
    	}
    
    
    	if ($f >= 16 and $f <= 17) {
    	  $stF = 6;
    	}
    
    
    	if ($f >= 18 and $f <= 19) {
    	  $stF = 7;
    	}
    
    
    	if ($f >= 20 and $f <= 21) {
    	  $stF = 8;
    	}
    
    
    	if ($f >= 22 and $f <= 23) {
    	  $stF = 9;
    	}
    
    
    	if ($f >= 24 and $f <= 26) {
    	  $stF = 10;
    	}
    	
    	if ($g >= 0 and $g <= 4) {
    	  $stG = 1;
    	}
    
    	if ($g >= 5 and $g <= 6) {
    	  $stG = 2;
    	}
    
    	if ($g >= 7 and $g <= 9) {
    	  $stG = 3;
    	}
    
    	if ($g >= 10 and $g <= 11) {
    	  $stG = 4;
    	}
    
    	if ($g = 21) {
    	  $stG = 5;
    	}
    
    	if ($g >= 13 and $g <= 14) {
    	  $stG = 6;
    	}
    
    	if ($g >= 15 and $g <= 16) {
    	  $stG = 7;
    	}
    
    	if ($g = 17) {
    	  $stG = 8;
    	}
    
    	if ($g >= 18 and $g <= 19) {
    	  $stG = 9;
    	}
    
    	if ($g = 20) {
    	  $stG = 10;
    	}
    	
    	if ($h >= 0 and $h <= 2) {
    	  $stH = 1;
    	}
    
    	if ($h >= 3 and $h <= 4) {
    	  $stH = 2;
    	}
    
    	if ($h >= 5 and $h <= 7) {
    	  $stH = 3;
    	}
    
    	if ($h >= 8 and $h <= 10) {
    	  $stH = 4;
    	}
    
    	if ($h >= 11 and $h <= 13) {
    	  $stH = 5;
    	}
    
    	if ($h >= 14 and $h <= 16) {
    	  $stH = 6;
    	}
    
    	if ($h >= 17 and $h <= 18) {
    	  $stH = 7;
    	}
    
    	if ($h >= 19 and $h <= 20) {
    	  $stH = 8;
    	}
    
    	if ($h >= 21 and $h <= 22) {
    	  $stH = 9;
    	}
    
    	if ($h >= 23 and $h <= 26) {
    	  $stH = 10;
    	}
    
    
    	if ($i >= 0 and $i <= 2) {
    	  $stI = 1;
    	}
    
    	if ($i = 3) {
    	  $stI = 2;
    	}
    
    	if ($i >= 4 and $i <= 5) {
    	  $stI = 3;
    	}
    
    	if ($i = 6) {
    	  $stI = 4;
    	}
    
    	if ($i >= 7 and $i <= 8) {
    	  $stI = 5;
    	}
    
    	if ($i >= 9 and $i <= 10) {
    	  $stI = 6;
    	}
    
    	if ($i >= 11 and $i <= 12) {
    	  $stI = 7;
    	}
    
    	if ($i >= 13 and $i <= 14) {
    	  $stI = 8;
    	}
    
    	if ($i >= 15) {
    	  $stI = 9;
    	}
    
    	if ($i >= 16 and $i <= 20) {
    	  $stI = 10;
    	}
    
    	if ($l >= 0 and $l <= 3) {
    	  $stL = 1;
    	}
    
    	if ($l = 4) {
    	  $stL = 2;
    	}
    
    	if ($l >= 5 and $l <= 6) {
    	  $stL = 3;
    	}
    
    	if ($l >= 7) {
    	  $stL = 4;
    	}
    
    	if ($l >= 8 and $l <= 9) {
    	  $stL = 5;
    	}
    
    	if ($l >= 10 and $l <= 11) {
    	  $stL = 6;
    	}
    
    	if ($l = 12) {
    	  $stL = 7;
    	}
    
    	if ($l >= 13 and $l <= 14) {
    	  $stL = 8;
    	}
    
    	if ($l = 15) {
    	  $stL = 9;
    	}
    
    	if ($l >= 16 and $l <= 20) {
    	  $stL = 10;
    	}
    	
    	if ($m >= 0 and $m <= 5) {
    	  $stM = 1;
    	}
    	
    	if ($m = 6) {
    	  $stM = 2;
    	}
    	
    	if ($m >= 7 and $m <= 8) {
    	  $stM = 3;
    	}
    	
    	if ($m = 9) {
    	  $stM = 4;
    	}
    	
    	if ($m >= 10 and $m <= 11) {
    	  $stM = 5;
    	}
    	
    	if ($m >= 12 and $m <= 13) {
    	  $stM = 6;
    	}
    	
    	if ($m >= 14 and $m <= 15) {
    	  $stM = 7;
    	}
    	
    	if ($m >= 16 and $m <= 17) {
    	  $stM = 8;
    	}
    	
    	if ($m = 18) {
    	  $stM = 9;
    	}
    	
    	if ($m >= 19 and $m <= 20) {
    	  $stM = 10;
    	}
    	
    	if ($n >= 0 and $n <= 5) {
    	  $stN = 1;
    	}
    	
    	if ($n >= 6 and $n <= 7) {
    	  $stN = 2;
    	}
    	
    	if ($n = 8) {
    	  $stN = 3;
    	}
    	
    	if ($n = 9) {
    	  $stN = 4;
    	}
    	
    	if ($n = 10) {
    	  $stN = 5;
    	}
    	
    	if ($n >= 11 and $n <= 12) {
    	  $stN = 6;
    	}
    	
    	if ($n = 13) {
    	  $stN = 7;
    	}
    	
    	if ($n >= 14 and $n <= 15) {
    	  $stN = 8;
    	}
    	
    	if ($n = 16) {
    	  $stN = 9;
    	}
    	
    	if ($n >= 17 and $n <= 20) {
    	  $stN = 10;
    	}
    	
    	if ($o >= 0 and $o <= 3) {
    	  $stO = 1;
    	}
    	
    	if ($o = 4) {
    	  $stO = 2;
    	}
    	
    	if ($o >= 5 and $o <= 6) {
    	  $stO = 3;
    	}
    	
    	if ($o >= 7 and $o <= 8) {
    	  $stO = 4;
    	}
    	
    	if ($o = 9) {
    	  $stO = 5;
    	}
    	
    	if ($o >= 10 and $o <= 11) {
    	  $stO = 6;
    	}
    	
    	if ($o >= 12 and $o <= 13) {
    	  $stO = 7;
    	}
    	
    	if ($o >= 14 and $o <= 15) {
    	  $stO = 8;
    	}
    	
    	if ($o >= 16 and $o <= 17) {
    	  $stO = 9;
    	}
    	
    	if ($o >= 18 and $o <= 26) {
    	  $stO = 10;
    	}
    	
    	if ($q1 >= 0 and $q1 <= 4) {
    	  $stQ1 = 1;
    	}
    	
    	if ($q1 = 5) {
    	  $stQ1 = 2;
    	}
    	
    	if ($q1 = 6) {
    	  $stQ1 = 3;
    	}
    	
    	if ($q1 >= 7 and $q1 <= 8) {
    	  $stQ1 = 4;
    	}
    	
    	if ($q1 = 9) {
    	  $stQ1 = 5;
    	}
    	
    	if ($q1 = 10) {
    	  $stQ1 = 6;
    	}
    	
    	if ($q1 >= 11 and $q1 <= 12) {
    	  $stQ1 = 7;
    	}
    	
    	if ($q1 = 13) {
    	  $stQ1 = 8;
    	}
    	
    	if ($q1 >= 14 and $q1 <= 15) {
    	  $stQ1 = 9;
    	}
    	
    	if ($q1 >= 16 and $q1 <= 20) {
    	  $stQ1 = 10;
    	}
    	
    	if ($q2 >= 0 and $q2 <= 3) {
    	  $stQ2 = 1;
    	}
    	
    	if ($q2 = 4) {
    	  $stQ2 = 2;
    	}
    	
    	if ($q2 >= 5 and $q2 <= 6) {
    	  $stQ2 = 3;
    	}
    	
    	if ($q2 = 7) {
    	  $stQ2 = 4;
    	}
    	
    	if ($q2 >= 8 and $q2 <= 9) {
    	  $stQ2 = 5;
    	}
    	
    	if ($q2 >= 10 and $q2 <= 11) {
    	  $stQ2 = 6;
    	}
    	
    	if ($q2 >= 12 and $q2 <= 13) {
    	  $stQ2 = 7;
    	}
    	
    	if ($q2 >= 14 and $q2 <= 15) {
    	  $stQ2 = 8;
    	}
    	
    	if ($q2 >= 16 and $q2 <= 17) {
    	  $stQ2 = 9;
    	}
    	
    	if ($q2 >= 18 and $q2 <= 20) {
    	  $stQ2 = 10;
    	}
    	
    	if ($q3 >= 0 and $q3 <= 3) {
    	  $stQ3 = 1;
    	}
    	
    	if ($q3 >= 4 and $q3 <= 5) {
    	  $stQ3 = 2;
    	}
    	
    	if ($q3 = 6) {
    	  $stQ3 = 3;
    	}
    	
    	if ($q3 >= 7 and $q3 <= 8) {
    	  $stQ3 = 4;
    	}
    	
    	if ($q3 >= 9 and $q3 <= 10) {
    	  $stQ3 = 5;
    	}
    	
    	if ($q3 >= 11) {
    	  $stQ3 = 6;
    	}
    	
    	if ($q3 >= 12 and $q3 <= 13) {
    	  $stQ3 = 7;
    	}
    	
    	if ($q3 = 14) {
    	  $stQ3 = 8;
    	}
    	
    	if ($q3 >= 15 and $q3 <= 16) {
    	  $stQ3 = 9;
    	}
    	
    	if ($q3 >= 17 and $q3 <= 20) {
    	  $stQ3 = 10;
    	}
    	
    	if ($q4 >= 0 and $q4 <= 3) {
    	  $stQ4 = 1;
    	}
    	
    	if ($q4 = 4) {
    	  $stQ4 = 2;
    	}
    	
    	if ($q4 >= 5 and $q4 <= 7) {
    	  $stQ4 = 3;
    	}
    	
    	if ($q4 >= 8 and $q4 <= 9) {
    	  $stQ4 = 4;
    	}
    	
    	if ($q4 >= 10 and $q4 <= 12) {
    	  $stQ4 = 5;
    	}
    	
    	if ($q4 >= 13 and $q4 <= 14) {
    	  $stQ4 = 6;
    	}
    	
    	if ($q4 >= 15 and $q4 <= 17) {
    	  $stQ4 = 7;
    	}
    	
    	if ($q4 >= 18 and $q4 <= 19) {
    	  $stQ4 = 8;
    	}
    	
    	if ($q4 >= 20 and $q4 <= 21) {
    	  $stQ4 = 9;
    	}
    	
    	if ($q4 >= 22 and $q4 <= 26) {
    	  $stQ4 = 10;
    	}
    }
    $F1 = ((38 + 2 * $l + 30 + 4 * $q4)-2*($c + $h + $q2))/10;
    // $F1 = ((38+2*$stL+30+4*$stQ4) - 2*($stC+$stH+$stQ2))/10;

    $F2 = ($e*(2*$a+$e+4*$f*5*h)-(2*$q2+$h))/10;
    // $F2 = $stE*((2*$stA+$stE+4*$stF*5*$stH) - (2*$stQ2+11))/10;

    $F3 = -((77 + 2 * $c + $e + 2 * $f + 2 * $n)-(4 * $a + 6 * $i + 2 * $m))/10;
    // $F3 = -((77+2*$stC+$stE+2*$stF+2*$stN) - (4*$stA+6*$stI*2*$stM))/10;
    
    $F4 = -((4 * $e + 3 * $m + 4 * $q1 + 4 * $q2)-(3 * $a + 2 * $c))/10;
    // $F4 = -((4*$stE+3*$stM+4*$stQ1+4*$stQ2) - (3*$stA+2*$stC))/10;
    
    // $sredA = $a/10;
    // $sredB = $b/13;
    // $sredC = $c/13;
    // $sredE = $e/13;
    // $sredF = $f/13;
    // $sredG = $g/10;
    // $sredH = $h/13;
    // $sredI = $i/10;
    // $sredL = $l/10;
    // $sredM = $m/13;
    // $sredN = $n/10;
    // $sredO = $o/13;
    // $sredQ1 = $q1/10;
    // $sredQ2 = $q2/10;
    // $sredQ3 = $q3/10;
    // $sredQ4 = $q4/13;
    $sredA = $stA;
    $sredB = $stB;
    $sredC = $stC;
    $sredE = $stE;
    $sredF = $stF;
    $sredG = $stG;
    $sredH = $stH;
    $sredI = $stI;
    $sredL = $stL;
    $sredM = $stM;
    $sredN = $stN;
    $sredO = $stO;
    $sredQ1 = $stQ1;
    $sredQ2 = $stQ2;
    $sredQ3 = $stQ3;
    $sredQ4 = $stQ4;
}

?>
<!DOCTYPE html>
<html lang="ru">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="description" content="Тест Кеттелла Генезис">
      <meta name="viewport" content="width=device-width">
      <title>Тест Кеттелла Генезис</title>
      <link rel="StyleSheet" href="img/psy013.css" type="text/css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
      <script src="/psy009.js"></script>
   </head>
   <body>
      <script>qpgm='ind';</script>
      <div id="pageBody" class="page_body">
         <header id="hDr">
            <div class="header_logo">
            </div>
         </header>
         <main id="pageContent" class="page_content test_result">
            <h1 id="hDt">Тест Кеттелла</h1>
            <script>qpgm='res';</script>
            <li><a href="#hh2">Интерпретация вторичных факторов</a></li>
            <li><a href="#hh5">Шкалы валидности</a></li>
            <li><a href="#hh3">Интерпретация парных сочетаний первичных факторов</a></li>
            </ul>
            <h3>Профиль вашей личности</h3>
            <div style="width: 100%; overflow: auto;">
               <div style="min-width:940px;">
                  <div id="ctlGraph">
                     <table cellpadding=0 cellspacing=0 border=0>
                        <tr>
                           <td class="ctlGraHdr" colspan=3><b>&minus;</b></td>
                           <td class="ctlGraHdr">0</td>
                           <td class="ctlGraHdr">1</td>
                           <td class="ctlGraHdr">2</td>
                           <td class="ctlGraHdr">3</td>
                           <td class="ctlGraHdr">4</td>
                           <td class="ctlGraHdr">5</td>
                           <td class="ctlGraHdr">6</td>
                           <td class="ctlGraHdr">7</td>
                           <td class="ctlGraHdr">8</td>
                           <td class="ctlGraHdr">9</td>
                           <td class="ctlGraHdr">10</td>
                           <td class="ctlGraHdr" colspan=2><b>+</b></td>
                        </tr>
                        <tr>
                           <td class="ctlGraVal">A = <?php echo $stA;?></td>
                           <td class="ctlGraFctL"><a class="nu" href="#fctrA">замкнутость</a></td>
                           <td class="ctlGraFct">A</td>
                           <td class="crlGraCanvas" valign=top colspan=10 rowspan=21>
                              <canvas id="canvas" width="400" height="600"></canvas>
                           <td class="ctlGraFct">A</td>
                           <td class="ctlGraFctR"><a class="nu" href="#fctrA">общительность</a></td>
                        </tr>
                        <tr>
                           <td class="ctlGraVal">B = <?php echo $stB;?></td>
                           <td class="ctlGraFctL"><a class="nu" href="#fctrB">низкий интеллект</a></td>
                           <td class="ctlGraFct">B</td>
                           <td class="ctlGraFct">B</td>
                           <td class="ctlGraFctR"><a class="nu" href="#fctrB">высокий интеллект</a></td>
                        </tr>
                        <tr>
                           <td class="ctlGraVal">C = <?php echo $stC;?></td>
                           <td class="ctlGraFctL"><a class="nu" href="#fctrC">эмоц.&nbsp;нестабильность</a></td>
                           <td class="ctlGraFct">C</td>
                           <td class="ctlGraFct">C</td>
                           <td class="ctlGraFctR"><a class="nu" href="#fctrC">эмоц.&nbsp;стабильность</a></td>
                        </tr>
                        <tr>
                           <td class="ctlGraVal">E = <?php echo $stE;?></td>
                           <td class="ctlGraFctL"><a class="nu" href="#fctrE">подчиненность</a></td>
                           <td class="ctlGraFct">E</td>
                           <td class="ctlGraFct">E</td>
                           <td class="ctlGraFctR"><a class="nu" href="#fctrE">самоутверждение</a></td>
                        </tr>
                        <tr>
                           <td class="ctlGraVal">F = <?php echo $stF;?></td>
                           <td class="ctlGraFctL"><a class="nu" href="#fctrF">сдержанность</a></td>
                           <td class="ctlGraFct">F</td>
                           <td class="ctlGraFct">F</td>
                           <td class="ctlGraFctR"><a class="nu" href="#fctrF">экспрессивность</a></td>
                        </tr>
                        <tr>
                           <td class="ctlGraVal">G = <?php echo $stG;?></td>
                           <td class="ctlGraFctL"><a class="nu" href="#fctrG">низкая&nbsp;нормативность</a></td>
                           <td class="ctlGraFct">G</td>
                           <td class="ctlGraFct">G</td>
                           <td class="ctlGraFctR"><a class="nu" href="#fctrG">высокая&nbsp;нормативность</a></td>
                        </tr>
                        <tr>
                           <td class="ctlGraVal">H = <?php echo $stH;?></td>
                           <td class="ctlGraFctL"><a class="nu" href="#fctrH">робость</a></td>
                           <td class="ctlGraFct">H</td>
                           <td class="ctlGraFct">H</td>
                           <td class="ctlGraFctR"><a class="nu" href="#fctrH">смелость</a></td>
                        </tr>
                        <tr>
                           <td class="ctlGraVal">I = <?php echo $stI;?></td>
                           <td class="ctlGraFctL"><a class="nu" href="#fctrI">практицизм</a></td>
                           <td class="ctlGraFct">I</td>
                           <td class="ctlGraFct">I</td>
                           <td class="ctlGraFctR"><a class="nu" href="#fctrI">чувствительность</a></td>
                        </tr>
                        <tr>
                           <td class="ctlGraVal">L = <?php echo $stL;?></td>
                           <td class="ctlGraFctL"><a class="nu" href="#fctrL">доверчивость</a></td>
                           <td class="ctlGraFct">L</td>
                           <td class="ctlGraFct">L</td>
                           <td class="ctlGraFctR"><a class="nu" href="#fctrL">подозрительность</a></td>
                        </tr>
                        <tr>
                           <td class="ctlGraVal">M = 6</td>
                           <td class="ctlGraFctL"><a class="nu" href="#fctrM">практичность</a></td>
                           <td class="ctlGraFct">M</td>
                           <td class="ctlGraFct">M</td>
                           <td class="ctlGraFctR"><a class="nu" href="#fctrM">мечтательность</a></td>
                        </tr>
                        <tr>
                           <td class="ctlGraVal">N = <?php echo $stN;?></td>
                           <td class="ctlGraFctL"><a class="nu" href="#fctrN">прямолинейность</a></td>
                           <td class="ctlGraFct">N</td>
                           <td class="ctlGraFct">N</td>
                           <td class="ctlGraFctR"><a class="nu" href="#fctrN">дипломатичность</a></td>
                        </tr>
                        <tr>
                           <td class="ctlGraVal">O = <?php echo $stO;?></td>
                           <td class="ctlGraFctL"><a class="nu" href="#fctrO">спокойствие</a></td>
                           <td class="ctlGraFct">O</td>
                           <td class="ctlGraFct">O</td>
                           <td class="ctlGraFctR"><a class="nu" href="#fctrO">тревожность</a></td>
                        </tr>
                        <tr>
                           <td class="ctlGraVal">Q1 = <?php echo $stQ1;?></td>
                           <td class="ctlGraFctL"><a class="nu" href="#fctrQ1">консерватизм</a></td>
                           <td class="ctlGraFct">Q1</td>
                           <td class="ctlGraFct">Q1</td>
                           <td class="ctlGraFctR"><a class="nu" href="#fctrQ1">радикализм</a></td>
                        </tr>
                        <tr>
                           <td class="ctlGraVal">Q2 = <?php echo $stQ2;?></td>
                           <td class="ctlGraFctL"><a class="nu" href="#fctrQ2">конформизм</a></td>
                           <td class="ctlGraFct">Q2</td>
                           <td class="ctlGraFct">Q2</td>
                           <td class="ctlGraFctR"><a class="nu" href="#fctrQ2">нонконформизм</a></td>
                        </tr>
                        <tr>
                           <td class="ctlGraVal">Q3 = <?php echo $stQ3;?></td>
                           <td class="ctlGraFctL"><a class="nu" href="#fctrQ3">низкий&nbsp;самоконтроль</a></td>
                           <td class="ctlGraFct">Q3</td>
                           <td class="ctlGraFct">Q3</td>
                           <td class="ctlGraFctR"><a class="nu" href="#fctrQ3">высокий&nbsp;самоконтроль</a></td>
                        </tr>
                        <tr>
                           <td class="ctlGraVal">Q4 = <?php echo $stQ4;?></td>
                           <td class="ctlGraFctL"><a class="nu" href="#fctrQ4">расслабленность</a></td>
                           <td class="ctlGraFct">Q4</td>
                           <td class="ctlGraFct">Q4</td>
                           <td class="ctlGraFctR"><a class="nu" href="#fctrQ4">напряженность</a></td>
                        </tr>
                        <tr>
                           <td class="ctlGraVal">F1 = <?php echo $F1;?></td>
                           <td class="ctlGraFctL"><a class="nu" href="#fctrF1">низкая&nbsp;тревожность</a></td>
                           <td class="ctlGraFct">F1</td>
                           <td class="ctlGraFct">F1</td>
                           <td class="ctlGraFctR"><a class="nu" href="#fctrF1">высокая&nbsp;тревожность</a></td>
                        </tr>
                        <tr>
                           <td class="ctlGraVal">F2 = <?php echo $F2;?></td>
                           <td class="ctlGraFctL"><a class="nu" href="#fctrF2">интроверсия</a></td>
                           <td class="ctlGraFct">F2</td>
                           <td class="ctlGraFct">F2</td>
                           <td class="ctlGraFctR"><a class="nu" href="#fctrF2">экстраверсия</a></td>
                        </tr>
                        <tr>
                           <td class="ctlGraVal">F3 = <?php echo $F3;?></td>
                           <td class="ctlGraFctL"><a class="nu" href="#fctrF3">чувствительность</a></td>
                           <td class="ctlGraFct">F3</td>
                           <td class="ctlGraFct">F3</td>
                           <td class="ctlGraFctR"><a class="nu" href="#fctrF3">уравновешенность</a></td>
                        </tr>
                        <tr>
                           <td class="ctlGraVal">F4 = <?php echo $F4;?></td>
                           <td class="ctlGraFctL"><a class="nu" href="#fctrF4">конформность</a></td>
                           <td class="ctlGraFct">F4</td>
                           <td class="ctlGraFct">F4</td>
                           <td class="ctlGraFctR"><a class="nu" href="#fctrF4">независимость</a></td>
                        </tr>
                        <tr>
                           <td colspan=3></td>
                           <td colspan=2></td>
                        </tr>
                        <tr>
                           <td class="ctlGraFtr" colspan=3><b>&minus;</b></td>
                           <td class="ctlGraFtr">0</td>
                           <td class="ctlGraFtr">1</td>
                           <td class="ctlGraFtr">2</td>
                           <td class="ctlGraFtr">3</td>
                           <td class="ctlGraFtr">4</td>
                           <td class="ctlGraFtr">5</td>
                           <td class="ctlGraFtr">6</td>
                           <td class="ctlGraFtr">7</td>
                           <td class="ctlGraFtr">8</td>
                           <td class="ctlGraFtr">9</td>
                           <td class="ctlGraFtr">10</td>
                           <td class="ctlGraFtr" colspan=2><b>+</b></td>
                        </tr>
                     </table>
                  </div>
                  <style>#graph { padding: 0px; margin: 0px; }</style>
                  <script>
                     'use strict';
                     
                     let list_item = document.querySelectorAll('td.ctlGraVal');
                     let stA = list_item[0].textContent.split(' ')[2];
                     let stB = list_item[1].textContent.split(' ')[2];
                     let stC = list_item[2].textContent.split(' ')[2];
                     let stE = list_item[3].textContent.split(' ')[2];
                     let stF = list_item[4].textContent.split(' ')[2];
                     let stG = list_item[5].textContent.split(' ')[2];
                     let stH = list_item[6].textContent.split(' ')[2];
                     let stI = list_item[7].textContent.split(' ')[2];
                     let stL = list_item[8].textContent.split(' ')[2];
                     let stM = list_item[9].textContent.split(' ')[2];
                     let stN = list_item[10].textContent.split(' ')[2];
                     let stO = list_item[11].textContent.split(' ')[2];
                     let stQ1 = list_item[12].textContent.split(' ')[2];
                     let stQ2 = list_item[13].textContent.split(' ')[2];
                     let stQ3 = list_item[14].textContent.split(' ')[2];
                     let stQ4 = list_item[15].textContent.split(' ')[2];
                     let stF1 = list_item[16].textContent.split(' ')[2];
                     let stF2 = list_item[17].textContent.split(' ')[2];
                     let stF3 = list_item[18].textContent.split(' ')[2];
                     let stF4 = list_item[19].textContent.split(' ')[2];
                     
                     if (stA < 5) {
                         stA = stA * -1;
                     } else {
                         stA = stA - 5;
                     } 
                     if (stB < 5) {
                         stB = stB * -1;
                     } else {
                         stB = stB - 5;
                     }
                     if (stC < 5) {
                         stC = stC * -1;
                     } else {
                         stC = stC - 5;
                     }
                     if (stE < 5) {
                         stE = stE * -1;
                     } else {
                         stE = stE - 5;
                     }
                     if (stF < 5) {
                         stF = stF * -1;
                     } else {
                         stF = stF - 5;
                     }
                     if (stG < 5) {
                         stG = stG * -1;
                     } else {
                         stG = stG - 5;
                     }
                     if (stH < 5) {
                         stH = stH * -1;
                     } else {
                         stH = stH - 5;
                     }
                     if (stI < 5) {
                         stI = stI * -1;
                     } else {
                         stI = stI - 5;
                     }
                     if (stL < 5) {
                         stL = stL * -1;
                     } else {
                         stL = stL - 5;
                     }
                     if (stM < 5) {
                         stM = stM * -1;
                     } else {
                         stM = stM - 5;
                     }
                     if (stN < 5) {
                         stN = stN * -1;
                     } else {
                         stN = stN - 5;
                     }
                     if (stO < 5) {
                         stO = stO * -1;
                     } else {
                         stO = stO - 5;
                     }
                     if (stQ1 < 5) {
                         stQ1 = stQ1 * -1;
                     } else {
                         stQ1 = stQ1 - 5;
                     }
                     if (stQ2 < 5) {
                         stQ2 = stQ2 * -1;
                     } else {
                         stQ2 = stQ2 - 5;
                     }
                     if (stQ3 < 5) {
                         stQ3 = stQ3 * -1;
                     } else {
                         stQ3 = stQ3 - 5;
                     }
                     if (stQ4 < 5) {
                         stQ4 = stQ4 * -1;
                     } else {
                         stQ4 = stQ4 - 5;
                     }
                     if (stF1 < 0) {
                         stF1 = stF1 * -1;
                     }
                     if (stF2 < 0) {
                         stF2 = stF2 * -1;
                     }
                     if (stF3 < 0) {
                         stF3 = stF3 * -1;
                     }
                     if (stF4 < 0) {
                         stF4 = stF4 * -1;
                     }
                     
                     window.chartColors = {
                     	red: 'rgb(255, 99, 132)',
                     	orange: 'rgb(255, 159, 64)',
                     	yellow: 'rgb(255, 205, 86)',
                     	green: 'rgb(75, 192, 192)',
                     	blue: 'rgb(54, 162, 235)',
                     	purple: 'rgb(153, 102, 255)',
                     	grey: 'rgb(201, 203, 207)'
                     };
                     
                     (function(global) {
                     	var MONTHS = [
                     		'January',
                     		'February',
                     		'March',
                     		'April',
                     		'May',
                     		'June',
                     		'July',
                     		'August',
                     		'September',
                     		'October',
                     		'November',
                     		'December'
                     	];
                     
                     	var COLORS = [
                     		'#4dc9f6',
                     		'#f67019',
                     		'#f53794',
                     		'#537bc4',
                     		'#acc236',
                     		'#166a8f',
                     		'#00a950',
                     		'#58595b',
                     		'#8549ba'
                     	];
                     
                     	var Samples = global.Samples || (global.Samples = {});
                     	var Color = global.Color;
                     
                     	Samples.utils = {
                     		// Adapted from http://indiegamr.com/generate-repeatable-random-numbers-in-js/
                     		srand: function(seed) {
                     			this._seed = seed;
                     		},
                     
                     		rand: function(min, max) {
                     			var seed = this._seed;
                     			min = min === undefined ? 0 : min;
                     			max = max === undefined ? 1 : max;
                     			this._seed = (seed * 9301 + 49297) % 233280;
                     			return min + (this._seed / 233280) * (max - min);
                     		},
                     
                     		numbers: function(config) {
                     			var cfg = config || {};
                     			var min = cfg.min || 0;
                     			var max = cfg.max || 1;
                     			var from = cfg.from || [];
                     			var count = cfg.count || 8;
                     			var decimals = cfg.decimals || 8;
                     			var continuity = cfg.continuity || 1;
                     			var dfactor = Math.pow(10, decimals) || 0;
                     			var data = [];
                     			var i, value;
                     
                     			for (i = 0; i < count; ++i) {
                     				value = (from[i] || 0) + this.rand(min, max);
                     				if (this.rand() <= continuity) {
                     					data.push(Math.round(dfactor * value) / dfactor);
                     				} else {
                     					data.push(null);
                     				}
                     			}
                     
                     			return data;
                     		},
                     
                     		labels: function(config) {
                     			var cfg = config || {};
                     			var min = cfg.min || 0;
                     			var max = cfg.max || 100;
                     			var count = cfg.count || 8;
                     			var step = 1;
                     			var decimals = cfg.decimals || 8;
                     			var dfactor = Math.pow(10, decimals) || 0;
                     			var prefix = cfg.prefix || '';
                     			var values = [];
                     			var i;
                     
                     			for (i = min; i < max; i += step) {
                     				values.push(prefix + Math.round(dfactor * i) / dfactor);
                     			}
                     
                     			return values;
                     		},
                     
                     		months: function(config) {
                     			var cfg = config || {};
                     			var count = cfg.count || 12;
                     			var section = cfg.section;
                     			var values = [];
                     			var i, value;
                     
                     			for (i = 0; i < count; ++i) {
                     				value = MONTHS[Math.ceil(i) % 12];
                     				values.push(value.substring(0, section));
                     			}
                     
                     			return values;
                     		},
                     
                     		color: function(index) {
                     			return COLORS[index % COLORS.length];
                     		},
                     
                     		transparentize: function(color, opacity) {
                     			var alpha = opacity === undefined ? 0.5 : 1 - opacity;
                     			return Color(color).alpha(alpha).rgbString();
                     		}
                     	};
                     
                     	// DEPRECATED
                     	window.randomScalingFactor = function() {
                     		return Math.round(Samples.utils.rand(-5, 5));
                     	};
                     
                     	// INITIALIZATION
                     
                     	Samples.utils.srand(Date.now());
                     
                     	// Google Analytics
                     	/* eslint-disable */
                     	if (document.location.hostname.match(/^(www\.)?chartjs\.org$/)) {
                     		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                     		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                     		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                     		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
                     		ga('create', 'UA-28909194-3', 'auto');
                     		ga('send', 'pageview');
                     	}
                     	/* eslint-enable */
                     
                     }(this));
                     
                     var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                     		var color = Chart.helpers.color;
                     		var horizontalBarChartData = {
                     		    labels: ['A','B','C','E','F','G','H','I','L','M','N','O','Q1','Q2','Q3','Q4','F1','F2','F3','F4'],
                     // 			labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                     			datasets: [{
                     			 //   maxBarThickness: 10,
                     			 //   barPercentage: 1,
                     			 
                     			 //   label: 'Результаты',
                     				backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                     				borderColor: window.chartColors.red,
                     				borderWidth: 1,
                     				data: [
                     					stA,
                     					stB,
                     					stC,
                     					stE,
                     					stF,
                     					stG,
                     					stH,
                     					stI,
                     					stL,
                     					stM,
                     					stN,
                     					stO,
                     					stQ1,
                     					stQ2,
                     				    stQ3,
                     					stQ4,
                     					stF1*0,
                     					stF2*0,
                     					stF3*0,
                     					stF4*0
                     				]
                     			}, ]
                     
                     		};
                     
                     		window.onload = function() {
                     			var ctx = document.getElementById('canvas').getContext('2d');
                     			window.myHorizontalBar = new Chart(ctx, {
                     				type: 'horizontalBar',
                     				data: horizontalBarChartData,
                     				options: {
                     				    tooltips: {
                     				        enabled: false
                     				    },
                     				      scales: {
                                 xAxes: [{
                                     ticks: {
                                         display: false,
                                          stepSize : 5
                                     }
                                 }]
                             },
                     				    min: -5,
                     				    max: 5,
                     					// Elements options apply to all of the options unless overridden in a dataset
                     					// In this case, we are setting the border of each horizontal bar to be 2px wide
                     					elements: {
                     						rectangle: {
                     							borderWidth: 1,
                     						}
                     					},
                     					responsive: true,
                     					legend: {
                     					    display: false,
                     						position: 'top',
                     					},
                     				// 	title: {
                     				// 		display: true,
                     				// 		text: 'Chart.js Horizontal Bar Chart'
                     				// 	}
                     				}
                     			});
                     
                     		};
                     
                     // var c = document.getElementById("graph"); var ctx = c.getContext("2d");
                     // ctx.lineWidth=1;
                     // ctx.beginPath(); ctx.strokeStyle="#FF6633"; ctx.moveTo(20.5,0); ctx.lineTo(20.5,600); ctx.stroke();
                     // ctx.beginPath(); ctx.strokeStyle="#FF9966"; ctx.moveTo(60.5,0); ctx.lineTo(60.5,600); ctx.stroke();
                     // ctx.beginPath(); ctx.strokeStyle="#33CC33"; ctx.moveTo(100.5,0); ctx.lineTo(100.5,600); ctx.stroke();
                     // ctx.moveTo(140.5,0); ctx.lineTo(140.5,600); ctx.stroke();
                     // ctx.moveTo(180.5,0); ctx.lineTo(180.5,600); ctx.stroke();
                     // ctx.moveTo(220.5,0); ctx.lineTo(220.5,600); ctx.stroke();
                     // ctx.moveTo(260.5,0); ctx.lineTo(260.5,600); ctx.stroke();
                     // ctx.moveTo(300.5,0); ctx.lineTo(300.5,600); ctx.stroke();
                     // ctx.beginPath(); ctx.strokeStyle="#FF9966"; ctx.moveTo(340.5,0); ctx.lineTo(340.5,600); ctx.stroke();
                     // ctx.beginPath(); ctx.strokeStyle="#FF6633"; ctx.moveTo(380.5,0); ctx.lineTo(380.5,600); ctx.stroke();
                     // ctx.beginPath(); ctx.strokeStyle="#CCCCCC";ctx.moveTo(0,15); ctx.lineTo(400,15); ctx.stroke();
                     // ctx.moveTo(0,45); ctx.lineTo(400,45); ctx.stroke();
                     // ctx.moveTo(0,75); ctx.lineTo(400,75); ctx.stroke();
                     // ctx.moveTo(0,105); ctx.lineTo(400,105); ctx.stroke();
                     // ctx.moveTo(0,135); ctx.lineTo(400,135); ctx.stroke();
                     // ctx.moveTo(0,165); ctx.lineTo(400,165); ctx.stroke();
                     // ctx.moveTo(0,195); ctx.lineTo(400,195); ctx.stroke();
                     // ctx.moveTo(0,225); ctx.lineTo(400,225); ctx.stroke();
                     // ctx.moveTo(0,255); ctx.lineTo(400,255); ctx.stroke();
                     // ctx.moveTo(0,285); ctx.lineTo(400,285); ctx.stroke();
                     // ctx.moveTo(0,315); ctx.lineTo(400,315); ctx.stroke();
                     // ctx.moveTo(0,345); ctx.lineTo(400,345); ctx.stroke();
                     // ctx.moveTo(0,375); ctx.lineTo(400,375); ctx.stroke();
                     // ctx.moveTo(0,405); ctx.lineTo(400,405); ctx.stroke();
                     // ctx.moveTo(0,435); ctx.lineTo(400,435); ctx.stroke();
                     // ctx.moveTo(0,465); ctx.lineTo(400,465); ctx.stroke();
                     // ctx.moveTo(0,495); ctx.lineTo(400,495); ctx.stroke();
                     // ctx.moveTo(0,525); ctx.lineTo(400,525); ctx.stroke();
                     // ctx.moveTo(0,555); ctx.lineTo(400,555); ctx.stroke();
                     // ctx.moveTo(0,585); ctx.lineTo(400,585); ctx.stroke();
                     // //line
                     
                     
                     // function dot(x) {
                     //     return (((x-1)*40)+20)
                     // }
                     
                     // ctx.beginPath(); ctx.strokeStyle="#33CC33"; ctx.lineWidth=2; 
                     // ctx.moveTo(200.5,0); ctx.lineTo(200.5,600); ctx.stroke();
                     // ctx.beginPath(); ctx.lineWidth=3; ctx.strokeStyle="#000000";
                     // ctx.moveTo(dot(stA),15);//A
                     // ctx.lineTo(dot(stB),45); ctx.stroke();
                     // ctx.moveTo(dot(stB),45); 
                     // ctx.lineTo(dot(stC),75); ctx.stroke();
                     // ctx.moveTo(dot(stC),75);
                     // ctx.lineTo(dot(stE),105); ctx.stroke();
                     // ctx.moveTo(dot(stE),105);
                     // ctx.lineTo(dot(stF),135);ctx.stroke();
                     // ctx.moveTo(dot(stF),135);
                     // ctx.lineTo(dot(stG),165); ctx.stroke();
                     // ctx.moveTo(dot(stG),165);
                     // ctx.lineTo(dot(stH),195); ctx.stroke();
                     // ctx.moveTo(dot(stH),195);
                     // ctx.lineTo(dot(stI),225); ctx.stroke();
                     // ctx.moveTo(dot(stI),225);
                     // ctx.lineTo(dot(stL),255); ctx.stroke();
                     // ctx.moveTo(dot(stL),255);
                     // ctx.lineTo(dot(stM),285); ctx.stroke();
                     // ctx.moveTo(dot(stM),285);
                     // ctx.lineTo(dot(stN),315); ctx.stroke();
                     // ctx.moveTo(dot(stN),315);
                     // ctx.lineTo(dot(stO),345); ctx.stroke();
                     // ctx.moveTo(dot(stO),345);
                     // ctx.lineTo(dot(stQ1),375); ctx.stroke();
                     // ctx.moveTo(dot(stQ1),375);
                     // ctx.lineTo(dot(stQ2),405); ctx.stroke();
                     // ctx.moveTo(dot(stQ2),405);
                     // ctx.lineTo(dot(stQ3),435); ctx.stroke();
                     // ctx.moveTo(dot(stQ3),435);
                     // ctx.lineTo(dot(stQ4),465); ctx.stroke();
                     // ctx.moveTo(dot(stQ4),465);
                     // ctx.lineTo(dot(stF1),495); ctx.stroke();
                     // ctx.moveTo(dot(stF1),495);
                     // ctx.lineTo(dot(stF2),525); ctx.stroke();
                     // ctx.moveTo(dot(stF2),525);
                     // ctx.lineTo(dot(stF3),555); ctx.stroke();
                     // ctx.moveTo(dot(stF3),555);
                     // ctx.lineTo(dot(stF3),585); ctx.stroke();
                  </script>
               </div>
            </div>
            <div class="ctValid">
               <p><a href="#hh5">Шкала валидности</a> <b>MD</b> = <b><?php echo (int)$md;?></b> –  <span class="green">достоверный результат</span></p>
               <p><a href="#hh5">Шкала валидности</a> <b>FB</b> = <b><?php echo (int)$fb;?></b> –  <span class="red">недостоверный результат</span> (стремление выглядеть хуже, чем на самом деле)</p>
            </div>
            <h3 id="hh1">Интерпретация первичных факторов</h3>
            <p id="fctrA">&bull; <a href="/result?v=ctlA1ofnjXOm-dDC6MKdsr1OwX&m=full#fctrA">Фактор A</a> («замкнутость – общительность») = <b><?php echo ($stA);?></b> (A<?php echo ($stA > 5.5 ? ('+'):('-'));?>)</p>
            <p class="on">Для низкого значения (A&minus;) характерно: скрытность, обособленность, отчужденность, недоверчивость, необщительность, замкнутость, критичность, склонность к объективности, ригидности, к излишней строгости в оценке людей. Трудности в установлении межличностных, непосредственных контактов</p>
            <p>Для высокого значения (A+) характерно: общительность, открытость, естественность, непринужденность, готовность к сотрудничеству, приспособляемость, внимание к людям, готовность к совместной работе, активность в устранении конфликтов в группе, готовность идти на поводу. Легкость в установлении непосредственных, межличностных контактов</p>
            <p id="fctrB">&bull; <a href="/result?v=ctlA1ofnjXOm-dDC6MKdsr1OwX&m=full#fctrB">Фактор B</a> (интеллект) = <b><?php echo $stB;?></b> (B<?php echo ($stB > 5.5 ? ('+'):('-'));?>)</p>
            <p class="on">Для низкого значения (B&minus;) характерно: конкретность и некоторая ригидность мышления, затруднения в решении абстрактных задач, сниженная оперативность мышления, недостаточный уровень общей вербальной культуры.</p>
            <p>Для высокого значения (B+) характерно: развитое абстрактное мышление, оперативность, сообразительность, быстрая обучаемость. Достаточно высокий уровень общей культуры, особенно вербальной.</p>
            <div class="reel reel_middle">
               <div id="yandex_rtb_R-A-216366-6"></div>
               <script type="text/javascript"> (function(w, d, n, s, t) { w[n] = w[n] || []; w[n].push(function() { Ya.Context.AdvManager.render({ blockId: "R-A-216366-6", renderTo: "yandex_rtb_R-A-216366-6", async: true }, function altCallback() { document.getElementById("yandex_rtb_R-A-216366-6").innerHTML = '<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5232438239599560" data-ad-slot="3268638540" data-ad-format="auto" data-full-width-responsive="true"></ins>'; (adsbygoogle = window.adsbygoogle || []).push({}); } ); }); t = d.getElementsByTagName("script")[0]; s = d.createElement("script"); s.type = "text/javascript"; s.src = "//an.yandex.ru/system/context.js"; s.async = true; t.parentNode.insertBefore(s, t); })(this, this.document, "yandexContextAsyncCallbacks");</script>
            </div>
            <p id="fctrC">&bull; <a href="/result?v=ctlA1ofnjXOm-dDC6MKdsr1OwX&m=full#fctrC">Фактор C</a> («эмоциональная нестабильность – эмоциональная стабильность») = <b><?php echo $stC;?></b> (C<?php echo ($stC > 5.5 ? ('+'):('-'));?>)</p>
            <p>Для низкого значения (C&minus;) характерно: эмоциональная неустойчивость, импульсивность; человек находится под влиянием чувств, переменчив в настроениях, легко расстраивается, неустойчив в интересах. Низкая толерантность по отношению к фрустрации, раздражительность, утомляемость.</p>
            <p>Для высокого значения (C+) характерно: эмоциональная устойчивость, выдержанность; человек эмоционально зрелый, спокойный, устойчив в интересах, работоспособный, может быть ригидным, ориентирован на реальность.</p>
            <p id="fctrE">&bull; <a href="/result?v=ctlA1ofnjXOm-dDC6MKdsr1OwX&m=full#fctrE">Фактор E</a> («подчиненность – доминантность») = <b><?php echo $stE;?></b> (E<?php echo ($stE > 5.5 ? ('+'):('-'));?>)</p>
            <p>Для низкого значения (E&minus;) характерно: мягкость, уступчивость, тактичность, кроткость, любезность, зависимость, безропотность, услужливость, почтительность, застенчивость, готовность брать вину на себя, скромность, экспрессивность, склонность легко выходить из равновесия.</p>
            <p>Для высокого значения (E+) характерно: самостоятельность, независимость, настойчивость, упрямство, напористость, своенравие, иногда конфликтность, агрессивность, отказ от признания внешней власти, склонность к авторитарному поведению, жажда восхищения, бунтарь.</p>
            <p id="fctrF">&bull; <a href="/result?v=ctlA1ofnjXOm-dDC6MKdsr1OwX&m=full#fctrF">Фактор F</a> («сдержанность – экспрессивность») = <b><?php echo $stF;?></b> (F<?php echo ($stF > 5.5 ? ('+'):('-'));?>)</p>
            <p>Для низкого значения (F&minus;) характерно: благоразумие, осторожность, рассудительность в выборе партнера по общению. Склонность к озабоченности, беспокойству о будущем, пессимистичность в восприятии действительности, сдержанность в проявлении эмоций.</p>
            <p class="on">Для высокого значения (F+) характерно: жизнерадостность, импульсивность, восторженность, беспечность, безрассудность в выборе партнеров по общению, эмоциональная значимость социальных контактов, экспрессивность, экспансивность, эмоциональная яркость в отношениях между людьми, динамичность общения, которая предполагает эмоциональное лидерство в группах</p>
            <p id="fctrG">&bull; <a href="/result?v=ctlA1ofnjXOm-dDC6MKdsr1OwX&m=full#fctrG">Фактор G</a> («низкая нормативность поведения – высокая нормативность поведения») = <b><?php echo $stG;?></b> (G<?php echo ($stG > 5.5 ? ('+'):('-'));?>)</p>
            <p class="on">Для низкого значения (G&minus;) характерно: склонность к непостоянству, подверженность влиянию чувств, случая и обстоятельств. Потворствует своим желаниям, не делает усилий по выполнению групповых требований и норм. Неорганизованность, безответственность, импульсивность, отсутствие согласия с общепринятыми моральными правилами и стандартами, гибкость по отношению к социальным нормам, свобода от их влияния, иногда беспринципность и склонность к асоциальному поведению.</p>
            <p>Для высокого значения (G+) характерно: добросовестность, ответственность, стабильность, уравновешенность, настойчивость, склонность к морализированию, разумность, совестливость. Развитое чувство долга и ответственности, осознанное соблюдение общепринятых моральных правил и норм, настойчивость в достижении цели, деловая направленность.</p>
            <p id="fctrH">&bull; <a href="/result?v=ctlA1ofnjXOm-dDC6MKdsr1OwX&m=full#fctrH">Фактор H</a> («робость – смелость») = <b><?php echo $stH;?></b> (H<?php echo ($stH > 5.5 ? ('+'):('-'));?>)</p>
            <p>Для низкого значения (H&minus;) характерно: робость, застенчивость, эмоциональная сдержанность, осторожность, социальная пассивность, деликатность, внимательность к другим, повышенная чувствительность к угрозе, предпочтение индивидуального стиля деятельности и общения в малой группе (2–3 человека).</p>
            <p>Для высокого значения (H+) характерно: смелость, предприимчивость, активность; человек имеет эмоциональные интересы, готовность к риску и сотрудничеству с незнакомыми людьми в незнакомых обстоятельствах, способность принимать самостоятельные, неординарные решения, склонность к авантюризму и проявлению лидерских качеств.</p>
            <p id="fctrI">&bull; <a href="/result?v=ctlA1ofnjXOm-dDC6MKdsr1OwX&m=full#fctrI">Фактор I</a> («жесткость – чувствительность») = <b><?php echo $stI;?></b> (I<?php echo ($stI > 5.5 ? ('+'):('-'));?>)</p>
            <p>Для низкого значения (I&minus;) характерно: несентиментальность, самоуверенность, суровость, рассудочность, гибкость в суждениях, практичность, иногда некоторая жесткость и черствость по отношению к окружающим, рациональность, логичность.</p>
            <p class="on">Для высокого значения (I+) характерно: чувствительность, впечатлительность, богатство эмоциональных переживаний, склонность к романтизму, художественное восприятие мира, развитые эстетические интересы, артистичность, женственность, склонность к эмпатии, сочувствию, сопереживанию и пониманию других людей, утонченная эмоциональность.</p>
            <p id="fctrL">&bull; <a href="/result?v=ctlA1ofnjXOm-dDC6MKdsr1OwX&m=full#fctrL">Фактор L</a> («доверчивость – подозрительность») = <b><?php echo $stL;?></b> (L<?php echo ($stL > 5.5 ? ('+'):('-'));?>)</p>
            <p>Для низкого значения (L&minus;) характерно: открытость, уживчивость, терпимость, покладистость; свобода от зависти, уступчивость. Может быть чувство собственной незначительности.</p>
            <p>Для высокого значения (L+) характерно: осторожность, эгоцентричность, настороженность по отношению к людям; склонность к ревности, стремление возложить ответственность за ошибки на окружающих, раздражительность. Иногда автономность, самостоятельность и независимость в социальном поведении.</p>
            <p id="fctrM">&bull; <a href="/result?v=ctlA1ofnjXOm-dDC6MKdsr1OwX&m=full#fctrM">Фактор M</a> («практичность – мечтательность») = <b><?php echo $stM;?></b> (M<?php echo ($stM > 5.5 ? ('+'):('-'));?>)</p>
            <p>Для низкого значения (M&minus;) характерно: высокая скорость решения практических задач, прозаичность, ориентация на внешнюю реальность, развитое конкретное воображение, практичность, реалистичность.</p>
            <p>Для высокого значения (M+) характерно: богатое воображение, поглощенность своими идеями, внутренними иллюзиями («витает в облаках»), легкость отказа от практических суждений, умение оперировать абстрактными понятиями, ориентированность на свой внутренний мир; мечтательность.</p>
            <p id="fctrN">&bull; <a href="/result?v=ctlA1ofnjXOm-dDC6MKdsr1OwX&m=full#fctrN">Фактор N</a> («прямолинейность – дипломатичность») = <b><?php echo $stN;?></b> (N<?php echo ($stN > 5.5 ? ('+'):('-'));?>)</p>
            <p>Для низкого значения (N&minus;) характерно: откровенность, простота, наивность, прямолинейность, бестактность, естественность, непосредственность, эмоциональность, недисциплинированность, неумение анализировать мотивы партнера, отсутствие проницательности, простота вкусов, довольствие имеющимся.</p>
            <p>Для высокого значения (N+) характерно: изысканность, умение вести себя в обществе, в общении дипломатичность, эмоциональная выдержанность, проницательность, осторожность, хитрость, эстетическая изощренность, иногда ненадежность, умение находить выход из сложных ситуаций, расчетливость.</p>
            <p id="fctrO">&bull; <a href="/result?v=ctlA1ofnjXOm-dDC6MKdsr1OwX&m=full#fctrO">Фактор O</a> («спокойствие – тревожность») = <b><?php echo $stO;?></b> (O<?php echo ($stO > 5.5 ? ('+'):('-'));?>)</p>
            <p>Для низкого значения (O&minus;) характерно: беспечность, самонадеянность, жизнерадостность, уверенность в себе и в своих силах, безмятежность, небоязливость, хладнокровие, спокойствие, отсутствие раскаяния и чувства вины.</p>
            <p class="on">Для высокого значения (O+) характерно: беспокойство, озабоченность, ранимость, ипохондричность, подверженность настроению, страх, неуверенность в себе, склонность к предчувствиям, самобичеванию, к депрессиям, чувствительность к одобрению окружающих, чувство вины и недовольство собой.</p>
            <p id="fctrQ1">&bull; <a href="/result?v=ctlA1ofnjXOm-dDC6MKdsr1OwX&m=full#fctrQ1">Фактор Q1</a> («консерватизм – радикализм») = <b><?php echo $stQ1;?></b> (Q1<?php echo ($stQ1 > 5.5 ? ('+'):('-'));?>)</p>
            <p>Для низкого значения (Q1&minus;) характерно: консервативность, устойчивость по отношению к традициям, сомнение в отношении к новых идей и принципов, склонность к морализации и нравоучениям, сопротивление переменам, узость интеллектуальных интересов, ориентация на конкретную реальную деятельность.</p>
            <p class="on">Для высокого значения (Q1+) характерно: свободомыслие, экспериментаторство, наличие интеллектуальных интересов, развитое аналитическое мышление, восприимчивость к переменам, к новым идеям, недоверие к авторитетам, отказ принимать что-либо на веру, направленность на аналитическую, теоретическую деятельность.</p>
            <p id="fctrQ2">&bull; <a href="/result?v=ctlA1ofnjXOm-dDC6MKdsr1OwX&m=full#fctrQ2">Фактор Q2</a> («конформизм – нонконформизм») = <b><?php echo $stQ2;?></b> (Q2<?php echo ($stQ2 > 5.5 ? ('+'):('-'));?>)</p>
            <p>Для низкого значения (Q2&minus;) характерно: зависимость от мнения и требований группы, социабельность, следование за общественным мнением, стремление работать и принимать решения вместе с другими людьми, низкая самостоятельность, ориентация на социальное одобрение.</p>
            <p class="on">Для высокого значения (Q2+) характерно: независимость, ориентация на собственные решения, самостоятельность, находчивость, стремление иметь собственное мнение. При крайних высоких оценках склонность к противопоставлению себя группе и желание в ней доминировать.</p>
            <p id="fctrQ3">&bull; <a href="/result?v=ctlA1ofnjXOm-dDC6MKdsr1OwX&m=full#fctrQ3">Фактор Q3</a> («низкий самоконтроль – высокий самоконтроль») = <b><?php echo $stQ3;?></b> (Q3<?php echo ($stQ3 > 5.5 ? ('+'):('-'));?>)</p>
            <p class="on">Для низкого значения (Q3&minus;) характерно: низкая дисциплинированность, следует своим желаниям, зависимость от настроений, неумение контролировать свои эмоции и поведение.</p>
            <p>Для высокого значения (Q3+) характерно: целенаправленность, сильная воля, умение контролировать свои эмоции и поведение.</p>
            <p id="fctrQ4">&bull; <a href="/result?v=ctlA1ofnjXOm-dDC6MKdsr1OwX&m=full#fctrQ4">Фактор Q4</a> («расслабленность – напряженность») = <b><?php echo $stQ4;?></b> (Q4<?php echo ($stQ4 > 5.5 ? ('+'):('-'));?>)</p>
            <p>Для низкого значения (Q4&minus;) характерно: расслабленность, вялость, апатичность, спокойствие, низкая мотивация, излишняя удовлетворенность, невозмутимость.</p>
            <p>Для высокого значения (Q4+) характерно: собранность, энергичность, напряженность, фрустрированность, повышенная мотивация, беспокойство, взвинченность, раздражительность.</p>
            <h3 id="hh2">Интерпретация вторичных факторов</h3>
            <p id="fctrF1">&bull; <a href="/result?v=ctlA1ofnjXOm-dDC6MKdsr1OwX&m=full#fctrF1">Фактор F1</a> («низкая тревожность – высокая тревожность») = <b><?php echo $F1;?></b> (F1<?php echo ($F1 > 5.5 ? ('+'):('-'));?>)</p>
            <p>Для низкого значения (F1&minus;) характерно: в общем этот человек удовлетворен тем, что есть, и может добиться того, что ему кажется важным. Однако очень низкие баллы могут означать недостаток мотивации в трудных ситуациях.</p>
            <p>Для высокого значения (F1+) характерно: высокий уровень тревоги в ее обычном понимании. Тревога не обязательно невротическая, поскольку она может быть обусловлена ситуационно. Однако в чем-то имеет неприспособленность, т. к. человек недоволен в степени, которая не позволяет ему выполнять требования и достигать того, что желает. Очень высокая тревога обычно нарушает продуктивность и приводит к соматическим расстройствам.</p>
            <p id="fctrF2">&bull; <a href="/result?v=ctlA1ofnjXOm-dDC6MKdsr1OwX&m=full#fctrF2">Фактор F2</a> («интроверсия – экстраверсия») = <b><?php echo $F2;?></b> (F2<?php echo ($F2 > 5.5 ? ('+'):('-'));?>)</p>
            <p>Для низкого значения (F2&minus;) характерно: склонность к сухости, к самоудовлетворению, замороженности межличностных контактов. Это может быть благоприятно в работе, требующей точности.</p>
            <p>Для высокого значения (F2+) характерно: социально контактен, незаторможен, успешно устанавливает и поддерживает межличностные связи. Это может быть очень благоприятным моментом в ситуациях, требующих темперамента такого типа. Эту черту следует считать всегда благоприятным прогнозом в деятельности, например в учебе.</p>
            <p id="fctrF3">&bull; <a href="/result?v=ctlA1ofnjXOm-dDC6MKdsr1OwX&m=full#fctrF3">Фактор F3</a> («чувствительность – уравновешенность») = <b><?php echo $F3;?></b> (F3<?php echo ($F3 > 5.5 ? ('+'):('-'));?>)</p>
            <p>Для низкого значения (F3&minus;) характерно: тенденция испытывать затруднения в связи с проявляющейся во всем эмоциональностью. Эти люди могут относиться к типу недовольных и фрустрированных. Однако присутствует чувствительность к нюансам жизни. Вероятно, имеются артистические наклонности и мягкость. Если у такого человека возникает проблема, то на ее разрешение требуется много размышлений до начала действий.</p>
            <p>Для высокого значения (F3+) характерно: предприимчивая, решительная и гибкая личность. Этот человек склонен не замечать жизненных нюансов, направляя свое поведение на слишком явное и очевидное. Если возникают трудности, то они вызывают быстрое действие без достаточного размышления.</p>
            <p id="fctrF4">&bull; <a href="/result?v=ctlA1ofnjXOm-dDC6MKdsr1OwX&m=full#fctrF4">Фактор F4</a> («конформность – независимость») = <b><?php echo $F4;?></b> (F4<?php echo ($F4 > 5.5 ? ('+'):('-'));?>)</p>
            <p>Для низкого значения (F4&minus;) характерно: зависимая от группы, пассивная личность, нуждающаяся в поддержке других лиц и ориентирующая свое поведение в направлении людей, которые такую поддержку оказывают.</p>
            <p class="on">Для высокого значения (F4+) характерно: агрессивная, независимая, отважная, резкая личность. Старается выбрать такие ситуации, где подобное поведение, по крайней мере, терпят. Проявляет значительную инициативу.</p>
            <h3 id="hh5">Шкалы валидности</h3>
            <p>В дополнение к первичным личностным факторам опросника обычно подсчитываются два показателя, отражающие отношение к тестированию (шкалы валидности):<br>1) стремление выглядеть в благоприятном свете – шкала MD,<br>2) стремление выглядеть хуже, чем на самом деле – шкала FB.</p>
            <p><strong>Шкала MD</strong> была разработана для выявления тех случаев, когда испытуемые пытаются создать слишком благоприятное представление о себе. Если оценка по шкале MD высокая, возникает несколько гипотез, которые нужно проверить:<br>1. Это может свидетельствовать о том, что испытуемый сознательно манипулирует тестовыми результатами (например, при приеме на работу).<br>2. Высокую оценку по шкале MD могут получить обследуемые, которых очень беспокоит вопрос о том, как они выглядят в глазах окружающих. В интервью они обычно признают этот факт, но при этом утверждают, что на вопросы отвечали искренне.<br>3. Иногда люди получают высокую оценку по шкале MD, хотя они и не искажают результаты. Например, это характерно для людей, поступающих на религиозную службу.</p>
            <p><strong>Шкала FB</strong> была разработана для выявления испытуемых, чрезмерно опечаленных и озабоченных своими неудачами, реальными или воображаемыми. Две наиболее общие ситуации, при которых оценка по шкале FB высокая, следующие:<br>1. Человек стремится подчеркнуть свою психологическую дезадаптированность в целях получения психологической помощи.<br>2. Подчеркивание своих неудач и неадекватности может быть вызвано реальной депрессией или другими серьезными нарушениями.</p>
            <h3 id="hh3">Интерпретация парных сочетаний первичных факторов</h3>
            <p>&bull; <a href="/ctl/A1ofnjXOm-dDC6MKdsr1OwX/full#fctrAH">Сочетание факторов A и H</a> отражает потребность личности в общении, умении общаться.</p>
            <p class="on">Средние значения факторов А  и Н  характеризуют человека, который взаимоотношений с людьми не избегает, но собственная активность в установлении и сохранении контактов невысокая. Инициатором общения становится в том случае, если затрагиваются его интересы или проблема решается только с помощью общения. Избирателен в общении; имеет небольшой круг друзей и знакомых, которые близки по интересам и ценностным ориентациям и с которыми чувствует себя комфортно. Общение с большой аудиторией или авторитетными людьми требует преодоления напряжения.</p>
            <p>&bull; <a href="/ctl/A1ofnjXOm-dDC6MKdsr1OwX/full#fctrLN">Сочетание факторов L и N</a> характеризует отношение личности к другим людям.</p>
            <p class="on">Средние значения факторов L  и N  отражают способность человека достаточно тонко разбираться в людях, задумываться над мотивами их поведения. Однако на свои оценки и характеристики такой человек ориентируется редко. К людям относится доброжелательно, но без особой доверительности. Доверительные отношения устанавливает с теми, кто близок по интересам, с кем поддерживает давние отношения. Понимает чужие проблемы, но собственные проблемы предпочитает хранить в тайне и решать самостоятельно. Возможны конфликты и разногласия с окружающими, но они не продолжительны.</p>
            <p>&bull; <a href="/ctl/A1ofnjXOm-dDC6MKdsr1OwX/full#fctrEQ2">Сочетание факторов E и Q2</a> отражает некоторые стороны лидерского потенциала личности.</p>
            <p class="on">Средние значения факторов E  и Q2  говорят об умеренно выраженном лидерском потенциале личности. Существующая собственная точка зрения по многим вопросам не навязывается группе. Лидерские функции проявляются преимущественно в привычных ситуациях, развитие которых можно предвидеть, а появление трудностей можно предотвратить. Лидерская активность возможна также и тогда, когда ситуация глубоко затрагивает личные интересы. Мнение группы уважает также, как и свое. Учитывает его, может изменить собственное под давлением группы. Однако ответственные решения предпочитает принимать самостоятельно.</p>
            <p>&bull; <a href="/ctl/A1ofnjXOm-dDC6MKdsr1OwX/full#fctrNQ1">Сочетание факторов N и Q1</a> отражают гибкость и оперативность мышления личности.</p>
            <p class="on">Средние значения факторов N  и Q1  встречаются у лиц, склонных быстро ориентироваться в проблемных ситуациях, но не всегда умеющих просчитывать варианты решения. В связи с этим выбранное решение не всегда бывает оптимальным. Новые идеи и способы решений использует взвешенно, лишь после всесторонней оценки и оценки последствий.</p>
            <p>&bull; <a href="/ctl/A1ofnjXOm-dDC6MKdsr1OwX/full#fctrCI">Сочетание факторов C и I</a> характеризует чувствительность личности к эмоциогенным воздействиям.</p>
            <p class="on">Средние значения факторов С  и I  характерны для человека, который сохраняет эмоциональное равновесие преимущественно в привычной для себя обстановке. При неожиданном появлении дополнительных трудностей возникает кратковременное чувство тревоги и беспомощности. Сильные эмоциональные реакции возможны в тех ситуациях, которые глубоко затрагивают актуальные потребности.</p>
            <p>&bull; <a href="/ctl/A1ofnjXOm-dDC6MKdsr1OwX/full#fctrOQ4">Сочетание факторов O и Q4</a> характеризует разные проявления тревожности как личностного свойства.</p>
            <p class="on">Средние значения факторов O  и Q4  относятся к человеку, который испытывает тревогу, беспокойство в непривычных для себя ситуациях. Тогда, когда обстановка знакома и предсказуема, ощущение тревоги ослабевает или не возникает вообще. Пытается объективно воспринимать происходящее и окружающих людей. Препятствия на пути к достижению цели кажутся непреодолимыми, но довольно долго ищет оптимальные выходы из сложившейся проблемной ситуации. Критические замечания в свой адрес воспринимает сначала с раздражением, затем находит в них рациональное зерно, и раздражение снимается. В конфликтных ситуациях склонен обвинять не только других, но и себя.</p>
            <p>&bull; <a href="/ctl/A1ofnjXOm-dDC6MKdsr1OwX/full#fctrQ3G">Сочетание факторов Q3 и G</a> характеризует саморегулятивные способности.</p>
            <p class="on">Низкие значения факторов Q3  и G  характерны для тех, кто отступает от желаемой цели, как только появляются внутренние или внешние препятствия. Часто действует неорганизованно. Не умеет планировать и рационально распределять свое время. Поведение регулируется преимущественно личными, сиюминутными желаниями и потребностями, поэтому не всегда вписывается в традиционные рамки. Свои возможности не всегда оцениваются критично. Достаточно свободно относится к моральным нормам.</p>
      </div>
      <br><script>document.write(divart('WK99')+divart('AL00')+rotart());</script><script>setTimeout(function abc() { var bz = 0; if (window.getComputedStyle(document.getElementById('TopAd')).getPropertyValue('display') != 'block') { bz = 1; } var xmlhttp = new XMLHttpRequest(); xmlhttp.open('GET', '/cgi/abc.pl?bz='+bz+'&c='+getRandomInt(0,99999), true); xmlhttp.send(); }, 1000);</script>
      </main>
      <div class="reel reel_footer">
         <?php
            //проверяем, существуют ли переменные в массиве POST
            if(!isset($_POST['fio']) and !isset($_POST['email'])){
             ?> 
             <p><strong>Отправить результаты на почту:</strong></p>
         <form action="<?php echo $url?>" method="post">
            <input type="text" name="fio" placeholder="Укажите ФИО" required>
            <input type="text" name="email" placeholder="Укажите e-mail" required>
            <input type="text" name="url" placeholder="<?php echo $url?>" readonly>
            <input type="submit" value="Отправить">
         </form>
         <?php
            } else {
             //показываем форму
             $fio = $_POST['fio'];
             $email = $_POST['email'];
            //  $url = htmlspecialchars($url);
             $fio = htmlspecialchars($fio);
             $email = htmlspecialchars($email);
            //  $url = urldecode($url);
             $fio = urldecode($fio);
             $email = urldecode($email);
            //  $url = trim($url);
             $fio = trim($fio);
             $email = trim($email);
            $subject = 'Результат теста.';
            $message = "<a href='$url'>$fio</a>";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: <admin@ibox.ru.net>' . "\r\n";
            $headers .= 'Cc: admin@ibox.ru.net' . "\r\n";
            
            mail($email,$subject,$message,$headers);
            }
            ?>
      </div>
   </body>
</html>