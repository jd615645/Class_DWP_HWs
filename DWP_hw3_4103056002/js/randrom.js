var $mainBlock = document.querySelector('#main-block');
var $rand_element = document.querySelectorAll('.rand');
var $btn_random = document.querySelector('#btn_random');
var $btn_sort = document.querySelector('#btn_sort');
var $btn_reset = document.querySelector('#btn_reset');

$btn_random.addEventListener('click', function(){
  clear_mainBlock();
  rand_mainBlock();
});

$btn_sort.addEventListener('click', function(){
});

$btn_reset.addEventListener('click', function(){
  clear_mainBlock();
  reset_mainBlock();
});

function rand_mainBlock() {
  var rand_num = [];
  for (var i = 0; i < $rand_element.length; i++) 
    rand_num.push(i);

  //  random rand_num array
  rand_num.sort(function(){return Math.random()>0.5?-1:1;});
  
  for (var i = 0; i < rand_num.length; i++) {
    $mainBlock.innerHTML = $mainBlock.innerHTML + $rand_element[rand_num[i]].outerHTML; 
  }
}

function clear_mainBlock() {
  $mainBlock.innerHTML = '';
}

function reset_mainBlock() {
  for (var i = 0; i < $rand_element.length; i++) {
    $mainBlock.innerHTML = $mainBlock.innerHTML + $rand_element[i].outerHTML; 
  }
}
