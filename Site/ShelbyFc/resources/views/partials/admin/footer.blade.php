<p class="copyright">
    &copy; <script>document.write(new Date().getFullYear());</script> - <span>Shelby FC</span> All Rights Reserved.
</p>
<script>
    ClassicEditor
        .create( document.querySelector( '.editor' ) )
        .catch( error => {
            console.error( error );
        } );

    $(document).ready( function () {
        $('.datatable').dataTable({
            "oLanguage": {
                "sUrl": "//cdn.datatables.net/plug-ins/1.13.1/i18n/pt-BR.json"
            }
        });


        $(this).delay(1000).queue(function() {

            // your Code | Function here

            $('.dataTables_filter input').addClass('form-control');

        });


    } );
</script>
