// function scrollpage() {		
// 	function f() 
// 	{
// 		window.scrollTo(0,i);
// 		if(status==0) {
//    			i=i+40;
// 			if(i>=Height){	status=1; } 
// 		} else {
// 			i=i-40;
// 			if(i<=1){	status=0; }  // if you don't want continue scroll then remove this line
// 		}
// 	setTimeout( f, 0.01 );
// 	}f();
// }
// var Height=document.documentElement.scrollHeight;
// var i=1,j=Height,status=0;

// scrollpage();
var btn = document.getElementById("btnad");
var progress = document.getElementById("adtimediv");

var countModal = 1;     // Set countModal
var timer = null;  // For referencing the timer

function countDown(){
  // Display counter and start counting down
  $('#adtime').css('width', countModal*3.333 + '%').attr('aria-valuenow', countModal);  
  // Run the function again every second if the countModal is not zero
  if(countModal !== 30){
    // timer = setTimeout(countDown, 2000);
    countModal++; // decrease the timer
  } else {
    // Enable the button
    btn.classList.remove("hidden");
    progress.classList.add('hidden');
  }
};