<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Ride Label &mdash; Toko Baju Online </title>
    <link rel="shortcut icon" href="{{ asset('adminassets') }}/assets/images/favicon.png" />
    <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
    <script src="https://unpkg.com/aframe-look-at-component@0.8.0/dist/aframe-look-at-component.min.js"></script>
    <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar-nft.js"></script>
    <style>
        .buttons {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 5em;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 10;
        }
    </style>
  </head>

  <body style="margin: 10; overflow: hidden;">
    <a-scene
      vr-mode-ui="enabled: false"
      embedded
      arjs="sourceType: webcam; debugUIEnabled: false;"
    >
      <!-- <a-sphere position="0 1.25 -5" radius="0.5" color="#EF2D5E"></a-sphere> -->
      <a-camera gps-camera rotation-reader> </a-camera>
      <a-assets>
      <a-asset-item id="cityModel" src="{{ asset('adminassets') }}/assets/images/favicon.png"></a-asset-item>
      </a-assets>
      <a-entity position="0 1.25 -5" gltf-model="#cityModel" modify-materials></a-entity>
      <img position="0 1.25 -5" src="{{ asset('adminassets') }}/assets/images/favicon.png"/>
    </a-scene>

    <div class="buttons">
        <button type="button" onclick="history.back();">Back</button>
    </div>

  </body>
</html>