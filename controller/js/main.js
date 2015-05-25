var menus = document.getElementById('area').getElementsByTagName('li') 
for(var row in menus){
     if(typeof menus[row] == 'object' && menus[row].getElementsByTagName('ul').length > 0){
         menus[row].getElementsByTagName('ul')[0].className = 'selected';
     }
}