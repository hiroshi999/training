<?php
/*
// 行数気にしない
for($i=1;$i<=100;$i++)
{
	if($i%15 == 0)
	{
		echo('Fizz Buzz');
	}
	else if($i%3 == 0)
	{
		echo('Fizz');
	}
	else if($i%5 == 0)
	{
		echo('Buzz');
	}
	else
	{
		echo($i);
	}
	echo("\n");
}
*/

/*
// 1行
for($i=1;$i<=100;$i++)echo($i%15==0?'Fizz Buzz':($i%3==0?'Fizz':($i%5==0?'Buzz':$i)))."\n";
*/

// 関数化
function fizzbuzz($var=0)
{
	return $var % 15 == 0 ? 'Fizz Buzz' : (
	       $var % 3  == 0 ? 'Fizz' : (
		   $var % 5  == 0 ? 'Buzz' : 
		   $var
	));
}
for($i=1;$i<=100;$i++)
{
	echo(fizzbuzz($i)."\n");
}
