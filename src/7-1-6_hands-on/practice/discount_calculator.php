<?php
//課題１
$original_price = 5000;
$discount_rate = 0.20;
$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;

echo  "割引後の価格は{$final_price}円です";

//課題２
$number = 7;

if ($number % 2 == 0) {
    echo "{$number}は偶数です";
} else {
    echo "{$number}は奇数です";
}

//課題３
$age = 25;
$is_member = true;
$is_student = true;

if ($age >= 18 && $is_member) {
    echo '割引が適用されます';
}

if ($age >=65 || $is_student) {
    echo 'シニア・学生割引が適用されます';
}

//課題４
$score = 200;
$score += 50;
$score -= 30;
$score *= 2;

echo "最終スコアは{$score}点です"