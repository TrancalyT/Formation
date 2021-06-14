const check = document.getElementsByClassName('check');
const uncheck = document.getElementsByClassName('uncheck');
const checkbox = document.getElementsByClassName("checkbox");

for (i = 0; i < check.length; i++){
    let checkSelec = check[i];
    checkSelec.addEventListener('click', function(e) {
        for(j=0; j < checkbox.length; j++){
            let checkboxSelec = checkbox[j];
            // checkboxSelec.setAttribute('checked', '');
            checkboxSelec.checked = true;
        }
    })
}

for (i = 0; i < uncheck.length; i++){
    let uncheckSelec = uncheck[i];
    uncheckSelec.addEventListener('click', function(e) {
        for(j=0; j < checkbox.length; j++){
            let uncheckboxSelec = checkbox[j];
            // uncheckboxSelec.removeAttribute('checked', '');
            uncheckboxSelec.checked = false;
        }
    })
}