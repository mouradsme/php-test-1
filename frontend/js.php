<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<script>
    (function() {
        $('#addUser').on('click', function() {
            let data = {}
            $('input,select').each((i, item) => {
                data[$(item).attr('id')] = $(item).val()
               
            })
            $.post({
                    url: 'ajax_add.php',
                    data: data,
                    success: function(e) {
                        let r = JSON.parse(e)
                        let message = r.message
                        let reload = r.reload
                        alert(message)
                        if (reload) {
                            $.post({url: 'ajax_read.php', success: function(e) {
                                $('#results').html(e)
                            }})
                        }
                    }
                })
        })
    })($)

</script>