@extends('Layout.CustomerApp')

@section('contentFE')
@section('TopTTL','Dashboard')

    <section class="home" id="home"> </section>

        <!--container--->
        <section class="container">
            <div class="text">
                <h2>Our Services !</h2>
            </div>
            
            <div class="row-items">
                <div class="container-box">
                    <div class="container-img">
                        <img src="{{asset('Asset/printer.png')}}">
                    </div>
                    <h4>Printing</h4>
                    <p>Digital and Offset</p>
                </div>

                <div class="container-box">
                    <div class="container-img">
                        <img src="{{asset('Asset/uploads.png')}}">
                    </div>
                    <h4>Upload File</h4>
                    <p> Img or Document</p>
                </div>

                <div class="container-box">
                    <div class="container-img">
                        <img src="{{asset('Asset/image-editing.png')}}">
                    </div>
                    <h4>Templates</h4>
                    <p>Edit Your own template</p>
                </div>
            </div>
        </section>


        <!--destination section--->
    <section class="destination" id="destination">
        <div class="core">
            <div class="title">
                <h2>Our Most Popular <br> Product!</h2>
            </div>

       
        </div>
    </section>


  

     
    </section>




@endsection  










