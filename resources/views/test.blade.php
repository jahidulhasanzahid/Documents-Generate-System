<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <section id="first-body">
        <div class="container">
            <div class="cover-body">
                <div class="text-center">
                    <img src="images/DIU-Logo.png" style="height: auto; width: 400px; margin-top: 100px;">
                </div>
                <div class="cover-first-part">
                    <h1 class="text-center">ASSIGNMENT</h1><hr>
                </div>
                    
                <div class="cover-second-part">
                    <ul><b>Title:{{$atitle}} </b></ul>
                    <ul><b>Course Title: {{ $cName }}</b></ul>
                </div>

                <div class="text-center cover-third-part">
                    <h3>Submitted By</h3>
                    <ul><b>Student Name:{{$uName}}</b></ul>
                    <ul><b>Student ID: {{ $sID}}</b></ul>
                    <ul><b>Department Name: {{ $dName }}</b></ul>
                </div>
                <div class="text-center cover-four-part">
                    <h3>Submitted To</h3>
                    <ul><b>Teacher Name:{{$tName}}</b></ul>
                    <ul><b>Degisnation:Lecturer</b></ul>
                    <ul><b>{{ $dName }}</b></ul>
                </div>

                <div class="cover-five-part">
                    <em>Late Date of Submittion:{{ $doS}}</em>
                </div>
            <hr>
            <div class="cover-body-main">
                <h3 class="experiment">Assignment Title</h3>
                <p>{{ $atitle }} </p>
                <h3>Problem</h3>
                <p class="first-pera">{{ $aquestion }}</p>
                <h3>Answer</h3>
                <p class="second-pera">{{ $aanswer }}</p>
                
            </div>
            </div>
        </div>
    </section>
<hr>
</body>
</html>