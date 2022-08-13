// // alert('hello');
// var contacttable =document.getElementById('contacttable');
// var faqtable = document.getElementById('faqtable');

// // console.log(null == false);
// function showfaq(){
//     // console.log(contacttable.parentNode);
//     var elem =document.getElementById('contacttable'); 
//     var parent = elem.parentNode;
//     if (elem){
//         parent.removeChild(elem);
        
//     }
    
//     var elem =document.getElementById('faqtable'); 
//     // console.log(elem);
//     if (elem == null){
//         // console.log(faqtable.parentNode);
//         parent.appendChild(faqtable);

//     }
//     return 0;
// }

function showcontact(){    
    var elem =document.getElementById('faqtable'); 
    var parent = elem.parentNode;
    if (elem){
        parent.removeChild(elem);
    }
    
    var elem =document.getElementById('contacttable'); 
    if (elem == null){
        parent.appendChild(contacttable);
    }
    return 0;
}

function showfaq2(){
    var elem =document.getElementById('navfaq'); 
    elem.click();
}