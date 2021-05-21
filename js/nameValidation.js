function allLetter(inputtxt){ 
    var letters = /^[A-Za-z]+$/;
    
    if(inputtxt.value.match(letters)){
        alert('Your name have been accepted');
        return true;
    }else {
        alert('Please input alphabet characters only');
        return false;
    }
}