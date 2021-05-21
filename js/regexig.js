function myReplaceFunc() {
    var mystring = document.getElementById('mystring').innerHTML;

    var myNewstring = mystring.replace(/Via Ferrata/gi, 'Iron Path');

    document.getElementById('mystring').innerHTML = myNewstring;

}