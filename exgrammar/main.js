function send(){
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var organization = document.getElementById('organization').value;
    var message = document.getElementById('message').value;
    window.open('mailto:gerlearn2000@gmail.com?subject=Mr '+name+' representing '+organization+' Num Telephone : '+phone+'&body='+message);
}
const fill = document.querySelector('.fill');
const empties = document.querySelectorAll('.empty');
fill.addEventListener('dragstart',dragStart);
fill.addEventListener('dragend',dragEnd);

for(const empty of empties){
  empty.addEventListener('dragover',dragOver);
  empty.addEventListener('dragenter',dragEnter);
  empty.addEventListener('dragleave',dragLeave);
  empty.addEventListener('drop',dragDrop);
}
function dragStart(e){
  console.log('start');
  this.className += ' hold'; 
  setTimeout(() =>this.className = 'invisible',0);
  
}
function dragEnd(e){
  console.log('end');
  this.className ='fill';
}
function dragOver(e){
  console.log('over');

  e.preventDefault();
}
function dragEnter(e){
  console.log('enter');
  e.preventDefault();
  this.className+=' hovered';
}
function dragLeave(e){
  console.log('leave');
  this.className='empty';
}
function dragDrop(e){
  console.log('drop',e);
  console.log(document.getElementById("div1"));
  this.className='empty';
  this.append(fill);
}
  function dragDrop(e){
    this.className='empty';
    this.append(fill);
  }
  const fill1 = document.querySelector('.fill1');
const empties1 = document.querySelectorAll('.empty1');
fill1.addEventListener('dragstart',dragStart);
fill1.addEventListener('dragend',dragEnd);

for(const empty of empties){
  empty1.addEventListener('dragover',dragOver);
  empty.addEventListener('dragenter',dragEnter);
  empty.addEventListener('dragleave',dragLeave);
  empty.addEventListener('drop',dragDrop);
}
function dragStart(e){
  console.log('start');
  this.className += ' hold'; 
  setTimeout(() =>this.className = 'invisible',0);
  
}
function dragEnd(e){
  console.log('end');
  this.className ='fill1';
}
function dragOver(e){
  console.log('over');

  e.preventDefault();
}
function dragEnter(e){
  console.log('enter');
  e.preventDefault();
  this.className+=' hovered';
}
function dragLeave(e){
  console.log('leave');
  this.className='empty1';
}
function dragDrop(e){
  console.log('drop',e);
  console.log(document.getElementById("div1"));
  this.className='empty1';
  this.append(fill1);
}
  function dragDrop(e){
    this.className='empty1';
    this.append(fill1);
  }
  