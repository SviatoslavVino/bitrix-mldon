function valiphone(){
    var y=document.forms["form"]["phone"].value;
    str=y.split('');
    arr.forEach(function(item, i, arr) 
    {}
        if (srt[0]=='7' && (str.length)!=11 ){
        document.getElementById('chow_error_tel').innerHTML="*Вы не правиль ввели номер";
        return false;
        }
        if (srt[0]!='7' || srt[0]!='3' ){
        document.getElementById('chow_error_tel').innerHTML="*Вы не правиль ввели номер";
        return false;
        }
    
}