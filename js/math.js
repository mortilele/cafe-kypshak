document.getElementById('regist').disabled = true;
$val1=Math.floor(Math.random() * 15); //randomize value until 30 digit
document.getElementById("demo1").innerHTML =$val1;
$val2=Math.floor(Math.random() * 15); //randomize second value until 30 digit
document.getElementById("demo2").innerHTML =$val2;
function sum (){
$sum=$val1+$val2; //find sum of two values
$val3=document.getElementById("rez").value;
if ($val3==$sum) {document.getElementById("regist").disabled = false;} 
//if entered value not same with sum, button disable, if they match same values button is active
else
{document.getElementById("regist").disabled = true;}
}