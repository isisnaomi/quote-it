<html>
  <head>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css" />
  </head>

  <body>
    <!--main container-->
    <div id="quote" class="container-fluid" v-bind:style="{ backgroundImage: 'url(' + image + ')' }">
      <div class="col-xs-4 col-xs-offset-4">
          <!--quote container-->
          <div class="quote-container">

              <img v-bind:src="image" class="quote-image" />

              <span class="quote_text" v-html="quote_text"></span>
              <span v-html="quote_title"></span>
              <br />
              <button class="quote-button" v-on:click="fetchQuote">New quote</button>
              <a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

          </div>
      </div>
    </div>
    <!-- JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/vue/dist/vue.js"></script>

    <script src="node_modules/vue-resource/dist/vue-resource.js"></script>
    <script src="app.js"></script>
  </body>

</html>
