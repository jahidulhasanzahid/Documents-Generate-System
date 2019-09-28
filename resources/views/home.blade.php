@extends('layouts.app')

@section('content')
<!--body-->
        <section id="first-body">
            <div class="container">
                <h1 class="error">Document Converter</h1>
                <p class="text-center" style="margin-top: -20px;">Convert files from and to PDF</p>
                <div class="file-button">
                    <img class="upload-image" src="images/upload.PNG"><br>
                    <input type="file" name="file">
                </div>
            </div>
        </section>

        <section id="second-body">
            <div class="container">
                <div class="row">
                    <div class="card col-md-4">
                        <div class="card-body">
                        <p class="card-title text-center">How to use?</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                    <div class="card col-md-4">
                        <div class="card-body">
                        <p class="card-title text-center">Don't worry about security.</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                    <div class=" card col-md-4">
                        <div class="card-body">
                        <p class="card-title text-center">Perform on all devices</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                    <div class=" card col-md-4">
                        <div class="card-body">
                        <p class="card-title text-center">Great quality</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                    <div class=" card col-md-4">
                        <div class="card-body">
                        <p class="card-title text-center">Convert to PDF and other file types</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                    <div class=" card col-md-4">
                        <div class="card-body">
                        <p class="card-title text-center">Access from anywhere</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                </div>
            </div>
        </section>
<hr>
        <section id="third-body">
            <div class="container">
            <div class="card mb-10">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="images/dp.png" class="card-img" alt="...">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-7">
                  <div class="card-body">
                    <h5 class="card-title">How to convert to PDF from other file types:</h5>
                    <li>Upload your file to our online PDF converter.</li>
                    <li>The tool will instantly upload and transform the file into a PDF.</li>
                    <li>Compress, edit or modify the output file, if necessary.</li>
                    <li>Download the PDF to your device, or export it to Dropbox or Google Drive.</li>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </section>
<hr>
    <!--body-->
@endsection
