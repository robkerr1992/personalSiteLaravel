<script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"
>
</script>
<script
        type="text/javascript"
        src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
>
</script>
<script
        type="text/javascript"
        src="/parallax.js-1.4.2/parallax.min.js"
>
</script>
<script>
    $('.project-card').click(function(){
        var img = $('#image' + $(this).data('value')).html();
        var title = $('#title' + $(this).data('value')).html();
        var description = $('#description' + $(this).data('value')).html();
        var tech = $('#tech' + $(this).data('value')).html();
        var location = $('#location' + $(this).data('value')).html();
//        console.log(img);
//        $('#projectContent').fadeIn('slow');
        $('#projectImage').attr('src', img);
        $('#projectTitle').html(title);
        $('#projectDescription').html(description);
        $('#projectTech').html(tech);
        $('.projectlocation').attr('href', location);
        $('.projectlocation').attr('target', '_blank');
    })
</script>