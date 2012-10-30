(function($) {
    $(document).ready(function() {
        $('form').on('submit', function(e) {
            
            e.preventDefault();
            
            var css = $('#components input:checked').map(function() { return this.value; }).toArray();
            var js = $('#plugins input:checked').map(function() { return this.value; }).toArray();
            var vars = {};
            var img = [ 'glyphicons-halflings.png', 'glyphicons-halflings-white.png' ];
            
            $('#variables input').each(function() {
                var key = $(this).parent().prev('label').text();
                var value = $(this).val();
                vars[key] = value;
            });
            
            $.ajax({
                type: 'POST',
                url: 'http://bootstrap.herokuapp.com',
                dataType: 'jsonpi',
                params: {
                    js: js,
                    css: css,
                    vars: vars,
                    img: img
                }
            });
            return false;
        });
        
        $.ajaxTransport('jsonpi', function(opts, originalOptions, jqXHR) {
            var url = opts.url;
            
            return {
                send: function(_, completeCallback) {
                    var name = 'jQuery_iframe_' + jQuery.now();
                    var iframe = $('<iframe>').attr('name', name).appendTo('head');
                    var form = $('<form>').attr('method', opts.type)
                                          .attr('action', url)
                                          .attr('target', name);
                    
                    $.each(opts.params, function(k, v) {
                        $('<input>').attr('type', 'hidden')
                                    .attr('name', k)
                                    .attr('value', typeof v == 'string' ? v : JSON.stringify(v))
                                    .appendTo(form);
                    });
                    
                    form.appendTo('body').submit();
                }
            };
        });
    });
})(jQuery);