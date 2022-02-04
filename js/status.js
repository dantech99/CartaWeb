const estados = (s) =>{
    let icon = document.getElementsByClassName('.bx');
    let text = document.getElementsByClassName('.link');
    if (s) {
        icon.className = 'bx_active';
        text.className= 'a_active';
        return;
    }
    icon.className = 'bx';
    text.className = 'link';
}