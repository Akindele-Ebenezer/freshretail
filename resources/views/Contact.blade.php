@extends('layouts.layout-2')

@section('title', 'Stephmond | ' . $PageTitle)
@section('page_title', $PageTitle)

@section('page_content')
    <div class="contact-section">
        <div class="contact-title">
            <h1>Get in touch</h1>
        </div>
        <div class="contact-info">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"/></svg>
                <br>
                <p>Email</p>
                <span>info@stephmond.com</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"/></svg>
                <br>
                <p>Address</p>
                <span>2nd Floor Landmark Building Ikota Shopping Complex VGC Lekki Lagos Nigeria</span>
            </div>
                <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"/></svg>
                <br>
                <p>Call At</p>
                <span>+(234) 809 248 4020</span>
            </div>
        </div>
    
        <div class="contact-form">
            <form action="">
                <div>
                    <input type="text" placeholder="* NAME" name="Name">
                </div>
                <div>
                    <input type="email" placeholder="* EMAIL" name="Email">
                    <input type="text" placeholder="* PHONE" name="Phone">
                </div>
                <div>
                    <textarea name="Message" placeholder="* Your Message"></textarea>
                </div>
        
                <button>Submit</button>
            </form>
        </div>
    </div>

    <!-- <div id="map"></div>

    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"
      defer
    ></script>

    <script>
        let map;

        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: -34.397, lng: 150.644 },
                zoom: 8,
            });
        }

        window.initMap = initMap;
    </script> -->
@endsection