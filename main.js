let buttons = document.getElementsByClassName("favorite");
for (let index = 0; index < buttons.length; index++) {
    buttons.item(index).addEventListener("click", updateFavorite);

    
}


function updateFavorite(){
    let parent = this.parentElement;
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'favorite.php', true);
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function (){
   
        if(xhr.readyState == 4 && xhr.status == 200){
            let result = xhr.responseText;
            console.log('result: ' + result);
            if(result == 'true'){
                parent.classList.add('isfavorite');
                
                
            }
        }
    };
    xhr.send("id=" + parent.id);
}



let unfavoriteBtn = document.getElementsByClassName("unfavorite");
for (let index = 0; index < unfavoriteBtn.length; index++) {
    unfavoriteBtn.item(index).addEventListener("click", updateUnfavorite);

    
}


function updateUnfavorite(){
    let parent = this.parentElement;
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'unfavorite.php', true);
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function (){
   
        if(xhr.readyState == 4 && xhr.status == 200){
            let result = xhr.responseText;
            console.log('result: ' + result);
            if(result == 'true'){
                parent.classList.remove('isfavorite');
                
                
            }
        }
    };
    xhr.send("id=" + parent.id);

}
