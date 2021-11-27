//Nav function
function toggleNav() {
  var links = document.getElementById('navbar__links');
  if(links.style.display == 'flex'){
    links.style.display = 'none';
  }
  else {
    links.style.display = 'flex'; 
  }
}
