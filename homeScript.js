var i=0;
function mySideBar(){
  i=i+1;
  if(i%2!=0)
  {
    document.getElementById('nav1').style.display= "block";
  }
  else
  {
    document.getElementById('nav1').style.display= "none";
  }
}
