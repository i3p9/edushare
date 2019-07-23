<!DOCTYPE html>
<html lang="en">
<head>
  <title>CSE110 Classroom</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    .videoContainer {
  position: absolute;
  width: 70%;
  height: 100%;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
#wrapper{
    margin-right: 150px;
    margin-left: 80px;
}

iframe {
  width: 80%;
  height: 70%; 
}
</style>
</head>
<body>

<h2>CSE110 Classroom</h2>

<div class="bs-docs-example">
    <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#cse" data-toggle="tab">Description</a>
        </li>
        <li><a href="#eee" data-toggle="tab">Live Class</a>
        </li>
        <li><a href="#other" data-toggle="tab">Files</a>
        </li>
        <li><a href="#chat" data-toggle="tab">Chatroom</a>
        </li>
    </ul>
    
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="cse">
<div align="center" id="wrapper">

<h1 style="font-size:160%;">
About CSE110
</h1>
<p align="justify" style="font-size:120%;">
CSE110 teaches the essential ideas of Computer Science for a zero-prior-experience audience. Computers can appear very complicated, but in reality, computers work within just a few, simple patterns. CS101 demystifies and brings those patterns to life, which is useful for anyone using computers today.
In CSE110, participants play and experiment with short bits of "computer code" to bring to life to the power and limitations of computers. Everything works within the browser, so there is no extra software to download or install. CS101 also provides a general background on computers today: what is a computer, what is hardware, what is software, what is the internet. No previous experience is required other than the ability to use a web browser.
</p>
<h1 align="left" style="font-size:120%;">
Topics:
</h1>
<ul align="left">
<li>The nature of computers and code, what they can and cannot do</li>
<li>How computer hardware works: chips, cpu, memory, disk</li>
<li>Necessary jargon: bits, bytes, megabytes, gigabytes</li>
<li>How software works: what is a program, what is "running"</li>
<li>How digital images work</li>
<li>Computer code: loops and logic</li>
<li>Big ideas: abstraction, logic, bugs</li>
<li>How structured data works</li>
<li>How the internet works: ip address, routing, ethernet, wi-fi</li>
<li>Computer security: viruses, trojans, and passwords, oh my!</li>
<li>Analog vs. digital</li>
<li>Digital media, images, sounds, video, compression</li>
</ul>
<h1 align="left" style="font-size:160%;">
Prerequisites
</h1>
<p align="justify" style="font-size:120%;">
Zero computer experience is assumed beyond a basic ability to use a web browser.
</p>
</div>
        </div>
        
        <div class="tab-pane fade" id="eee">
        <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
</div>
        </div>

    
    <div class="tab-pane fade" id="other" align="center">
    <p>
        <a class="btn btn-primary" data-toggle="collapse" href="#lecture1" role="button" aria-expanded="false" aria-controls="lecture1"> Lecture 1</a>
        <a class="btn btn-primary" data-toggle="collapse" href="#lecture2" role="button" aria-expanded="false" aria-controls="lecture2"> Lecture 2</a>
    </p>
        <div class="collapse" id="lecture1">
            <div class="card card-body">
            <object data="cse220.pdf" type="application/pdf" width="100%" height="800px"> </object>
            </div>
        </div>
        <div class="collapse" id="lecture2">
            <div class="card card-body">
            <object data="lec2.pdf" type="application/pdf" width="100%" height="800px"> </object>
            </div>
        </div>

        </div>
    </div>
    <div class="tab-pane fade" id="chat">
    </div>
</div>

</body>
</html>
