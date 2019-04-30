//Little script that handles which classes gets applied on hover / off hover

//Variable to define which animation will run
//Animations:
// value: 0 - from chin to showWelcome
// value: 1 - from showWelcome to handsUp
var whichAnimation = 0;



$(".animation-sprite").hover(

	//On Hover
	function(){
		if (whichAnimation === 0)
		{
			$(this).addClass('showWelcome');
			$(this).removeClass('handsUp');
			$(this).removeClass('showWelcome-backwards');
		}
		else if (whichAnimation === 1)
		{
			$(this).addClass('handsUp-backwards');
			$(this).removeClass('handsUp');
		}

	},
	//Off Hover
	function(){
		if (whichAnimation === 0)
		{
			$(this).addClass('handsUp');
			$(this).removeClass('showWelcome');

			whichAnimation = 1;
		}
		else if (whichAnimation === 1)
		{
			$(this).addClass('showWelcome-backwards');
			$(this).removeClass('handsUp-backwards');

			whichAnimation = 0;
		}
	}
		);


// THE CSS
// -----------------------------------------

// .home-content {
// 	height:100%;
// 	padding-left: 100px;
// }
// .monster {
//   width: 1800px;
//   height: 2000px;
//   display: block;
//   margin: 0% auto;
//   /*   background: url('http://treehouse-code-samples.s3.amazonaws.com/CSS-DD/codepen/blog/monster.png') left center; */
//   background: url('assets/images/aicea2.jpg') center;
//   /* background-size: auto 100%; */
//   /* animation: play 1.8s steps(6); */
//   /*   background-position: -4000px; */
// /*   animation: play-off 0.4s steps(3) 1; */
//   background-position: 0px;
//   /* background-size: auto; */
// /*   max-width: 100%; */
// /*   max-height: 100%; */
//    background-size: cover; 
// }

// /* .monster:hover{
// 	animation: play-on 0.4s steps(3) 1;
// 	animation-fill-mode: forwards;
// } */



// .hoverclass {
// 	animation: play-showWelcome 0.4s steps(3) 1;
// 	animation-fill-mode: forwards;
// }

// .offhoverclass {
//       background: url('assets/images/aicea3.jpg') center;
// 	animation: play-handsUp 0.4s steps(3) 1;
// 	animation-fill-mode: forwards;
// }


// @keyframes play-showWelcome {
// /* 	100% { background-position: right center; } */
// 	100% { background-position: -5250px; }
//     0% { background-position: 0px; }
// }

// @keyframes play-handsUp {
// 	100% { background-position: 0px; }
// 	0% { background-position: -5250px; }
// }

//v2

// .home-content {
// 	height:100%;
// 	padding-left: 100px;
// }

// .monster {
//   width: 1800px;
//   height: 1969px;
//   display: block;
//   margin: 0% auto;
//   /* background: url('http://treehouse-code-samples.s3.amazonaws.com/CSS-DD/codepen/blog/monster.png') left center; */
//   background: url('assets/images/aicea2.jpg') center;
//   /* background-size: auto 100%; */
//   /* animation: play 1.8s steps(6); */
//   /*   background-position: -4000px; */
//   /*   animation: play-off 0.4s steps(3) 1; */
//   background-position: 0px;
//   /* background-size: auto; */
//   /*   max-width: 100%; */
//   /*   max-height: 100%; */
//   /* background-size: contain; */
// }

// /* .monster:hover{
// 	animation: play-on 0.4s steps(3) 1;
// 	animation-fill-mode: forwards;
// } */



// .showWelcome { /*starts with chin-up*/
// 	animation: play-showWelcome 0.4s steps(3) 1;
// 	animation-fill-mode: forwards;
// }

// .showWelcome-backwards {
// 	animation: play-showWelcome-backwards 0.4s steps(3) 1;
// 	animation-fill-mode: forwards;
// }


// .handsUp {
//     background: url('assets/images/handsUp.jpg') center;
// 	animation: play-handsUp 0.4s steps(3) 1;
// 	animation-fill-mode: forwards;
// }

// .handsUp-backwards {
// 	animation: play-handsUp-backwards 0.4s steps(3) 1;
// 	animation-fill-mode: forwards;
// }


// @keyframes play-showWelcome {
// /* 	100% { background-position: right center; } */
// 	0% { background-position: -5250px; }
//     100% { background-position: 0px; }
// }

// @keyframes play-showWelcome-backwards {
// /* 	100% { background-position: right center; } */
// 	100% { background-position: -5250px; }
//     0% { background-position: 0px; }
// }




// @keyframes play-handsUp {
// 	0% { background-position: 0px; }
// 	100% { background-position: -5250px; }
// }

// @keyframes play-handsUp-backwards {
// 	100% { background-position: 0px; }
// 	0% { background-position: -5250px; }
// }