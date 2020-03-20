/*
 |--------------------------------------------------------------------------
 | Shards Dashboards: Blog Add New Post Template
 |--------------------------------------------------------------------------
 */

'use strict';

(function ($) {
  $(document).ready(function () {

    // Init the Quill RTE
    var quill = new Quill('#editor-container', {
      placeholder: 'Ingresa una descripción del evento...',
      theme: 'snow'
    });

  });
})(jQuery);
