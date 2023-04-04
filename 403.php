<!DOCTYPE html>
<html>
<head>
	<title>Error Forbidden :(</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="description" content="">
	  <meta name="author" content="">
	  <link rel="icon" href="http://candev.hadi.id/bookingIn/v/img/checkin.png">
	<style type="text/css">
		*, *::after, *::before {
		  box-sizing: border-box;
		}

		body {
		  background: linear-gradient(to bottom, #004680, #c7c7c7 74%, #efb053 75%, #944416);
		  display: flex;
		  justify-content: center;
		  align-items: center;
		  user-select: none;
		  font: 700 1rem "Cinzel";
		  color: #eee;
		  height: 100vh;
		  margin: 0;
		  padding: 0;
		}

		.box {
		  width: 400px;
		  display: flex;
		  justify-content: center;
		  align-items: center;
		  transform: scale(1);
		  transition: transform 0.5s;
		  transform-style: preserve-3d;
		  perspective: 1000px;
		}
		.box::before {
		  text-shadow: 0 3px 5px #1b3f44, 0 -3px 5px #9de2f8;
		  content: "ERROR";
		  position: absolute;
		  top: -8.5rem;
		  font-size: 6rem;
		}
		.box::after {
		  text-shadow: 0 3px 5px #1b3f44, 0 -3px 5px #9de2f8;
		  content: "You don't have permissions to acces the page!";
		  position: absolute;
		  top: -2rem;
		  font-size: 1rem;
		}
		.box .a, .box .b {
		  display: inline-block;
		  position: absolute;
		  top: 45%;
		  font-size: 14rem;
		  color: #f2f2f2;
		  font: 900 15rem "Martel";
		  transform: translate(-50%, -50%);
		  transition: all 0.4s;
		  text-shadow: 0 2px 0 #135b63, 0 -2px 0 #135b63, -2px 0 0 #135b63, 2px 0 0 #135b63, 2px 2px 0 #135b63, 2px -2px 0 #135b63;
		  z-index: -1;
		}
		.box .a {
		  left: 0;
		}
		.box .b {
		  left: 100%;
		}

		.compass {
		  display: flex;
		  justify-content: center;
		  align-items: center;
		  height: 200px;
		  width: 200px;
		  background: radial-gradient(#777 5%, #eee 10%, #fff 30%, #777);
		  border: 6px solid #222;
		  border-radius: 50%;
		  transition: transform 0.3s, box-shadow 0.3s;
		  transform: rotateX(45deg);
		  box-shadow: 0 10px 0 #222, 0 20px 0 #222, 0 30px 0 #222, inset 0 0 100px #eaeaea, inset 0 0 0 5px #456;
		  transform-style: preserve-3d;
		  perspective: 300px;
		}
		.compass::after {
		  content: "";
		  position: absolute;
		  height: 100%;
		  width: 100%;
		  transform: translateZ(-90px);
		  border-radius: inherit;
		  box-shadow: 0 0 100px #000;
		}
		.compass:hover {
		  transform: rotateX(0deg);
		  box-shadow: 0 0 0 #222, 0 0 0 #222, 0 0 0 #222, inset 0 0 100px #aaa, inset 0 0 0 5px #456;
		}
		.compass .glass {
		  position: absolute;
		  height: 98%;
		  width: 98%;
		  border-radius: inherit;
		  transition: all 0.2s;
		  transform: translatez(6px);
		}
		.compass .glass:hover::after {
		  animation: shimmer 0.5s ease both;
		}
		@keyframes shimmer {
		  to {
		    background-position: 0;
		  }
		}
		.compass .glass::after {
		  transform: rotate(45deg);
		  content: "";
		  position: absolute;
		  height: 100%;
		  width: 100%;
		  border-radius: inherit;
		  background: linear-gradient(to right, rgba(255, 255, 255, 0.5), transparent, rgba(255, 255, 255, 0.5));
		  background-position: -12em;
		}
		.compass .needle {
		  border-radius: 50%;
		  width: 10px;
		  height: 10px;
		  padding: 0px;
		  background: #222;
		  position: relative;
		  box-shadow: 0 0 0 3px #ddd;
		  transition: transform 2s;
		  animation: rotate 10s cubic-bezier(0.15, -0.6, 0.39, 1.6) alternate infinite both;
		}
		@keyframes rotate {
		  0% {
		    transform: rotate(-50deg) translateZ(5px);
		  }
		  11% {
		    transform: rotate(720deg) translateZ(5px);
		  }
		  16% {
		    transform: rotate(700deg) translateZ(5px);
		  }
		  30% {
		    transform: rotate(360deg) translateZ(5px);
		  }
		  35% {
		    transform: rotate(500deg) translateZ(5px);
		  }
		  50% {
		    transform: rotate(0deg) translateZ(5px);
		  }
		  60% {
		    transform: rotate(156deg) translateZ(5px);
		  }
		  78% {
		    transform: rotate(654deg) translateZ(5px);
		  }
		  85% {
		    transform: rotate(40deg) translateZ(5px);
		  }
		  90% {
		    transform: rotate(400deg) translateZ(5px);
		  }
		  98% {
		    transform: rotate(1400deg) translateZ(5px);
		  }
		  100% {
		    transform: rotate(-450deg) translateZ(5px);
		  }
		}
		.compass .needle::before, .compass .needle::after {
		  content: "";
		  position: absolute;
		  height: 100px;
		  z-index: -1;
		  border-radius: 10px;
		}
		.compass .needle::before {
		  left: -2px;
		  bottom: 0;
		  border-style: solid;
		  border-color: transparent transparent red transparent;
		  border-width: 0 7px 70px 7px;
		}
		.compass .needle::after {
		  transform: rotate(180deg);
		  top: 0;
		  left: -2px;
		  border-style: solid;
		  border-color: transparent transparent #333 transparent;
		  border-width: 0 7px 70px 7px;
		}
		.compass .needle .pin {
		  position: absolute;
		  padding: 5px;
		  border: 2px solid #eee;
		  box-shadow: 0 0 0 3px #ddd;
		  border-radius: 50%;
		  background-color: #000;
		  top: -2px;
		  left: -2px;
		}

		.directions,
		.sub_directions {
		  color: #000;
		  display: flex;
		  justify-content: center;
		  align-items: center;
		  position: absolute;
		  z-index: 1;
		  height: 100%;
		  width: 100%;
		}
		.directions span,
		.sub_directions span {
		  font-size: 1.2rem;
		  position: absolute;
		}
		.directions span:nth-child(1),
		.sub_directions span:nth-child(1) {
		  top: 5px;
		}
		.directions span:nth-child(2),
		.sub_directions span:nth-child(2) {
		  right: 10px;
		}
		.directions span:nth-child(3),
		.sub_directions span:nth-child(3) {
		  bottom: 5px;
		}
		.directions span:nth-child(4),
		.sub_directions span:nth-child(4) {
		  left: 10px;
		}

		.sub_directions {
		  transform: rotate(45deg) scale(0.9);
		}
		.sub_directions span {
		  font-size: 1rem;
		  transform: rotate(-45deg);
		  position: absolute;
		}
		.sub_directions span:nth-child(1) {
		  top: 15px;
		}
		.sub_directions span:nth-child(2) {
		  right: 10px;
		}
		.sub_directions span:nth-child(3) {
		  bottom: 10px;
		}
		.sub_directions span:nth-child(4) {
		  left: 10px;
		}

		.msg {
		  letter-spacing: 1px;
		  position: absolute;
		  bottom: 20px;
		  width: 80%;
		  background: rgba(0, 0, 0, 0.4);
		  padding: 0.6em;
		  text-align: center;
		  border-radius: 6px;
		}
		.msg .btn {
		  display: inline-block;
		  margin: 10px 0;
		  color: #fff;
		  text-decoration: dashed;
		  background-color: rgba(0, 0, 0, 0.4);
		  padding: 4px;
		  border-radius: 5px;
		  box-shadow: 0 2px 2px #222;
		}
		.msg .btn:hover {
		  color: white;
		  box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.2);
		}

		@media screen and (max-width: 768px) {
		  .box {
		    transform: scale(0.9);
		  }

		  .msg {
		    width: 80%;
		  }
		}
		@media screen and (max-width: 640px) {
		  .box {
		    transform: scale(0.7);
		  }

		  .msg {
		    font-size: 0.8rem;
		  }
		}
		@media screen and (max-width: 480px) {
		  body {
		    overflow: hidden;
		  }

		  .box {
		    width: 400px;
		  }
		}
		@media screen and (max-width: 440px) {
		  .box {
		    transform: scale(0.6);
		  }
		}
		@media screen and (max-width: 320px) {
		  .box {
		    transform: scale(0.5);
		    width: 300px !important;
		  }
		}
		.cp {
		  font-size: 0.8em;
		  text-decoration: none;
		  color: #ddd;
		  position: absolute;
		  top: 2%;
		  letter-spacing: 2px;
		  opacity: 0.1;
		}
		.cp:hover {
		  opacity: 0.8;
		}
	</style>
</head>
<body>

<div class="box"><span class="a">4</span>
  <div class="compass">
    <div class="glass"></div>
    <div class="needle"><span class="pin"></span></div>
    <div class="directions"><span>N</span><span>E</span><span>S</span><span>W</span></div>
    <div class="sub_directions"><span>NE</span><span>SE</span><span>SW</span><span>NW</span></div>
  </div><span class="b">3</span>
</div>
<div class="msg">We understand your request but unable to give you access to your typed link. We suggest you to leave this place before you lost here.<br/> <a class="btn" href="javascript:history.back()">Back</a></div>
</html>