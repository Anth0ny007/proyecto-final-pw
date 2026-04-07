function moreInfo(boton){
    let info = boton.nextElementSibling;

    if(info.style.display == 'none'){
        info.style.display = 'inline-block';
    }
    else{
        info.style.display = 'none';
    }
}

function hideInfo(boton){
    let info = boton.nextElementSibling;

    if(info.style.display =='inline-block'){
        info.style.display = 'none';
    }
    else{
        info.style.display = 'inline-block';
    }
}