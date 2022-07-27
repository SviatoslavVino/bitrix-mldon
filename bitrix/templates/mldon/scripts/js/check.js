function validate(){
var x=document.forms["form"]["date"].value;
   if (x.length===0){
      document.getElementById('chow_error_date').innerHTML="*Пожалуйста заполните поле с датой";
      return false;}}
      

      
function valiphone(){
var phone = $('.chek_phone').val();
var str=phone.split('');
var p=true; 
var s=str.length;
    if((str.length)==10){
        if (str[0]==0 && str[1]==7 && str[2]==1
         || str[0]==0 && str[1]==9 && str[2]==9
         || str[0]==0 && str[1]==9 && str[2]==5
         || str[0]==0 && str[1]==5 && str[2]==0
         || str[0]==0 && str[1]==6 && str[2]==6){p=false;}
    }    

    if((str.length)==11){
        if      (str[0]==7){p=false;}
        else if (str[0]==8){p=false;}
    }
    if((str.length)==12){
        if (str[0]==3 && str[1]==8 && str[2]==0){p=false;}
    }    
        if (p==true){ 
        alert("*Пожалуйста введите номер правильно!*");
        document.getElementById('chow_error_tel').innerHTML="*Пожалуйста введите номер правильно!*";
        document.getElementById('phone').value = '';}
        
}