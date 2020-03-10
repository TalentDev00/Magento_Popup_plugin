define( 
    [ 
      'jquery', 
      'Magento_Ui/js/modal/modal' 
    ], 
    function($) { 
       "use strict"; 
       $.widget('Custom.Popup', { 
          options: { 
             modalForm: '#popup-modal', 
             title: 'test'
           }, 
          _create: function() { 
              this.options.modalOption = this.getModalOptions(); 
              this.options.modalOption.image = this.options.image;
              this._bind(); 
          }, 
          getModalOptions: function() { 
              var options = { 
                type: 'popup', 
                responsive: true, 
                clickableOverlay: false, 
                title: this.options.title, 
                modalClass: 'popup',
                buttons: []
              };  
              return options; 
          }, 
           _bind: function(){ 
              var modalOption = this.options.modalOption; 
              var modalForm = this.options.modalForm; 
              $( document ).ready(function() {
                 $(modalForm).modal(modalOption); 
                 $(modalForm).trigger('openModal'); 
                 $('.modal-popup._show .modal-inner-wrap').css('background-image',"url(" + modalOption.image + ")");
                 $('.modal-popup._show .modal-inner-wrap').css('background-repeat', 'no-repeat');
              }); 
           } 
       }); 
 
       return $.Custom.Popup; 
    } 
 );
