const fill = document.querySelector('.fill');
const empties = document.querySelectorAll('.empty');
var barrichtig = document.getElementById("bar1");
var barrexercice = document.getElementById("bar2");
localStorage.setItem("richtig",0);
localStorage.setItem("falsch",0);
console.log(document.getElementById("qst"));

// Fill listeners
fill.addEventListener('dragstart', dragStart);
fill.addEventListener('dragend', dragEnd);

// Loop through empty boxes and add listeners
for (const empty of empties) {
  empty.addEventListener('dragover', dragOver);
  empty.addEventListener('dragenter', dragEnter);
  empty.addEventListener('dragleave', dragLeave);
  empty.addEventListener('drop', dragDrop);
}

// Drag Functions

function dragStart() {
  this.className += ' hold';
  e.dataTransfer.setData('text', '');
  setTimeout(() => (this.className = 'invisible'), 0);
}

function dragEnd() {
  this.className = 'fill';
}

function dragOver(e) {
  e.preventDefault();
}

function dragEnter(e) {
  e.preventDefault();
  this.className += ' hovered';
}

function dragLeave() {
  this.className = 'empty';
}

function dragDrop(e) {
  console.log(document.getElementById("qst"));
  this.className = 'empty';
  if (e.target.id == 'apfel') {
    this.append(fill);
    document.getElementById("apfel").style.borderColor = "green";
    document.getElementById("f").draggable = false;
    var x = document.getElementById("richtig");
    x.classList.add("show");
    setTimeout(function () { x.className = x.className.replace("show", ""); }, 3000);
    localStorage.setItem("note", 1);
    var newvalue=parseInt(document.getElementById("bar1").offsetWidth)+20;
   document.getElementById("bar1").style.width=newvalue+"%";
   document.getElementById("bar1").textContent=newvalue+"%";
   localStorage.removeItem("richtig");
   localStorage.setItem("richtig",newvalue);
   }
  else {
    if (e.target.id == 'qst') { console.log(1); }
    else {
      var newvalue=parseInt(document.getElementById("bar2").offsetWidth)+20;
      document.getElementById("bar2").style.width=newvalue+"%";
      document.getElementById("bar2").textContent=newvalue+"%";
      console.log(2);
      this.append(fill);
      document.getElementById(e.target.id).style.borderColor = "red";
      document.getElementById("f").draggable = false;
      setTimeout(function () { document.getElementById("apfel").style.borderColor = "green" }, 500);
      document.getElementById("f").draggable = false;
      var x = document.getElementById("falsch");
      x.classList.add("show");
      setTimeout(function () { x.className = x.className.replace("show", ""); }, 3000);
      localStorage.setItem("note", 0);
      localStorage.removeItem("falsch");
      localStorage.setItem("falsch",newvalue);
    }
  }
}

$(document).ready(function () {
  
  var popup = $("#popup"),
      doc = $(document),
      popClass = "popped",
      showPopup = function (event) {
        popup.fadeIn(200);
        event.preventDefault();
      },
      hidePopup = function (event) {
        popup.hide();
        event.preventDefault();
      };
  
  doc.on("click", "#open-popup", showPopup);
  doc.on("click", ".popup__close", hidePopup);
  
  doc.keypress(function (event) {
    if (event.keyCode === 27) { // esc key
      hidePopup();
    }
  });
  
});