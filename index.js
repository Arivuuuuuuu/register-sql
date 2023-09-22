function form(){
    var name=document.myform.name.value;
    var password=document.myform.password.value;
    var mail=document.myform.mail.value;
    if(name==""){
        alert("name can't be blank");
        return false;
    }else if(password.length<8){
        alert("Password must be at least 8 characters long.");
        return false;
    
    }else if(number!="10 numbers"){
        alert("Enter upto 10 numbers");
        return false;
    }
}