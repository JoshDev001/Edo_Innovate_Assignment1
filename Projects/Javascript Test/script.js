'use strict';

function isomorphic(str1, str2) {
  if (str1.length === 0) {
    return 'No string Input';
  }
  if (str1.length !== str2.length) {
    alert('input string of same length');
    return ' Not Equal in Length';
  } else {
    var map1 = {},
      map2 = {};

    for (var i = 0; i < str1.length; i++) {
      if (
        typeof map1[str1[i]] == 'undefined' &&
        typeof map2[str2[i]] == 'undefined'
      ) {
        map1[str1[i]] = str2[i];
        map2[str2[i]] = str1[i];
      } else {
        if (map1[str1[i]] !== str2[i] && map2[str2[i]] !== str1[i]) {
          return false;
        }
      }
    }
    return true;
  }
}

//prettier-ignore
document.querySelector('.button-9').addEventListener('click', function (e) {
    e.preventDefault();
    const str1 = document.querySelector('.Input-text1').value;
    const str2 = document.querySelector('.Input-text2').value;

   const answer = (isomorphic(str1, str2));
   console.log(answer);
   document.querySelector('.return').textContent = answer;
   if (true === answer) {
    document.querySelector('.return').style.backgroundColor = '#60b347'
    
  
   } else if(false == answer){
    document.querySelector('.return').style.backgroundColor = '#E10600'
    
   }
   else{
      document.querySelector('.return').style.backgroundColor = '#ffff'
   }
  });
