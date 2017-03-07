new Vue({
  el: '#quote',
  data:{
    quote_text:'content',
    quote_title:'title',
    image:""
  },
  methods:{

    fetchImage: function(){
      var self = this;
      $.ajax({
          data:{
            key:"4744746-bae8a078febd3999e11d2b042",
            category: "places",
            per_page:100
          },
          method : "GET",
          url: 'https://pixabay.com/api/',
          success: function (data) {
              var number = Math.floor((Math.random() * 100) + 1);
             self.image = data.hits[number].webformatURL;
          },
          error: function (error) {
              alert(JSON.stringify(error));
          }
      });
    },

    fetchQuote: function(){
      var self = this;
      var quote;
              $.ajax({
                  url: 'http://quotesondesign.com/wp-json/posts?filter[orderby]=rand&filter[posts_per_page]=1',
                  success: function (data) {
                     var post = data.shift();
                     var quote = post.content;
                      self.quote_text = post.content;
                      self.quote_title = post.title;
                      self.fetchImage();
                  },
                  error: function (error) {
                      alert(JSON.stringify(error));
                  }
              });

      }
    }

})
