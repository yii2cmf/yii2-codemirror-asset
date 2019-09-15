$('pre > code').each(function() {
    var $this = $(this),
        $code = $this.html();
    $this.empty();

    var myCodeMirror = CodeMirror(this, {
        value: $code,
        mode: typeof codemirror_mode !== 'undefined' ? codemirror_mode : 'clike',
        lineNumbers: !$this.is('.inline'),
        readOnly: true,
        theme: typeof codemirror_theme !== 'undefined' ? codemirror_theme : 'default'
    });

});
