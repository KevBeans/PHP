<script type="text/javascript">
    window.onload = function () {
        (function () {
            var date = new Date();
            //panme aja õigel kujul kokku
            var time = date.getHours() + ':' +
            date.getMinutes()+ ':' + date.getSeconds()
            + ':' + date.getMilliseconds();
            document.getElementsByTagName('div')
            [0].innerHTML = "Reaalaeg: "+time;
            window.setTimeout(arguments.callee, 1);
        })();
    };
</script>