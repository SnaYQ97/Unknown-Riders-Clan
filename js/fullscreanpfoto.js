  function set(){
    var element = document.getElementsByClassName("zdjecie");
    ////console.log('fukcja set mowi hello');
    ////console.log(element.length);

    for(var x=0; x <= element.length-1; x++){
      var sliderimg = document.getElementById('sliderimg').style.backgroundImage;
      var elementurl ='url(\"'+element[x].src+'\")';
      var i=0;
      //console.log(x+' to jest x');
      if(sliderimg == elementurl){
        i = x;
        //console.log(i+' to jest i');
        return x;
      }
    }
    
  }
 function next() { // Declare a function
  i = set()+1;
  var element = document.getElementsByClassName("zdjecie");
  
  ////console.log(element.length);
  if (i == element.length){i = 0;}
  //console.log(i+' to jest i z funkcji set');
  //console.log(element[i].src);
  //console.log(sliderimg.style.backgroundImage);

  document.getElementById('sliderimg').style.backgroundImage = 'url(\"'+element[i].src+'\")';
  
   // /sliderimg = 'url('+element[i].src+')';

   ////console.log(src[0].src)

  
 
}

function prev() { // Declare a function
  i = set()-1;
  
  var element = document.getElementsByClassName("zdjecie");
  //console.log(element.length);
  if (i<0){i = element.length-1;}
 
  //console.log(i);
  var sliderimg = document.getElementById('sliderimg').style.backgroundImage;

  document.getElementById('sliderimg').style.backgroundImage = 'url('+element[i].src+')';
  
  i--;
}