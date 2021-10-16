/*
global variable
 */
var windowSize = window.matchMedia('(max-width: 768px)');

console.log(windowSize);

/*
body
 */
document.getElementsByTagName('body')[0].style.setProperty('height','auto');
document.getElementsByTagName('body')[0].style.setProperty('overflow','auto');


document.getElementById('navBar-desktop').style.setProperty('margin-top',windowSize);
/*
document.getElementById('home').style.setProperty('margin-top','7.5vh');
*/

if (windowSize.matches) {

  document.getElementById('navBar-mobile').classList.add('move-down');
  document.getElementById('navBar-mobile').style.setProperty('visibility','visible');
  } else {
  document.getElementById('navBar-desktop').classList.add('move-down');
  document.getElementById('navBar-desktop').style.setProperty('visibility','visible');
  }

/*
window size dynamic function
 */
windowSize.addListener(windowSizeChange)

function windowSizeChange() {

	console.log(windowSize);

    if (windowSize.matches) {

      document.getElementById('navBar-desktop').style.setProperty('visibility', 'hidden');
      document.getElementById('navBar-mobile').style.setProperty('visibility', 'visible');
      } else {

      document.getElementById('navBar-desktop').style.setProperty('visibility', 'visible');
      document.getElementById('navBar-mobile').style.setProperty('visibility', 'hidden');
      }

  /*
   remove animation for any subsequent window size change
   */
	document.getElementById('navBar-mobile').classList.remove('move-down')
	document.getElementById('navBar-desktop').classList.remove('move-down')
};