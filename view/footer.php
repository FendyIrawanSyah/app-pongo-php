    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.2.2/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
    <script src="../src/asset/script.js"></script>
    <script type="text/javascript" src="../control/action.js"></script>
    <script>
        $(document).ready(function () {
            var windowSize = $(window).width();

            if (windowSize >= 769) {
                $("#sidebar").addClass('expand');
            }else{
                $("#sidebar").removeClass('expand');
            }
        });
    </script>
</body>
</html>