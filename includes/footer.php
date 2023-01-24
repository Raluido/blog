<footer>
    <div class="innerContent">
        <div class="top">
            <div class="">
                <div class="">Contacta</div>
                <ul>
                    <li>Wapp</li>
                    <li>Em@il</li>
                    <li>Ig</li>
                    <li>FaceBook</li>
                </ul>
            </div>
            <div class="">
                <div class="">Noticias</div>
                <ul>
                    <li>Lo último en red</li>
                    <li>Mundo digital</li>
                    <li>No somos nada</li>
                    <li>Vamosss</li>
                </ul>
            </div>
        </div>
        <div class="bottom">
            <p>Esta página ha sido realizada por websiwebs &reg;, con cariño en html y php.</p>
        </div>
    </div>
</footer>
<script type="text/javascript">
    <?php $session = $_SESSION['user']['id'] ?>
    var x = "<?php echo "$session" ?>";
    var element = document.getElementById("registerNone");
    if (x) {
        element.classList.add("registerDiv");
    }
</script>
</body>

</html>