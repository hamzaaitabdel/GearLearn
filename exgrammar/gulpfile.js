const gulp = require('gulp');
const concat = require('gulp-concat');

// ****************************
// Move JS Files to src/js
// ****************************

gulp.task('js', function() {
  return gulp.src([
      'node_modules/jquery/dist/jquery.min.js',
      'node_modules/bootstrap/dist/js/bootstrap.min.js',
      'node_modules/popper.js/dist/umd/popper.min.js',
      'node_modules/owl.carousel2/dist/owl.carousel.min.js',
      'node_modules/magnific-popup/dist/jquery.magnific-popup.min.js',
      'node_modules/wowjs/dist/wow.min.js',
      'node_modules/imagesloaded/imagesloaded.pkgd.min.js',
      'node_modules/isotope-layout/dist/isotope.pkgd.min.js',
      'node_modules/jarallax/dist/jarallax.min.js',
      'node_modules/jarallax/dist/jarallax-video.min.js',
      'node_modules/jquery-waypoints/waypoints.min.js',
      'node_modules/counterup/jquery.counterup.min.js',
      'node_modules/jquery.easing/jquery.easing.min.js'
    ])
    .pipe(gulp.dest("src/js"))
});

// ******************************
// Combine All js files into one
// ******************************

gulp.task('scripts', function() {
  return gulp.src([
    './src/js/default-assets/avoid.console.error.js',
    './src/js/default-assets/classynav.js',
    'node_modules/owl.carousel2/dist/owl.carousel.min.js',
    'node_modules/wowjs/dist/wow.min.js',
    'node_modules/magnific-popup/dist/jquery.magnific-popup.min.js',
    'node_modules/jquery-waypoints/waypoints.min.js',
    'node_modules/counterup/jquery.counterup.min.js',
    'node_modules/imagesloaded/imagesloaded.pkgd.min.js',
    'node_modules/isotope-layout/dist/isotope.pkgd.min.js',
    'node_modules/jarallax/dist/jarallax.min.js',
    'node_modules/jarallax/dist/jarallax-video.min.js',
    './src/js/default-assets/jquery.scrollup.min.js'
  ])
    .pipe(concat('uza.bundle.js'))
    .pipe(gulp.dest('./src/js/'))
});

// *************************************
// Move Font Awesome Fonts to src/fonts
// *************************************

gulp.task('fafonts', function() {
  return gulp.src([
      'node_modules/font-awesome/fonts/*'
    ])
    .pipe(gulp.dest('src/fonts'))
})

// *************************************
// Move Elegent Icons to src/fonts
// *************************************
gulp.task('elefonts', function() {
  return gulp.src([
      'node_modules/elegant-icons/fonts/*'
    ])
    .pipe(gulp.dest('src/css/fonts'))
})

// *******************************
// Move CSS to src/css
// *******************************

gulp.task('css', function() {
  return gulp.src([
      'node_modules/bootstrap/dist/css/bootstrap.min.css',
      'node_modules/font-awesome/css/font-awesome.min.css',
      'node_modules/owl.carousel2/dist/assets/owl.carousel.min.css',
      'node_modules/elegant-icons/style.css',
      'node_modules/wowjs/css/libs/animate.css',
      'node_modules/magnific-popup/dist/magnific-popup.css'
    ])
    .pipe(gulp.dest('src/css'))
})

gulp.task('default', ['js', 'scripts', 'css', 'fafonts', 'elefonts']);
/******************  
 * my java script 
 *************************/
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
