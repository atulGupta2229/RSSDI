    $(document).ready(function() {
      // This will create a single gallery from all elements that have class "gallery-item"
        $('.gallery-item').magnificPopup({
          type: 'image',
          gallery:{
            enabled:true
          }
        });
        
        // MixItUp 2
        $('#container').mixItUp();
    });