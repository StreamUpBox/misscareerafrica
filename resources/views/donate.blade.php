@include('shared.styles',['title' => 'Donate to her','description'=>'Miss Career Africa',
'activity'=>'Donate to her'])

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">


            <div id="fh5co-header">

                @include('shared.header')

            </div>
            <!-- end:fh5co-header -->
          
            <div id="fh5co-blog-section">
                <div class="container mt-5" id="contact">
                <payment-sdk  showbutton='true' modal="md" 
  amount='400' 
  action='Donate' 
  ></payment-sdk>

                </div>

            </div>
        </div>
        @include('shared.footer')

</body>

</html>
