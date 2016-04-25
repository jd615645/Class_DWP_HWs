var $mainBlock = document.querySelector('#main-block');
var $org_mainBlock = $mainBlock;
var $main_element = document.querySelectorAll('.rand');
var $btn_random = document.querySelector('#btn_random');
var $btn_sort = document.querySelector('#btn_sort');
var $btn_reset = document.querySelector('#btn_reset');

$btn_random.addEventListener('click', function(){
  clear_mainBlock();
  rand_mainBlock();
});

$btn_sort.addEventListener('click', function(){
  clear_mainBlock();
  sort_mainBlock();
});

$btn_reset.addEventListener('click', function(){
  clear_mainBlock();
  reset_mainBlock();
});

function rand_mainBlock() {
  var rand_num = [];
  for (var i = 0; i < $main_element.length; i++) 
    rand_num.push(i);

  //  random rand_num array
  rand_num.sort(function(){return Math.random()>0.5?-1:1;});
  
  for (var i = 0; i < rand_num.length; i++) {
    $mainBlock.innerHTML = $mainBlock.innerHTML + $main_element[rand_num[i]].outerHTML; 
  }
}

function sort_mainBlock() {
  var sort_element = [];
  for (var i = 0; i < $main_element.length; i++) {
    sort_element.push(new wait_sort_element($main_element[i].innerText, i));
  }
  sort_element.sort(compare);
  for (var i = 0; i < $main_element.length; i++) {
    $mainBlock.innerHTML += $main_element[sort_element[i]['space']].outerHTML; 
  }
}

function clear_mainBlock() {
  $mainBlock.innerHTML = '';
}

function reset_mainBlock() {
  for (var i = 0; i < $main_element.length; i++) {
    $mainBlock.innerHTML += $main_element[i].outerHTML; 
  }
}

function wait_sort_element(text, space) {
  this.text = text;
  this.space = space;
}

function compare(a,b) {
  if (a.text < b.text)
    return -1;
  else if (a.text > b.text)
    return 1;
  else 
    return 0;
}