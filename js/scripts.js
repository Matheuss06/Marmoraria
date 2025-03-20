//Script do Carousel 

var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides1");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); 
}

var myIndexx = 0;
carousel1();

function carousel1() {
  var i;
  var x = document.getElementsByClassName("mySlides2");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndexx++;
  if (myIndexx > x.length) {myIndexx = 1}    
  x[myIndexx-1].style.display = "block";  
  setTimeout(carousel1, 5000); 
}

