<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" itemprop="name" content="@yield('meta_description','Development Alternatives DA, the world&#39;s first social enterprise dedicated to sustainable development, is a research and action organisation striving to deliver socially equitable, environmentally sound and economically scalable development outcomes. DA&#39;s green technology innovations for habitat, water, energy and waste management, which deliver basic needs and generate sustainable livelihoods, have reduced poverty and rejuvenated natural ecosystems in the most backward regions of India, creating some one million livelihoods and empowering over 6 million people')" />
  <meta name="author" content="Development Alternatives" />
  @if(isset($metaDetails->description))
  @if($metaDetails->description!='')
  <meta name="keywords" content="{{$metaDetails->keywords}}" />
  @else
  <meta name="keywords" content="@yield('meta_keywords','DA Group, DA Delhi, DA Group, Indian NGO, list of Indian NGO, waste paper recycling, water management in India, TARA Group, TARA Group, water pollution in India, recycling of paper, DA Delhi, development alternative group, Environment, cleaner technology, cleaner production, iso-14001, environmental benchmarking, solid waste management, green initiatives, environmental auditing, rural environment development, rehabilitation programme, community natural resource management, climate change, climate change convention, climate change outreach and awareness, GIS, sustainable development strategy, solid land reclamation, biodiversity, protected area management, Eco development, ecotourism, capacity building, information network, joint forest management, shelter, eco building, appropriate technology, renewable technology, governance')" />
  @endif 
  <title>{{$metaDetails->title}}</title>
  @endif
  @yield('facebookmeta')
  <link href="{{asset('public/frontend')}}/assets/images/favicon.png" rel="shortcut icon" type="image/png">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{asset('public/frontend')}}/assets/css/style.css">
  <link rel="stylesheet" href="{{asset('public/frontend')}}/assets/css/responsive.css">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9035780560703580" crossorigin="anonymous"></script>
</head>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YC371R1YXH"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());
  gtag('config', 'G-YC371R1YXH');
</script>

<body>

  @include('frontend.layouts.header')

  @yield('contents')

  @include('frontend.layouts.footer')

  <!-- Integrated important scripts here -->

  <script src="{{asset('public/frontend')}}/assets/js/jquery.v1.12.4.min.js"></script>
  <script src="{{asset('public/frontend')}}/assets/js/hlsaudioplayer.js"></script>
  <script src="{{asset('public/frontend')}}/assets/js/bootstrap.min.js"></script>
  <script src="{{asset('public/frontend')}}/assets/js/jquery-core-plugins.js"></script>
  <script src="{{asset('public/backend')}}/assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
  <script src="{{asset('public/frontend')}}/assets/js/main.js"></script>

  <script src="{{asset('public/frontend')}}/assets/js/custom.js"></script>


  @yield('script')

  <!-- Modal -->
  <div class="modal fade" id="liveBundelkhand" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="liveBundelkhandLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="liveBundelkhandLabel">Live Bundelkhand Radio</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div id="loader" class="text-center">
            <p>Loading, please wait...</p>
          </div>
          <div id="player-html"></div>
        </div>
      </div>
    </div>
  </div>

  <script>
    var myModalEl = document.getElementById('liveBundelkhand');
    var loaderEl = document.getElementById('loader');
    var playerHtmlEl = document.getElementById('player-html');
    var radioIframe = null;

    myModalEl.addEventListener('shown.bs.modal', function(event) {
      loaderEl.style.display = 'block'; // Show the loader

      radioIframe = document.createElement('iframe');
      radioIframe.src = 'https://devalt.org/bundelkhand-live-radio';
      radioIframe.style.width = '100%';
      radioIframe.style.height = '200px';
      radioIframe.addEventListener('load', function() {
        loaderEl.style.display = 'none'; // Hide the loader once the radio player is loaded
      });

      playerHtmlEl.appendChild(radioIframe);
    });

    myModalEl.addEventListener('hide.bs.modal', function(event) {
      loaderEl.style.display = 'none'; // Hide the loader
      playerHtmlEl.innerHTML = ''; // Clear the content
      if (radioIframe !== null) {
        radioIframe.src = ''; // Stop the radio player if it's still loading
        radioIframe = null;
      }
    });

    $('#challege-solution').hide();
    setTimeout(function() {
      $('#vid-section').fadeOut(500);
      $('#challege-solution').fadeIn(500);
    }, 14000);
  </script>

</body>

</html>